<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a Product</title>
</head>
<body>

        <h1>Edit a Product</h1>
        <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}">
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}">
            <br>
            <button type="submit">Update</button>
        </form>

</body>
</html>
