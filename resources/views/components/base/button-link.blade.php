@props([
    'hover_color' => 'button--gold',
    'aria_label' => '',
    'href' => '',
    'class' => '',
])




<a href="{{ $href }}" class="btn {{ $class }}" aria-label='{{ $aria_label }}'>{{ $slot }}</a>
