<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use App\Notifications\Member\RegisterSucceed;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/biodata/create';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create($data);
    }

    public function register(RegisterRequest $request)
    {
		$data 				= $request->all();
		$data['password'] 	= bcrypt($request->password);
		$data['api_token']	= str_random(60);

		if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);

            $data['foto'] = '/uploads/images/'.$fileName;

        }

        event(new Registered($user = $this->create($data)));
        $user->notify(new RegisterSucceed($user));
        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }

}
