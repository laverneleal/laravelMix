@extends('layouts.app')
@section('title', 'Shohin')
@section('content')
<table border="1">
    <thead>
        <tr>
            <th>SHIYOSHO_KBN</th>
            <th>GOODS_CD</th>
            <th>GOODS_MEI</th>
            <th>MAKER_CD</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->SHIYOSHO_KBN}}</td>
            <td>{{$item->GOODS_CD}}</td>
            <td>{{$item->GOODS_MEI}}</td>
            <td>{{$item->MAKER_CD}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
