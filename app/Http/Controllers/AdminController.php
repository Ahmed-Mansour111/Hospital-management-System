<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;
use Notification;

use App\Notifications\SendEmailnotification;

class AdminController extends Controller
{
    public function addview(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
            return view('admin.add_doctor');
            }else{
                return redirect()->back();
        }
    }else{
            return redirect('login');
        }
    }

    public function upload(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->specialty;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfuly');
    }

    public function showappointment(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
        $data = appointment::all();
        return view ('admin.showappointment',compact('data'));
    }else{
        return redirect()->back();
}
}else{
    return redirect('login');
}
    }
    
    public function showdoctor(){
        $data = doctor::all();
        return view ('admin.showdoctor',compact('data'));
    }

    public function approved($id){
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();
        return redirect()->back();

    }
    public function canceled($id){
        $data = appointment::find($id);
        $data->status = "Canceled";
        $data->save();
        return redirect()->back();

    }


    public function updatedoctor($id){
        $data = doctor::find($id); 
        // $data->save();
        return view('admin.updatedoctor',compact('data'));
    }
    public function editdoctor(Request $request, $id){
        $doctor = doctor::find($id); 
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->specialty;
        $image = $request->file;
        if($image){
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }

    public function deletedoctor($id){
        $data = doctor::find($id);
        
        $data->delete();
        return redirect()->back();

    }

    public function emailview($id){
        $data = appointment::find($id);

        return view ('admin.emailview',compact('data'));
    }

    public function sendemail(Request $request, $id){
        $data = appointment::find($id);
        $details=[
            'greeting'=>$request->greeting,
            'body'=>$request->body,
            'actiontext'=>$request->actiontext,
            'actionurl'=>$request->actionurl,
            'endpart'=>$request->endpart,
        ];
        Notification::send($data,new SendEmailnotification($details));

        return redirect()->back()->with('message','Email sent Successfully');
    }
}
