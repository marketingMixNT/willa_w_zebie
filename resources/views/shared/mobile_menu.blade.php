<div id="menu"
    class=" menu-close fixed bg-bgWhite  top-0  bottom-0 right-0 left-0   z-40 flex justify-center items-center bg-white">



    <ul class="flex flex-col justify-center items-center gap-10">
        <x-menu.mobile_menu_item href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html">{{__('shared.mobile_menu.item-one')}}</x-menu.mobile_menu_item>
        <x-menu.mobile_menu_item href="{{__('shared.mobile_menu.item-two')}}">Willa</x-menu.mobile_menu_item>
        <x-menu.mobile_menu_item href="{{__('shared.mobile_menu.item-three')}}">Galeria</x-menu.mobile_menu_item>
        <x-menu.mobile_menu_item href="{{__('shared.mobile_menu.item-four')}}">Kontakt</x-menu.mobile_menu_item>
    </ul>


    <div class="lg:hidden mt-6 absolute right-5 bottom-5">
        <ul class="justify-center items-center gap-5 list-none text-sm md:text-base flex text-secondary">
            <li><a href="" class="duration-300 lang hover-link">PL</a></li>
            <li><a href="" class="duration-300 lang hover-link">ENG</a></li>
        </ul>
    </div>
    <!--SOCIAL-->
    <div class="flex justify-center items-center gap-4 absolute left-5 bottom-5 lg:static">
        <a href="https://www.facebook.com/willapodscietalipa/" target="_blank"><img src="{{ asset('/assets/icons/facebook.svg') }}" alt="facebook Willi pod Ściętą Lipą "
                class="w-6 2xl:w-8 hover:scale-90 duration-300 opacity-70" /></a>
       
    </div>

</div>
