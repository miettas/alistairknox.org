<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alistair Knox') }}</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <link href="/css/knox_screen.css" rel="stylesheet">

    <!-- Scripts  -->
    @vite(['resources/css/app.css', 'resources/css/knox.css','resources/js/app.js'])
    
</head>
<body class="">

    <div class="text-gray-900 antialiased">
        <div class="w-screen">
            <div class="container mx-auto">@include('includes.navigation')</div>
        </div>

        <div class="grid grid-cols-1 mx-12 ">    

            <!-- start header -------------->

            <div class="">
                <slot name="header">
                    {{ $header}}
                </slot>
            </div>
            <br />

            <!-- new row main-------------->
           
            <div>
                <slot name="main">
                    {{ $main }}
                </slot>
            </div>
            
            <!-- new row footer-------------->

            <div >
                <slot name="footer">
                    <div class="text-sm font-bold">
                        &copy;Mietta's 2023
                    </div>
                    {{ $footer }}
                </slot>
            </div>
        </div>
    </div>

</body>

</html>