<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>会員編集画面</title>
    <meta name="description" content="会員編集画面です">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</style>
</head>
    
 <body class="edit text-center">
 @include('parts.nav')
     <div class=container>
     <h2>商品編集画面</h2>    
    <main class="form-edit">
        <form method="post" action="/item/update">
        {{ csrf_field() }}
            <br>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="名前" >
            <br>
            @if($errors->has('name')) <span>{{$errors->first('name')}}</span> @endif
            <br>
            <input type="text" class="form-control" name="type" value="{{$Items->type}}" placeholder="メールアドレス" >
            <br>
            @if($errors->has('email')) <span>{{$errors->first('email')}}</span> @endif
            <p></p>
            <p>管理者の場合はチェックを入れてください</p>
            <input type="checkbox" class="form-check-input" name="role" value="2" @if($user->role==2) checked @endif >：管理者
                
            <br><br><button type="submit" >編集</button>
            <input type="hidden" name="id" value="{{$user->id}}"> 
            </form>
                       
            
    </main>
    </div>
</body>
 
</html>
