<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UsersRequest;
use App\file;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Role;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comp=Auth::user()->company;
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        $users = User::Where(function ($query) use($comp) {
            $query->where('company', '=', $comp);
        })->get();
        //return $users;
        return view('admin.users.index', compact('users', 'comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $comp=Auth::user()->company;
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        return view('admin.users.create', compact('comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
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
        $input = $request->all();
        $file = "testing.25885";
        $input['file_id'] = $file;

        $input['password'] = bcrypt($request->password);
        
        User::create($input);
        return redirect('/admin/users')->with('success', 'User added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comp=Auth::user()->company;

        $user = User::findOrFail($id);
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        return view('admin.users.edit', compact('user', 'comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
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
        $user = User::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('file_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = file::create(['path'=>$name]);

            $input['file_id'] = $photo->id;
        }
        $input['password'] = bcrypt($request->password);
        $user->update($input);
        
        return redirect('/admin/users');

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
        $user = User::findOrFail($id);
         $user->delete();

        return redirect('/admin/users')->with('success', 'User deleted successfully');
    }

    

    public function show($id)
    {
        //
        $comp=Auth::User()->company;
        $name=Auth::User()->name;
        $role=Auth::User()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;

        $user = User::findOrFail($id);
        
        return view('admin.users.profile', compact('user', 'comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
    }
    
}
