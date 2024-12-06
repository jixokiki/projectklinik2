<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LaboratoriumController extends Controller
{
    public function getLaboratoriumPage() {
        $data_antrian = DB::select("
            select p.nama, r.id as no_registrasi, p.no_rm, p.tanggal_lahir, r.status, l.nama as nama_laboratorium, l.id as id_laboratorium
            from riwayat r
            join pasien p on p.no_rm = r.no_rm
            join riwayat_laboratorium rl on rl.id_riwayat = r.id
            join laboratorium l on l.id=rl.id_laboratorium
            order by r.created_at asc
        ");

        return view('laboratorium.index',compact('data_antrian'));
    }
    public function getLaboratoriumData(Request $request)
    {
        $riwayat = DB::table("riwayat")->where('id',$request->query('id_registrasi'))->first();
        return view('laboratorium.isilab',compact('riwayat'))->with('id',$request->query('id_registrasi'));
    }

}