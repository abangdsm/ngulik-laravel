<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} &mdash; {{ $title }}</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbars.css">
</head>

<body>

    <x-navbar>{{ $title }}</x-navbar>

    <main>
        {{ $slot }}
    </main>


    {{-- Bootstrap JS --}}
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
