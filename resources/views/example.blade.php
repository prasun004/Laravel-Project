<!DOCTYPE html>
<html lang="en">
<head>
    <title>LARAVEL</title>
</head>
<body>
    <h1> The product is{{$multi}} </h1>
    @if ($multi > 20)
        <h2> Your product is greater than 20</h2>
    @else
        <h2> Your product is less than 20</h2>
        @endif
</body>
</html>
