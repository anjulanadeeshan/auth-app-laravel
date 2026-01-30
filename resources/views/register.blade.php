<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<body>
    <h3>Register page</h3>
    @if(session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div style="color: red; margin-bottom: 10px;">
        <ul  style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('register.store')}}">
        @csrf
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        Confirm password: <input type="password" name="password_confirmation"><br>
        <button type="submit">Register</button>
    </form>

    <a href="{{route('login')}}">alreadey have an account</a>
</body>

</html> 