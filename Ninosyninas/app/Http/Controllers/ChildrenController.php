<?php

namespace App\Http\Controllers;

use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index()
    {     
        $children=children::ninos('');
        return view('ninos.index')->with('children',$children);
    }

    public function recuperarNinos(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $users = Children::ninos($query);
                return view('ninos.data.data_ninos', compact('children'))->render();
        }
    }
}
