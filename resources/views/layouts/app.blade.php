<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('include.head')

<body>
    
    <div class="wrapper">

        <main>
            @include('include.popup')
            @yield('content')
        </main>
    </div>

</body>
</html>