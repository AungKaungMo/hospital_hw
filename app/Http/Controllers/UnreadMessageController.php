<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnreadMessageModel;
use Illuminate\Support\Facades\Log;

class UnreadMessageController extends Controller
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
        $unread = new UnreadMessageModel();
        $unreadMsg = $unread->getAllData();
        Log::channel('customLog')->info("Start working unread message.");
        return view("UnreadMessage.Home", [
            "umsg" => $unreadMsg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::channel('customLog')->info("Creating new path to show the unreadmessage data.");
        return view('UnreadMessage.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $addNew = new UnreadMessageModel();
        $addNew->addMessage($request);
        Log::channel('customLog')->info("Adding new unreadmessage.");
        return redirect("/unreadmessage");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = new UnreadMessageModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Showing user click unreadmessage.");
        return view('UnreadMessage.show', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = new UnreadMessageModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Getting unreadmessage's all data for edit.");
        return view('UnreadMessage.edit', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updateInfo = new UnreadMessageModel();
        $updateInfo->updateMessage($request, $id);
        Log::channel('customLog')->info("Updating id= $id 's unreadmessage");
        return redirect("/unreadmessage");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteInfo = new UnreadMessageModel();
        $deleteInfo->deleteMessage($id);
        Log::channel('customLog')->info("delete id= $id 's unreadmessage ");
        return redirect("/unreadmessage");
    }
}
