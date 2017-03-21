<?php
/**
 * Created by PhpStorm.
 * User: rinalnov
 * Date: 6/26/16
 * Time: 5:58 PM
 */

namespace App\Http\Controllers;
use Response;
use App\Http\Requests\UserRequest;
use App\Model\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("auth/login");
    }
    private function loginUser(UserRequest $request)
//    public function loginUser()
    {

        $objUser = new User();
        $data = [
            'form_params' => $request->all()
        ];
        $result = $objUser->login($data);
        echo "test login";

        return $result;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}