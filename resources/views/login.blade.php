<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h3>Login Page</h3>

    @if($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul style="list-style: none; padding: 0;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        Email: <input type="email" name="email" value="{{ old('email') }}"><br>
        Password: <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register.form') }}">Register here</a></p>
</body>
</html>