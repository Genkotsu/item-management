@extends('adminlte::page')

@section('title', '会員編集画面')

@section('content_header')
    <h1>会員編集画面</h1>
@stop

@section('content')
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
            @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="email" value="{{$users->email}}" placeholder="email" >
            <div class="card-footer">
            <br>
            <button type="submit" class="btn btn-primary">登録</button>
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

