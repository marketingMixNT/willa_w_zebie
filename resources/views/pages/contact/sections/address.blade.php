<x-base.section class="max-w-screen-xl xl:mx-auto">

    <div class="grid lg:grid-cols-2">
        {{--img--}}
        <div class="h-full lg:ml-10 xl:ml-20 order-1 lg:order-none md:opacity-0 image-animation"><img src="{{ asset('assets/images/desktop/willaPodScietaLipa-36.jpg') }}" alt="widok z lotu ptaka nad Willa pod Ściętą Lipą w Zębie" class="w-full lg:h-full max-h-[300px] lg:max-h-none lg:min-h-[600px] object-cover" width="536" height="662" loading="lazy"></div>

        {{--text--}}

        <div class="flex flex-col justify-center gap-12 lg:pl-24 pb-12 ">
            
            <h2 class="text-4xl 2xl:text-5xl font-JazminThin  ">Willa pod Ściętą Lipą</h2>

            <div class="flex flex-col gap-2">

                <h2 class="uppercase font-AktivGrotesk text-base  tracking-widest text-primary-400 ">{{__('contact.our-address')}}
                </h2>

                <span class="font-JazminThin text-base">św. Anny 2</span>
                <span class="font-JazminThin text-base">34-521 Ząb</span>
                <span class="font-JazminThin text-base">Polska</span>
            </div>

            <div class="flex flex-col justify-start items-start gap-2">

                <h2 class="uppercase font-AktivGrotesk text-base  tracking-widest text-primary-400 ">{{__('contact.contact-with-us')}}
                </h2>

                <a href="tel:+48606708024" class="font-JazminThin text-base hover-link">+48 606 708 024
                </a>
                <a href="mailto:kontakt@willawzebie.pl" class="font-JazminThin text-base hover-link">kontakt@willawzebie.pl
                </a>
                
            </div>

            <div class="flex flex-col justify-start items-start gap-2">

                <h2 class="uppercase font-AktivGrotesk text-base  tracking-widest text-primary-400 ">Social Media
                </h2>

                <a href="https://www.facebook.com/willapodscietalipa/" target="_blank"><img src="{{ asset('assets/icons/facebook--gold.svg') }}" alt="facebook Willa pod Ściętą Lipą" class="w-5 hover:scale-110 duration-300"></a>

                
            </div>


        </div>
    </div>
</x-base.section>