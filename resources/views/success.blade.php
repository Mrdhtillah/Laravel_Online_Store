<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column; 
            align-items: center; 
        }

        h1 {
            background-color: rgb(82, 109, 125);
            color: #fff;
            padding: 20px;
            width: 100%; 
        }

        h2 {
            margin: 10px 0;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Success!</h1>

        @if (session('success'))
            <h2>Name: {{ session('name') }}</h2>
            <h2>Email: {{ session('email') }}</h2>
            <h2>Age: {{ session('age') }}</h2>
            <h2>Price of piece: ${{ session('price') }}</h2>

            <img src="{{ asset('images/' . session('image')) }}" alt="Uploaded Image">
        @endif
    </div>
</body>
</html>
