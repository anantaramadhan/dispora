<!DOCTYPE html>
    <html lang="en">
@include('components.head')
    <style>
    body {
        padding-top: 73px;
    }
</style>
    <body>
    @include('landingPage.layouts.header')
    <section class="container my-5">
        <h1 class="mb-4">Artikel Terbaru</h1>
        <!-- Debug Data -->
        <pre>{{ print_r($articles, true) }}</pre>
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if (!empty($article['thumbnail_url']))
                            <img src="{{ $article['thumbnail_url'] }}" class="card-img-top" alt="Thumbnail" style="max-height: 200px; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Default Thumbnail" style="max-height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <p class="card-text">{{ $article['short_description'] }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada artikel tersedia.</p>
            @endforelse
        </div>
        </section>
    @include('landingPage.layouts.footer')
    </body>
    </html>