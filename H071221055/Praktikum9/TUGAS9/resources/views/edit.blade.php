<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

    <div class="container">
        <center><h1>Edit Product </h1></center>
        <hr>
        <form action="{{ route('vinyl-products.update', $vinylProduct->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name of Product:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $vinylProduct->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description of Product:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $vinylProduct->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $vinylProduct->brand }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $vinylProduct->price }}" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $vinylProduct->stock }}" required>
            </div><br>

            <button type="submit"  class="btn btn-primary" style="background-color: #000000; border-color: #777777;">Update Data</button>
        </form>
    </div>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
</body>
</html> --}}
