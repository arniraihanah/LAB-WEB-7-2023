<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Produk Classic Cars</h1>
    <table border="1">
    <tr>
        <th>Nama Produk</th>
    </tr>
    @foreach ($classiccars as $ClassicCars)
        <tr>
            <td><a href="{{url('products/'.$ClassicCars->productCode)}}">{{$ClassicCars['productName']}}</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>