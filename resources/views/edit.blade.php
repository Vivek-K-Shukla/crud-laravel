<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Edit Page</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
            @if(Session('status'))
                    <h4 class="bg bg-success">{{Session('status')}}</h4>
                @endif
                <div class="card">
        <div class="card-header">
            <h2>Member Profile Update</h2>
            <a href="{{url('/show')}}" class="btn btn-primary btn-sm float-end">Back</a>
        </div>
        <div class="card-body">
            <!-- <form action="{{url('update/'.$members->id)}}" method="POST" enctype="multipart/form-data"> -->
            <form action="/update" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$members['id']}}">
                <div class="form-group mb-3">
                    <label for="">Name:</label>
                    <input type="text" name="name" value="{{$members['name']}}" placeholder="Enter Your Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email:</label>
                    <input type="text" name="email"  value="{{$members['email']}}" placeholder="Enter Your Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password:</label>
                    <input type="password" name="password" value="{{$members['password']}}"  placeholder="Enter Your Password" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image:</label>
                    <input type="file" name="image" value="{{$members['image']}}"  placeholder="Enter Your Image" class="form-control">
                    <img src="{{asset('public/img/'.$members['image'])}}" width="70px" height="70px" alt="Image">
                </div>
                <div class="form-group mb-3"></div>
                <button type="submit" class="btn btn-primary">ADD MEMBER</button>
                </div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>