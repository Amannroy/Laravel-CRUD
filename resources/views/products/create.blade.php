<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: #ff0000;
            margin-bottom: 10px;
        }
        .main-link {
            text-align: center;
            margin-bottom: 20px;
        }
        .main-link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .main-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Product</h1>
        @if($errors->any())
        <div class="error-message">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="main-link">
            <a href="{{route('product.index')}}">Go to main Product</a>
        </div>
        <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" />
            </div>
            <div>
                <label for="qty">Qty</label>
                <input type="text" id="qty" name="qty" placeholder="Qty" />
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price" />
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" placeholder="Description" />
            </div>
            <div>
                <input type="submit" value="Save a New Product" />
            </div>
        </form>
    </div>
</body>
</html>
