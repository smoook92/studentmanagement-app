<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrolments = Enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrolments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Зачисление добавлено!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrolments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrolments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrolments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrolments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrolments = Enrollment::find($id);
        $input = $request->all();
        $enrolments->update($input);
        return redirect('enrollments')->with('flash_message', 'информация наборов обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Набор удален!');
    }
}
