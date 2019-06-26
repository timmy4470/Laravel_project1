<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groups;
use App\User;
use Auth;
class GroupController extends Controller
{
    //
    public function index(){
 
        $groups = Groups::all();
 
        return view('groups',compact('groups'));
    }
    public function create(){
        return view('group_registration');
    }
    public function storeGroup(){
 
        $groups = new Groups();
        $gn = request('group_name');
        $groups->group_name.insert([$gn]) ;
        $groups->save();
 
        return redirect('/group_reg');
 
    }

    public function assignGroup(Request $request){
        $id = Auth::user()->id;
        $groups = $request->input('groups');
        $user = User::find($id);
        
        $user->relatedGroups()->sync($groups,  false); 
        
        return redirect('/home');
     }
}
