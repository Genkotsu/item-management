@extends('adminlte::page')
@section('title', 'ユーザー一覧')
@section('content_header')
    <h3>ユーザー一覧</h3> 
@stop

@section('content')
<div class="card card-primary">
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
    <div class="card-footer">
</table>
@stop

@section('css')
@stop

@section('js')
@stop
