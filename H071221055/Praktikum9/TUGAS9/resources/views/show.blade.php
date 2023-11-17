<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>


    <div class="container">
        <h1>Detail Produk</h1>
        
        <table class="table table-bordered">
            <tr>
                <th style="border: 1px solid #ddd;">Name</th>
                <td style="border: 1px solid #ddd;">{{ $vinylProduct->name }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd;">Description</th>
                <td style="border: 1px solid #ddd;">{{ $vinylProduct->description }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd;">Brand</th>
                <td style="border: 1px solid #ddd;">{{ $vinylProduct->brand }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd;">Price</th>
                <td style="border: 1px solid #ddd;">{{ $vinylProduct->price }}</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd;">Stock</th>
                <td style="border: 1px solid #ddd;">{{ $vinylProduct->stock }}</td>
            </tr>
        </table>

        <a href="{{ route('vinyl-products.index') }}" class="btn btn-primary" style="background-color: #000000; border-color: #777777;">Kembali ke Daftar Produk</a>
    </div>

