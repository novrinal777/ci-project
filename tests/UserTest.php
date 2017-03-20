<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testShowLoginPage()
    {
        $this->visit('/login')
            ->see('LoginPage')
            ->dontSee('Beta');
    }

    public function testLogin()
    {
        $headers = [];
//        $headers['CONTENT_TYPE'] = 'application/json';
        $headers['Accept'] = 'application/json';

        // case blank email and password
        $response = $this->post('/loginUser', ['user_email' => '','user_pwd' => ''], $headers)->seeJson(["user_email"=>["Pls Enter email"],"user_pwd"=>["Pls Enter password"]]);

        // case invalid email format and blank password
        $response = $this->post('/loginUser', array('user_email' => 'dsf','user_pwd' => ''), $headers)->seeJson(["user_email"=>["Invalid Email Format"],"user_pwd"=>["Pls Enter password"]]);

        // case blank email & invalid password
        $response = $this->post('/loginUser', array('user_email' => '','user_pwd' => 's'), $headers)->seeJson(["user_email"=>["Pls Enter email"],"user_pwd"=>["Please enter password at lease 3 character"]]);

        // case invalid email and password
        $response = $this->post('/loginUser', array('user_email' => 'dsf','user_pwd' => 's'), $headers)->seeJson(["user_email"=>["Invalid Email Format"],"user_pwd"=>["Please enter password at lease 3 character"]]);

         //case invalid email
//        $response = $this->call('POST', '/loginUser',['user_email' => 'rinal@r-up.jp','user_pwd' => '123']);
//        $this->assertEquals('{"users":{"status":"error","message":"Incorrect user name or password!"}}',$response->getContent());

        // case invalid password
        $response = $this->call('POST', '/loginUser',['user_email' => 'rinal.nov@r-up.jp','user_pwd' => 'lkkj']);
        $this->assertEquals('{"users":{"status":"error","message":"Incorrect user name or password!"}}',$response->getContent());

        // case correct email and password
        $response = $this->call('POST', '/loginUser',['user_email' => 'rinal.nov@r-up.jp','user_pwd' => '123']);
        $this->assertEquals('{"users":{"status":"success","message":"Welcome!"}}',$response->getContent());
    }
}
