
    <x-base.section class="max-w-screen-xl xl:mx-auto">



    <div class="flex flex-col justify-center gap-10 items-center text-center">

        <h2 class="text-6xl font-JazminThin">{{__('home.attractions.title')}}</h2>
        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest uppercase">{{__('home.attractions.subtitle')}}</span>


    </div>
    <div class="grid lg:grid-cols-3 gap-6 2xl:gap-12 mt-12 px-6 lg:px-0 md:opacity-0 image-animation">


        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-4.jpg') }}" subtitle="{{__('home.attractions.first-subtitle')}}"
            title="{{__('home.attractions.first-title')}}">{{__('home.attractions.first-desc')}}</x-home.attraction_card>
        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-2.jpg') }}" subtitle="{{__('home.attractions.second-subtitle')}}"
            title="{{__('home.attractions.second-subtitle')}}">{{__('home.attractions.second-desc')}}</x-home.attraction_card>
        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-3.jpg') }}" subtitle="{{__('home.attractions.third-subtitle')}}"
            title="{{__('home.attractions.third-subtitle')}}">{{__('home.attractions.third-desc')}}</x-home.attraction_card>

    </div>
    </x-base.section>