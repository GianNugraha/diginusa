<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;
use App\Http\Traits\UrlTrait;

class UserController extends Controller
{
    use UrlTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $role = session()->get('role');
        $token = session()->get('token');

        if($role != 'Disnav') {
            $users = Http::get($this->url_dynamic() . 'masdex/user_stakeholder/profile/' . $id);
            $users = json_decode($users->body());
            $users = $users->data['1']['0']->rows;
            if($users == null) {
                return redirect()->back();
            }
            $users = $users['0'];
            return view('pages.users.profile', compact('users'));
        }
        
        $users = Http::withToken($token)->get($this->url_dynamic() . 'masdex/user/' . $id);
        $users = json_decode($users->body());
        $users = $users->data['0']['0']->rows;
        $users = $users['0'];
        
        return view('pages.users.profile', compact('users'));

        dd($users);
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
