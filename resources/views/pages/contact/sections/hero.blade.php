<div
    class="flex flex-col justify-between items-center px-4 sm:px-8 py-20 h-[70vh] w-full bg-cover bg-center bg-no-repeat bg-fixed bg-gray-400 bg-blend-multiply 
    bg-[url('/public/assets/images/hero/hero-3--mobile.jpeg')]
    md:bg-[url('/public/assets/images/hero/hero-3--desktop.jpeg')]
    xl:bg-[url('/public/assets/images/hero/hero-3--full.jpeg')] ">

    <x-nav.navbar_hero />

    <div class="flex flex-col justify-center items-center gap-12 text-center ">

        <h1 class="text-5xl lg:text-7xl text-fontLight mb-32" >Kontakt</h1>
        <x-base.button-link href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html" target="_blank" class="btn-white md:hidden">Zarezerwuj</x-base.button-link>
    </div>

    <!--RESERVATION PANEL-->
    

        {{-- <div class="be-panel hidden md:block  px-4 bg-white opacity-80 hover:opacity-100 duration-300"></div> --}}
        <div class="hidden md:block "></div>

</div>
