<section
    class="py-10   
bg-[url('/public/assets/images/mobile/willaPodScietaLipa-32.jpg')]
sm:bg-[url('/public/assets/images/desktop/willaPodScietaLipa-32.jpg')]
xl:bg-[url('/public/assets/images/willaPodScietaLipa-32.jpg')] bg-cover bg-center bg-gray-600 bg-blend-multiply bg-no-repeat ">


    <div class="max-w-screen-xl xl:mx-auto text-center py-32 flex flex-col justify-center items-center gap-10  mx-4 sm:mx-12 lg:mx-6">

        
        <x-base.heading_big class="text-white">{{__('home.cta.title')}}
        </x-base.heading_big>
        <x-base.heading_small>{{__('home.cta.subtitle')}}</x-base.heading_small>

        <x-base.button-link  class="btn-white" aria_label="Zarezerwuj" href="{{route('contact')}}" target="_blank">{{__('home.cta.book')}}</x-base.button-link>

    </div>

</section>
