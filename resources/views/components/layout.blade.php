<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet">
    <title>{{ isset($title) ? $title . '-MyChirper' : 'MyChirper'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <div>
            <a href="/">Chirper</a>
        </div>

        <div>
            <a href="#">Sign In</a>
            <a href="#">Sign Up</a>
        </div>
    </nav>

   @if (session('success'))
    <div class="toast toast-top toast-center">
        <div class="alert alert-success">
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Chirper - Built by Preksha </p>
    </footer>

</body>

</html>