<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store product</title>
</head>
<body>
    <div>
        <form action="{{route('cart.post')}}" method="POST">
            @csrf
            <input  type="text" name="product_id"  value="{{$product->id}}"/>
            <input placeholder="count" type="text" name="quntity"  value="1"/>
            <input type="submit" value="insert" />
        </form>
    </div> 
</body>
</html>