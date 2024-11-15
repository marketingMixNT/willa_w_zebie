<footer class="bg-[#f1e8da]">

    <div class="max-w-screen-lg mx-4 sm:mx-12   lg:mx-auto pt-6 pb-16 md:py-16 ">
        <div class="grid md:grid-cols-3 gap-12 md:gap-0">


            {{-- SOCIAL --}}
            <div class="flex flex-col justify-start items-center md:items-start gap-6 order-1 md:order-none ">
                <h2 class="text-fontDark text-xl font-JazminThin">{{__('shared.footer.find-us')}}</h2>
                <div class="flex  items-center gap-4">
                    <a href="https://www.facebook.com/willapodscietalipa/" target="_blank"><img src="{{ asset('assets/icons/facebook--brown.svg') }}" alt="facebook Willa pod Ściętą Lipą" class="w-5 hover:scale-110 duration-300"></a>
                   
                </div>
            </div>
            {{-- CENTER --}}
            <a href="{{route('home')}}" class="mx-auto ">
               
                <img src="{{asset('assets/logo/logo.png')}}" alt="logo Willi pod Ściętą Lipą" class="w-40">
            </a>
            {{-- CONTACT --}}
            <div class="flex flex-col justify-start items-center md:items-end gap-6">
                <h2 class="text-fontDark text-xl font-JazminThin">{{__('shared.footer.contact')}}</h2>

                <a href="https://maps.app.goo.gl/5EzjAy6uCrdJiejeA" target="_blank" class="text-sm text-fontDark hover-link">św. Anny 2, 34-521 Ząb</a>
                <a href="tel:+48606708024" class="text-sm text-fontDark hover-link">+48 606 708 024</a>
                <a href="mailto:kontakt@willawzebie.pl" class="text-sm text-fontDark hover-link">kontakt@willawzebie.pl</a>
            </div>
        </div>
         {{-- LINKS --}}
        <hr class="w-full mx-auto mt-10 mb-5 border-0 border-t border-secondary-400">
        <div class="flex justify-center items-center gap-12">

            <a href="{{route('privacyPolicy')}}" class="text-sm text-fontDark hover-link">{{__('shared.footer.privacy-policy')}}</a>
            {{-- <a href="{{route('regulations')}}" class="text-sm text-fontDark hover-link">{{__('shared.footer.regulations')}}</a> --}}
        </div>
        <hr class="w-full mx-auto my-5 border-0 border-t border-secondary-400">
 {{-- AUTHORS --}}
 <div class="flex justify-between items-center mt-12">
<span class="text-fontDark font-JazminThin">
    &copy <span id="year"></span> Willa pod Ściętą Lipą

</span>
<a href="https://marketingmix.pl" target="_blank"><img src="{{asset('assets/marketingmix.svg')}}" alt="logo wykonawcy - marketingmix.pl" class="w-32 hover:scale-105 duration-300"></a>
 </div>
    </div>

</footer>
