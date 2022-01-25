<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Prefecture;
use Illuminate\Support\Facades\Log;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $prefectures = Prefecture::get();
        $year="";
       for ($i=1970; $i <= 2020; $i++) {
        $year .= '<option value="'.$i.'">'.$i.'年</option>';
        Log::debug('$year="'.$year.'"');
       }
        $month="";
        for ($i=1; $i <= 12; $i++){
        $month .='<option value="'.$i.'">'.$i.'月</option>';
        }
        $day="";
        for ($i=1; $i <= 31; $i++){
        $day .='<option value="'.$i.'">'.$i.'日</option>';
        }
        return view('auth.register',compact("prefectures","year","month","day"));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all(),$request)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
