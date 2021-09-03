<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KihonJouhouController extends Controller
{
    public  static function GetBaseSiyoMei()
    {
        $items = DB::table("dbo.M_CDM006")
            ->where('HAIBAN_DATE', null)
            ->orderBy('DISP_ORDER', 'asc')
            ->get();
        return view(
            'index',
            [
                'items' => $items
            ]
        );
    }

    public function GetShiyouShousai(Request $request)
    {
        $items = DB::table("dbo.M_CDM007")
            ->where('BASE_SIYO_CD', $request->base_siyo_cd)
            ->where('HAIBAN_DATE', null)
            ->orderBy('DISP_ORDER', 'asc')
            ->get();

        return view(
            'shiyou_shousai',
            [
                'items' => $items
            ]
        );
    }
}
