@extends('adminlte::page')

@section('title', '会員編集画面')

@section('content_header')
    <h1>会員編集画面</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">会員編集画面</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
         <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">    
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif        
        <div class="card card-primary">
            <form method="post" action="/users/update">
            {{ csrf_field() }}
            <br>
            <input type="text" class="form-control" name="name" value="{{$users->name}}" placeholder="name" >
            <br>
            <br>
            <input type="text" class="form-control" name="email" value="{{$users->email}}" placeholder="email" >
            <div class="card-footer">
                <br>
                <button type="submit" class="btn btn-primary">登録</button>
                <input type="hidden" name="id" value="{{$users->id}}"> 
            </div>
            </form>
        </div>   
</div>
@stop

@section('css')
@stop

@section('js')
@stop 

