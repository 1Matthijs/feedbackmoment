<!DOCTYPE html>
<html>
<head>
    <title>Opdracht</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
    <p>{{ $name }}</p>
    <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Origin</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fruits as $fruit)
            <tr>
                <td>{{ $fruit->name }}</td>
                <td>{{ $fruit->origin }}</td>
                <td>{{ $fruit->stock }}</td>
                <td>{{ $fruit->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
