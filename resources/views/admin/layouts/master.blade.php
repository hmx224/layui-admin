@extends('admin.layouts.frame')

@section('body')
    <body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">

        <!--头部-->
    @include('admin.widgets.header')

    <!--侧边栏-->
    @include('admin.widgets.menu')

    <!--css-->
    @yield('css')

    <!--内容部分-->
    @yield('content')

    <!-- 底部固定区域 -->
    @include('admin.widgets.footer')

    <!-- JS -->
        @yield('js')

    </div>

    @include('admin.widgets.script')

    </body>
@endsection
