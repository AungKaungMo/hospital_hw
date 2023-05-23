<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class RoomStatusModel extends Model
{
    use HasFactory;
    public function getAll()
    {
        return DB::table('room_status_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->get();
    }
    public function getAllDataLimit()
    {
        return DB::table('room_status_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->limit(4)->get();
    }
    public function addRoom(Request $request)
    {
        $newRoom = [
            "room_no" => $request->room,
            "status" => $request->status,
            "person" => $request->person,
            "price" => $request->price
        ];
        RoomStatusModel::insert($newRoom);
    }
    public function getAllByID($id)
    {
        return RoomStatusModel::find($id);
    }
    public function updateRoom(Request $request, $id)
    {
        $updateInfo = [
            "room_no" => $request->room,
            "status" => $request->status,
            "person" => $request->person,
            "price" => $request->price
        ];
        DB::table('room_status_models')
            ->where('id', '=', $id)
            ->update($updateInfo);
    }
    public function deleteRoom($id)
    {
        DB::table('room_status_models')
            ->where('id', '=', $id)
            ->update(["del_flg" => 1]);
    }
}
