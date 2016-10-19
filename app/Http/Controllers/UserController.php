<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UserController extends Controller {

    public function getIndex() {
        
        return User::all();
        
    }
    public function getFaker() {
        $faker = \Faker\Factory::create('zh_CN'); // create a French faker
        $images = [];
        $i = 0;
//        for ($i = 0; $i < 5; $i++) {
            $images[$i] = $faker->name('male');
//        }
        return view('tests.face', ['images'=>$images]);
    }
    
}
