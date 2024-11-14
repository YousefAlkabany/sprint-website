<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100 ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand me-5" href="/home">Sprint-<spam class="text-warning">Job</spam></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/jobs">Jobs</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/jobs/create">Add</a>
                </li>

            </ul>
            @guest
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            @endguest
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-2">
                            <button type="submit" class="nav-link btn btn-link text-decoration-none">Logout</button>
                        </li>
                    </ul>
                </form>
            @endauth
        </div>
    </nav>
    <section class="p-3 bg-light text-start text-dark">
        <div class="container">
            <div class="d-sm-flex ">
                <div>
                    <h1>{{ $heading }}</h1>
                </div>
            </div>
        </div>
    </section>


    {{ $slot }}

</body>

</html>
