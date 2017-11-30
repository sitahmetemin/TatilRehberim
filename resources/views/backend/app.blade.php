@include('backend.block.header')
@include('backend.block.leftSideBar')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            @yield('content')
        </div>
    </div>
</section>


@include('backend.block.footer')