<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Category;
use App\Recipies;
use App\User;
use Auth;
use Hash;

class Admin extends Controller
{
    //
  public function index()
  { 
    return view('admin/index');
  }

  public function login(Request $request)
  {
    // Check email and password and redirect to the dashboard
    $email = (request()->email);
    $password = md5(request()->password);
    if (empty($email) or empty($password)) {
      $error = '<div class="alert alert-danger"> All fields are required </div>';
    } else {
      if (\App\Admin::where(['email' => $email])->count() > 0)
      {
        if(\App\Admin::where(['password' => $password])->count() > 0){
             $secure_id = md5(microtime());
            \App\Admin::where(['email' => $email])->update(['secure' => $secure_id]);
            session(['admin' => $secure_id]);
          }
          else
          {
            return redirect()->back()->with('message','Login fail! password is wrong');
          }
      }
      else
      {
        return redirect()->back()->with('message','Login Fail! email is wrong');
      }
      return view('admin/dashboard');
    }
    return view('admin/dashboard');
  }

	public function dashboard()
	{
		return view('admin/dashboard');
	}
  
  public function logout()
  {
    $data = session(['admin' => '']);
    return view('admin/index');
  }

  public function changepassword()
  {

    $password = md5(request()->opassword);
    $newpass = md5(request()->password);
    $confirmpass = md5(request()->cpassword);
    $pass = DB::table('admins')->where('password',$password)->count();
    echo $password;
    echo $pass;
    exit();
    if ($pass > 0) {
        if ($newpass == $confirmpass) {
          $id = session('admin');
          $updatepassword = DB::table('admins')->where('id',$id)->update(['password' => $newpass]);
           return back()->with('success','password change successfully');
       }
       else
       {
           return back()->with('success','new password and confirm passsword is not match');
       }       
    }
    else
    {
      return back()->with('success','old pass is wrong'); 
    }
  }
	public function addcategory()
	{
		return view('admin/addcategory');
	}

	public function categoryinsert(Request $request)
  {
    if($request->hasfile('cat_image'))
      {
          $image1 = $request->file('cat_image');
          $input = time().'.'.$image1->getClientOriginalExtension();
          $destinationPath = public_path('/category');
          $image1->move($destinationPath, $input);
      }

      $data = new Category();
      $data->cat_name = $request->cat_name; 
      $data->cat_image = $input;
      $data->save();
      $category = \App\Category::orderBy('cat_id','desc')->get();
      return redirect('category_view')->with('message','category added',["category" => $category]);
      // return back()->with('success','Category add successfully');
  }

	public function categoryview()
	{
		$category = \App\Category::orderby('cat_id','desc')->get();
		return view('admin/category_view')->with(compact('category'));
	}

	public function updatecategory(Request $request,$cat_id)
	{
		$category = \App\Category::orderby('cat_id','asc')->get();
		if($request->hasfile('cat_image'))
        {
            $image1 = $request->file('cat_image');
            $input = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/category');
            $image1->move($destinationPath, $input);
        }
      $data['cat_name'] = $request->cat_name;

		  $data['cat_image'] = $input;
		\App\Category::where(["cat_id" => $cat_id])->update($data);
    return redirect()->back()->with('category', $category);

		// return view('admin/category_view')->with(compact('category'));
		
	}

	public function deletecategory($cat_id)
  {
		$category = \App\Category::orderby('cat_id','asc')->get();
		\App\Category::where('cat_id',$cat_id)->delete();
    return redirect()->back()->with('category', $category); 
  }

  public function statuscategory($cat_id)
  {
		$category = \App\Category::orderby('cat_id','asc')->get();
    	$first = Category::where('cat_id',$cat_id)->first();
    	if($first->cat_status == 0)
    	{
    		\App\Category::where('cat_id',$cat_id)->update(["cat_status" => '1']);
    	}
    	else
    	{
    		\App\Category::where('cat_id',$cat_id)->update(["cat_status" =>  '0']);
    	} 
      return redirect()->back()->with('success','category status change Succes');
  }

    // Recipies area
    public function addrecipies()
    {
    	$category = Category::get();
    	return view('admin/addrecipies')->with(compact('category'));
    }

