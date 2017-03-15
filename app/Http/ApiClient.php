<?php
/**
 * Created by PhpStorm.
 * User: rinalnov
 * Date: 10/11/16
 * Time: 11:49 AM
 */

namespace App\Http;
use GuzzleHttp\Client;

class ApiClient
{
    public function postData($url, $data)
    {
        $client = new Client(['headers' => [  "apikey" => "*133#","Content-Type" => "application/x-www-form-urlencoded"]]);

        $response = $client->request("POST", $url, $data);
        $decodeData =  json_decode($response->getBody(), true);
        return $decodeData;
    }

    public function requestData($url)
    {
        $client = new Client(['headers' => [  "apikey" => "*133#", "token" => "a81e11430e95671be9a7d3492dbfd163"]]);
        $response = $client->get($url);
        $decodeData =  json_decode($response->getBody(), true);
        return $decodeData;
    }

    public function insertData($url, $data)
    {
        $client = new Client(['headers' => [  "apikey" => "*133#", "token" => "a81e11430e95671be9a7d3492dbfd163"]]);
        $response = $client->request("POST", $url, $data);
        $decodeData =  json_decode($response->getBody(), true);
        return $decodeData;
    }

    public function updateData($url, $data)
    {
        $client = new Client(['headers' => [  "apikey" => "*133#", "token" => "a81e11430e95671be9a7d3492dbfd163"]]);
        $response = $client->request("PUT", $url, $data);
        $decodeData =  json_decode($response->getBody(), true);
        return $decodeData;
    }
}