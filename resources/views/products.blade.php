<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Product List</h1>

    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>

            <p>Price: ₹{{ $product->price }}</p>

            <p>{{ $product->description }}</p>
        </div>

        <hr>
    @endforeach

</body>
</html>
