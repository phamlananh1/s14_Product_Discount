<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form name="Product"  method="post" action="{{route('Product')}}">
    <p>@csrf</p>
    <p>
        <input type="text" name="Product" placeholder="Mo ta san pham">
    </p>
    <p>
        <input type="number" name="Price" placeholder="Gia niem yet san pham">
    </p>
    <p>
        <input type="number" name="Discount" placeholder="Ty le chiet khau">
    </p>
    <p>
        <button type="submit">Discount Percent:</button>
    </p>
</form>
</body>
</html>