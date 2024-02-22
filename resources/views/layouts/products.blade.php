<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($products as $product)
        <li> {{ $product->productName }} </li> 
    @empty
        <h2>Stock is empty</h2>
    @endforelse
</body>
</html>