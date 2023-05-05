<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .content{
            font-weight: normal;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body class="antialiased overflow-x-clip flex items-center justify-center">
    <div class="max-w-[414px]">
        @includeIf('header')

        <div class="pt-[10rem] pb-[4rem] content relative">
            <div class="p-4">
                @yield('content')
            </div>
        </div>

        @includeIf('footer')
    </div>
</body>
</html>
