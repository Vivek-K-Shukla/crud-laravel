<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Index Page</title>
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
            <h2>User Profile</h2>
            <a href="{{url('/show')}}" class="btn btn-primary btn-sm float-end">Back</a>
        </div>
        <div class="card-body">
            <form action="/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Name:</label>
                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email:</label>
                    <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password:</label>
                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image:</label>
                    <input type="file" name="image" placeholder="Enter Your Image" class="form-control">
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