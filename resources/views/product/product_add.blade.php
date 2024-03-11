<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf()
        <input type="text" name="name">
        <input type="text" name="details">
        <input type="text" name="price">
        <input type="submit">
    </form>
</body>
</html>