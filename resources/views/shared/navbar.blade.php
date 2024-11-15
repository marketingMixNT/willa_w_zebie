<nav id="navbar"
    class="fixed h-[100px] w-full flex  justify-between items-center z-50 opacity-0 bg-white px-4 xs:px-6 sm:px-12">


    <div>

        <x-base.button-link href="{{route('contact')}}" target="_blank" class="btn-gold hidden lg:block">{{__('shared.nav.book')}}</x-base.button-link>
    </div>


    <a href={{ route('home') }} class=" absolute left-4 xs:left-6  sm:left-12  lg:left-1/2 lg:-translate-x-1/2">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="logo Willi pod Ściętą Lipą" class="w-32 sm:w-32" width="128"
            height="69">

    </a>




    <ul class="hidden sm:flex justify-center items-center gap-10">
        <li><a href="{{route('villa')}}" class="hover-link text-xl">{{__('shared.nav.item-one')}}</a></li>
        <li><a href="{{route('gallery')}}" class="hover-link text-xl">{{__('shared.nav.item-two')}}</a></li>
        <li><a href="{{route('contact')}}" class="hover-link text-xl">{{__('shared.nav.item-three')}}</a></li>
    </ul>

    <x-nav.hamburger class="sm:hidden" />




</nav>
