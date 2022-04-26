<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\UrlTrait;


class AuthController extends Controller
{
    use UrlTrait;

    // ============== users login / register / reset password / management ==================================================
    public function logout() 
    {
        session()->flush();
        return redirect(route('login'))->with('success', 'You has been logout.');
    }
     
    public function login() 
    {
        // dd(session()->all());
        if(!empty(session()->get('status'))) {
           return redirect('/');
        }
        return view('pages.auth.login');
    }

    public function proses_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        
        // Step 1 cek form 
        if(isset($username) || isset($password)) 
        {
            $results = DB::select('select * from tbl_user where username = :username and password = :password', [
                    'username' => $username,
                    'password' => $password,
                ]);

            // $api_user_internal = Http::post($this->url_dynamic().'masdex/user/login', [
            //     'username' => $username,
            //     'password' => $password,
            // ]);

            // Step 2 cek data user terdaftar atau tidak terdaftar di dtabase
            if($results != NULL)
            {
                $role = $results[0]->is_admin;
                // $token = $decode_login['token'];
                $status = 'loged in';
                $userid = $results[0]->id;
                $nama_lengkap = $results[0]->fullname;
                $username = $results[0]->username;
                
                session()->put('role', $role);
                session()->put('status', $status);
                // session()->put('token', $token);
                session()->put('fullname', $nama_lengkap);
                session()->put('userid', $userid);
                session()->put('username', $username);
                
                // Step 3 cek role
                if($role == 1) // untuk admin
                {
                    return redirect('/');
                }
                else // untuk user
                {
                    return redirect('/');
                }

            }
            else
            {
                session()->flash('error', 'Account not registred !');
                return redirect()->back();
            }
        }
        else
        {
            session()->flash('error', 'Username and password can`t empty!');
            return redirect()->back();
        }
    }

    public function proses_register(Request $request)
    {
        $username = $request->input('username');
        
        // Step 1 cek user
            if(isset($username) || isset($password)) 
            {
                if($request->input('password') === $request->input('confirmation_password'))
                {
                    $results = DB::select('select * from tbl_user where username = :username', [
                        'username' => $username
                    ]);


                    // Step 2 cek data user terdaftar atau tidak terdaftar di dtabase
                    if($results == NULL)
                    {
                        $role = $request->input('users');
                        $username = $request->input('username');
                        $fullname = $request->input('fullname');
                        $password = $request->input('password');
                        $phone = $request->input('phone');

                        $data=array('username'=>$username,'password'=>$password,'fullname'=>$fullname,'is_admin'=>$role, 'phone'=>$phone);
                        DB::table('tbl_user')->insert($data);
                       
                        return redirect()->route('login')
                            ->with('success', 'Pendaftaran User Berhasil !');
                    }
                    else
                    {
                        session()->flash('error', 'Username sudah digunakan !');
                        return redirect()->back();
                    }
                }
                else
                {
                    session()->flash('error', 'Kombinasi Password dan konfirmasi Password tidak cocok !');
                        return redirect()->back();
                }
            }
            else
            {
                session()->flash('error', 'Username and password can`t empty!');
                return redirect()->back();
            }
    }

    public function forgot_password() 
    {
        return view('pages.auth.forgot_password');
    }
    public function registration() 
    {
        return view('pages.auth.register');
    }
    public function filldata() 
    {
        return view('pages.auth.filldata');
    }


}