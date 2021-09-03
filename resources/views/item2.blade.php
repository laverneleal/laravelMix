@extends('layouts.app')
@section('title', 'Item2')
@section('content')
<table border="1">
    <thead>
        <tr>
            <th>SHIYOSHO_KBN</th>
            <th>ITEM_1_CD</th>
            <th>ITEM_2_CD</th>
            <th>ITEM_2_MEI</th>
            <th>OUTPUT_ITEM_2_MEI_CHK_LST</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item->SHIYOSHO_KBN}}</td>
                <td>{{@$item->ITEM_1_CD}}</td>
                <td>{{$item->ITEM_2_CD}}</td>
                <td>{{$item->ITEM_2_MEI}}</td>
                <td>{{$item->OUTPUT_ITEM_2_MEI_CHK_LST}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
