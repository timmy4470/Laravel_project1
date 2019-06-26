<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groups;
use App\User;
class ReportController extends Controller
{
    //
    public function report()
    {
        $user_groups = User::with('relatedGroups')->get();
        //$user_groups = $users ->relatedGroups;
        return view('report', compact('user_groups'));
    }
}
