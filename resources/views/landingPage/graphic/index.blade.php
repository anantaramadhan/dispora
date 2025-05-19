<!DOCTYPE html>
<html lang="en">


@include('components.head')

<style>
    body {
        padding-top: 73px;
    }
</style>


<body class="bg-white">

    @include('landingPage.layouts.header')

    {{-- section infografis --}}
    @include('landingPage.graphic.components.graphinformation')

    {{-- section Jumlah Pelaku Ekraf --}}
    @include('landingPage.graphic.components.totalekraf')

    @include('landingPage.layouts.footer')
</body>

</html>
