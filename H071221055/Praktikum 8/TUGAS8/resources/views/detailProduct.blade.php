{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Detail Produk</h1>

        @foreach($reads as $read)
            <p>========================================================</p>
            <p>Kode Produk : {{$read -> productCode}}</p>
            <p>Nama Produk : {{$read -> productName}}</p>
            <p>Jenis Produk: {{$read -> productLine}}</p>
            <p>Skala Produk : {{$read -> productScale}}</p>
            <p>Vendor Produk : {{$read -> productVendor}}</p>
            <p>Deskripsi Produk : {{$read -> productDescription}}</p>
            <p>Stok : {{$read -> quantityInStock}}</p>
            <p>Harga : {{$read -> buyPrice}}</p>
            <p>MSRP: {{$read -> MSRP}}</p>
        @endforeach
</body>
</html> --}}
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
            <th>Skala Produk</th>
            <th>Vendor Produk</th>
            <th>Deskripsi Produk</th>
            <th>Jumlah Stok</th>
            <th>Harga Produk</th>
            <th>Harga/Satuan</th>
        </tr>

        @foreach ($productDetails as $products)
            <td>{{$products['productCode']}}</td>
            <td>{{$products['productName']}}</td>
            <td>{{$products['productLine']}}</td>
            <td>{{$products['productScale']}}</td>
            <td>{{$products['productVendor']}}</td>
            <td>{{$products['productDescription']}}</td>
            <td>{{$products['quantityInStock']}}</td>
            <td>{{$products['buyPrice']}}</td>
            <td>{{$products['MSRP']}}</td>
        @endforeach
    </table>
    {{-- @foreach ($productDetails as $products)
    <p>Kode Produk : {{$products['productCode']}}</p> 
    <p>Nama Produk : {{$products['productName']}}</p>
    <p>Jenis Produk : {{$products['productLine']}}</p>
    <p>Skala Produk : {{$products['productScale']}}</p>
    <p>Vendor Produk : {{$products['productVendor']}}</p>
    <p>Deksripsi Produk : {{$products['productDescription']}}</p>
    <p>Jumlah stok : {{$products['quantityInStock']}}</p>
    <p>Harga Produk : {{$products['buyPrice']}}</p>
    <p>Harga/satuan : {{$products['MSRP']}}</p> 
    <p>--------------------------------------------------------------------------</p>
@endforeach  --}}
</body>
</html>