<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\domain;
use App\Models\Sousdomain;
use App\Models\technicien;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



        /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if($request->ajax()){
            // If request from AJAX
            $id_role = $request->role; 
            $user->roles()->attach( $id_role);
            
            return [
                'success' => true,
                'redirect' => $this->redirectPath() ?: route('Dashboard'),
            ];
        } else{
            if ($response = $this->registered($request, $user)) {
                return $response;
            }
    
            return $request->wantsJson()
                ? new JsonResponse([], 201)
                : redirect($this->redirectPath());
        }

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       $role = $data['role'];
        $role_user = DB::table('roles')->where('id' , $data['role'])->first();
        // dd($role_user->name);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'matricule' => $data['matricule'],
            'active' => 1
        ]);
        if ($role_user->name == 'client') {
           $client = Client::create([
            'name' => $data['name'],
            'prenom' => 'John',
            'email' => $data['email'],
            'mot de passe' => $data['password'],
           ]);
        }else{
            $technicien = technicien::create([
                'name' => $data['name'],
                'prenom' => 'John',
                'email' => $data['email'],
                'mot de passe' => $data['password'],
                'matricule' => $data['matricule'],
               ]);
        }
        $user->assignrole($role);
        return $user;
    }
}
