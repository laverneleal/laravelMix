<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public static function GetItem1(Request $request)
    {
        if($request->category_cd == 3) {
            $items = \DB::table('dbo.M_CDM022')
                ->where('SHIYOSHO_KBN', 3)
                ->where('HAIBAN', 0)
                ->orderBy('DISP_ORDER', 'asc')
                ->get();
        } else {
            $items = \DB::table('dbo.M_CDM021')
                ->where('SHIYOSHO_KBN', $request->category_cd)
                ->where('HAIBAN', 0)
                ->orderBy('DISP_ORDER', 'asc')
                ->get();
        }

        return view(
            'item1',
            [
                'items' => $items
            ]
        );
    }

    public function GetItem2(Request $request)
    {
        if($request->category_cd == 3) {
            $items = \DB::table('dbo.M_CDM022')
                ->where('SHIYOSHO_KBN', 3)
                ->where('ITEM_2_CD', $request->item1_cd)
                ->where('HAIBAN', 0)
                ->orderBy('DISP_ORDER', 'asc')
                ->get();
        } else {
            $items = \DB::table('dbo.M_CDM022')
                ->where('SHIYOSHO_KBN', $request->category_cd)
                ->where('ITEM_1_CD', $request->item1_cd)
                ->where('HAIBAN', 0)
                ->orderBy('DISP_ORDER', 'asc')
                ->get();
        }

        // dd($items);
        return view(
            'item2',
            [
                'items' => $items
            ]
        );
    }

    public function GetShohin()
    {
        $items = \DB::table('dbo.M_CDM027')
            ->where('SHIYOSHO_KBN', 1)
            ->get();

        return view(
            'shohin',
            [
                'items' => $items
            ]
        );
    }
}
