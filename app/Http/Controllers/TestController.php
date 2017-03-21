<?php
/**
 * Created by PhpStorm.
 * User: rinalnov
 * Date: 6/26/16
 * Time: 11:04 AM
 */
namespace App\Http\Controllers;


use App\Model\Test as Test;
use App\TestCollections;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
//    public function index()
//    {
//        return 'hello world from controller : )';
//    }
    public function showMasterLayout()
    {
        return view('master');
    }
    public function requestDataFromApi()
    {
        $objTest = new Test();
        $response = $objTest->getUserWishList();
        //$this->addDataToCollection($response);
        echo "test"
        return "result = ".$response;
    }
    public function insertData(TestRequest $request)
    {
        //$request->all();
        $objTest = new Test();
        $data = [
            'form_params' => $request->all()
        ];
//        $data = [
//            'form_params' => [
//                'gift_id' => '11295',
//                'user_id' => '8103',
//                'target_id' => "5",
//                'description' => "hello everyone",
//                'user_name' => "sreyleak"
//            ]
//        ];

        $response = $objTest->addWish( $data);
        $message = $response['message'];
        return "result = ".serialize($response);
        //return view('test',array('name'=>$message));
    }

//    public function readsession(Request $request)
//    {
//        $response = $request->session()->get("WishGifts");
//        return "result = ".serialize($response);
//    }
//    public function readCollection()
//    {
//        $response = $this->getDataCollection();
//        return "Collection = ".serialize($response);
//    }
//    function addDataToCollection($data)
//    {
//        TestCollections::make($data);
//    }
//
//    function getDataCollection()
//    {
//        return serialize(TestCollections::all());
//    }
//    function addItemCollection()
//    {
//        $collection = new Collection();
//        if($collection->isEmpty())
//        {
//            return "no data";
//        }
////        $collection->
//
//        return $collection->all();
//    }
//    public  function phaseParam($param1, $param2)
//    {
//        return "here are param that you phase to us '".$param1."' and '".$param2;
//    }
//
//    public function showView($param)
//    {
//        return view('test',array('name'=>$param));
//    }
//
//
//
//    public function showSubLayout()
//    {
//        return view('aboutpage/about');
//    }
//
//    public function phaseDataToView($subjectName,$teacher)
//    {
//        $day = array("Monday","Tuesday","Wednesday","Thursday","Friday");
//        return view('aboutpage/about',array("subject_name" => $subjectName, "teacher" => $teacher,"learning_schedule"=>$day));
//    }
}