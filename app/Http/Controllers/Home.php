<?php

namespace App\Http\Controllers;

// use App\Mail\SendMail as MailSendMail;

use App\Mail\SendMailRegister;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Test;
use Illuminate\Support\Facades\Mail;
// use IlluminateSupport\Mail\SendMail;
use App\Users\Users as UsersUsers;
use PhpParser\Node\Expr\New_;

//  use App\Support\Controllers\Home;

class Home extends Controller
{
    public function show()
    {
        return view('auth.add');
    }
    // public function store(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         $validator = Validator::make($request->all(), [
    //             'name' => 'required|min:4|max:30|alpha',
    //             'email' => 'required|email',
    //             'phone'=>'required|numeric|min:10',
    //             'password'=>'required|confirmed|min:5|max:20',
    //         ]);
    //     }
    //     if($validator->fails()){
    //         return redirect()->back()
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     $user = DB::table('users')->where('email',$request->name)->first();
    //     if(!$user){
    //        $newUser = new User();
    //        $newUser->name = $request->name;
    //        $newUser->email = $request->email;
    //        $newUser->password = $request->password;
    //        $newUser->phone = $request->phone;
    //        $newUser->save();
    //        return redirect()->route('auth.show')->with('message','ban da luu ok');

    //     }
    //     else{
    //         return redirect()->route('auth.showlogin')->with('message','ban da tao ok');
    //     }
    // }
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->input("name");
            $email = $request->input("email");
            $phone = $request->input("phone");
            $password = $request->input("password");
            $test = new Test();
            $test->name=$name;
            $test->email = $email;
            $test->phone = $phone;
            $test->password = $password;
            $test->save();
        }
        return "them thanh cong";
     
    }
    public function sendemailDemo(Request $request){
        $this->validate($request,[
            'name'  => 'requied',
            'email'  => 'requied|email',
            'phone'  => 'requied',
            'message' => 'requied',
        ]);
        $data = array(
            'name'   => $request ->name,
            'message' => $request ->message,
        );
        Mail ::to('ngogiala98@gmail.com')->send(new SendMailRegister($data));
        return back()->with('success','thank');
    }
        
        
    
}
