@if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Error</h4>
                        <p class="mb-0">
                        {{ $error }}
                        </p>
                    </div>
                    @endforeach
@endif

@if (session('sukses'))
    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Sukses</h4>
                        <p class="mb-0">
                        {{ session('sukses') }} 
                        </p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Error</h4>
                        <p class="mb-0">
                        {{ session('error') }}
                        </p>
    </div>
@endif