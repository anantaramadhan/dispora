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

    {{-- section penjelasan nganjuk.ekraf --}}
    @include('landingPage.event.components.searchEvent')

    {{-- section event --}}
    @include('landingPage.event.components.event')

    @include('landingPage.layouts.footer')
</body>

</html>
