@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集</h1>
@stop

   
      
@section('content')
<!-- <h1>商品編集</h1> -->
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
        <form method="post" action="/items/update">
        {{ csrf_field() }}
            <br>
            <input type="text" class="form-control" name="name" value="{{$Items->name}}" placeholder="名前" >
            <br>
            @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
            <br>
            <!-- <input type="number" class="form-control" name="type" value="{{$type[$Items->type]}}" placeholder="種別" > -->
            <input type="number" class="form-control" id="type" name="type" placeholder="1, 2, 3, ...">
            <br>
            @if($errors->has('種別')) <span>{{$errors->first('type')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="detail" value="{{$Items->detail}}" placeholder="詳細" >
            <br>
            @if($errors->has('詳細')) <span>{{$errors->first('detail')}}</span> @endif
            <!-- <div class="card-footer">  -->
            <br>
            <button type="submit" class="btn btn-primary">編集</button>
            <input type="hidden" name="id" value="{{$Items->id}}"> 
            <div class="card-footer"> 
            </form>
                       
            
    </main>
    </div>
</body>
@stop

@section('css')
@stop

@section('js')
@stop
<!-- </html> -->
