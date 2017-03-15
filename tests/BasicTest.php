<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\SampleBox;

class BasicTest extends TestCase
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

    public function testHasItemInBox()
    {
        $box = new SampleBox(['cat', 'toy', 'torch']);

        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
        //$this->assertTrue($box->has('ball'));
    }
    public function testTakeOneFromTheBox()
    {
//        $box = new SampleBox(['hello']);

//        $this->assertEquals('torch', $box->takeOne());

        // Null, now the box is empty
//        $this->assertNull($box->takeOne());
    }

    public function testStartsWithALetter()
    {
        $box = new SampleBox(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        // Empty array if passed even
        $this->assertEmpty($box->startsWith('s'));
    }
}
