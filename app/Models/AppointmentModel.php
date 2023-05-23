<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentModel extends Model
{
    use HasFactory;
    public function getAllData()
    {
        return DB::table('appointment_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->get();
    }
    public function getAllDataLimit()
    {
        return DB::table('appointment_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->limit(4)->get();
    }
    public function getAllByID($id)
    {
        return AppointmentModel::find($id);
    }
    public function addAppointment(Request $request)
    {
        $newAppointment = [
            "dr_name" => $request->dname,
            "room_no" => $request->room,
            "app_time" => $request->datetime
        ];
        AppointmentModel::insert($newAppointment);
    }
    public function updateAppointment(Request $request, $id)
    {
        $updateInfo = [
            "dr_name" => $request->dname,
            "room_no" => $request->room,
            "app_time" => $request->datetime
        ];
        DB::table('appointment_models')
            ->where('id', '=', $id)
            ->update($updateInfo);
    }
    public function deleteAppointment($id)
    {
        DB::table('appointment_models')
            ->where('id', '=', $id)
            ->update(["del_flg" => 1]);
    }
}
