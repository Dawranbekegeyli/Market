<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Market page</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-2">
                <div class="col-2 mt-3 mb-3">                       
                    <button type="button" class="btn btn-outline-warning btn-lg">{{Auth::User()->name}}</button>
                    <br>
                    <a href="{{route('logout')}}">logout</a><br><br>
                    <a href="{{route('basket_p')}}">
                        <button type="button" class="btn btn-outline-warning btn-lg">basket</button>
                    </a>
                </div>
            </div>
            <div class="col-10">
                <div class="row mt-1  border border-dark">
                    <div class="col-4 mt-3">
                        <h1><a class="navbar-brand">MARKET</a></h1>
                    </div>
                    @foreach($category as $val)
                    <div class="col-2 mt-3 mb-3">                       
                        <a href="/market/{{$val->id}}">
                        <button type="button" class="btn btn-outline-warning btn-lg">{{$val->name}}</button>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-10"></div>
                    
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row mt-1 border border-dark">
                            @foreach ($product as $val)
                            <div class="card" style="width: 18rem;">
                                
                                <div class="card-body">
                                  
                                  <ul class="list-group list-group-flush">
                                        <h3>Name: {{$val->name}}</h3>
                                        <hr>
                                        <h3>Price: {{$val->price}}</h3>
                                        <hr>
                                        <form action="{{route('market')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                                            <input type="hidden" name="product_id" value="{{$val->id}}">
                                            <input type="hidden" name="product_price" value="{{$val->price}}">
                                            <input type="hidden" name="product_name" value="{{$val->name}}">
                                            <input type="hidden" name="status" value="1">
                                            <input type="number" name="caunt" id=""><br><br>
                                            <input type="submit" value="add basket">
                                    </ul>

                                  </form>
                                  
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
</body>
</html>
