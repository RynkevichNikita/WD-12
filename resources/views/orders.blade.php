<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>
<body>
    <form action="orders" method="POST">
        @csrf
        @method('PATCH')
        <label for="orderNumber">Select the order: </label>
        <select name="orderNumber" id="orderNumber">
            @foreach ($orders as $order)
                <option value="{{$order->orderNumber}}">{{$order->orderNumber}}</option>
            @endforeach
        </select>
        <div>
            <label for="status">Change status to: </label>
            <select name="status" id="status">
                <option value="Completed">Completed</option>
                <option value="Shipped">Shipped</option>
                <option value="In Progress">In Progress</option>
                <option value="On Hold">On Hold</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>