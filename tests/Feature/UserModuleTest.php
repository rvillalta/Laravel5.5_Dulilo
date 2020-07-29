<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function generate_users_list()
    {
        $this->get('/usuarios')->assertStatus(200)->assertSee('Pedro');
    }
    public function check_name_nickname()
    {
       $this->get('saludo/luis/palili')
	       ->asserStatus(200);
    }	    
    //public function check_user
}
