@if (session('success'))
    <div class="alert alert-success alertas" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alertas" role="alert">
        {{ session('error') }}
    </div>
@endif
