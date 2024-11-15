<nav  class="relative w-full flex flex-row-reverse justify-between items-center 2xl:px-6">



    <a href={{ route('home') }} class=" absolute left-1/2 -translate-x-1/2">
        <img src="{{ asset('assets/logo/logo--white.png') }}" alt="logo Willi pod Ściętą Lipą" class="w-32 sm:w-40" width="160" height="87">

    </a>

    <div class="flex gap-8 2xl:gap-12 items-center">

        <x-nav.language_switcher />

        <x-base.button-link  class="btn-white hidden lg:block " aria_label="Zarezerwuj" href="{{route('contact')}}" target="_blank">{{__('shared.nav.book')}}</x-base.button-link>

    </div>

</nav>
