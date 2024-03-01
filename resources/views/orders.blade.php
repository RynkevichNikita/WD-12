<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/orders" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="orderNumber">Choose Order Number: </label>
            <select name="orderNumber" id="orderNumber">
                @foreach ($orders as $order)
                    <option value="{{ $order->orderNumber }}">{{ $order->orderNumber }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="status">Choose status: </label>
            <select name="status" id="status">
                <option value="Completed">Completed</option>
                <option value="Shipped">Shipped</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Disputed">Disputed</option>
                <option value="In Progress">In Progress</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>