@extends('pub_theme::layouts.master')

@section('body')
<div class="pt-6 font-normal text-xl bg-brown-lightest">
    @include('pub_theme::layouts.components.navigation')

    <div class="container-content px-4 sm:px-6 py-4 sm:py-8">
        <div class="flex-col mb-0 sm:mb-8 pb-4">
            <h1 class="text-4xl md:text-5xl text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="max-w-md mt-4 text-grey-dark lead">
                Jigsaw is a framework for rapidly building static sites using the <br class="hidden sm:block">
                same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    @include('pub_theme::layouts.components.jigsaw-is-awesome')
    @include('pub_theme::layouts.components.getting-started')
    @include('pub_theme::layouts.components.features')
    @include('pub_theme::layouts.components.compile-your-assets')
    @include('pub_theme::layouts.components.built-with-jigsaw')
    @include('pub_theme::layouts.components.build-your-site')
</div>

@include('pub_theme::layouts.components.footer')
@endsection
