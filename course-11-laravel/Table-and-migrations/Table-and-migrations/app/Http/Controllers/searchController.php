<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    //

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        // $ser = $request->name;
        $in_search = $request->input('in_search');
        return view('output', ['in_search' => $in_search]);
    }
}
