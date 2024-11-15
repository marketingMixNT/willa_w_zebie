@props(['class' => '', 'heading' => '', 'reservationPanel' => true])


{{--in $class insert bgi and h--}}

<header
    class="flex flex-col justify-between items-center px-4 sm:px-8 py-20 h-screen w-full bg-cover bg-center bg-no-repeat bg-fixed bg-gray-400 bg-blend-multiply 
   {{ $class }}">

    <x-nav.navbar_hero />

    <div class="flex flex-col justify-center items-center gap-12 text-center ">

        <h1 class="text-5xl lg:text-7xl text-fontLight mb-32">{{ $heading }}</h1>
        @if ($reservationPanel)
            <x-base.button-link href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html" href="_blank" class="btn-white md:hidden">Zarezerwuj</x-base.button-link>
        @endif
    </div>

    <!--RESERVATION PANEL-->

    {{-- @if ($reservationPanel)
        <div class="be-panel hidden md:block  px-4 bg-white opacity-80 hover:opacity-100 duration-300"></div>
    @endif --}}
    <div></div>

</header>
