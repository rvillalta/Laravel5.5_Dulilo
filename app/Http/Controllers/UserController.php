<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$users = [
			'Ramon',
			'Jose',
			'Mildred',
			'Catalino',
			'Simona',
		];
		$title = 'Los Usuarios';
		//dd(compact('title', 'users'));
		return view('user', [
			'users' => $users,
			'title' => $title
			]);	
	}
	public function show($id)
	{
		return "Mostrando detalles del usuario {$id}". "<br>"; 
	}
	public function create()
	{
		return 'creando usuario nuevo';
	}
}
