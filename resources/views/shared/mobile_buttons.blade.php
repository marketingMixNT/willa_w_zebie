<nav id="mobile-bottom-nav" class="bottom-nav_container fixed -bottom-16 left-0 right-0  grid lg:hidden grid-cols-4 z-30 transition-all duration-300">

    <x-mobile_buttons_item
        href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/click.svg')}}">
      {{__('shared.mobile_buttons.item-one')}}</x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="{{route('gallery')}}"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/gallery.svg')}}">
        <span>  {{__('shared.mobile_buttons.item-two')}}</span></x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="https://maps.app.goo.gl/5EzjAy6uCrdJiejeA"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/pin.svg')}}">
        <span>  {{__('shared.mobile_buttons.item-three')}}</span></x-mobile_buttons_item>
    <x-mobile_buttons_item
        href="tel:+48606708024"
        target="_blank"
        image="{{asset('assets/icons/mobile-buttons/phone.svg')}}">
        <span>  {{__('shared.mobile_buttons.item-four')}}</span></x-mobile_buttons_item>

</nav>