{{-- @foreach ($produk as $products)
    <p>Nama Produk : {{$products['productName']}}</p>
    <p>Jenis Produk : {{$products['productLine']}}</p>
    <p>Vendor Produk : {{$products['productVendor']}}</p>
    <p>Jumlah stok : {{$products['quantityInStock']}}</p>
    <p>--------------------------------------------------------------------------</p>
@endforeach --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Vendor Produk</th>
        <th>Jumlah Stok</th>
        

    </tr>
    @foreach ($produk as $products)
    <tr>
        <td>{{$products['productCode']}}</td>
        <td>{{$products['productName']}}</td>
        <td>{{$products['productLine']}}</td>
        <td>{{$products['productVendor']}}</td>
        <td>{{$products['quantityInStock']}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>



{{-- <p>Kode Produk : {{$products['productCode']}}</p> --}}
{{-- <p>Skala Produk : {{$products['productScale']}}</p> --}}
{{-- <p>Deksripsi Produk : {{$products['productDescription']}}</p> --}}
{{-- <p>Harga Produk : {{$products['buyPrice']}}</p>
    <p>Harga/satuan : {{$products['MSRP']}}</p> --}}