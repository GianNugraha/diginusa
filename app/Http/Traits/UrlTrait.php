<?php
namespace App\Http\Traits;

trait UrlTrait {
    public static function url_dynamic() {
        return request()->getClientIp() == '127.0.0.1' || request()->getClientIp() == 'localhost' ? 'http://localhost:3012/api/V1/' : 'http://api-insafmasdex.disnavpriok.id:3012/api/V1/';
    }

    public static function url_sybill() {
        return request()->getClientIp() == '127.0.0.1' || request()->getClientIp() == 'localhost' ? 'http://localhost:3005/api/sybill/' : 'http://api-insaf.disnavpriok.id:3000/api/';
    }

    public static function url_modis() {
        return request()->getClientIp() == '127.0.0.1' || request()->getClientIp() == 'localhost' ? 'http://127.0.0.1:3011/api/v2/modis/' : 'http://api-mp3.disnavpriok.id/api/v2/modis/';
    }

    public static function url_user_management() {
        return request()->getClientIp() == '127.0.0.1' || request()->getClientIp() == 'localhost' ? 'http://127.0.0.1:3016/api/V1/' : 'http://api-rmmasdexcs.disnavpriok.id/api/V1/';
    }

    public static function getToken(){
        $token = session()->get('token');

        $splitToken = explode('.', $token);
        $tokenize = json_decode(base64_decode($splitToken[1]));
        $dateNow = explode(' ', microtime());

        if($dateNow[1] > $tokenize->exp){
            session()->flush();
            return false;
        }else{
            return $token;
        }
    }
}