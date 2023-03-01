<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restaurants</title>
</head>
<body class="font-sans bg-gray-100 flex flex-col">
    <h1 class="text-4xl font-bold text-center mt-4">Restaurants</h1>
    <section class="flex place-content-around flex-wrap">
        @foreach($restaurants as $restaurant)
        <div class="bg-white rounded-lg shadow-md p-4 mt-4 w-64 flex flex-col items-center">
            <a href="restaurant/show/{{ $restaurant->id}}"><h2 class="text-3xl font-bold underline">{{ $restaurant->name }}</h2></a>
            <p class="mt-2">{{ $restaurant->address }}</p>
            <p class="mt-1">{{ $restaurant->zipCode}} {{ $restaurant->town}}, {{ $restaurant->country}}</p>
            <p class="mt-4">{{ $restaurant->description}}</p>
            <p class="mt-2">{{ $restaurant->review}}</p>
            <a href="restaurant/edit/{{ $restaurant->id}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button></a>
            <form action="restaurant/destroy/{{ $restaurant->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete</button>
            </form>
        </div>
        @endforeach
    </section>
    <div class="mx-auto">
  <a href="restaurant/create"><button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 ">Create</button></a>
</div>
</body>
</html>