<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Produk Motorcycles</h1>
    <table border="1">
    <tr>
        <th>Nama Produk</th>
    </tr>
    @foreach ($motorcycles as $Motorcycle)
        <tr>
            <td><a href="{{url('products/'.$Motorcycle->productCode)}}">{{$Motorcycle['productName']}}</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>





{{-- <!DOCTYPE html>
<html>

<head>
    <title>Jenis Produk</title>
</head>

<body>
    <h1>Jenis Produk:</h1>

    <ul>
    @foreach ($motorcycles as $Motorcycle)
        <li>{{ $Motorcycle->type }}</li>
    @endforeach
</ul>
</body>

</html> --}}
