<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('isActive')) {
	function isActive($route)
	{
		return request()->routeIs($route) ? 'active' : '';
	}
}

if (!function_exists('isOpen')) {
	function isOpen($route)
	{
		return request()->routeIs($route) ? 'menu-is-opening menu-open' : '';
	}
}

if (!function_exists('user')) {
	function user()
	{
		return Auth::user();
	}
}

if (!function_exists('actionBtn')) {
	function actionBtn($route, $btnClass, $icon, $attributes = [])
	{
		$a = '';
		foreach ($attributes as $t) {
			$a .= $t;
		}
		$result = "<a {$a} href='" . $route . "' class='btn btn-sm btn-" . $btnClass . "'><i class='fas fa-fw fa-" . $icon . "'></i></a>";
		return $result;
	}
}
