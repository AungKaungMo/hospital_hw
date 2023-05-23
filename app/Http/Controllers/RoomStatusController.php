<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomStatusModel;
use Illuminate\Support\Facades\Log;

class RoomStatusController extends Controller
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
        $roomStatus = new RoomStatusModel();
        $result = $roomStatus->getAll();
        Log::channel('customLog')->info("Start working roomstatus message.");
        return view("RoomStatus.RoomStatusCheckAll", [
            "roomStatus" => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::channel('customLog')->info("Creating new path to show the roomstatusdata.");
        return view('RoomStatus.AddRoomStatus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $addNew = new RoomStatusModel();
        $addNew->addRoom($request);
        Log::channel('customLog')->info("Adding new roomstatus.");
        return redirect("/roomstatus");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = new RoomStatusModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Showing user click roomstatus.");
        return view('RoomStatus.show', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = new RoomStatusModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Getting roomstatus's all data for edit.");
        return view('RoomStatus.edit', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updateInfo = new RoomStatusModel();
        $updateInfo->updateRoom($request, $id);
        Log::channel('customLog')->info("Updating id= $id 's roomstatus");
        return redirect("/roomstatus");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteInfo = new RoomStatusModel();
        $deleteInfo->deleteRoom($id);
        Log::channel('customLog')->info("delete id= $id 's roomstatus");
        return redirect("/roomstatus");
    }
}
