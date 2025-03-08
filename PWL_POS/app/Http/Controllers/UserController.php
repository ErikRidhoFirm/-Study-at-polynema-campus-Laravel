<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //$data = [
            //'level_id' => 2,
            //'username' => 'manager_tiga',
            //'nama' => 'Manager 3',
            //'password' => Hash::make('12345')
        //];
        //UserModel::create($data);

        //$user = UserModel::where('level_id',2)->first();
        //$user = UserModel::firstWhere('level_id',5);

        //$user = UserModel::findOr(1,['username','nama'], function(){
            //abort(404);
        //});
        //$user = UserModel::findOrFail(1);
        $user = UserModel::where('username', 'admin')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}
