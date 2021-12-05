<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use App\House;

class Admin extends Controller
{
    //
    public function index()
    {
    	return view('admin/dashboard');
    }

    public function addcategory()
    {
    	return view('admin/addcategory');
    }

    public function insertcategory(Request $request)
    {
    	$this->validate($request,[
        'cat_name'=>'required|max:255',
        'cat_image'=>'required',
    	]);

    	$insert = new Category;
    	$insert->cat_name = $request->cat_name;
    	if($request->hasfile('cat_image'))
      	{
          $image1 = $request->file('cat_image');
          $input = time().'.'.$image1->getClientOriginalExtension();
          $destinationPath = public_path('/category');
          $image1->move($destinationPath, $input);
      	}
    	$insert->cat_image = $input;
    	$insert->save();
        $data = \App\category::orderBy('cat_id','desc')->get();
    	\Session::flash('flash_message','successfully saved.');
    	return Redirect::to('admin/viewcategory')->with('flash_message','successfully saved.','$data',$data);
    	// return view('admin/addcategory');
    }

    public function viewcategory()
    {
        $data = \App\category::orderBy('cat_id','desc')->get();
        return view('admin/viewCategory',compact('data'));
    }

    public function addhouse()
    {

    	return view('admin/addhouse');
    }

    public function inserthouse(Request $request)
    {

        $this->validate($request,[
        'h_number'=>'required|max:255',
        // 'h_image' => 'required|mimes:jpeg,jpg,png|max:8092',
        'h_rooms' => 'required|max:255',
        'h_city' => 'required|max:255',
        'h_area' => 'required|max:255',
        'h_details' => 'required|max:245',
        'h_price' => 'required|max:250',
        'h_video' => 'required|mimes:mpeg,ogg,mp4,webm,flv,avi,wmv,|max:1007777',
        ]);
        $house = New House;
        $house->h_number = $request->h_number;
        $house->h_rooms = $request->h_rooms;
        $house->h_city = $request->h_city;
        $house->h_area = $request->h_area;
        $details = $request->h_details;
        $house->h_details = json_encode($details);
        $house->h_price = $request->h_price;
        $house->h_image = "";
        if($request->hasfile('h_image'))
        {
            foreach($request->file('h_image') as $img)
            {
                $input1 = $img->getClientOriginalName();
                $destinationPath = public_path('/house');
                $img->move($destinationPath, $input1);  
                $input2[] = $input1;
            }
            $input3 = json_encode($input2);

        }
        if($request->file('h_video'))
        {
            $mp4 = $request->h_video;
            $video = $mp4->getClientOriginalName();
            $mp4->move(public_path().'/house',$video);
        }
        $house->h_image = $input3;
        $house->h_video = $video;
        $house->save();
        \Session::flash('flash_message','successfully saved.');
        return view('/admin/viewhouse')->with('flash-message','data inserted in succesfully');
    }
}
