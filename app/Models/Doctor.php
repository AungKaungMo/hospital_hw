<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function getAllDoctors() {
       return Doctor::has('doctorSpecialist')->where('del_flg',0)->get();
    }

    public function addDoctor($request) {
        $doctorList = new Doctor();
        $doctorList->dr_name = $request->drname;
        $doctorList->dr_age = $request->drage;
        $doctorList->dr_phone = $request->drphone;
        $doctorList->hospital_name = $request->hospital;
        $doctorList->dr_blood = $request->blood;
        $doctorList->save();

        $specialist = new DoctorSpecialist();
        // dd($specialist->dr_id);
        $specialist->specialty = $request->special;
        $specialist->exp = $request->exp;
        $specialist->license = $request->license;
        $specialist->education = $request->edu;

        $doctorList->doctorSpecialist()->save($specialist);
    }


    public function getEditData($id) {
        return Doctor::find($id);
    }

    public function updateDoctor($request, $id) {
        $doctorList = Doctor::find($id);
        $doctorList->dr_name = $request->drname;
        $doctorList->dr_age = $request->drage;
        $doctorList->dr_phone = $request->drphone;
        $doctorList->hospital_name = $request->hospital;
        $doctorList->dr_blood = $request->blood;
        $doctorList->doctorSpecialist->specialty = $request->special;
        $doctorList->doctorSpecialist->exp = $request->exp;
        $doctorList->doctorSpecialist->license = $request->license;
        $doctorList->doctorSpecialist->education = $request->edu;

        $doctorList->save();
        $doctorList->doctorSpecialist->save();
    }

    public function deleteDoctor($id) {
        $doctorDelete = Doctor::find($id);
        $doctorDelete->del_flg = 1;
        $doctorDelete->save();
    }

    public function doctorSpecialist() {
        return $this->hasOne(DoctorSpecialist::class);
    }
}
