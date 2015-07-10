<?php
/**
 * Created by PhpStorm.
 * User: ssandy
 * Date: 15-07-10
 * Time: 2:21 PM
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

}
