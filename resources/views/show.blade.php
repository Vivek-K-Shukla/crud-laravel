<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            @if(Session('status'))
                <h4 class="bg bg-success">{{Session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Member Profile Info</h4>
                    <a href="{{url('/index')}}" class="btn btn-primary btn-sm float-end">Add Member</a>
</h4>
</div>
<div class="card-body">
    <table class="table table-borderd table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th>Operations</th>
            </tr> 
            @foreach($members as $member) 
            <tr>
                <td>{{$member['id']}}</td>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['password']}}</td>
                <!-- <td>{{$member['image']}}</td> -->
                <td><img src="{{asset('public/img/'.$member['image'])}}" width="70px" height="70px" alt="Image"></td>
                <td><button class="btn btn-success"><a href="{{'edit/'.$member['id']}}">EDIT</a></button><br><br>
                <button class="btn btn-danger"><a href="{{'delete/'.$member['id']}}">DELETE</a></button></td>
            </tr> 
            @endforeach
            </thbody>
            </table>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
