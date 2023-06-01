<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-1">
            <a href="{{route('market_p')}}">home</a>
        </div>
        <div class="col-10">
          <table class="table table-white table-striped">
            <thead>
                <tr>
                    <th>Q/s</th>
                    <th>Product</th>
                    <th>price</th>
                    <th>caunt</th>
                    <th>summa</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach ($baskets as $val)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$val->product_name}}</td>
                <td>{{$val->product_price}}</td>
                <td>{{$val->caunt}}</td>
                <td>{{$val->summa}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <hr>
          <tr>
            <td>Jami:{{$summa}}</td>
          </tr>
          <a href="{{route('money')}}"><button type="button" class="btn btn-primary">Tolew</button></a>
          <hr>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>