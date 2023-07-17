<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task App </title>
    @vite("resources/js/app.js")
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
</head>
<body>
    <div class="page">
        @yield("modals")
        @include("includes.header")
        <article class="page-wrapper">
            <header class="page-header">
                <div class="container-xl">
                    @yield("header")
                </div>
            </header>
            <main class="page-body">
                <div class="container-xl">
                    @yield("content")
                </div>
            </main>
            @include("includes.footer")
        </article>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/dropzone/dist/dropzone-min.js"></script>
</body>
</html>
