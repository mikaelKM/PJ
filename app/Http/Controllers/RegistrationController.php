<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use File;
//use Image;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('account.register');
    }
    public function store(request $request)
    {
        $this->validate(request(),[
            'fname' => 'required',
            'sname' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:4048',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           // 'password' => 'required|confirmed',

         ]);

         $user = User::create(request(['name', 'email', 'password','fname', 'sname','image',]));

         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( storage_path('app/public/uploads/user/' . $filename ));
           // $user = ;
            $user->image = $filename;
            $user->save();
          };
         //auth()->login($user);
         return redirect()->to('/log');
    }
}
