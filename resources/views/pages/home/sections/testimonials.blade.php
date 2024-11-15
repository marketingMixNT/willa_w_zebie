<x-base.section class="max-w-screen-xl xl:mx-auto">

    <div class="flex flex-col justify-center items-center text-center max-w-screen-md mx-auto gap-12">

        <x-base.heading_big >{{__('home.testimonial-heading')}}</x-base.heading_big>
        
        <div>
         <x-base.heading_small>Willa pod Ściętą Lipą</x-base.heading_small>
        
<div class="flex items-center justify-center gap-2 mt-4">
    <span class="font-AktivGrotesk  leading-8 tracking-wider">google</span>
    <div class="flex items-center">
        <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
            <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
        </svg>
        <p class="font-AktivGrotesk  leading-8 tracking-wider  ">5/5</p>
       

    </div>
</div>
<div class="flex items-center justify-center gap-2 mt-4">
    <span class="font-AktivGrotesk leading-8 tracking-wider">Booking</span>
    <div class="flex items-center">
        <svg class="w-4 h-4 text-yellow-500 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 22 20">
            <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
        </svg>
        <p class="font-AktivGrotesk leading-8 tracking-wider  ">9.7/10</p>
       

    </div>
</div>
</div> 
        <div class="swiper testimonial-carousel max-w-screen-md">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <div class="testimonial relative mx-12">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                            class="absolute -top-2 -left-12 w-12 opacity-50">
                        <p class="text-xl sm:text-2xl  font-JazminThin leading-relaxed pb-10">{{__('home.testimonial')}}
                        </p>
                        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest ">Marta, Polska,
                            Booking.com</span>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="testimonial relative mx-12">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                            class="absolute -top-2 -left-12 w-12 opacity-50">
                        <p class="text-xl sm:text-2xl  font-JazminThin leading-relaxed pb-10">{{__('home.testimonial-2')}}
                        </p>
                        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest ">Sara, Polska,
                            Booking.com</span>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="testimonial relative mx-12">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                            class="absolute -top-2 -left-12 w-12 opacity-50">
                        <p class="text-xl sm:text-2xl  font-JazminThin leading-relaxed pb-10">{{__('home.testimonial-3')}}
                        </p>
                        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest ">Kinga, Polska,
                            Booking.com</span>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="testimonial relative mx-12">
                        <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                            class="absolute -top-2 -left-12 w-12 opacity-50">
                        <p class="text-xl sm:text-2xl  font-JazminThin leading-relaxed pb-10">{{__('home.testimonial-4')}}
                        </p>
                        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest ">Wojciech, Polska,
                            Booking.com</span>
                    </div>
                </div>





            </div>

            {{-- <x-base.heading_small>Willa pod Ściętą Lipą</x-base.heading_small> --}}


            {{--TESTIMONIAL CARD--}}
            {{-- <div class="testimonial relative mx-12">
                <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                    class="absolute -top-8 -left-12 w-16 opacity-50">
                <p class="text-xl sm:text-2xl  font-JazminThin leading-relaxed pb-10">{{__('home.testimonial')}}</p>
                <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest ">Marta, Polska,
                    Booking.com</span>
            </div> --}}


        </div>
    </div>

</x-base.section>