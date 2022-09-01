import AppStorage from "./AppStorage";
import Token from "./Token";
import axios from 'axios';

class User{
    login(data, router){
        axios.post('/api/login',data)
        .then(res => {
            this.responseAfterLogin(res);
            router.go({name:'Home-page'});
            console.log(router);
        })
        .catch(error => console.log(error.response.data))
    }

    register(data, router){
        axios.post('/api/register',data)
        .then(res => {
            this.responseAfterLogin(res)
            router.go({name:'Home-page'});
            localStorage.removeItem('mobile');
        })
        .catch(error => console.log(error.response.data))
    }

    responseAfterLogin(res){
        console.log(res);
        const access_token = res.data.access_token;
        const username = res.data.user.name;
        const mobile = res.data.user.mobile;
        const expaire = res.data.expires_in;
        const role = res.data.role?.role_name;
        const rolev = res.data.role?.role_value;

        if(Token.isValid(access_token)){
            AppStorage.store(username, access_token, mobile, expaire, role, rolev);
        }
    }


    hasToken(){
        const storedToken = AppStorage.getToken();
        if(storedToken){
          return Token.isValid(storedToken)? true : this.logOut();
        }else{
            this.logOut();

        }
        return false;
    }


    logedIn(){
        return this.hasToken();
    }

    logOut(){
        AppStorage.clear();
    }

    name(){
        if(this.logedIn()){
            return AppStorage.getUser();
        }
    }

    id(){
        if(this.logedIn()){
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub;
        }
    }

    own(id){
        return this.id() == id;
    }

    admin(){
        return AppStorage.getAdmin() == 'admin';
    }



}

export default User = new User();