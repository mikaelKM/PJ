<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Session;
use Session;
use Validator;
use App\User;

class VerifyController extends Controller
{
  public function veryfy(){
      return view('account.veryfy');
  } 
  public function verification(Request $request){
    $validator = Validator::make($request->all(), [
        'code' => 'required',
    ]);
    
    if ( $validator->passes() ) {
        $code = $request->input( 'code' );
       
        $name = Session::get('user');

        $cod = DB::table('veryfies')->select('code')->where('name',$name)->value('code');
        

        if ($code == $cod){

            $the_user = DB::table('veryfies')->select( 'email', 'password', 'fname', 'sname', 'image')->where('name', $name)->get();
        
            foreach ($the_user as $the_){
            $email = $the_->email;
            $password = $the_->password;
            $fname = $the_->fname;
            $sname = $the_->sname;
            $image = $the_->image;
        }
  

            $user = User::create([
                
                'name'  => $name,
                'email'  => $email,
                'password'  => $password,
                'fname'  => $fname,
                'sname'  => $sname,
                'image'  => $image,
                
                ]);

                
                  $user->save();

                  DB::table('veryfies')->where('name', $name)->delete();
                  
             return redirect()->to('/log')->withSuccess([
                'message' => "Verification successful, now log in ",
            ]);
        }else{
            return back()->WithErrors([
                'message' => 'The code is different from what we sent',
            ]);
        }
//print $code;
    }
  }

}
