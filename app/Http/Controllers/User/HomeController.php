<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserData;
use App\Models\BookmarkUser;
// use Google\Service\ServiceControl\Auth;
use Illuminate\Support\Facades\Validator;
use Auth;

class HomeController extends Controller {

    public function index( Request $request ) {
        return view( 'users.index' );
    }

    public function userStore( Request $request ) {
        try {
            $validator = Validator::make( $request->all(), [
                // 'email' => 'required|email|unique:users',
                'name' => 'required',
                'birthday' => 'required',
                'nationality' => 'required',
                'gender' => 'required',
                // 'image' => 'required',
                'aboutus' => 'required',
                // 'banner' => 'required',
            ] );

            if ( $validator->fails() ) {
                flashError( $validator->errors()->first() );
                return back();
            }

            if ( $request->hasFile( 'image' ) ) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move( public_path( 'images' ), $imageName );
                $UserData[ 'logo' ] = 'images/'.$imageName;
            }

            if ( $request->hasFile( 'banner' ) ) {
                $banner_imageName = time() . '.' . $request->banner->extension();
                $request->banner->move( public_path( 'banner_image' ), $banner_imageName );
                $UserData[ 'banner' ] = 'banner_image/'.$banner_imageName;
            }

            $user[ 'name' ] = $request->name;
            $UserData[ 'date_of_birth' ] = $request->birthday;
            $UserData[ 'nationality' ] = $request->nationality;
            $UserData[ 'gender' ] = $request->gender;

            $UserData[ 'bio' ] = $request->aboutus;

            User::where( 'id', Auth::id() )->update( $user );
            $userUpdate = UserData::where( 'user_id', Auth::id() )->update( $UserData );
            flashSuccess( 'User Update Successfully' );
            return back();
        } catch ( \Throwable $th ) {
            flashError( $th->getMessage() );
            return back();
        }
    }

    public function userStoreother( Request $request ) {
        try {
            $validator = Validator::make( $request->all(), [
                'phone' => 'required',
                'address_line_1' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'pincode' => 'required',
            ] );

            if ( $validator->fails() ) {
                flashError( $validator->errors()->first() );
                return back();
            }

            $getData = UserData::where( 'user_id', Auth::id() )->first();

            if ( !empty( $getData ) && !empty( $getData->bio ) ) {
                $UserData[ 'profile_completion' ] = 1;
            } else {
                $UserData[ 'profile_completion' ] = 0;
            }

            $UserData[ 'phone' ] = $request->phone;
            $UserData[ 'address' ] = $request->address_line_1.' '.$request->address_line_2;
            $UserData[ 'country' ] = $request->country;
            $UserData[ 'state' ] = $request->state;
            $UserData[ 'city' ] = $request->city;
            $UserData[ 'postcode' ] = $request->pincode;
            $UserData[ 'lat' ] = $request->lat;
            $UserData[ 'long' ] = $request->lng;

            $userUpdate = UserData::where( 'user_id', Auth::id() )->update( $UserData );
            flashSuccess( 'User Update Successfully' );
            return back();
        } catch ( \Throwable $th ) {
            flashError( $th->getMessage() );
            return back();
        }
    }

    public function createprofile( Request $request ) {
        $data[ 'login_user' ] = Auth::user();
        $data[ 'user' ] = User::with( 'userdata' )->findOrFail( auth()->user()->id );
        $data[ 'countries' ] = [];
        $data[ 'socials' ] = [];

        return view( 'users.createprofile', $data );
    }

    public function savedCandidates( Request $request ) {
        $data[ 'savedCandidates' ] = BookmarkUser::with('user')->has('user')->where('UID',Auth::id())->get();
        return view( 'users.savedCandidates',$data );
    }

    public function contact( Request $request ) {
        return view( 'users.contact' );
    }

    public function details( Request $request ) {
        return view( 'users.details' );
    }

    public function settings( Request $request ) {
        $data[ 'login_user' ] = Auth::user();
        $data[ 'user' ] = User::with( 'userdata' )->findOrFail( auth()->user()->id );
        return view( 'users.settings', $data );
    }

    public function overview( Request $request ) {
        $data[ 'userData' ] = UserData::with( 'cv_views', 'cv_views.candidate' )
        ->has( 'cv_views' )
        ->where( 'user_id', auth()->user()->id )
        ->first();
        $data[ 'saveProfile' ] = BookmarkUser::where('UID',Auth::id())->get();
        return view( 'users.overview', $data );
    }

    public function myprofile( Request $request ) {

        $data[ 'user' ] = User::with( 'userdata' )->findOrFail( auth()->user()->id );
        return view( 'users.myprofile', $data );
    }

    public function recentCandidates( Request $request ) {
        $data[ 'userData' ] = UserData::with( 'cv_views', 'cv_views.candidate', 'cv_views.usersdata', 'cv_views.usersdata.user' )
        ->has( 'cv_views' )
        ->where( 'user_id', auth()->user()->id )
        ->first();
        return view( 'users.recentCandidates', $data );
    }

    public function save_bookmark( Request $request ) {
        $GET_UID = BookmarkUser::where('CID',$request->CID)->where('UID',Auth::id())->first();
        if(empty($GET_UID)){
            $data[ 'CID' ] = $request->CID;
            $data[ 'UID' ] = Auth::id();
            BookmarkUser::create( $data );
        }

        $status['done'] = 1;
        return response()->json($status);
    }
}
