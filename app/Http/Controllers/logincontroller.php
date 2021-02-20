<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    protected function login(Request $request){


    $user = User::where('name',$request->email)->first();
        if ($user) {
            $passIn = $request->password;
            $hashedPassIn = hash ("sha256",$passIn, FALSE);
            
            //dd($hashedPassIn);
            
            $hashedPass =$user->password;
            if ($hashedPassIn == $hashedPass) {
                Auth::loginUsingId($user->id,true);
                return view('/home');

            }else{
                return back()
                ->with('error','Verifica tus Datos!!')
                ->withInput(request(['email']));
            }
        }else{
            return back()
                ->with('error','Verifica tus Datos!!')
                ->withInput(request(['email']));
        }
                
        
        } 


    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
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
