<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    /**
     * create for new product entry
     * 
     * @param 
     * @return voide
     */
    public function create()
    {
        DB::table('product')->insert([
            'name' => 'asus',
            'description' => 'This is a computer',
            'price' => 120
        ]);
    }
    /**
     * 
     * @param
     * @return
     */
    public function listProduct(){
        $product=DB::select('select * from product');
        return view('output',['product',$product]);
    }
}
