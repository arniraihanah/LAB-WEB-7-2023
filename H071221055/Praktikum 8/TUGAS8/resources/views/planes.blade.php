<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Produk Planes</h1>
    <table border="1">
    <tr>
        <th>Nama Produk</th>
    </tr>
    @foreach ($planes as $Plane)
        <tr>
            <td><a href="{{url('products/'.$Plane->productCode)}}">{{$Plane['productName']}}</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>