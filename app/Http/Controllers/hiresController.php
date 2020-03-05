<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Delete;
use App\Hire;
use App\approved_job;
use Illuminate\Support\Facades\DB;
use Auth;
use File;
//use App\User;
class hiresController extends Controller
{
    public function order()
    {
        //placing an order to hire developer for the project
        return view('hire');
    }

    public function post(request $request)
    {
        //uploading the project to be worked on
        $this->validate(request(),[
            'project_name'=>'required',
            'project_type'=>'required',
            'framework'=>'required',
            'phone'=>'required',
            'mode'=>'required',
            'attachment'=>'mimes:jpeg,png,jpg,svg,docx,pdf,pptx,txt|max:4048',
            'description'=>'required',
        ]); 
        //adding attributes to the post form
        $hires = new Hire([
            'project' => $request->get('project'),
            'project_name'    =>  $request->get('project_name'),
            'type'     =>  $request->get('project_type'),
            'framework'    =>  $request->get('framework'),
            'phone'    =>  $request->get('phone'),
            'mode'    =>  $request->get('mode'),
            'location'    =>  $request->get('location'),
            //'attachment'    =>  $request->get('attachment'),
            'description'    =>  $request->get('description'),
        ]); 
        
        //making sure everything other than the attachment has been entered in the correct format 'validating'
        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = time() . '.' . $file->getClientOriginalExtension(); //changing the file name
            $file->move( storage_path('app/public/uploads/user/' . $filename ));//moving the attchement to the storage path
            $hires->attachment= $filename;
          }; //carrying on the media validatation
         // $user = 'mike';

        $user = Auth::user()->name;
        $hires ->user= $user;

        $hires->save(); //saving the project to be worked on
        return redirect('/')->withSuccess([
            'message' => "Your Project has been uploaded successfuly and is under review",
        ]);
    }
    public function jobs()
    {
        $hires = Hire::all()->toArray();
        return view('mikael.jobs', compact('hires'));
    }
    
    public function approve($id){
        
            $projects = DB::table('hires')->select( 'user', 'project', 'project_name', 'type', 'framework','phone','mode','location','description')->where('id', $id)->get();
        
           foreach ($projects as $the_){

            $user = $the_->user;
            $project = $the_->project;
            $project_name= $the_->project_name;
            $type = $the_->type;
            $framework = $the_->framework;
            $phone = $the_->phone;
            $mode = $the_->mode;
            $location = $the_->location;
            $description = $the_->description;
        }
  



            $user = approved_job::create([
                
                'user'  => $user,
                'project'  => $project,
                'project_name'  => $project_name,
                'type'  => $type,
                'framework'  => $framework,
                'phone'  => $phone,
                'mode'  => $mode,
                'location'  => $location,
                'description'  => $description,
                
                ]);

                
                  $user->save();

                  DB::table('hires')->where('id', $id)->delete();

                  return redirect('/jobs')->withSuccess([
                    'message' => "project approval successful",
                ]);


            }
    //deleting a posted job
    public function delete($id){

        $order = Hire::find($id);
        $order-> delete();
        return redirect('/jobs')->withSuccess([
            'message' => "Sucessfull Deletion",
        ]);
    }
}
