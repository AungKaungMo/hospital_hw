<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpecialist;
use Illuminate\Http\Request;

class DoctorListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('loginCheck')->except("index");
    }
    public function index()
    {
        //
        $doctors = new Doctor();
        $doctorList = $doctors->getAllDoctors();
        return view('DoctorList.Home', [
            "doctorList" => $doctorList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('DoctorList.Add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $model = new Doctor();
        $model->addDoctor($request);
        return redirect('/doctorList');
        // $specialist->save();
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
    public function edit(string $id)
    {
        //
        $editData = new Doctor();
        $editDoctor = $editData->getEditData($id);
        return view('DoctorList.Edit', [
            'editData' => $editDoctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updating = new Doctor();
        $updating->updateDoctor($request, $id);
        return redirect('/doctorList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete = new Doctor();
        $delete->deleteDoctor($id);
        return redirect('/doctorList');
    }


}
