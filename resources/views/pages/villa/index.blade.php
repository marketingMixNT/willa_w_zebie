<x-layouts.main>

    @section('title', __('villa.title'))
    @section('description', __('villa.description'))
    



        @include('pages.villa.sections.hero')
        @include('pages.villa.sections.description')
        @include('pages.villa.sections.amenities')
        @include('pages.villa.sections.description_second')
        @include('pages.home.sections.gallery')

        



    </x-layouts.main>
