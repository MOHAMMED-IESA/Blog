<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <header>
        <h1>@yield('header', 'Default Header')</h1>
    </header>

    <main>
        <section class="content">
            @yield('content')
        </section>

        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    </main>

    <footer>
        <p>@yield('footer', 'Default Footer')</p>
    </footer>
</body>
</html>
