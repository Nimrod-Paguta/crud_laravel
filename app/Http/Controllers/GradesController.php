<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grade.index', compact('grades')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
    
        return view('grade.create', compact('students', 'subjects'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studentname' => 'required|exists:students,name',
            'subjectcode' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
        ]);
    
        // Use $request->input('studentname') to get the selected student's ID
        // Other validation and storing logic...
        Grade::create($request->all());

    
        return redirect()->route('grade.index')->with('success', 'Grade created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        
        $grade = Grade::findOrFail($id);
        $students = Student::all(); // Fetch all students or modify as needed
        return view('grade.edit', compact('grade', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'grade' => 'required|string|max:255',
          
        ]);

        $grade = Grade::findOrFail($id);
        $grade->update($request->all());

        return redirect()->route('grade.index')->with('success', 'grade updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();
    
        return redirect()->route('grade.index')->with('success', 'grade deleted successfully!');
    }
}
