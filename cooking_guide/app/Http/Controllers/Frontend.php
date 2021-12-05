<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Validator;
use Auth;
use Illuminate\Session;
use \App\Recipies;
use \App\Category;

// use AuthenticatesUsers;
// use app\Category;
use \App\User;

class Frontend extends Controller {

	public function index()
	{
		$category = \App\Category::orderBy('cat_id','desc')->where('cat_status','1')->get();
		$recipi = \App\Recipies::orderBy('r_id','desc')->where('r_status','1')->limit(8)->get();
		// $recipies = \App\Recipies::where('cat_id',$id)->get();
		// return view('index')->with(compact('recipies'));
		return view('index')->with(compact('recipi','category'));
	}

	public function dishes($r_id)
	{
		$category = \App\Category::where('cat_status','1')->orderBy('cat_id','desc')->get();
		$dishes = DB::table('recipies')->where('r_id',$r_id)->first();
		return view('dishes')->with(compact('dishes','category'));
	}

	public function login(Request $request)
	{
		$this->validate($request, [
			'email' => 'required||email',
			'password' => 'required||alphaNum||min::7'
		]);
 		$email = $request->email;
        $password = md5($request->password);
            
        if (empty($email) or empty($password)) {
            $error = '<div class="alert alert-danger"> All fields are required </div>';
        } else {
            if (\App\User::where(['email' => $email, 'password' => $password])->count() > 0) {
               // Generate a new secure ID for this session and redirect to dashboard
                $secure_id = md5(microtime());
                \App\User::where(['email' => $email])->update(['sid' => $secure_id]);
                session(['user' => $secure_id]);
                return redirect()->back()->with('success','login suucessfull');
            } else {
                return redirect()->back()->with('success','login Fail! check the email and password');
            }
        }
	}

	public function log()
	{

		session(['user' => '']);
		// $category = DB::table('categories')->orderBy('cat_id','desc')->where('cat_status','1')->get();
		// $recipi = DB::table('recipies')->orderBy('r_id','desc')->where('r_status','1')->limit('8')->get();
		// return view('index')->with(compact('category','recipi'));
		return back();
	}

	public function register(Request $request)
	{
		$data = New User();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mono'] = $request->mono;
        $data['gender'] = $request->gender;
        $data['sid'] = md5(microtime() . uniqid());
        $data['password'] = md5($request->password);
        $data->save();
        $category = \App\Category::orderBy('cat_id','desc')->where('cat_status','1')->get();
        $recipi = \App\Recipies::orderBy('r_id','desc')->where('r_status','1')->limit(8)->get();
        return view('/index')->with(compact('category','recipi'));
	}

	public function editprofile($edit)
	{
		$edituser = \App\User::find($edit);
		$edituser->name = request()->name;
		$edituser->email = request()->email;
		$edituser->mono = request()->mono;
		$edituser->gender = request()->gender;
		$edituser->save();
		return redirect()->back()->with("success","profile edit");
	}

	public function searchcategory($id)
	{
		$category = \App\Category::orderBy('cat_id','desc')->where('cat_status','1')->get();
		$recipi = \App\Recipies::where('cat_id',$id)->get();
		return view('menu')->with(compact('recipi','category'));
	}

	public function changepassword()
	{
		$password = md5(request()->oldpassword);
        $newpass = md5(request()->password);
        $confirmpass = md5(request()->confirmpassword);
        $count = \App\User::where('password',$password)->count();
        if($count> 0)
        {
        	if($newpass == $confirmpass)
        	{
        		$log = session('user');
        		$changepass = \App\User::where('sid',$log)->update(['password' => $newpass]);
        		return back()->with('success','pasword change sucessful');
        	}
        	else
        	{
        		echo "confirm password and new password is wrong";
        	}
        }
        else
        {
        	return back()->with('error','old password enter corrent ed');
        }
	}

	public function reci_insert(Request $request)
	{
		if(request()->hasfile('r_image'))
        {
            $image1 = $request->file('r_image');
            $input = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/recipie');
            $image1->move($destinationPath, $input);
        }
    	$data = New Recipies();
    	$data->r_name = $request->r_name; 
        $data->r_desc = $request->r_desc;
        $data->ind = $request->ind;
        $data->serve = $request->serve;
    	$data->timing = $request->timing;
    	$data->cat_id = (int) $request->cat_id;
        $data->r_image = $input;
        $data->save();
        $category = Category::get();
        $recipi = Recipies::join('categories','recipies.cat_id','=','categories.cat_id')->get();
    	// return redirect()->back()->with(compact('category','success','recipies add succesfully'));
        return view('/index')->with(compact('category','recipi'));

	}
}