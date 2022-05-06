<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        if(Auth::id()){
           return redirect('home');
        }
        else{
        $doctor = Doctor::all();
        return view('user.home')->with('doctor', $doctor);
    }
    }

    public function redirect(){

        if(Auth::id()){

          if (Auth::user()->user_type  == '0') {
            $doctor = Doctor::all();
            return view('user.home')->with('doctor', $doctor);
            }
             else{
                return view('admins.home');
             }


          }
         else {
           return  redirect()->back();
         }
    }
    public function store(Request $request)
    {
           $this->validate($request, [
              'full_name' => 'required',
              'email' => 'required',
              'doctor' => 'required',
              'phone' => 'required',
              'date' => 'required|date',
              'description' => 'required',
           ]);


           $appointment = Appointment::create( [
            "full_name" => $request->full_name,
            "email" => $request->email,
            "doctor" => $request->doctor,
            "phone" => $request->phone,
            "date" => $request->date,
            "status" => 'In Progress',
            "description" => $request->description,
            "user_id" => Auth()->id(),
        ]);

           return redirect()->back()->with('message' , "Appointment requested successfully");
    }


     public function myAppointment(){
       if (Auth::id()) {

       $user_id = Auth::user()->id;
       $appointment = Appointment::where('user_id', $user_id)->get();
        return view("user.myappoitment" ,  compact('appointment'));

       }

        else{

            return redirect()->back();
        }
     }
     
     public function destroy($id){

        $appointment = Appointment::find($id);

          $appointment->delete();

       return redirect()->back()->with('message' , "Appointment deleted successfully");

   }

}
