<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2Coom Portal</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @include('style-tag')
</head>

<body class="antialiased">
    <div
        class="min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-5xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="{{ asset('img/coom.jpg') }}" alt="">
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @include('excel-django')
                    @include('dash-analytica')
                    @include('custcoom-lb')
                    @include('custcoom-tm')
                    @include('attendance')
                    @include('commerce')
                    @include('pivotAnalytica')
                </div>
            </div>
        </div>
    </div>

</body>

</html>