    public function recipiesinsert(Request $request)
    {
        if($request->hasfile('r_image'))
        {
            $image1 = $request->file('r_image');
            $input = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/recipies');
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
      $recipies = Recipies::join('categories','recipies.cat_id','=','categories.cat_id')->get();
      return view('admin/recipies_view')->with(compact('recipies','category','success','recipies add succesfully'));
    }

    public function recipiesview()
    {
    	$recipies = Recipies::orderBy('r_id','desc')->join('categories','recipies.cat_id','=','categories.cat_id')->get();
      
      $category = Category::get();
		return view('admin/recipies_view')->with(compact('recipies','category'));
    }

    public function recipiesstatus($r_id)
    {	
    	$status = DB::table('recipies')->where('r_id',$r_id)->first();
      $recipies = Recipies::join('categories','recipies.cat_id','=','categories.cat_id')->get();
      $category = Category::get();
    	if($status->r_status == 0)
    	{
    		\App\Recipies::where('r_id',$r_id)->update(["r_status" => '1']);
    	}
    	else
    	{
    		\App\Recipies::where('r_id',$r_id)->update(["r_status" => '0']);
    	}
      return redirect()->back()->with('success','status change your recipie');
    }

   	public function recipiesedit($r_id,Request $request)
   	{
    	$recipies = Recipies::join('categories','recipies.cat_id','=','categories.cat_id')->get();
      $category = Category::get();
        if($request->hasfile('r_image'))
        {
            $image1 = $request->file('r_image');
            $input = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/recipies');
            $image1->move($destinationPath, $input);
        }
        $data['r_name'] = $request->r_name; 
      	$data['ind'] = $request->ind; 
        $data['timing'] = $request->timing; 
        $data['serve'] = $request->serve; 

      	$data['r_desc'] = $request->r_desc;
      	$data['cat_id'] = (int) $request->cat_id;
        $data['r_image'] = $input;
        \App\Recipies::where('r_id',$r_id)->update($data);
        return redirect()->back()->with('category', $category,'recipies',$recipies);

        // return view('admin/recipies_view')->with(compact('recipies','category'));
   	}

   	public function recipiesdelete($r_id)
   	{
      $recipies = Recipies::join('categories','recipies.cat_id','=','categories.cat_id')->get();
      $category = Category::get();
      \App\Recipies::where('r_id',$r_id)->delete();
      return redirect()->back()->with('rcipies', $recipies, 'catgeory', $category,'message','recipies delete succesfully');
      // return view('admin/recipies_view')->with(compact('recipies','category'));
   	}   	

   	public function user_view()
   	{
   		$user = \App\User::orderBy('id','desc')->get();
   		return view('admin/user_view')->with(compact('user'));
   	}

   	public function userstatus($id)
   	{
      $user = \App\User::orderBy('id','desc')->get();
   		$status = User::where('id',$id)->first();
   		if($status->status == 0)
   		{
   			\App\User::where('id',$id)->update(["status" => '1']);
   		}
   		else
   		{
   			\App\User::where('id',$id)->update(["status" => '0' ]);
   		}
   		return redirect()->back()->with('success','user status change success');
   	}

   	public function userdelete($id)
   	{
      $user = \App\User::orderBy('id','desc')->get();
   		\App\User::where('id',$id)->delete();
      return redirect()->back()->with('error','user deleted');
   	}

    public function User_Report(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $User_r = \App\Category::where('created_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/USer_Report')->with(compact('User_r'));
    }

    public function Category_Report(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $r_cat = \App\Category::where('created_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/Category_Report')->with(compact('r_cat'));
    }

    public function Recipie_Report(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $r_recipi = \App\Recipies::where('cretaed_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/Recipie_Report')->with(compact('r_recipi'));
    }

    public function cat_r(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $r_cat = \App\Category::where('created_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/Category_Report')->with(compact('r_cat'));
    }

    public function r_recipi(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $r_recipi = \App\Recipies::where('cretaed_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/Recipie_Report')->with(compact('r_recipi'));
    }

     public function User_r(Request $request)
    {
      $from = $request->from;
      $to = $request->to;
      $User_r = \App\User::where('created_at',$from)->orWhere('updated_at',$to)->get();
      return view('admin/USer_Report')->with(compact('User_r'));
    }
}

