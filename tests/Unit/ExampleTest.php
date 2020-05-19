<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$this->assertTrue(true);

        $first  = factory(App\Post::class)->create();
        
        $second = factory(App\Post::class)->create([
        	'created-at' => \Carbon\Carbon::now()->subMonth()
        ]);

    	$posts = App\Post::archives();

    	$this->assertCount(2,$posts);
    }
}
