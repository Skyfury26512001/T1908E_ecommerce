<?php

namespace App\Http\Controllers;

use App\Account;
use App\City;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('login_register',compact('cities'));
    }


    public function registerProgress(RegisterRequest $request){
//        dd($request);
//        $request->validate([
//            'email' => 'required',
//            'password' => 'required',
//            'firstName' => 'required',
//            'lastName' => 'required',
//            'address' => 'required',
//            'city' => 'required',
//            'phone' => 'required',
//            'term' => 'required',
//        ]);
//        $request->validate();
        $account = new Account();
        $account->email = $request->email;
        $account->passwordHash = md5($request->password.$request->firstName);
        $account->salt = $request->firstName;
        $account->fullName = $request->lastName.' '.$request->firstName;
        $account->phoneNumber = $request->phone;
        $account->email_verified = 'unverified';
        $account->status = 1;
        $account->city_id = $request->city;
        $account->sex = $request->sex;
        $account->birthDate = $request->birthDate ;

        $account->roles();

        $account->save();
        $currentId = $account->id;
        $account->roles()->sync(1);
//        dd($account->roles()->sync(1)->toSql());
//        dd($account);
        return redirect('/login');
    }

    public function loginProgress(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
//        dd($request);
        $condition = ['email' => $request->email, 'status' => "1",];
//        dd($condition);
        $account = Account::where($condition)->get()->first();
//        dd($account->roles);
//        dd($request->password);
        if (isset($account)){
            $passwordHash = $account->passwordHash;
            $salt = $account->salt;
//            dd(md5($request->password.$salt));
//            dd($passwordHash);
            if ($passwordHash == md5($request->password.$salt)){
                session_start();
                $account_session = $request->session();
                $account['roles']= $account->roles;
//                dd($account['roles']);
//                dd($account);
                $account_session->put('current_account', $account);
//                dd($account_session->get('current_account'));
              return redirect('/admin');
            }
        }else{
            dd("your account't doesn't exist");
        }
    }

    public function logOut(Request $request){

        Session::forget('current_account');

        return redirect('/');
    }
}
