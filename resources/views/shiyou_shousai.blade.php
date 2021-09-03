@extends('layouts.app')
@section('title', 'Shiyou Shousai')
@section('content')
<table border="1">
    <thead>
        <tr>
            <th>SIYO_DTL_CD</th>
            <th>SIYO_DTL_MEI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->SIYO_DTL_CD}}</td>
            <td>{{$item->SIYO_DTL_MEI}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
