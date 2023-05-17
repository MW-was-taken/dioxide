<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dioxide</title>
    <link rel="stylesheet" href="/css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-4">
                <h1>
                    Dioxide
                </h1>
            </div>
            <div class="col-4">
                <h1>
                    Login
                </h1>
            </div>
            <div class="col-4">
                <h1>
                    Register
                </h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-4">
                <p>
                    A <dfn><abbr title="Free and Open Source Software">FOSS</abbr></dfn> platform powering the future of social media.
                </p>
            </div>
            <div class="col-4">
                <form action="{{route('login.post')}}" method="post">
                    <input type="email" placeholder="Email Address" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button class="success">
                        Login
                    </button>
                </form>
            </div>
            <div class="col-4">
                <form action="{{route('login.post')}}" method="post">
                    <input type="email" placeholder="Email Address" name="email">
                    <input type="username" placeholder="Username" name="username">
                    <label for="username" class="input-label">
                        Displays as @username
                    </label>
                    <input type="password" placeholder="Password" name="password">
                    <button class="primary">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
