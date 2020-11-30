<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller{

	public function __construct(){
        $this->middleware('auth');
    }

	public function index(){
		$users = User::where('role_id','<>',1)->paginate();
		return view('Admin.users',compact('users'));
	}

	public function destroy(User $user){
		$user->delete();
	}
}
