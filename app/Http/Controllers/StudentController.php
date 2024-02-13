<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("students.index", [
            "title"=> "Data Siswa",
        ], compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.input", [
            'title' => 'Input Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $this->validate($request, [
            'name' => 'required',
            'nilai_id' => 'required',
            'kelas' => 'required|string'
        ]);

        Student::create([
            'name'=> $request->name,
            'nilai_id' => $request->nilai_id,
            'kelas'=> $request->kelas,
        ]);

        return redirect()->route('students.index')->withSuccess(['success', 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $id_student)
    {
        // $students = Student::where('id_student', $id_student)->first();
        // $students = Student::find($id_student);
        // dd($students);
        // $collects = collect($student);
        return view('students.show', [
            'title' => 'Show Data',
            'data' => $id_student,
        ]);
        // return redirect()->route('nilai.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $id_student)
    {
        // $students = Student::FindOrFail('id_student');
        // dd($student);
        return view('students.edit', [
            'title' => 'Edit Data',
            'data' => $id_student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_student)
    {
        $student = Student::FindOrFail($id_student);

        $student->update([
            'name'=> $request->name,
            'nilai_id' => $request->nilai_id,
            'kelas'=> $request->kelas,
        ]);
        return redirect()->route('students.index')->withSuccess(['success','Akherrah bisah, Anjing!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
