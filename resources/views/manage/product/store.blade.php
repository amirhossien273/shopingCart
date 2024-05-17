<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store product</title>
</head>
<body>
    <div>
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <input placeholder="title" type="text" name="title"  value="test"/>
            <input placeholder="price" type="text" name="price"  value="20"/>
            <input placeholder="quntity" type="text" name="quntity"  value="12"/>
            <input placeholder="category_id" type="text" name="category_id"  value="1"/>
            <textarea name="description" >test....</textarea>
            <input type="submit" value="insert" />
        </form>
    </div> 
</body>
</html>