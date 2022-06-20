<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(User $id)
    {
        $profile =  DB::table('users')->get();
        /* dd($profile); */
        $section = "Edit Profile";
        return view('dashboard.profile.index', ['id' => $id], compact('section', 'profile'));
    }
}
