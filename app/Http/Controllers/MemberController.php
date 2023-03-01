<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use File;
class MemberController extends Controller
{
    public function index(){
        return view('index');
    }

    public function add(Request $req){
        $member=new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->password= Hash::make($req->password);
        //Adding an Image:
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('public/img/',$filename);
        $member->image=$filename;   
        }
        $member->save(); 
        return redirect('/show')->with('status','Member Added Successfully!');   
}

    public function show(){
        $data=Member::all();
        return view('show',['members'=>$data]);
    }

    public function edit($id){
        $edit=Member::find($id);
        return view('edit',['members'=>$edit]);
    }

    public function update(Request $req){
        $update=Member::find($req->id);
        $update->name=$req->name;
        $update->email=$req->email;
        $update->password=Hash::make($req->password);
        //Updating File/Image:
        if($req->hasfile('image')){
            $destination='uploads/product/'.$update->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$req->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('public/img/',$filename);
            $update->image=$filename;
        }
        $update->update();
        return redirect('show')->with('status','Member Updated Successfully!');
}
 
    public function delete($id){
        $data=Member::find($id);
            $data->delete();
            return redirect('show')->with('status','Member Deleted Successfully!');
        }
    }


