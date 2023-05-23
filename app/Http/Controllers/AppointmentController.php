<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentModel;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
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
        $appointment = new AppointmentModel();
        $app = $appointment->getAllData();
        Log::channel('customLog')->info("Start working appointment.");
        return view("Appointment.Home", [
            "appointment" => $app
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::channel('customLog')->info("Creating new path to show the appointment.");
        return view('Appointment.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $addNew = new AppointmentModel();
        $addNew->addAppointment($request);
        Log::channel('customLog')->info("Adding new appointment.");
        return redirect("/appointment");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = new AppointmentModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Showing user click appointment.");
        return view('Appointment.show', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = new AppointmentModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Getting appointment's all data for edit.");
        return view('Appointment.edit', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updateInfo = new AppointmentModel();
        $updateInfo->updateAppointment($request, $id);
        Log::channel('customLog')->info("Updating id= $id 's appointment");
        return redirect("/appointment");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteInfo = new AppointmentModel();
        $deleteInfo->deleteAppointment($id);
        Log::channel('customLog')->info("delete id= $id 's appointment");
        return redirect("/appointment");
    }
}
