<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrugStoreModel;
use Illuminate\Support\Facades\Log;

class DrugStoreController extends Controller
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
        $drug = new DrugStoreModel();
        $drugStore = $drug->getAllData();
        Log::channel('customLog')->info("Start working drugstore.");
        return view("DrugStore.Home", [
            "drugStore" => $drugStore
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Log::channel('customLog')->info("Creating new path to show the drugstore.");
        return view('DrugStore.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $addNew = new DrugStoreModel();
        $addNew->addDrug($request);
        Log::channel('customLog')->info("Adding new drugstore.");
        return redirect("/drugstore");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = new DrugStoreModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Showing user click drugstore.");
        return view('DrugStore.show', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = new DrugStoreModel();
        $datainfo = $data->getAllByID($id);
        Log::channel('customLog')->info("Getting drugstore's all data for edit.");
        return view('DrugStore.edit', [
            'dataInfo' => $datainfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updateInfo = new DrugStoreModel();
        $updateInfo->updateDrug($request, $id);
        Log::channel('customLog')->info("Updating id= $id 's drugstore");
        return redirect("/drugstore");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteInfo = new DrugStoreModel();
        $deleteInfo->deleteDrug($id);
        Log::channel('customLog')->info("delete id= $id 's drugstore");
        return redirect("/drugstore");
    }
}
