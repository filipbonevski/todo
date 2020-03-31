<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
	
	{
		    public function addUser(Request $request)
		    {
		        try {
		            $name = (string)$request->get('name');
		            $surname = (string)$request->get('surname');
		            $email = (string)$request->get('email');

		       
			        $user = new User;
			        $user->name = $name;
			        $user->surname = $surname;
			        $user->email = $email;
		     		$user->save();

		        } catch (Exception $e) {
		            return response()->json([
		                'error' => true,
		                'message' => $e->getMessage()
		            ]);
		        }

		        return response()->json([
		            'error' => false,
		            'message' => 'User successfully added to the order.'
		        ]);
		    }
	}
