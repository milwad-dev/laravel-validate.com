@extends('layouts.master')

@section('title', convertToAsideTitle($page))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-size/css/rvfs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/niceselectpicker/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/prism/prism.css') }}">
@endsection

@section('banner-area')
    <section class="breadcrumb_area">
        <img class="p_absolute bl_left" src="{{ asset('img/v.svg') }}" alt="">
        <img class="p_absolute bl_right" src="{{ asset('img/home_one/b_leaf.svg') }}" alt="">
        <img class="p_absolute star" src="{{ asset('img/home_one/banner_bg.png') }}" alt="">
        <img class="p_absolute wave_shap_one" src="{{ asset('img/blog-classic/shap_01.png') }}" alt="">
        <img class="p_absolute wave_shap_two" src="{{ asset('img/blog-classic/shap_02.png') }}" alt="">
        <img class="p_absolute one wow fadeInRight" src="{{ asset('img/home_one/b_man_two.png') }}" alt="">
        <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="{{ asset('img/home_one/flower.png') }}" alt="">
        <div class="container custom_container">
            <form action="#" class="banner_search_form banner_search_form_two">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                    <button type="submit"><i class="icon_search"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('content')
    <section class="doc_documentation_area" id="sticky_doc">
        <div class="overlay_bg"></div>
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-3 doc_mobile_menu display_none">
                    @include('docs.aside')
                </div>
                <div class="col-lg-9 col-md-12 mt-3">
                    <div class="documentation_info">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('table').addClass('table basic_table_info table-hover')
    </script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/font-size/js/rv-jquery-fontsize-2.0.3.js') }}"></script>
    <script src="{{ asset('js/anchor.js') }}"></script>
    <script src="{{ asset('assets/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/niceselectpicker/jquery.nice-select.min.js') }}"></script>
@endsection
