<?php
/**
 * Created by PhpStorm.
 * User: rinalnov
 * Date: 10/13/16
 * Time: 4:05 AM
 */

namespace App;


class TestCollections
{
    static protected $items = [];

    public static function make($data = [])
    {
        if(empty(self::$items))
        {
            self::$items = $data;

        }
        else
        {
            self::$items = self::all();
            array_pull(self::$items, $data);
        }
        //return self::$items;
//        return "";

    }

    public static function all()
    {
        return self::$items;
    }
}