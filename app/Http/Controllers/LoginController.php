<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function LoginController {
 
	@GetMapping("/login")
	public String getLogin() {
		return "login";
	}
}
}
