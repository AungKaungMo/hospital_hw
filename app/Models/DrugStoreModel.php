<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DrugStoreModel extends Model
{
    use HasFactory;
    public function getAllData()
    {
        return DB::table('drug_store_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->get();
    }
    public function getAllDataLimit()
    {
        return DB::table('drug_store_models')->where('del_flg', '=', 0)->orderBy("id", "DESC")->limit(4)->get();
    }
    public function getAllByID($id)
    {
        return DrugStoreModel::find($id);
    }
    public function addDrug(Request $request)
    {
        $newDrug = [
            "drug_name" => $request->dname,
            "drug_amount" => $request->damount,
            "drug_stock" => $request->dinstock,
            "drug_price" => $request->dprice
        ];
        DrugStoreModel::insert($newDrug);
    }
    public function updateDrug(Request $request, $id)
    {
        $updateInfo = [
            "drug_name" => $request->dname,
            "drug_amount" => $request->damount,
            "drug_stock" => $request->dinstock,
            "drug_price" => $request->dprice
        ];
        DB::table('drug_store_models')
            ->where('id', '=', $id)
            ->update($updateInfo);
    }
    public function deleteDrug($id)
    {
        DB::table('drug_store_models')
            ->where('id', '=', $id)
            ->update(["del_flg" => 1]);
    }
}
