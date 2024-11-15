<x-base.section class=" bg-bgLight-600 ">

    <div class="max-w-screen-2xl 2xl:mx-auto flex flex-col bg-bgLight-600 px-12 lg:px-64 py-10    mx-4 sm:mx-12 lg:mx-6">

   

    <x-base.heading_medium class="text-primary-400">Wyposażenie</x-base.heading_medium>
    <div class="grid sm:grid-cols-2  md:grid-cols-3 xl:grid-cols-4 gap-x-2 gap-y-12 mt-12">

        <x-amenities_box icon="{{ asset('assets/icons/amenities/house.svg') }}" title="{{__('villa.amenities.one')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/resize.svg') }}" title="{{__('villa.amenities.two')}}" />
        <x-amenities_box icon="{{ asset('assets/icons//amenities/mountains.svg') }}" title="{{__('villa.amenities.three')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/garden.svg') }}" title="{{__('villa.amenities.four')}}" />

        <x-amenities_box icon="{{ asset('assets/icons/amenities/bed.svg') }}" title="{{__('villa.amenities.five')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/chimney.svg') }}" title="{{__('villa.amenities.six')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/terrace.svg') }}" title="{{__('villa.amenities.seven')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/grill.svg') }}" title="{{__('villa.amenities.eight')}}" />
        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/shower.svg') }}" title="p{{__('villa.amenities.nine')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/bath.svg') }}" title="{{__('villa.amenities.ten')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/wifi.svg') }}" title="{{__('villa.amenities.eleven')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/tv.svg') }}" title="{{__('villa.amenities.twelve')}}" />

        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/kitchen.svg') }}" title="{{__('villa.amenities.thirteen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/fridge.svg') }}" title="{{__('villa.amenities.fourteen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/coffee.svg') }}" title="{{__('villa.amenities.fifteen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/boiler.svg') }}" title="{{__('villa.amenities.sixteen')}}" />
        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/microwave.svg') }}" title="{{__('villa.amenities.seventeen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/waschingMachine.svg') }}" title="{{__('villa.amenities.eighteen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/dryer.svg') }}" title="{{__('villa.amenities.nineteen')}}" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/iron.svg') }}" title="{{__('villa.amenities.twenty')}}" />
    </div>

</div>
</x-base.section>
