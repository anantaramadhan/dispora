<!DOCTYPE html>
    <html lang="en">
@include('components.head')
    <style>
    body {
        padding-top: 73px;
        background-color: white;
    }
</style>
    <body>
    @include('landingPage.layouts.header')

    {{-- section artice --}}
    @include('landingPage.articel.components.searchArticel')

    {{-- section search artice --}}
    @include('landingPage.articel.components.articel')

    {{-- section search result artice --}}
    @include('landingPage.articel.components.articelResult')

    @include('landingPage.layouts.footer')
    </body>
    </html>
