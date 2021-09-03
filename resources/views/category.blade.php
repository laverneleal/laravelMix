@extends('layouts.app')
@section('title', 'Category')
@section('content')
<table border="1">
    <thead>
        <tr>
            <th>CATEGORY_CD</th>
            <th>CATEGORY_NAME</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="/item1/1">1</a></td>
            <td>外部(Gaibu)</td>
        </tr>
        <tr>
            <td><a href="/item1/2">2</a></td>
            <td>設備(Setsubi)</td>
        </tr>
        <tr>
            <td><a href="/item1/3">3</a></td>
            <td>内部(Naibu)</td>
        </tr>
    </tbody>
</table>
@endsection
