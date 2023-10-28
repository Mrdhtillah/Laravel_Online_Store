<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            background-color: rgb(82, 109, 125);
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999; 
        }


        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            padding: 5px;
        }

        .alert {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 3px;
        }

        .error {
            color: #f00;
            font-size: 14px;
            margin-top: 5px;
        }

        button[type="submit"] {
            background-color: rgb(82, 109, 125);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="age">Age</label>
        <input type="number" name="age" value="{{ old('age') }}">
        @error('age')
            <p>{{ $message }}</p>
        @enderror

        <label for="image">Image of piece (Max 2MB, .jpeg/.jpg/.png)</label>
        <input type="file" name="image">
        @error('image')
            <p>{{ $message }}</p>
        @enderror

        <label for="price">Price of piece (Between $2.50 and $99.99)</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Submit</button>
    </form>
    @if (session('success'))
    @include('success')
    @endif
</body>
</html>
