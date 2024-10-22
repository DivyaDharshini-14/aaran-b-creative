<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" id="navBar"
     class="flex items-center justify-between px-6 py-4 tracking-wider text-white border-b sm:fixed sm:z-40 sm:w-full border-neutral-300 sm:px-32 dark:border-neutral-700"
     aria-label="penguin ui menu">
    <!-- Brand Logo -->
    <a href="#" class="inline-flex items-center gap-4 text-2xl font-bold">
        <span>
            <x-assets.logo.brand logo="{{ \App\Helper\ConvertTo::toLower(config('aadmin.brand'))}}" class=""/>
        </span>
        <span class="transition-all duration-300 ease-out hover:scale-110">{{ config('aadmin.brand')}}</span>
    </a>
    <!-- Desktop Menu -->
    <ul class="items-center hidden gap-16 md:flex">
        <li class="transition-all duration-300 ease-out hover:tracking-wide hover:font-bold hover:text-black hover:underline">
            <a href="{{route('home')}}"
               class=" underline-offset-2 focus:outline-none focus:underline dark:text-white dark:hover:text-white"
               aria-current="page" wire:navigate>Home</a></li>
        <li class="transition-all duration-300 ease-out hover:tracking-wide hover:font-bold hover:text-black hover:underline">
            <a href="{{route('about')}}"
               class=" underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
               wire:navigate>About</a>
        </li>
        <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-black hover:underline">
            <a href="{{route('blog')}}"
               class=" underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
               wire:navigate>Blog</a>
        </li>
        <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-black hover:underline">
            <a href="{{route('service')}}"
               class=" underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
               wire:navigate>Services</a>
        </li>
        <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-black hover:underline">
            <a href="{{route('contact')}}"
               class=" underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
               wire:navigate>Contact</a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-cyan-300 hover:underline">
                    <a href="{{route('dashboard')}}"
                       class="underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
                       wire:navigate>Dashboard</a>
                </li>
                <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-red-300 drop-shadow-lg hover:underline">
                    <a href="{{route('logout')}}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class=" underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
                       wire:navigate>Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            @else
                <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-cyan-300 hover:underline">
                    <a href="{{route('login')}}"
                       class="font-semibold underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
                       wire:navigate>Login</a>
                </li>
                <li class="transition-all duration-300 ease-out hover:tracking-wider hover:font-bold hover:text-cyan-300 hover:underline">
                    <a href="{{route('register')}}"
                       class="font-semibold underline-offset-2 focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white"
                       wire:navigate>Register</a>
                </li>

            @endauth
        @endif
    </ul>
    <!-- Mobile Menu Button -->
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen"
            :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-50' : null" type="button"
            class="flex text-neutral-600 dark:text-neutral-300 md:hidden" aria-label="mobile menu"
            aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
        class="fixed inset-x-0 top-0 z-20 flex flex-col px-6 pt-20 pb-6 overflow-y-auto border-b divide-y max-h-svh divide-neutral-300 rounded-b-md border-neutral-300 bg-neutral-50 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900 md:hidden">

        <li class="py-2"><a href="{{route('home')}}"
                            class="w-full text-sm font-bold text-neutral-600 focus:underline dark:text-neutral-300 "
                            wire:navigate
            >Home</a></li>
        <li class="py-2"><a href="{{route('about')}}"
                            class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                            wire:navigate>About</a>
        </li>
        <li class="py-2"><a href="{{route('blog')}}"
                            class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                            wire:navigate>Blog</a>
        </li>
        <li class="py-2"><a href="{{route('service')}}"
                            class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                            wire:navigate>Services</a>
        </li>
        <li class="py-2"><a href="{{route('contact')}}"
                            class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                            wire:navigate>Contact</a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="py-2"><a href="{{route('dashboard')}}"
                                    class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                                    wire:navigate>Dashboard</a>
                </li>
                <li class="py-2"><a href="{{route('logout')}}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                                    wire:navigate>Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            @else
                <li class="py-2"><a href="{{route('login')}}"
                                    class="w-full text-sm font-medium text-neutral-600 focus:underline dark:text-neutral-300"
                                    wire:navigate>Login</a>
                </li>
            @endauth
        @endif
    </ul>
</nav>

<style>
    .pa-fixed-header {
        background-color: #ffffff !important;
        -webkit-transition: background-color 1s ease-out;
        -moz-transition: background-color 1s ease-out;
        -o-transition: background-color 1s ease-out;
        transition: background-color 1s ease-out;
    }

    .text-black {
        /*color: #157293 !important;*/
        /*color: #3F5AF3 !important;*/
        color: black !important;
    }
</style>

<script>

    // Toggle the .pa-fixed-header class when the user
    // scroll 100px

    window.onscroll = () => {
        scrollNavbar()
    };

    scrollNavbar = () => {
        // Target elements
        const navBar = document.getElementById("navBar");
        const links = document.querySelectorAll("#navBar a");

        if (document.documentElement.scrollTop > 100) {
            navBar.classList.add("pa-fixed-header");

            // Change the color of links on scroll
            for (let i = 0; i < links.length; i++) {
                const element = links[i];
                element.classList.add('text-black');
            }

        } else {
            navBar.classList.remove("pa-fixed-header");

            // Change the color of links back to default
            for (let i = 0; i < links.length; i++) {
                const element = links[i];
                element.classList.remove('text-black');
            }
        }
    }

</script>
