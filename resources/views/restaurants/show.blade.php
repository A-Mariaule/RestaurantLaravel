<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Show</title>
    </head>
    <body class="font-sans bg-gray-100 flex flex-col">
        <section class="flex place-content-around ">        
        <div class="bg-white rounded-lg shadow-md p-4 mt-4 w-64 flex flex-col items-center">
        <h1 class="text-4xl font-bold text-center mt-4">Restaurant {{ $restaurant->name }} </h1>
                <p class="mt-2">{{ $restaurant->address }}</p>
                <p class="mt-1">{{ $restaurant->zipCode}} {{ $restaurant->town}}, {{ $restaurant->country}}</p>
                <p class="mt-4">{{ $restaurant->description}}</p>
                <p class="mt-2">{{ $restaurant->review}}</p>
        </div>
        </section>
        <div class="mx-auto">
            <a href="../edit/{{ $restaurant->id}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button></a>
            <form action="../destroy/{{ $restaurant->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete</button>
            </form>
            <a href="../../restaurants"><button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">Back</button></a>
        </div>
    </body>
</html>