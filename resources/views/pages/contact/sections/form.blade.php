<x-base.section class="max-w-screen-xl xl:mx-auto">




    <div class="grid lg:grid-cols-2 gap-12">


        {{-- text --}}

        <div class="lg:px-16 ">
            <h2 class="text-4xl 2xl:text-5xl font-JazminThin  mb-16 leading-10">{{__('contact.form.form')}}<br>{{__('contact.form.contact')}}</h2>

            @if (isset($formSubmitted))
                <script>
                    const formSubmitted = {!! json_encode($formSubmitted) !!};
                    window.onload = function() {
                        if (formSubmitted) {
                            var element = document.getElementById('formContact');
                            var rect = element.getBoundingClientRect();
                            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                            window.scrollTo(0, rect.top + scrollTop - 300);
                        }
                    }
                </script>

                <div id="formContact" class="flex  h-full ">
                    <div class=" flex flex-col gap-4 text-center my-6">

                        <h3 class="text-5xl font-bold mb-2 ">{{__('contact.form.success')}}</h3>
                        <span class="text-xl font-bold">{{__('contact.form.success-second')}}</span>
                    </div>
                </div>
            @else
                <form method="post" action="{{ route('contact_form') }}" id="contactForm" {{-- <form method="post" action="#" id="contactForm" --}}
                    class="">
                    @csrf
                    <x-base.input type='text' name='name' id='name' for='name' required>{{__('contact.form.name')}}</x-base.input>
                    <x-base.input type='email' name='email' id='email' for='email'
                        required>Email</x-base.input>
                    <x-base.input type='tel' name='tel' id='tel' for='tel'>{{__('contact.form.phone')}}</x-base.input>
                    @error('tel')
                        <p class="text-red-600 text-xs">{{__('contact.form.phone-error')}}</p>
                    @enderror
                    <x-base.textarea name='content' id='content' for='content' required>{{__('contact.form.message')}}</x-base.textarea>

                    <div class="text-xs font-AktivGrotesk pt-2">

                        {{__('contact.form.captcha.text')}}
                        <a href="https://policies.google.com/privacy">{{__('contact.form.captcha.privacy_policy')}}</a> {{__('contact.form.captcha.and')}}
                        <a href="https://policies.google.com/terms">{{__('contact.form.captcha.terms-of-service')}}</a> Google.
                    </div>
<div class="pt-2">

   

   
</div>
                    <button type="submit"
                        class="btn btn-gold mt-4">{{__('contact.form.send')}}</button>

                </form>
        </div>
        @endif

        {{-- img --}}
        @if (!isset($formSubmitted))
            <div class="h-full lg:ml-10 xl:ml-20 order-1 lg:order-none md:opacity-0 image-animation"><img
                    src="{{ asset('assets/images/desktop/willaPodScietaLipa-33.jpg') }}" alt="widok z Willa pod Ściętą Lipą w Ząb" width="536" height="662" loading="lazy"
                    class="w-full h-full max-h-[300px] lg:max-h-none object-cover lg:min-h-[600px]"></div>
        @endif
    </div>
    {{-- img --}}
    @if (isset($formSubmitted))
        <div class="h-full lg:ml-10 xl:ml-20 order-1 lg:order-none md:opacity-0 image-animation"><img
                src="{{ asset('assets/images/desktop/willaPodScietaLipa-33.jpg') }}" alt="widok z Willa pod Ściętą Lipą w Ząb" width="536" height="662" loading="lazy"
                class="w-full h-full max-h-[300px] lg:max-h-none object-cover lg:min-h-[600px]"></div>
    @endif

</x-base.section>
