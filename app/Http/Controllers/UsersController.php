<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
    	$users = [
    		'0' => [
    			'first_name' => 'Leomar',
    			'last_name' => 'Bucud'
    		],
    		'1' => [
    			'first_name' => 'Cherry Ann',
    			'last_name' => 'Alfonso'
    		]
    	];
    	return view('admin.users.index', compact('users'));
    }
}
