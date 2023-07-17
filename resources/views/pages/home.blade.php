@extends("layouts.default")

@section("modals")
    <livewire:task.create-modal/>

@endsection

@section("header")
    <div class="row g-2 align-items-center">
        <div class="col">
            <div class="page-pretitle">
                Task app
            </div>
            <h2 class="page-title">
                Home page
            </h2>
        </div>
        <livewire:btn.create-modal/>
    </div>
@endsection

@section("content")
    <ul class="nav nav-bordered mb-4">
        <li class="nav-item">
            <a href="#viewAll" class="nav-link active">
                View all
            </a>
        </li>
        <li class="nav-item">
            <a href="#development" class="nav-link">
                Development
            </a>
        </li>
    </ul>
    <div class="row">
        <article class="col-12 col-md-6 col-lg">
            <h2 class="mb-3">
                To Do
            </h2>
            <section class="mb-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <h3 class="card-title">
                                    IOS App
                                </h3>
                                <div class="mt-4">
                                    <div class="row justify-content-end">
                                        <div class="col-auto text-muted">
                                            <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                                <span class="switch-icon-a text-muted">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                                <span class="switch-icon-b text-red">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M8.7 10.7l6.6 -3.4"></path><path d="M8.7 13.3l6.6 3.4"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article class="col-12 col-md-6 col-lg">
            <h2 class="mb-3">
                Progress
            </h2>
            <section class="mb-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <h3 class="card-title">
                                    IOS App
                                </h3>
                                <div class="mt-4">
                                    <div class="row justify-content-end">
                                        <div class="col-auto text-muted">
                                            <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                                <span class="switch-icon-a text-muted">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                                <span class="switch-icon-b text-red">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M8.7 10.7l6.6 -3.4"></path><path d="M8.7 13.3l6.6 3.4"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </article>

        <article class="col-12 col-md-6 col-lg">
            <h2 class="mb-3">
                Finished
            </h2>
            <section class="mb-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <h3 class="card-title">
                                    IOS App
                                </h3>
                                <div class="ratio ratio-16x9">
                                    <img
                                        src="https://cdn.dribbble.com/userupload/7390122/file/original-f0a51857256dd5802cfc7a47a6f070a2.png?compress=1&resize=752x"
                                        class="rounded object-cover"
                                        alt="dashboard"
                                    />
                                </div>
                                <div class="mt-4">
                                    <div class="row justify-content-end">
                                        <div class="col-auto text-muted">
                                            <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                                <span class="switch-icon-a text-muted">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                                <span class="switch-icon-b text-red">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="link-muted"><!-- Download SVG icon from http://tabler-icons.io/i/share -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M8.7 10.7l6.6 -3.4"></path><path d="M8.7 13.3l6.6 3.4"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </article>

    </div>
@endsection
