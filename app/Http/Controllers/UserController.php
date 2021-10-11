<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function index (Request $request) {
        return 'Hello, from lumen! We got your request from endpoint: ' . $request->path();
        }
        


    public function tambahuser()
    {
        User::create([
            'name' => 'galang',
            'email' => 'galangfanoja@gmail.com',
            'password' => '12345',
        ]);
        return 'berhasil';
    }
    //

    public function hello()
    {
        $data['status'] = 'Success';
        $data['message'] = 'Hello, from lumen!';
        return (new Response ($data, 201))
        ->header('Content-Type', 'application/json');
    }

    public function update($id, Request $request)
 {
        $User = User::where('id', $id)->update([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')

        ]);
        return response()->json($User, 200);

 
}
}
