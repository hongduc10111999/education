<!DOCTYPE html>
<html lang="en">
@include('mypage.common.head')

<body>
    @include('mypage.common.header')

    <div class="content">
        @yield('content')
    </div>
    @include('mypage.common.script')
</body>

</html>
