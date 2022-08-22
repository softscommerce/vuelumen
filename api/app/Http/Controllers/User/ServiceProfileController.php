<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\Category;
use App\Models\Community;
use App\Models\Media;
use App\Models\OrderNotifications;
use App\Models\SendSms;
use App\Models\ServiceProfile;
use App\Models\SoftcomJobCandidate;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\WorkStation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ServiceProfileController extends Controller
{
    public function workStation(){
        $workstation = WorkStation::select('id', 'name')->get();
        return response()->json($workstation);
    }

    public  function getCategory($id){
        $category = Category::select('id', 'name', 'work_station_id', 'active', 'business_type')->where(['work_station_id'=> $id, 'active' => "1"])->get();
        return response()->json($category);
    }

    public  function getUserMobile(){
        $mobile= User::select('id', 'name', 'mobile')->get();
        return response()->json($mobile);
    }

    public function getUserShopDefine($id){
        $category = Category::select('id', 'name', 'work_station_id', 'active', 'business_type')->where(['id'=> $id, 'active' => "1"])->first();
        $data = false;
        if($category->business_type == 'shop'){
            $data = true;
        }
        return response()->json($data);
    }


    public function getUserCommunity(){
        $Community =  Community::select('id', 'name', 'mobile')->get();
        return response()->json($Community);
    }

    public function makeUserServiceProfile(Request $request){

        $this->validate($request, [
            'mobile' => 'required',
            'workstation' => 'required',
            'category' => 'required',
            'location' => 'required',
            'business_name' => 'required',
            'address' => 'required',

        ]);

        $whoCreatingAccount = Auth::user();
        if(!$whoCreatingAccount){
            return  response()->json(['error'=> 'You Logout now ! Please Login again']);
        }
//        \Log::info($whoCreatingAccount->id);
        \Log::info( $whoCreatingAccount);

        $category = Category::where('id', $request->category)->first();

        $ifHaveSubscriptionByWhoCreating = Subscriber::where('user_id', $whoCreatingAccount->uid)
            ->where('category_id', $request->category)
            ->first();
        $prRow = Subscriber::where('work_station_id', $request->workstation)->orderBy('ws_position', 'desc')->first();
        $user = User::where('mobile', $request->mobile)->first();

        if (!$ifHaveSubscriptionByWhoCreating){

                $this->newSubscripberCreate($prRow, $category, $request);

        }



        $code = $this->generateRandomString(18);

//        \Log::info($user->id);

        $subscription = Subscriber::where('user_id', $user->uid)
            ->where('category_id', $request->category)
            ->first();

        $subscriptionls = Subscriber::orderByDesc('id')->first();

//        \Log::info('ok1');
        if(!$subscription){
//            \Log::info('ok2');
            $subscription = new Subscriber;
            $subscription->sbid = $subscriptionls->sbid + 1;
            $subscription->ws_position =  $prRow ? $prRow->ws_position+1 : 1;
            $subscription->category_id = $category->id;
            $subscription->user_id = $user->id;
            $subscription->referral_id = $ifHaveSubscriptionByWhoCreating->id;
            $subscription->work_station_id =  $request->workstation;
            $subscription->subscription_code = $code;
            $subscription->addedby_id = Auth::user()->uid;
            $subscription->free_account = 1;
            $subscription->save();

        }

        $subscription =  Subscriber::where('user_id','=', $user->uid)
            ->where('category_id','=', $request->category)
            ->first();
        \Log::info($subscription);

        $makeProfileCheck = ServiceProfile::where(['ws_cat_id'=> $request->category])->count();
        if($makeProfileCheck){
            return  response()->json(['error'=> 'You already create profile in this category']);
        }


        $media_profile = Media::where('category', $request->category)->where('type','Profile')->first();
        $media_cover = Media::where('category', $request->category)->where('type','Cover')->first();

        if($media_profile){
            $profile_image = $media_profile->file_name_path;

        }else{
            $profile_image = 'https://assets.sc-bd.com/profile_1656574208.jpg';
        }
        if($media_cover){
            $cover = $media_cover->file_name_path;

        }else{
            $cover = 'https://assets.sc-bd.com/2_1656574186.jpg';
        }

        $serviceProfiileLates = ServiceProfile::latest()->first();

        $profile = new ServiceProfile;
        $profile->spid = $serviceProfiileLates? $serviceProfiileLates->spid+1 : 1;
        $profile->user_id = $subscription->user_id;
        $profile->subscriber_id = $subscription->sbid;
        $profile->workstation_id = $subscription->work_station_id;
        $profile->ws_cat_id = $subscription->category_id;
        $profile->name = $request->business_name;
        $profile->profile_type = $request->profile_type == 'business' ? $request->profile_type : 'personal';
        $profile->address = $request->address;
        $profile->location = $request->location;
        $profile->lat = $request->lat;
        $profile->lng = $request->lng;

        $profile->status = false; ///Because This Service profile created by a USER
        $profile->paystatus = 0;
        $profile->community_id = $request->community;

        if ($subscription->free_account) {
            $profile->expired_at = Carbon::now()->addDay(3);
        } else {
            $profile->expired_at = Carbon::now()->addDay(365);
        }
        $profile->open = true;
        $profile->image_path = $profile_image;
        $profile->cover_image_path = $cover;
        $profile->addedby_id = Auth::id();
        $profile->tso_group_id = Auth::user()->group_id ? Auth::user()->group_id : Auth::user()->uid;
        $profile->save();




        if($request->paynow == "paynow") {
            $welcome_balance = 100;
            if ($whoCreatingAccount->is_employee == true) {
                if ( $whoCreatingAccount->employee_balance < 100) {
                    return response()->json(['error'=> 'Your employee balance less then 100 tk. If you want to create service then please contract office.']);
                } else {
                    if ($profile->paystatus == 0) {
                        $bt = new BalanceTransaction;
                        $bt->from = 'user';
                        $bt->to = 'admin';
                        $bt->purpose = 'sp_create_charge';
                        $bt->subscriber_id = $subscription->sbid;
                        $bt->user_id = $whoCreatingAccount->uid;
                        $bt->previous_balance = $whoCreatingAccount->employee_balance;  // user old balance
                        $bt->moved_balance = 100; // job cost
                        $bt->new_balance = $bt->previous_balance - $bt->moved_balance; // user new balance
                        $bt->type = 'service';
                        $bt->details = "{$bt->moved_balance} TK deducted from User balance. to Createing Service/Shop for user_id({$user->id}), Mobile ($user->mobile) .";
                        $bt->type_id = $category->id;
                        $bt->addedby_id = Auth::id();
                        $bt->save();
                        $newbalance = Auth::user()->employee_balance - $bt->moved_balance;
                        $whoCreatingAccount->employee_balance = $newbalance;
                        $user->ad_balance = $user->ad_balance + $category->sp_adtopup_bonus;
                        $user->welcome_balance =  $user->welcome_balance + $welcome_balance;
                        $profile->paystatus = 1;
                        $profile->status = true;
                        $profile->save();


                        $notification2 = new OrderNotifications;
                        $notification2->type = 'admin';
                        $notification2->title = 'Service Profile Create';
                        $notification2->messages = "Service Profile Create from {$whoCreatingAccount->name}";
                        $notification2->details = "Paid Profile Created by {$whoCreatingAccount->name}. profile name{$profile->name}";
                        $notification2->user_id = $profile->user_id;
                        $notification2->status = '1';
                        $notification2->date = date('d-m-yyyy');
                        $notification2->link = $profile->id;
                        $notification2->url = 'admin/service/profile/' . $profile->id;
                        $notification2->save();


                        if ($request->community_id) {
                            $community = Community::where('id', $request->community_id)->first();

//                            dd($community);
                            if ($community->localhost != null) {
                                $reffer = Subscriber::where('user_id', $community->localhost)->first();
//                                dd($reffer);
                                if ($reffer) {
                                    $reffer_commission = $community->service_commission;
                                    $bt = new BalanceTransaction;
                                    $bt->subscriber_id = $reffer->id;
                                    $bt->from = 'admin';
                                    $bt->to = 'subscriber';
                                    $bt->purpose = 'commission';
                                    $bt->user_id = $reffer->user_id;
                                    $bt->previous_balance = $reffer->balance ?: 0;  // user balance
                                    $bt->moved_balance = $reffer_commission; // subscriber balance
                                    $bt->new_balance = $bt->previous_balance + $bt->moved_balance; // user new balance
                                    $bt->type = 'localhost_commission';
                                    $bt->details = "{$reffer_commission} tk Localhost commission balance added to subscriber account";

                                    $bt->addedby_id = Auth::user()->uid;
                                    $bt->save();

                                    //for reffer comm to subscriber
                                    $reffer->balance = $bt->new_balance;
                                    //10tk
                                    $reffer->save();

                                }

                            }

                        }

                        $number = $user->mobile;
                        $messages = "Congratulations! {$request->name}.Received TK.100/- against your paid service profile.Pls visit us www.sc-bd.com.";
                        $SendSms = new SendSms;
                        try {
                            // Send a message using the primary device.
                            $msg = $SendSms->sendSingleMessage($number, $messages);

                        } catch (Exception $e) {

                        }

                        // return back()->with('success', 'Profile Submitted Successfully.');


                    } else {
                        return redirect()->with('error', 'You already pay for this service profile');

                    }


                }

            }else{
                if ($whoCreatingAccount->balance < 100) {


                    return  response()->json(['error'=> 'Your account balance less then 100 tk. If you want to create service then please recharge.']);
                }else{


                    if($profile->paystatus==0){

                        $bt = new BalanceTransaction;
                        $bt->from = 'user';
                        $bt->to = 'admin';
                        $bt->purpose = 'sp_create_charge';
                        $bt->subscriber_id = $subscription->sbid;
                        $bt->user_id = $whoCreatingAccount->uid;
                        $bt->previous_balance = $whoCreatingAccount->balance;  // user old balance
                        $bt->moved_balance = 100; // job cost
                        $bt->new_balance = $bt->previous_balance - $bt->moved_balance; // user new balance
                        $bt->type = 'service';
                        $bt->details = "{$bt->moved_balance} TK deducted from User balance. to Createing Service/Shop for user_id({$user->id}), Mobile ($user->mobile) .";
                        $bt->type_id = $category->id;
                        $bt->addedby_id =$whoCreatingAccount->uid;
                        $bt->save();
                        $newbalance = $whoCreatingAccount->balance - $bt->moved_balance;
                        $whoCreatingAccount->balance = $newbalance;
//                        $whoCreatingAccount->decrement('balance', $bt->moved_balance);

                        $user->ad_balance =   $user->ad_balance + $category->sp_adtopup_bonus;
//                        $user->increment('ad_balance', $category->sp_adtopup_bonus);
                        $user->welcome_balance =  $user->welcome_balance + $welcome_balance;
//                        $user->increment('welcome_balance',$welcome_balance);
                        $profile->paystatus = 1;
                        $profile->status = true;
                        $profile->save();

                        $notification2=new OrderNotifications;
                        $notification2->type='admin';
                        $notification2->title='Service Profile Create';
                        $notification2->messages= "Service Profile Create from {$whoCreatingAccount->name}";
                        $notification2->details="Paid Profile Created by {$whoCreatingAccount->name}. profile name{$profile->name}";
                        $notification2->user_id=$profile->user_id;
                        $notification2->status='1';
                        $notification2->date=now();
                        $notification2->link= $profile->id;
                        $notification2->url='admin/service/profile/'.$profile->id;
                        $notification2->save();

                        if ($request->community_id){
                            $community = Community::where('id', $request->community_id)->first();
                            if($community && $community->localhost != null){
                                $reffer=Subscriber::where('user_id',$community->localhost)->first();
                                if($reffer){
                                    $reffer_commission= $community->service_commission;
                                    $bt = new BalanceTransaction;
                                    $bt->subscriber_id = $reffer->id;
                                    $bt->from = 'admin';
                                    $bt->to = 'subscriber';
                                    $bt->purpose = 'commission';
                                    $bt->user_id = $reffer->user_id;
                                    $bt->previous_balance = $reffer->balance ?: 0;  // user balance
                                    $bt->moved_balance =  $reffer_commission; // subscriber balance
                                    $bt->new_balance = $bt->previous_balance + $bt->moved_balance; // user new balance
                                    $bt->type = 'localhost_commission';
                                    $bt->details = "{$reffer_commission} tk Localhost commission balance added to subscriber account";

                                    $bt->addedby_id = $whoCreatingAccount->uid;
                                    $bt->save();

                                    //for reffer comm to subscriber
                                    $reffer->balance = $bt->new_balance;
                                    //10tk
                                    $reffer->save();

                                }

                            }

                        }


                        $applicant = SoftcomJobCandidate::where(['user_id'=> Auth::user()->uid, 'category'=> 6, 'status' => 1])->first();
                        if($applicant){
                            $reffer=Subscriber::where('user_id',Auth::user()->uid)->first();
                            if($reffer){
                                $reffer_commission= 30;
                                $bt = new BalanceTransaction;
                                $bt->subscriber_id = $reffer->id;
                                $bt->from = 'admin';
                                $bt->to = 'subscriber';
                                $bt->purpose = 'commission';
                                $bt->user_id = $reffer->user_id;
                                $bt->previous_balance = $reffer->balance ?: 0;  // user balance
                                $bt->moved_balance =  $reffer_commission; // subscriber balance
                                $bt->new_balance = $bt->previous_balance + $bt->moved_balance; // user new balance
                                $bt->type = 'service_profile_create_commission';
                                $bt->details = "{$reffer_commission} tk service profile create  commission balance added to subscriber account";

                                $bt->addedby_id = $whoCreatingAccount->uid;
                                $bt->save();

                                //for reffer comm to subscriber
                                $reffer->balance = $bt->new_balance;
                                //10tk
                                $reffer->save();

                            }

                        }

                        $number=$user->mobile;
                        $messages= "Congratulations! {$request->name}.Received TK.100/- against your paid service profile.Pls visit us www.sc-bd.com.";
                        $SendSms=new SendSms;
                        try {
                            // Send a message using the primary device.
                            $msg = $SendSms->sendSingleMessage($number,$messages);

                        }catch (Exception $e) {

                        }

                        // return back()->with('success', 'Profile Submitted Successfully.');




                    }else{
                        return response()->json(['error'=> 'You already pay for this service profile']);

                    }


                }
            }


        }else{
            $profile->expired_at = Carbon::now()->addDay(3);
            $profile->is_trial = 1;
            $profile->status = true;
            $profile->save();

        }

            return response()->json(['success' => 'Service Account Create Successfully done!']);
    }

    public function newSubscripberCreate($ws_position, $category, $request){

        $subscriptionls = Subscriber::orderByDesc('id')->first();
        $subscription = new Subscriber;
        $subscription->sbid = $subscriptionls ? $subscriptionls->sbid +1 : 1;
        $subscription->ws_position = $ws_position ? $ws_position->ws_position+1 : 1 ;
        $subscription->category_id = $category->id;
        $subscription->user_id = Auth::user()->uid;
        $subscription->referral_id ='';
        $subscription->work_station_id =  $request->workstation;
        $subscription->subscription_code = $this->generateRandomString(18);
        $subscription->addedby_id = Auth::user()->uid;
        $subscription->free_account = 1;
        $subscription->save();
    }


    public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}
