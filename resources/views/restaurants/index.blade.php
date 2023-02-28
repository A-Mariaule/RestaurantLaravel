<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
</head>
<body>
@foreach($restaurants as $restaurant)
    <h2>{{ $restaurant->name }}</h2>
    <p>{{ $restaurant->address }}</p>
    <p>{{ $restaurant->zipCode}}</p>
    <p>{{ $restaurant->town}}</p>
    <p>{{ $restaurant->country}}</p>
    <p>{{ $restaurant->description}}</p>
    <p>{{ $restaurant->review}}</p>
@endforeach
</body>
</html>