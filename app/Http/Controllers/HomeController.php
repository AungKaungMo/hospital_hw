<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugStoreModel;
use App\Models\RoomStatusModel;
use App\Models\AppointmentModel;
use App\Models\UnreadMessageModel;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //     public function __construct()
    //     {
    //         $this->middleware("auth”);
    // };

    public function __construct()
    {
        $this->middleware('loginCheck')->except("index");
    }

    public function index()
    {
        $appointment = new AppointmentModel();
        $app = $appointment->getAllDataLimit();
        $drug = new DrugStoreModel();
        $drugStore = $drug->getAllDataLimit();
        $roomStatus = new RoomStatusModel();
        $result = $roomStatus->getAllDataLimit();
        $unread = new UnreadMessageModel();
        $unreadMsg = $unread->getAllDataLimit();

        Log::channel('customLog')->info("Start working home.");
        return view("Home", [
            "appointment" => $app,
            "drugStore" => $drugStore,
            "roomStatus" => $result,
            "unreadMessage" => $unreadMsg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
