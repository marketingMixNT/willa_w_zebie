<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36 relative">


    <div class="grid xl:grid-cols-3   gap-16 xl:mx-24 max-w-screen-xl ">

        <div class="border hidden  sticky top-32 h-[400px] p-12 xl:flex flex-col justify-start items-start gap-7">

            <x-base.heading_medium class="text-fontDark">{{__('villa.villa_desc.card-title')}}</x-base.heading_medium>

            <div class="flex justify-center items-center gap-4 ">
                <img src="{{asset('assets/icons/mountains--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">{{__('villa.villa_desc.card-text-first')}}

                </span>
            </div>
            <div class="flex justify-center items-center gap-4">
                <img src="{{asset('assets/icons/house--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">{{__('villa.villa_desc.card-text-second')}}</span>
            </div>
            <div class="flex justify-center items-center gap-4 mb-5">
                <img src="{{asset('assets/icons/thumb--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">{{__('villa.villa_desc.card-text-third')}}</span>
            </div>
            
            <x-base.link href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html" target="_blank" >{{__('villa.villa_desc.card-book')}}</x-base.link>
        </div>
        <div class="xl:col-span-2 flex flex-col  gap-12 px-12">
            <x-home.description_text>{{__('villa.villa_desc.text')}}
            </x-home.description_text>

            <div class="flex gap-12">
               
                <div class="flex flex-col gap-1 justify-center items-center">
                    <span class="font-JazminThin text-primary-400 text-4xl">10 os.</span>
                    <span class="text-sm uppercase text-gray-500">maks</span>
                </div>
                <div class="flex flex-col gap-1 justify-center items-center">
                    <span class="font-JazminThin text-primary-400 text-4xl">200 m²</span>
                    <span class="text-sm uppercase text-gray-500">{{__('villa.villa_desc.surface')}}</span>
                </div>
                
            </div>

            <div>
                <img src="{{asset('assets/images/desktop/willaPodScietaLipa-19.jpg')}}" alt="wnętrze Willi pod Ściętą Lipą" loading="lazy" width="736" height="491" class="md:opacity-0 image-animation">
            </div>
    </div>
    </div>
   





</x-base.section>
