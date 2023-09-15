<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>School Management</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <livewire:scripts />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <livewire:styles />
    
</head>

<body>
    <livewire:navbar />
    {{$slot}}
</body>

</html>