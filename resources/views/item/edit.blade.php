@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品編集</h1>
@stop

   
      
@section('content')
<!-- <!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
     <!-- <title>商品編集画面</title>
    <meta name="description" content="商品編集画面です">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</style> -->
<!--  -->
        <form method="post" action="/items/update">
        {{ csrf_field() }}
            <br>
            <input type="text" class="form-control" name="name" value="{{$Items->name}}" placeholder="名前" >
            <br>
            @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="type" value="{{$type[$Items->type]}}" placeholder="種別" >
            <br>
            @if($errors->has('種別')) <span>{{$errors->first('type')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="detail" value="{{$Items->detail}}" placeholder="詳細" >
            <br>
            @if($errors->has('詳細')) <span>{{$errors->first('detail')}}</span> @endif
             <br>
             <button type="submit" >編集</button>
            <input type="hidden" name="id" value="{{$Items->id}}"> 
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
