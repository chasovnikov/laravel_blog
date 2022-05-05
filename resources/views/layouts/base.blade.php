<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="my3/css/style.css" />

</head>

<body>

    <div class="main_block">

        {{-- @include('includes.alert') --}}
        @include('includes.header')

        <section>
            <div class="wrap">
                <div class="left_block">
                    @yield('content')
                </div>
                <div class="right_block">
                    @include('includes.catogories')

                </div>
            </div>
        </section>

        {{-- @include('includes.footer') --}}
    </div>

    {{-- @stack('js') --}}
</body>
</html>
