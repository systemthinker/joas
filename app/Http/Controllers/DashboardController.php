<?php

namespace App\Http\Controllers;
include('StringClass.blade.php');


use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class DashboardController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dashboardString = new \stdClass();

        $user_id = auth()->id();
        if($message = Route::has('login') && Auth::check()){
            $user = Auth::user();
                $userName = $user->name;
            $message= 'Welkom op de pagina '. strtok($userName," ")."!";
            $userRoles = $user->roles;

//            foreach($userRoles as $role){
//                echo $role;
//            }

        }

        $user = User::findOrFail($user_id);

        forEach($user->roles as $role){
           $ondernemer = $role->ondernemer;
           $soortWoning = $role->soortwoning;
        }

        return view('dashboard.index',compact('dashboardString','message','ondernemer','soortWoning'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "hi";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->id();

        $role = Role::whereUserId($user_id);


        $role->update($request->all());






        return redirect('/dashboard');
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
