<?php

namespace App\Http\Controllers;

use App\Mail\SendWorkbook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function store(Request $request)
	{
		$validated = $request->validate([
			'email' => 'required|unique:users|email'
		]);

		User::create([
			'email' => $validated['email']
		]);

        Mail::to($validated['email'])
            ->send(new SendWorkbook());


		return redirect()
			->route('home')->with([
				'success' => "Thank you. You will receive the attachment shortly"
			]);
	}
}
