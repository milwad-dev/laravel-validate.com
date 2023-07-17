@extends('layouts.master')

@section('title', 'Not Found!')

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
                <div class="col-lg-9 col-md-12 mt-5">
                    <div class="documentation_info">
                        <h3>
                            Page not found.
                            <a href="{{ route('docs', ['version' => config('app.doc-version')]) }}">Go to introduction page.</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
