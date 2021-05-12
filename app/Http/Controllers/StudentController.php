<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function login()
    {
        return view('login');
    }
    public function index()
    {
        return view('index');
    }
    function check(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user=Student::where('email','=',$request->email)->first();
        if($user){
            if(strcmp($request->password,$user->password)==0){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    function profile()
    {
        if(session()->has('LoggedUser')){
            $user=Student::where('id','=',session('LoggedUser'))->first();
            $data = [
                "LoggedUserInfo"=>$user
            ];
            return view('profile', $data);
        }
    }
    function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    function delete($id)
    {
        $data=Student::find($id);
        //echo "$data->id";
        $data->delete();
        return redirect('login');
    }
    function list()
    {
        $data=Student::all();
        return view('list',['members'=>$data]);
    }
    function showdata($id)
    {
        $data=Student::find($id);
        return view('edit',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:8',
            'dob' => 'required',
            'gender' => 'required',
            'desc' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('index')->with('success','student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data=Student::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->desc=$req->desc;
        $data->save();
        $user=Student::where('id','=',session('LoggedUser'))->first();
            $data = [
                "LoggedUserInfo"=>$user
            ];
        return view('profile', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
