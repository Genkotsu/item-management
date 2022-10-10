@extends('adminlte::page')

@section('title', 'ユーザー一覧')

@section('content_header')
    <h1>ユーザー一覧</h1>
@stop

@section('content')
<table class="table" >

    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>更新日時</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    @foreach($users as $user)
    <tr>
    　　<td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->updated_at}}</td>
        <td><a href='/users/edit/{{$user->id}}'>編集</a></td>
    </tr>
    @endforeach
</table>
@stop

@section('css')
@stop

@section('js')
@stop
