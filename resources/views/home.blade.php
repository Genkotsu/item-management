@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>商品一覧</h1>
    <div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </div>
    <br>
    <img src="/img/home.jpg" alt="home画像" height="700px" width="1500px">
@stop

@section('content')
    <h2>秋のお勧め商品です</h2>
@stop
@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

