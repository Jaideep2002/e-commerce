<?php




namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    // function index(){
    //     return view('front.login');
    // }
    // function checklogin(Request $request){
    //     $this->validate($request,[
    //         "adminid"   => "required|string",
    //         'password' => [
    //             'required',
    //             'string',
    //             'min:8',             // must be at least 10 characters in length
    //             'regex:/[a-z]/',      // must contain at least one lowercase letter
    //             'regex:/[A-Z]/',      // must contain at least one uppercase letter
    //             'regex:/[0-9]/',      // must contain at least one digit
    //             'regex:/[@$!%*#?&]/', // must contain a special character
    //         ],
    //     ]);
    //     $user_data=array(
    //         'adminid'=>$request->get("adminid"),
    //         'password'=>$request->get("password")
    //     );
    //     if (Auth::attempt($user_data)) {
    //         return redirect('front.main/successlogin');
    //     } else {
    //         return back()->with('error','Wrong Login Details');
    //     }
        
    // }
    // function successlogin(){
    //     return view("front.successlogin");
    // }
    // function logout(){
    //     Auth::logout();
    //     return redirect("front.main");
    // }
    

    function home()
    {
        $petani = DB::table('electronics')->get();
        $boy = DB::table('mens')->get();
        $hat = DB::table('womens')->get();
        $shoes = DB::table('sneakers')->get();
        $back = DB::table('backgrounds')->get();
        return view('front.home', ['petani' => $petani ,'hat' => $hat, 'boy' => $boy , 'shoes' => $shoes , 'back' => $back]);
    }
    function login()
    {
     return view('front.login');
    }
    function dash()
    {
        $user = User::select("name")
        ->where("email", "=", Auth::user()->email)
        ->get();
        return view('admin.master', ['user' => $user]);
    }
    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('home/login/dashboard');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }
    function logout()
    {
     Auth::logout();
     return redirect('/home');
    }

    function chart(){
        return view('admin.chartjs');
    }
    function inline(){
        return view('admin.inline');
    }
    function datatable(){
        return view('admin.data');
    }
    function calendar(){
        return view('admin.calendar');
    }
    function testimon(){
        return view('front.testimonials');
    }
    function terms(){
        return view('front.terms');
    }
    function contact(){
        return view('front.contact');
    }
    function aboutus(){
        return view('front.about');
    }

    function paymentgate(){
        return view("front.frontpayment");
    }
    function paymentgate1(){
        return view("front.Payment");
    }
}

