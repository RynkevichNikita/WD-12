<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Report</title>
</head>
<body>
    <form action="reports" method="POST">
        @csrf
        <label for="customer">Select the number of a customer if needed: </label>
        <select name="customer" id="customer">
            <option value="all">All</option>
            @foreach ($customers as $customer)
                <option value="{{ $customer->customerNumber }}">{{ $customer->customerNumber }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>