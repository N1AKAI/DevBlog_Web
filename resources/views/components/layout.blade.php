<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body class="font-['Poppins']">
    <!-- Header -->
    <header class="bg-white p-1 sm:p-0 relative">
        <div class="container mx-auto">
            <div class="flex items-center text-black">
                <h1 class="text-2xl font-bold grow text-red-400">DevBlog</h1>
                <nav class="hidden items-center me-12 sm:flex">
                    <a class="py-3.5 px-2 bg-white duration-300 hover:bg-red-400 hover:text-white"
                        href="">Home</a>
                    <a class="py-3.5 px-2 bg-white duration-300 hover:bg-red-400 hover:text-white"
                        href="">Posts</a>
                    <a class="py-3.5 px-2 bg-white duration-300 hover:bg-red-400 hover:text-white"
                        href="">Categories</a>
                    <a class="py-3.5 px-2 bg-white duration-300 hover:bg-red-400 hover:text-white" href="">About
                        US</a>
                    <a class="py-3.5 px-2 bg-white duration-300 hover:bg-red-400 hover:text-white"
                        href="">Contact US</a>
                </nav>
                <div class="hidden sm:flex">
                    @auth
                        <div class="relative">
                            <div class="w-[40px] h-[40px] overflow-hidden rounded-[50%] border border-gray-300 shadow cursor-pointer"
                                onclick="showToggle()">
                                <img src="{{ asset(auth()->user()->avatar) }}" alt="">
                            </div>
                            <ul id="dropdown-options"
                                class="hidden shadow-lg absolute top-[calc(100%+15px)] left-1/2 -translate-x-1/2 bg-white p-4 z-10 rounded-b-lg border-t border-slate-200">
                                <span
                                    class="absolute bottom-full z-20 left-1/2 -translate-x-1/2 border-[12px] border-t-transparent border-l-transparent border-b-slate-200 border-r-transparent"></span>
                                <li class="p-2 hover:text-red-400"><a href="/dashboard">Dashboard</a></li>
                                <li class="p-2 hover:text-red-400"><a href="/profile">Profil</a></li>
                                <li class="p-2 hover:text-red-400">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a class="p-2 duration-300 hover:text-red-700" href="/register"><i
                                class="fa-solid fa-user-plus"></i>
                            Register</a>
                        <a class="p-2 duration-300 hover:text-red-700" href="/login"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                    @endauth
                </div>
                <div class="sm:hidden">
                    <i class="fa-solid fa-bars fa-xl"></i>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <!-- Footer -->
    <footer class="bg-red-400">
        <div class="p-8 flex justify-center items-center flex-col">
            <div class="p-4">
                <ul class="flex space-x-2 items-center">
                    <li><a class="flex justify-center items-center w-[35px] h-[35px] bg-white text-red-400 duration-300 hover:text-white hover:bg-red-700"
                            href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="flex justify-center items-center w-[35px] h-[35px] bg-white text-red-400 duration-300 hover:text-white hover:bg-red-700"
                            href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a class="flex justify-center items-center w-[35px] h-[35px] bg-white text-red-400 duration-300 hover:text-white hover:bg-red-700"
                            href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="text-white">
                <ul class="flex">
                    <li><a href="#">Terms of Use</a></li>
                    <li class="mx-1">-</li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="text-white">&copy; 2023 - ABOULHODA SAAD</div>
            <x-flash-message />
        </div>
    </footer>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
