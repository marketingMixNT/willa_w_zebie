
<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36">

{{--FIRST GRID--}}
    <x-home.description_grid>

        {{-- swiper --}}
        <div class="swiper description w-full mx-auto h-full xl:h-4/5 2xl:h-full  md:w-3/4 2xl:w-full max-h-[700px]  md:opacity-0 image-animation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-35.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-35.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-36.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-36.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-46.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-46.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">
                </div>


                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-49.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-49.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

            </div>
        </div>

        {{-- text --}}
        <div class="flex flex-col  items-center text-center gap-10 py-16">


            <span
                class="text-bg text-7xl xs:text-8xl md:text-9xl  bg-[url('/public/assets/text.jpeg')] bg-cover uppercase tracking-widest font-bold">{{__('home.villa_description.title-first')}}</span>



            <x-base.heading_big class="text-primary-400">{{__('home.villa_description.subtitle-first')}}</x-base.heading_big>
            <div class="flex flex-col justify-center items-center gap-2">

                <x-home.description_text>{{__('home.villa_description.text-first')}}</x-home.description_text>

                <x-home.description_text>{{__('home.villa_description.text-second')}}</x-home.description_text>
                <x-home.description_text>{{__('home.villa_description.text-third')}}</x-home.description_text>
            </div>
        </div>

    </x-home.description_grid>

{{--SECOND GRID--}}
    <x-home.description_grid>
        {{--text--}}
        <div class="flex flex-col  items-start text-left gap-6 py-16 order-1 xl:order-none">
            <x-base.heading_big class="text-fontDark">{{__('home.villa_description.title-second')}}</x-base.heading_big>
            <x-base.heading_small>{{__('home.villa_description.subtitle-second')}}</x-base.heading_small>
            </span>
            <div>

            </div>
            <x-home.description_text>{{__('home.villa_description.text-fourth')}}

            </x-home.description_text>

            <x-home.description_text>{{__('home.villa_description.text-fifth')}}
            </x-home.description_text>
            <x-base.link href="{{route('villa')}}">{{__('home.villa_description.find-out-more')}}</x-base.link>
        </div>


        {{-- swiper --}}
        <div class="swiper description--second w-full mx-auto  md:w-3/4 xl:w-full  h-full xl:h-4/5 2xl:h-full max-h-[700px] md:opacity-0 image-animation py-0 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-19.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-19.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-10.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-10.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-20.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-20.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-4.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-4.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">
                </div>


                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-17.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-17.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

            </div>
        </div>

    </x-home.description_grid>

</x-base.section>
