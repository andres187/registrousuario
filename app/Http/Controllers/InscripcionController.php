<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();//dd($data);
        return view('users',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $user = [
          'name' => $request->name,
          'email' => $request->email,
          'identificacion' => $request->identificacion,
          'tipo' => $request->tipo,
          'ocupacion' => $request->ocupacion,
          'password' => Hash::make($request->name),
        ];

        $save = User::insert($user);
        if($save){
          return redirect('users');
        }else{
          return redirect()->back()->withInput();
        }
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
        $data['user'] = User::find($id);//dd($data);
        return view('crear',$data);
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
      if ($request->has('password')) {
        $password = $request->password;
        $user = [
          'name' => $request->name,
          'email' => $request->email,
          'identificacion' => $request->identificacion,
          'tipo' => $request->tipo,
          'ocupacion' => $request->ocupacion,
          'password' => $password,
        ];
      }else{
        $user = [
          'name' => $request->name,
          'email' => $request->email,
          'identificacion' => $request->identificacion,
          'tipo' => $request->tipo,
          'ocupacion' => $request->ocupacion,
        ];

      }

        $update = User::find($id)->update($user);
        if($update){
          return redirect('users');
        }else{
          return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      if($user){
        $user->destroy($id);
        return redirect('users');
      }else{
        return redirect()->back()->withInput();
      }
    }
}
