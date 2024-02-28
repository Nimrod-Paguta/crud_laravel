<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studentnamae' => 'required|string|max:255',
            'subjectcode' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        Subject::create($request->all());

        return redirect()->route('subject.index')->with('success', 'Subject created successfully!');
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
        $subject = Subject::findOrFail($id);
        return view('subject.edit', compact('subject'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subjectname' => 'required|string|max:255',
            'subjectcode' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        return redirect()->route('subject.index')->with('success', 'Subject updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
    
        return redirect()->route('subject.index')->with('success', 'subject deleted successfully!');
    }
}
