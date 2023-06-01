<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row mt-1  border border-dark">
                    <div class="col-4 mt-3">
                        <h1><a class="navbar-brand">MARKET</a></h1>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-2 mt-3 mb-3">
                        <a href="{{route('registr_p')}}">
                        <button type="button" class="btn btn-outline-warning btn-lg">Register</button>
                        </a>
                    </div>
                    <div class="col-2"></div>
                </div>
      
                <div class="row mt-3">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Login kiritin'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="Password kiritin'" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-warning" type="submit">KIRIW</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-2"></div>

                </div>
            </div>
            <div class="col-1"></div> 
        </div>
    </div>
   
    
</body>
</html>
