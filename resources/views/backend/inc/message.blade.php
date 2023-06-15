@if (Session::has('message') | Session::has('success'))
    <div class="container">
        <div class="align-self-center align-content-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
@if (Session::has('info'))
    <div class="container">
        <div class="align-self-center align-content-center">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
@if (Session::has('warning'))
    <div class="container">
        <div class="align-self-center align-content-center">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ Session::get('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
@if (Session::has('error'))
    <div class="container">
        <div class="align-self-center align-content-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
