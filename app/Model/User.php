<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\ApiClient;
class User extends Model
{
    public function login($data)
    {
        $url = "http://192.168.1.6:8888/gift-app-api/users/login.json";
        $objApiClient = new ApiClient();
        $result = $objApiClient->postData($url,$data);
        return $result;
    }
}
