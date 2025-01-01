<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        DB::table('form')->insert(
            array(
                   'id'     =>   1, 
                   'name'   =>   'Haji',
                   'email'   =>   'hajimakanga@gmail.com',
                   'phone'   =>   0653133796,
                   'password'   =>   '',
                   
            )
        );
    }
}
