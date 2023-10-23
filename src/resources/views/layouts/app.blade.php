<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 font-inter">
{{--Start the side section--}}
<section class="fixed top-0 left-0 w-64 h-full bg-gray-900 p-4">
    {{--    dashboard logo--}}
    @include('admin-dashboard::layouts.partials.logo')
    {{--    end dashboard logo--}}
    {{--    side menu links--}}
    @include('admin-dashboard::layouts.partials.side-menu')
    {{--    end side menu links--}}
</section>
{{-- End Side Section--}}

{{--Main Content Section--}}
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    {{--    Navigation bar--}}
    @include('admin-dashboard::layouts.partials.navigationa-bar')
    {{--    End Navigation bar--}}

    <section class="py-2 px-6 bg-white flex items-center">
        {{$slot}}
    </section>
</main>
{{--End Content Section--}}
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite('resources/js/app.js')
</body>
</html>
