<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rating;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function fulldetail($id)
    {   
        $fulldetail = \App\house::where('h_id',$id)->first();
        return view('/fullhouse',compact('fulldetail'));

    }

    public function about()
    {
        return view('about');
    }

    public function price_filter($price)
    {
        $filter  = DB::table('house')->where('h_price',$price)->get();
        echo $filter;
        exit();
        return view('/filter',compact('filter'));
    }

    public function gallery()
    {
        $pict = DB::table('house')->orderBy('h_id','desc')->limit('4')->get();
        return view('gallery',compact('pict'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function rating(Request $request)
    {
        $rating = New Rating();
        $rating->u_id = $request->u_id;
        $rating->h_id = $request->h_id;
        $rating->rat_value = $request->rat_value;
        exit();
        $rating->save();
    }
}
