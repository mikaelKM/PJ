<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hire;
use Auth;
use File;
//use App\User;
class hiresController extends Controller
{
    public function order()
    {
        return view('hire');
    }
    public function post(request $request)
    {
        $this->validate(request(),[
            'project_name'=>'required',
            'project_type'=>'required',
            'framework'=>'required',
            'phone'=>'required',
            'mode'=>'required',
            'attachment'=>'mimes:jpeg,png,jpg,svg,docx,pdf,pptx,txt|max:4048',
            'description'=>'required',
        ]);
        $hires = new Hire([
            'project_name'    =>  $request->get('project_name'),
            'type'     =>  $request->get('project_type'),
            'framework'    =>  $request->get('framework'),
            'phone'    =>  $request->get('phone'),
            'mode'    =>  $request->get('mode'),
            'location'    =>  $request->get('location'),
            //'attachment'    =>  $request->get('attachment'),
            'description'    =>  $request->get('description'),
        ]);
        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move( storage_path('app/public/uploads/user/' . $filename ));
            $hires->attachment= $filename;
          };
         // $user = 'mike';

        $user = Auth::user()->name;
        $hires ->user= $user;

        $hires->save();
        return redirect('/')->with('success', 'Your Post has been uploaded successfuly');
    }
    public function jobs()
    {
        $hires = Hire::all()->toArray();
        return view('mikael.jobs', compact('hires'));
    }
    public function approve($id){
        //
    }
    public function delete($id){
        $order = Hire::find($id);
        $order->delete();
        return redirect('/jobs')->with('success', 'Successful Delection');
    }
}
