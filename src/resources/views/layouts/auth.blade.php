<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authenticate Area</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
<main class="font-inter antialiased py-24">
    <section class=" bg-white rounded-lg shadow-lg min-w-[500px] max-w-[600px] mx-auto mt-[150px]">
        <div class="w-[300px] mx-auto flex items-center py-6 px-4">
            <i class="font-inter w-[32px] h-[32px]">
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z">

                    </path>
                </svg>
            </i>
            <h2 class="font-inter uppercase text-gray-800 ml-2">identification required</h2>
        </div>
        {{$slot}}
    </section>
</main>
@vite('resources/js/app.js')
</body>
</html>
