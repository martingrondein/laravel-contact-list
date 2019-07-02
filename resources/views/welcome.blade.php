@extends('layout')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>

<div class="uper">

    <div class="container">

        {{-- Row 1 --}}
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contacts</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Contact Management</h6>
                    <p class="card-text">
                        Area to manage your contact list. Create, edit or delete contacts.
                    </p>
                    <a href="/contact" class="card-link">Manage Contacts</a>
                </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cities</h4>
                    <h6 class="card-subtitle mb-2 text-muted">City Management</h6>
                    <p class="card-text">
                        Area to manage your various citites. Create, edit or delete cities.
                    </p>
                    <a href="/city" class="card-link">Manage Cities</a>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Coming Soon</h4>
                    <h6 class="card-subtitle mb-2 text-muted">In Development</h6>
                    <p class="card-text">
                        This section is currently under development for a future release.
                        Check back soon.
                    </p>
                    <a href="#" class="card-link">Coming Soon</a>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
