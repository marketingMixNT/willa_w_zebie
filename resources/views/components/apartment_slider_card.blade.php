<a href="{{$href}}" class="group ">

    <img src="{{ $image }}" alt="{{ $title }}" loading="lazy" width="400" height="455"
        class="h-[450px] object-cover w-full group-hover:scale-110 duration-300">

    <div class="bg-white group-hover:-translate-y-12 duration-300 ease group-hover:border py-8 flex flex-col gap-4">

        <div class="grid grid-cols-2  px-24">
            <div class="flex justify-center items-end gap-2"><img src="{{ asset('assets/icons/persons.svg') }}"
                    alt="" class="w-6"><span
                    class="text-sm text-primary-400 font-AktivGrotesk">{{ $persons }}
                    osoby</span></div>
            <div class="flex justify-center items-end gap-2"><img src="{{ asset('assets/icons/size.svg') }}"
                    alt="" class="w-6"><span
                    class="text-sm text-primary-400 font-AktivGrotesk">{{ $surface }} m²</span></div>
        </div>

        <h3 class="text-3xl">{{ $title }}</h3>

        <span
            class="opacity-0 group-hover:opacity-100 duration-300 text-base text-primary-400 font-AktivGrotesk ">{{ $desc }}</span>
    </div>

</a>
