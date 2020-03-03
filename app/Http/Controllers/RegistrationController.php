<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use App\Veryfy;
use Twilio\Rest\Client;
use Session;
//use App\Http\Controllers\Session;
use Validator;
use File;
//use Image;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('account.register');
    }

    public function verification($number, $message)
   {
        $sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );
            //$message = rand(100000, 900000);
            
                $client->messages->create(
                    $number,
                    [
                        'from' => env( 'TWILIO_FROM' ),
                        'body' => $message,
                    ]
                    );
                    //$user = User::find($user_id);
                    //$user->code = $message;
                   return true;
                    
     }

               
        
    
    
    public function store(request $request)
    {
        $this->validate(request(),[
            'fname' => 'required',
            'sname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:4048',
            'phone' => 'required|integer',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           // 'password' => 'required|confirmed',

         ]);

        $user = Veryfy::create(request(['name', 'email', 'password','fname', 'sname','image','phone','code',]));
         //$user = User::create(request(['name', 'email', 'password','fname', 'sname','image',]));

        $number=$request->get('phone');

        $message = rand(100000, 900000);
        $user ->code = $message;

         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( storage_path('app/public/uploads/user/' . $filename ));
           
            $user ->image = $filename;
            
           //$user->save();
          }
    



          if (RegistrationController::verification($number, $message)==true){
            
            
             $user->save();

             $name = $request->get('name');
             Session::put('user', $name);

             return redirect()->to('/verify')->withSuccess([
                'message' => "Verification code sent to you, please input it",
            ]);
             }else{
                
     return back()->WithErrors([
    'message' => 'Sending the verification code has failed.',
]);
     }
    
        




          /// sms verification
          
             // Your Account SID and Auth Token from twilio.com/console
             

   
         

         //auth()->login($user);
        
    
    }}