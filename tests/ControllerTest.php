<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     * @expectsException Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

}
