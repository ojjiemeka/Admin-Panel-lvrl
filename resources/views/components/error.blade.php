
<div>
    @if (session('success'))
        <div class="alert alert-success d-flex justify-content-between">
            {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger d-flex justify-content-between">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger d-flex justify-content-between">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>