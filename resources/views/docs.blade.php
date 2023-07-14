@extends('layouts.master')

@section('title', '')

@section('banner-area')
    <section class="breadcrumb_area">
        <img class="p_absolute bl_left" src="img/v.svg" alt="">
        <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
        <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
        <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
        <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
        <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
        <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
        <div class="container custom_container">
            <form action="#" class="banner_search_form banner_search_form_two">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                    <div class="input-group-append">
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option selected>All Category</option>
                            <option value="1">Doc Archive</option>
                            <option value="2">Doc List</option>
                            <option value="3">KbDoc</option>
                        </select>
                    </div>
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
                <div class="col-lg-9 col-md-12">
                    <div class="documentation_info">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
