<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head> 
<body>
@include('parts.nav')    
<div class="container">
<h2 class="text-center">会員一覧</h2>  

<table class="table" >

    <tr>
        <th>ID</th>
        <th>名前x</th>
        <th>メールアドレス</th>
        <th>権限</th>
        <th>更新日時</th>
        <th>&nbsp;</th>
    </tr>
    @foreach($users as $user)
    <tr>
    　　<td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <!-- <td>@if($user->role==1)利用者 @else 管理者 @endif</td> -->
        <td>{{$user->updated_at}}</td>
        <td><a href='/user/edit/{{$user->id}}'>編集</a></td>
    </tr>
    @endforeach
</table>
</div>   
</body>
</html>
