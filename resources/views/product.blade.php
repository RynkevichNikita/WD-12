<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        tr:nth-child(odd) {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <table>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->productCode }}</td>
                <td>{{ $product->productName }}</td>
                <td>{{ $product->productLine }}</td>
                <td>{{ $product->productScale }}</td>
                <td>{{ $product->productVendor }}</td>
                <td>{{ $product->productDescription }}</td>
                <td>{{ $product->quantityInStock }}</td>
                <td>{{ $product->buyPrice }}</td>
                <td>{{ $product->MSRP }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>