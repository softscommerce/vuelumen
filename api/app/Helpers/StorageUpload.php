<?php

namespace App\Helpers;

use Google\Cloud\Storage\StorageClient;
use GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage;
use MongoDB\Exception\Exception;

class StorageUpload
{
    public static function upload($image, $dir){
        $filenamewithextension = $image->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $filenametostore = $filename.'_'.time().'.'.$extension;

        $storage = new StorageClient([
            'keyFile' => json_decode(file_get_contents('F:\xampp\htdocs\softcode\api\app\Helpers/modern-rhythm-341205-d7ae549243b8.json'), true)
        ]);

        $bucket = $storage->bucket('scbd-assets');
        if($dir){
            $bucket->upload(
                fopen($image, 'r'),
                [
                    // 'name' => "mainDir/subDir/".$unique_fileName,

                    'name' => $dir.'/'.$filenametostore,
                ]
            );

            $url = "https://assets.sc-bd.com/".$dir.'/'.$filenametostore;

        }else{
            $bucket->upload(
                fopen($image, 'r'),
                [
                    // 'name' => "mainDir/subDir/".$unique_fileName,

                    'name' => $filenametostore,
                ]
            );

            $url = "https://assets.sc-bd.com/".$filenametostore;

        }


        return  $url;
    }


    public static function delete()
    {

            $storage = new StorageClient([
                'keyFile' => json_decode(file_get_contents('F:\xampp\htdocs\softcode\api\app\Helpers/modern-rhythm-341205-d7ae549243b8.json'), true)
            ]);

        $bucket = $storage->bucket('scbd-assets');
        $objects = $bucket->objects([
            'prefix' => 'brand/'
        ]);
        foreach ($objects as $object) {
            $object->delete();
           \Log::info($object->name());
        }
    }

}
