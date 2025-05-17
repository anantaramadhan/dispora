<section class="d-flex flex-column align-items-center">
    <h1>Informasi Buat Kamu</h1>

    {{-- button navigasi artikel dan event --}}
    <div class="container-xxl gap-4 d-flex flex-row justify-content-center py-4">
        <button id="tombolSatu" class="btn btn-primary w-25 rounded-5 switch-section" data-target="Event">Event</button>
        <Button id="tombolDua" class="btn btn-outline-black w-25 rounded-5 switch-section">Artikel</Button>
    </div>

    {{-- content event dan Event --}}
    <div id="section-event" class="fade-section show">
        @include('landingPage.home.components.information.layouts.informationEvent')
    </div>

    {{-- content event dan Artikel --}}
    <div id="section-articel" class="fade-section">
        @include('landingPage.home.components.information.layouts.informationArticel')
    </div>

    <div>

    </div>

</section>
