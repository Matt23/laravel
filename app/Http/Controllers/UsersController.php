<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	function index(Request $request) 
	{
		if ($request->isJson()) {
			$users = User::all();
			return response()->json($users);
		} else {
			return response()->json(['error' => 'No autorizado.']); 
		}
	}

	function createUsers(Request $request) 
	{
		if ($request->isJson()) {
			
			$data = $request->json()->all();
			$user = User::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => Hash::make('123456')
			]);
			return response()->json($user); 
			
		} else {
			return response()->json(['error' => 'No autorizado.']); 
		}
	}
}
