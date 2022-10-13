@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集</h1>
@stop

   
      
@section('content')
<div class="row">
        <div class="col-md-10">
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
            <div class="card-body">
                <br>
                <p> 名前 </P>
                <input type="text" class="form-control" name="name" value="{{$Items->name}}" placeholder="名前" >
                <!-- <br> -->
                @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
                <br>
                <p> 種別　1:果物  2:やさい  3:肉類  4:さなか  5:飲料 </P>
                <input type="number" class="form-control" id="type" name="type" placeholder="1, 2, 3, ...">
                <br>
                <p> 詳細 </P>
                @if($errors->has('種別')) <span>{{$errors->first('type')}}</span> @endif
                <!-- <br> -->
                <input type="text" class="form-control" name="detail" value="{{$Items->detail}}" placeholder="詳細" >
                <br>
                @if($errors->has('詳細')) <span>{{$errors->first('detail')}}</span> @endif
                <!-- <div class="card-footer">  -->
                <div class="card-footer">
                    <br>
                    <button type="submit" class="btn btn-primary">編集</button>
                    <input type="hidden" name="id" value="{{$Items->id}}"> 
                </div>
           </div>    
        　</form>
        </div>       
    </div>
</body>
@stop

@section('css')
@stop

@section('js')
@stop
<!-- </html> -->
