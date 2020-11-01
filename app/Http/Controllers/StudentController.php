<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
 {
    // this avoids the protected links from being accessed without logging in
    public function __construct(){
        $this->middleware('auth');
    }

    // this returns the student list
    public function index(){
       $student = Student::where('status','active')->paginate(10);
        return view('students.index',[
            'students'=>$student
            ]);
    }

    // this returns the individual student when details button is clicked
    public function show($studentID){
        $studentID = Student::findOrFail($studentID);
        return view('students.show',['studentID'=>$studentID]);
    }

    // this returns the form for entering new student data 
    public function create(){
        return view('students.create');
    }

    // this takes the data entered in the create form and stores it in the db
    public function store(){
    
        $student = new Student();
        $student->schoolID=request('schoolID');
        $student->studentID=request('studentID');
        $student->streamName=request('streamName');
        $student->studentFName=request('studentFName');
        $student->studentMName=request('studentMName');
        $student->studentLName=request('studentLName');
        $student->studentGender=request('studentGender');

        //school id should be automatic depending on the session
        $student->save();
        return redirect('/students')->with('msg','New Student details added successfully!');
    } 

    // this returns the form with the selected student details to edit
    public function edit($studentID){
        $student = Student::where('studentID',$studentID)->get();
        return view('students.edit',['students' => $student]);
        
    }

    // this stores the updated values in the database
    public function update(Request $request, $studentID){
        $student = Student::findOrFail($studentID);
        
        $streamname=$request->get('streamName');
        $studfname=$request->get('studentFName');
        $studmname=$request->get('studentMName');
        $studlname=$request->get('studentLName');
        $studgender=$request->get('studentGender');

        $student = DB::update('update student set 
        streamName=?,
        studentFName=?,
        studentMName=?,
        studentLName=?,
        studentGender=? 
        where studentID=?',
        [$streamname,$studfname,$studmname,$studlname,$studgender,$studentID]);

        if($student)
        {
            $response=redirect('/students')->with('msg','Student has been updated successfully');
        } 
        else 
        {
            $response = redirect('/studentsedit/{studentID}')->with('fail','Update error, please try again');
        }

        return $response;    
    }

    // this returns the search results
    public function search(Request $request){
        $search=$request->get('search');
        $student = Student::where('status','active')
        ->where('studentFname','LIKE','%'.$search.'%')
        ->orWhere('studentMname','LIKE','%'.$search.'%')
        ->orWhere('studentLname','LIKE','%'.$search.'%')
        ->orWhere('streamName','LIKE','%'.$search.'%')
        ->orWhere('studentGender','LIKE','%'.$search.'%')
        ->paginate(10);
        
        return view('students.index',['students'=>$student]);
    }

    // when user clicks delete on the table this method sets the status field of the record to inactive
        public function destroy($studentID){
            $student = Student::findOrFail($studentID);
            $student->status = 'inactive';

            $student->save();
            return redirect('/students')->with('delmsg','Student deleted successfully');
    }



}
