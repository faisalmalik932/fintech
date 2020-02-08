<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body >

    @include('includes.topbar')
    <div class="page-wrapper">
        @include('includes.sidebar')
        <!-- Page Content-->
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    @include('includes.footer')

    @include('includes.scripts')
</body>

</html>
