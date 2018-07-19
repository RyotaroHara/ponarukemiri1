<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     **/
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
            'name' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'Weight'=> 'required|integer|between:1,200|digits_between:1,3',
            'IdealWeight'=>'required|integer|between:1,200|digits_between:1,3',
            'year'=>'present|integer|between:2018,2023|digits:4',
            'month'=>'present|integer|between:1,12|digits_between:1,2',
            'day'=>'required|integer|between:1,31|digits_between:1,2',
            'sex'=>'required|integer|between:1,2|digits:1',
            'height'=>'required|integer|between:100,200|digits:3',
            'age'=>'required|integer|between:1,100|digits_between:1,2',
            'fat'=>'integer|between:1,50|digits_between:1,2',
            'ExerciseIntensity'=>'present|integer|between:1,5|digits:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'Weight'=>$data['Weight'],
            'IdealWeight'=>$data['IdealWeight'],
            'year'=>$data['year'],
            'month'=>$data['month'],
            'day'=>$data['day'],
            'sex'=>$data['sex'],
            'height'=>$data['height'],
            'age'=>$data['age'],
            'fat'=>$data['fat'],
            'ExerciseIntensity'=>$data['ExerciseIntensity'],
        ]);
    }
}
