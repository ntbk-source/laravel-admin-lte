<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function index(Request $request)
	{
		return view('profile.index');
	}

	public function update(Request $request)
	{
		$request->validate([
			'name' => 'required|string',
			'new_password' => $request->new_password ? 'required|min:6|confirmed' : '',
		]);

		if ($request->new_password) {
			$data['password'] = Hash::make($request->new_password);
		}

		$data['name'] = $request->name;

		User::whereId(user()->id)->update($data);

		return to_route('profile.index')->withSuccess('Profile was successfully updated');
	}
}
