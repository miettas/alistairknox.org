<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alistair Knox') }}</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <!-- Scripts  -->

     @vite(['resources/css/app.css', 'resources/css/knox.css','resources/js/app.js'])
</head>
<body class="">
   
    <div class="text-gray-900 antialiased">
        <div class="w-screen">
            <div class="container mx-auto">
                @include('includes.navigation')
            </div>
        </div>
        <div class="grid sm:grid-cols-5  mx-12 gap-4" style="background-color:rgb(255, 254, 252">
       

            <!-- col-2 Page Heading  ------>

            <div class="sm:col-span-5 sm:col-start-2 sm:w-screen -mt-8 ">
                <slot name="header">
                    {{ $header }}
                </slot>
            </div>
        
            <!--new row col 1 sidebar  ---------->

            <div style="background-color:rgb(245, 250, 245);" class="hidden md:block md:start-col-1  -ml-8 pl-4 pr-2 font-bold text-gray-500"> 
                <slot name="sidebar">
                    {{ $sidebar }}
                </slot>
            </div> 
            
            <!--col 2 Page Content --------->

            <div class="sm:col-span-3 ">
                <slot name="main">
                    {{ $main }}
                </slot>          
            </div>

            <!-- col 3 ------->

        <div class="">
            <slot name="search">
                {{ $search }}
            </slot>       

            </div>
        </div>
          
        <!-- new row footer-------------->

        <div class="sm:colspan-5 mx-6">
            <slot name="footer">
                <div class="text-sm font-bold">
                    &copy;Mietta's {{ date('Y') }}

                </div>
                {{ $footer }}    
            </slot>
        </div>

    </div>
        

</body>

</html>