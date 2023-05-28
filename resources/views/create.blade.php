<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New Product</title>
</head>
<body>

        <h1>Create a New Product</h1>
        <form action="/products" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
            <br>
            <button type="submit">Create</button>
        </form>

</body>
</html>
