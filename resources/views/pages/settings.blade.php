@extends("layouts.default")

@section("header")
    <div class="row g-2 align-items-center">
        <div class="col">
            <div class="page-pretitle">
                Task app
            </div>
            <h2 class="page-title">
                Account settings
            </h2>
        </div>
    </div>
@endsection

@section("content")
    <div class="card">
        <div class="row g-0">
            <nav class="col-3 d-none d-md-block border-end">
                <div class="card-body">
                    <h4 class="subheader">
                        Business settings
                    </h4>
                    <div class="list-group list-group-transparent">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                            My Account
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            My Notifications
                        </a>
                    </div>
                </div>
            </nav>
            <div class="col d-flex flex-column">
                <div class="card-body">
                    <h2 class="mb-4">
                        My Account
                    </h2>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                    <div class="btn-list justify-content-end">
                        <a href="#" class="btn">Cancel</a>
                        <a href="#" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
