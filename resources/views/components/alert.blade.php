{{-- @if (session('success'))
    <div class="d-flex justify-content-center align-items-center position-fixed w-100 h-100"
        style="top: 0; left: 0; z-index: 9999; pointer-events: none;">
        <div class="alert alert-success alert-dismissible fade show" role="alert"
            style="min-width: 300px; pointer-events: auto;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="d-flex justify-content-center align-items-center position-fixed w-100 h-100"
        style="top: 0; left: 0; z-index: 9999; pointer-events: none;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert"
            style="min-width: 300px; pointer-events: auto;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif --}}

@if (session('success'))
    @php
        $success = session('success');
    @endphp
    <div class="d-flex justify-content-center align-items-center position-fixed w-100 h-100"
        style="top: 0; left: 0; z-index: 9999; pointer-events: none;">
        <div class="alert alert-success alert-dismissible fade show" role="alert"
            style="min-width: 300px; pointer-events: auto;">
            <h4 class="alert-heading">{{ $success['header'] ?? 'Berhasil' }}</h4>
            <p>{!! $success['body'] ?? '' !!}</p>
            @if (!empty($success['suggestion']))
                <hr>
                <p class="mb-0">{{ $success['suggestion'] }}</p>
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@if (session('error'))
    @php
        $error = session('error');
    @endphp
    <div class="d-flex justify-content-center align-items-center position-fixed w-100 h-100"
        style="top: 0; left: 0; z-index: 9999; pointer-events: none;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert"
            style="min-width: 300px; pointer-events: auto;">
            <h4 class="alert-heading">{{ is_array($error) ? $error['header'] ?? 'Gagal!' : 'Gagal!' }}</h4>
            <p>{!! is_array($error) ? $error['body'] ?? '' : $error !!}</p>
            @if (is_array($error) && !empty($error['suggestion']))
                <hr>
                <p class="mb-0">{{ $error['suggestion'] }}</p>
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif



<script>
    setTimeout(() => {
        document.querySelectorAll('.alert').forEach(el => {
            // Gunakan Bootstrap's Alert API untuk menutup alert dengan animasi
            const alertInstance = bootstrap.Alert.getOrCreateInstance(el);
            alertInstance.close();
        });
    }, 10000); // 7 detik
</script>
