<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edite</title>
    </head>
    <body>
        <form action ="/restaurant/edit/{{$restaurant->id}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $restaurant->name }}">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $restaurant->address }}">
        <label for="zipCode">Zip Code</label>
        <input type="number" name="zipCode" id="zipCode" value="{{ $restaurant->zipCode }}">
        <label for="town">Town</label>
        <input type="text" name="town" id="town" value="{{ $restaurant->town }}">
        <label for="country">Country</label>
        <input type="text" name="country" id="country" value="{{ $restaurant->country }}">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $restaurant->description }}">
        <label for="review">Review</label>
        <input type="number" name="review" id="review" value="{{ $restaurant->review }}">
        <input type="submit" value="Submit">
        @if($errors->has('name'))
            <small class="error">{{ $errors->first('name') }}</small>
        @endif
        @if($errors->has('address'))
            <small class="error">{{ $errors->first('address') }}</small>
        @endif
        @if($errors->has('zipCode'))
            <small class="error">{{ $errors->first('zipCode') }}</small>
        @endif
        @if($errors->has('town'))
            <small class="error">{{ $errors->first('town') }}</small>
        @endif
        @if($errors->has('country'))
            <small class="error">{{ $errors->first('country') }}</small>
        @endif
        @if($errors->has('description'))
            <small class="error">{{ $errors->first('description') }}</small>
        @endif
        @if($errors->has('review'))
            <small class="error">{{ $errors->first('review') }}</small>
        @endif
        </form>
    </body>
</html>