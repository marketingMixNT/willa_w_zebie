<x-layouts.main>

    @section('title', __('home.title'))
    @section('description', __('home.description'))




    @include('pages.home.sections.hero')
    @include('pages.home.sections.testimonials')
    @include('pages.home.sections.villa_description')
    @include('pages.home.sections.features')
    @include('pages.home.sections.attractions')
    @include('pages.home.sections.cta')

    <x-gallery_small class="bg-bgLight-600" />

</x-layouts.main>
