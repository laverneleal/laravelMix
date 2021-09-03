@extends('layouts.app')
@section('title', 'Item1')
@section('content')

<table border="1">
    <thead>
        <tr>
            <th>SHIYOSHO_KBN</th>
            <th>ITEM_1_CD</th>
            <th>ITEM_1_MEI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item->SHIYOSHO_KBN}}</td>
                @if($item->SHIYOSHO_KBN == 3)
                <td><a href="/item2/{{$item->SHIYOSHO_KBN}}/{{$item->ITEM_2_CD}}">{{$item->ITEM_2_CD}}</a></td>
                <td>{{@$item->ITEM_2_MEI}}</td>
                @else
                <td><a href="/item2/{{$item->SHIYOSHO_KBN}}/{{$item->ITEM_1_CD}}">{{$item->ITEM_1_CD}}</a></td>
                <td>{{@$item->ITEM_1_MEI}}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
