<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1>{{ $hello }}</h1>
    <h3>{{$test}}</h3>
    <h1>navigation</h1>
    <ul>
        <li><a href="{{route('about')}}">about</a></li>
        <li><a href="{{route('contacts')}}">contacts</a></li>
        <li><a href="{{route('services')}}">services</a></li>

    </ul>
    

</body>
</html>