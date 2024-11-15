<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Kontakt z Willą Pod Ściętą Lipą – Zadzwoń lub Napisz do Nas')
    @section('description',
        'Masz pytania dotyczące rezerwacji lub potrzebujesz dodatkowych informacji? Skontaktuj się z Willą Pod Ściętą Lipą za pomocą formularza kontaktowego, telefonu lub e-maila. Jesteśmy tutaj, aby pomóc!')


@include ('pages.contact.sections.hero')
        <main class="mt-10">

            @include ('pages.contact.sections.address')
            @include ('pages.contact.sections.form')
            @include ('pages.contact.sections.map')
            @include('pages.contact.sections.gallery')

           

        </main>


    </x-layouts.main>
