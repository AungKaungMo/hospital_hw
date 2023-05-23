<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnreadMessageModel extends Model
{
    use HasFactory;
    public function getAllData()
    {
        return DB::table('unread_message_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->get();
    }
    public function getAllDataLimit()
    {
        return DB::table('unread_message_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->limit(4)->get();
    }
    public function getAllByID($id)
    {
        return UnreadMessageModel::find($id);
    }
    public function addMessage(Request $request)
    {
        $newMessage = [
            "msg_details" => $request->msgdetails,
            "vip" => $request->msgtype,
            "msg_time" => $request->msgtime
        ];
        UnreadMessageModel::insert($newMessage);
    }
    public function updateMessage(Request $request, $id)
    {
        $updateInfo = [
            "msg_details" => $request->msgdetails,
            "vip" => $request->msgtype,
            "msg_time" => $request->msgtime
        ];
        DB::table('unread_message_models')
            ->where('id', '=', $id)
            ->update($updateInfo);
    }
    public function deleteMessage($id)
    {
        DB::table('unread_message_models')
            ->where('id', '=', $id)
            ->update(["del_flg" => 1]);
    }
}
