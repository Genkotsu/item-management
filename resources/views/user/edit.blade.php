@extends('adminlte::page')

@section('title', '会員編集画面')

@section('content_header')
    <h1>会員編集画面</h1>
@stop

@section('content')
<!-- <!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>会員編集画面</title>
    <meta name="description" content="会員編集画面です"> -->
<!-- </style>
</head> -->
    
 <!-- <body class="edit text-center">
  <div class=container>
     <h2>会員編集画面</h2>     -->
    <!-- <main class="form-edit"> -->
        <form method="post" action="/users/update">
        {{ csrf_field() }}
            <br>
            <input type="text" class="form-control" name="name" value="{{$users->name}}" placeholder="name" >
            <br>
            @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="email" value="{{$users->email}}" placeholder="email" >
            <br>
             <button type="submit" >編集</button>
            <input type="hidden" name="id" value="{{$users->id}}"> 
            </form>
                       
            
    </main>
    <!-- </div>
</body> -->
@stop

@section('css')
@stop

@section('js')
@stop 

