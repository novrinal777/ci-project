<?php

namespace App\Model;

use App\TestCollections;
use Illuminate\Database\Eloquent\Model;
use App\Http\ApiClient;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class Test extends Model
{

    public function getUserWishList()
    {
        $url = "http://192.168.1.103:8888/gift-app-api/wishes/getWishGiftFromUTL.json?user_id=7870&page=-11&limit=30";
        $objApiClient = new ApiClient();
        $data = $objApiClient->requestData($url);
        //$this->addDataToCollection($data['wishgift']);
        //return serialize($this->getDataCollection());
        //return $this->getDataCollection();
        return serialize($data);
    }

    public function addWish( $data)
    {
        $url = "http://192.168.1.103:8888/gift-app-api/wishes/add.json";
        $objApiClient = new ApiClient();
        return $objApiClient->insertData($url,$data);
    }
    function addDataToCollection($data)
    {
        //Collection::make($data);
        TestCollections::make($data);
    }

    function getDataCollection()
    {
        return TestCollections::all();
    }
    function addItemCollection()
    {
        $collection = new Collection();
        if($collection->isEmpty())
        {
            return "no data";
        }
//        $collection->

        return $collection->all();
    }
}
