<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Create</title>
    </head>
    <body class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">            
            <form action="/restaurant/create" method="POST" class="max-w-md mx-auto bg-white shadow-lg rounded px-8 py-6">
                <h1 class="text-4xl font-bold text-center mt-4">Create</h1>
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('name'))
                        <small class="error text-red-500">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                    <input type="text" name="address" id="address"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('address'))
                        <small class="error text-red-500">{{ $errors->first('address') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="zipCode" class="block text-gray-700 font-bold mb-2">Zip Code</label>
                    <input type="number" name="zipCode" id="zipCode"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('zipCode'))
                        <small class="error text-red-500">{{ $errors->first('zipCode') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="town" class="block text-gray-700 font-bold mb-2">Town</label>
                    <input type="text" name="town" id="town"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('town'))
                        <small class="error text-red-500">{{ $errors->first('town') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
                    <input type="text" name="country" id="country"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('country'))
                        <small class="error">{{ $errors->first('country') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <input type="text" name="description" id="description"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('description'))
                        <small class="error">{{ $errors->first('description') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="review" class="block text-gray-700 font-bold mb-2">Review</label>
                    <input type="number" name="review" id="review"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @if($errors->has('review'))
                        <small class="error">{{ $errors->first('review') }}</small>
                    @endif
                </div>
                <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                <a href="../../restaurants"><button type=button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">Back</button></a>
            </form>
        </div>
    </body>
</html>
