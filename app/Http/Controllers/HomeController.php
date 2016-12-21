<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Offers;
use App\Teethservices;
use App\Laserskinservices;
use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
//use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::get();
    }

    public function getUser($userId){
        $user = User::find($userId);
        // $roleId = Role::where('name', $role)->first();
        // $user->roles()->attach($roleId);
        return $user;

    }
    public function attachUserRole($userId, $role){
        $user = User::find($userId); //1
        $roleId = Role::where('name', $role)->first();
        $user->roles()->attach($roleId);
        return $user;

    }

    //user auth
    public function userAuth($userName, $userPassword){
        $user = User::select('user_name')->where('user_name' , $userName)->first();
        if ($user != null) {
            $userPassword = User::select('password')->where('password' , $userPassword)->first();
            if ($userPassword != null) {
                $userData = User::all()->where('user_name' , $userName)->first();
                return $userData;
            }
         else{
            return "The password you entered is wrong";
         }   
        }
        else{
            return "The username doesn't match our records";
        }
    }

  //  user register
    public function userReg($firstName, $lastName, $userName, $userEmail, $userMobile, $userPassword){
        DB::table('users')->insert([
            ['first_name' => $firstName,
             'last_name'  => $lastName,
             'user_name'  => $userName,
             'email'      => $userEmail,
             'mobile'     => $userMobile,            
             'password'   => $userPassword
             ]
            ]);


        // $user = User::select('user_name')->where('user_name' , $userName)->first();
        // if ($user != null) {
        //     $userPassword = User::select('password')->where('password' , $userPassword)->first();
        //     if ($userPassword != null) {
        //         $userdata = User::all()->where('name' , $userName)->first();
        //         return $userdata;
        //     }
        //  else{
        //     return "The password you entered is wrong";
        //  }   
        // }
        // else{
        //     return "The username doesn't match our records";
        // }
    }

    public function doctors(){
        $doctorData = Doctor::all();
        return $doctorData;
    }
    public function offers(){
        $offersData = Offers::all();
        return $offersData;
    }
    public function teethServices(){
        $teethData = Teethservices::all();
        return $teethData;
    }
    public function laserSkinServices(){
        $laserSkinData = laserSkinServices::all();
        return $laserSkinData;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
