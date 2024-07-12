<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Candidate;
use App\Models\UserData;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\Admin\NewUserRegisteredNotification;
use Auth;

class RegisterController extends Controller {
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

    public function __construct() {
        $this->middleware( 'guest' );
    }

    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator( array $data ) {
        return Validator::make( $data, [
            'name' => [ 'required', 'string', 'max:255' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'password' => [ 'required', 'string', 'min:8', 'confirmed' ],
            'g-recaptcha-response' => config( 'captcha.active' ) ? 'required|captcha' : ''
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ] );
    }

    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return \App\Models\User
    */
    protected function create( array $data ) {
        $newUsername = Str::slug( $data[ 'name' ] );
        $oldUserName = User::where( 'username', $newUsername )->first();

        if ( $oldUserName ) {
            $username = Str::slug( $newUsername ) . '_' . Str::random( 5 );
        } else {
            $username = Str::slug( $newUsername );
        }

        $user = User::create( [
            'role' => $data[ 'role' ], // == 'candidate' ? 'candidate' : 'company',
            'name' => $data[ 'name' ],
            'username' => $username,
            'email' => $data[ 'email' ],
            'password' => Hash::make( $data[ 'password' ] ),
        ] );

        $admins = Admin::all();
        foreach ( $admins as $admin ) {
            Notification::send( $admin, new NewUserRegisteredNotification( $admin, $user ) );
        }


        if ( !empty( $data[ 'role' ] ) && $data[ 'role' ] == 'user' ) {
            Auth::attempt( [ 'email' => $data[ 'email' ], 'password' => $data[ 'password' ] ] );

            $dataUser[ 'user_id' ] = Auth::user()->id;
            UserData::create( $dataUser );
            // $data[ 'user' ] = User::with( 'company', 'contactInfo', 'socialInfo' )->findOrFail( auth()->user()->id );
            $user = User::with( 'userdata' )->findOrFail( auth()->user()->id );
        }

        return $user;
    }

    protected $redirectToUser = '/users/create-profile';
    protected $redirectToUsertoOverview = '/users/overview';

    protected function redirectTo() {
        $user = User::with( 'userdata' )->findOrFail( auth()->user()->id );
        if ( auth()->user()->role == 'user' && !empty($user) && $user->userdata->profile_completion ) {
            return $this->redirectToUsertoOverview;
        } elseif ( auth()->user()->role == 'user' ) {
            return $this->redirectToUser;
        }
        return '/login';
    }

}
