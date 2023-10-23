<x-auth-layout>
    <form action="{{route('login')}}" method="POST" autofocus
          class="h-[300px] mt-[100px]] bg-white rounded-lg border-red-200 shadow-lg min-w-[600px] max-w-[650px] mx-auto items-center">
        @csrf
        <div class="relative py-2 px-4 flex flex-wrap items-center">
            <input
                type="text"
                name="username"
                autofocus
                placeholder="Enter your username"
                value=""
                class="w-full  border border-gray-300 rounded text-gray-900 focus:outline-2
                   focus:outline-indigo-200 focus:border-indigo-500 focus:ring-1 focus:ring-white">
        </div>
        <div class="relative py-3 px-4  flex flex-wrap items-center">
            <input
                type="text"
                name="username"
                placeholder="Enter your password"
                autofocus
                value=""
                class="w-full  border border-gray-300 rounded text-gray-900 focus:outline-2
                   focus:outline-indigo-200 focus:border-indigo-500 focus:ring-1 focus:ring-white">
        </div>
        <div class="relative py-3 px-4  flex flex-wrap items-center">
            <div class="w-[300px]">
                <input
                    type="checkbox"
                    name="remember_me"
                    value=""
                    class="border border-gray-300 rounded text-gray-900 focus:outline-2
                focus:outline-indigo-200 focus:border-indigo-500 focus:ring-1 focus:ring-white">
                <label for="remember_me" class="py-1 px-2">Remember me</label>

            </div>
            <div class="flex items-center right-0 w-[200px] text-rose-400">
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
                <a href="#" class="text-sm py-1 px-2 ">I forgot my password</a>
            </div>
        </div>
        <div class="relative py-3 px-4  flex flex-wrap items-center ">
            <button
                type="submit"
                class="bg-indigo-500 text-sm uppercase w-[calc(100%-100px)] m-auto
                 text-white font-bold py-2 px-4 rounded hover:bg-indigo-600"
            >
                Login
            </button>
        </div>
    </form>
</x-auth-layout>
