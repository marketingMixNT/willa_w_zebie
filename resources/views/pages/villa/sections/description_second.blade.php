
<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36">

    {{--FIRST GRID--}}
        <x-home.description_grid>
    
            {{-- swiper --}}
            <div class="swiper description w-full mx-auto  md:w-3/4 xl:w-full max-h-[700px] h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-6.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-6.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-4.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-4.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-20.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-20.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
                    </div>
    
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-1.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-1.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-5.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-5.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-15.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-15.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-27.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-27.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
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
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-30.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-30.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                </div>
            </div>
    
            {{-- text --}}
            <div class="flex flex-col items-center text-center gap-10 py-16">
    
    
                {{-- <span
                    class=" text-7xl xs:text-8xl md:text-9xl test bg-[url('/public/assets/text.jpeg')] bg-cover uppercase tracking-widest font-bold">Tatry</span> --}}
    
    
    
                <x-base.heading_big class="text-primary-400">{{__('villa.desc_second.title')}}</x-base.heading_big>
                <div class="flex flex-col justify-center items-center gap-2">
    
                    <x-home.description_text>{{__('villa.desc_second.text-one')}}</x-home.description_text>
    
                    <x-home.description_text>{{__('villa.desc_second.text-two')}}</x-home.description_text>
                    <x-home.description_text>{{__('villa.desc_second.text-three')}}</x-home.description_text>
                </div>
            </div>
    
        </x-home.description_grid>
    
    {{--SECOND GRID--}}
        <x-home.description_grid>
            {{--text--}}
            <div class="flex flex-col items-start text-left gap-6 py-16 order-1 xl:order-none">
                <x-base.heading_big class="text-fontDark">{{__('villa.desc_second.subtitle-second')}}</x-base.heading_big>
                <x-base.heading_small>{{__('villa.desc_second.title-second')}}

                </x-base.heading_small>
                </span>
                <div>
    
                </div>
                <x-home.description_text>{{__('villa.desc_second.text-four')}}
    
                </x-home.description_text>
    
                <x-home.description_text>{{__('villa.desc_second.text-five')}}
                </x-home.description_text>
                <x-base.link href="{{route('gallery')}}">{{__('villa.desc_second.check-gallery')}}</x-base.link>
            </div>
    
    
            {{-- swiper --}}
            <div class="swiper description--second w-full mx-auto max-h-[700px]  md:w-3/4 xl:w-full  h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-21.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-21.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-24.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-24.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-22.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-22.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-25.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-25.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
                    </div>
    
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-23.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-23.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-26.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-26.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-31.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-31.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                </div>
            </div>
    
        </x-home.description_grid>
    
    </x-base.section>
    