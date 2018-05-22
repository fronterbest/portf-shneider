<?php
namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getRegister() {
    	return view('users.register'); 
	}

	public function postRegister() {
    	return view('users.register'); 
	}
}
