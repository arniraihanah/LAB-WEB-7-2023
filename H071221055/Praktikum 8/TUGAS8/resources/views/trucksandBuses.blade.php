<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Produk Trucks and Buses</h1>
    <table border="1">
    <tr>
        <th>Nama Produk</th>
    </tr>
    @foreach ($trucksandbuses as $TrucksandBuses)
        <tr>
            {{-- <td>{{$TrucksandBuses['productName']}}</td> --}}
            <td><a href="{{url('products/'.$TrucksandBuses->productCode)}}">{{$TrucksandBuses['productName']}}</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>