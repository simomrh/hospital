<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addView()
    {
        return view('admins.doctors');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request,[
            'name' =>  'required',
            'email' =>  'required',
            'phone' =>  'required',
            'address' =>  'required',
            'room' =>  'required',
            'speciality' =>  'required',
            'photo' =>  'required| image:jpeg,jpg,png.svg',

        ]);

        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('images',$newPhoto);

        $doctors = Doctor::create([
            'name' =>  $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'room' =>  $request->room,
            'speciality' =>   $request->speciality,
            'photo' =>  'images/'.$newPhoto,

        ]);

     return redirect()->back()->with('message' , "doctor added successfully");

    }
    public function show(){

        $appointments = Appointment::all();
        return view('admins.appointments', compact('appointments'));

    }

    public function approve($id){

        $appointment = Appointment::find($id);

       $appointment->status = 'approved';

       $appointment->save();

       return redirect()->back()->with('message', "Patient approved successfully");

    }

    public function destroy($id){

        $appointment = Appointment::find($id);

          $appointment->delete();

       return redirect()->back()->with('message' , "Appointment deleted successfully");

   }
    public function showDoctors(){

        $doctors = Doctor::all();

        return view('admins.show', compact('doctors'));
    }

     public function doctorEdit($id){

        $doctor =Doctor::find($id);

        return view('admins.edit');

     }

     public function doctorDestroy($id){

        $doctor = Doctor::find($id);

          $doctor->delete();

       return redirect()->back()->with('message' , " Doctor deleted successfully");

   }


}
