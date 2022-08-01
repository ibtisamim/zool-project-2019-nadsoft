<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class Dashboard_cont extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){

        //dd($user->hasRole('admin')); //will return true, if user has role
      //  dd($user->givePermissionsTo('edit-users','create-tasks')); // will return permission, if not null
     //--   dd($user->can('create-tasks')); // will return true, if user has permissio
        if (Auth::check()) {
            $user = $request->user();
            if($user->hasRole('admin')) {
                $data['name'] = $user->name;
                return view('admin.index', $data);
            }else{
                redirect('/login');
            }
        }else{
            redirect('/login');
        }
    }
}
