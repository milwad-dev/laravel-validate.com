@extends('layouts.master')

@section('title', 'Laravel-Validate Official')

@section('banner-area')
    <section class="doc_banner_area_one">
        <img class="dark" src="{{ asset('img/home_one/wave_one.svg') }}" alt="">
        <img class="dark_two" src="{{ asset('img/home_one/wave_two.svg') }}" alt="">
        <img class="p_absolute star_one" src="{{ asset('img/home_one/star.png') }}" alt="">
        <img class="p_absolute star_two" src="{{ asset('img/home_one/star.png') }}" alt="">
        <img class="p_absolute star_three" src="{{ asset('img/home_one/star.png') }}" alt="">
        <img class="p_absolute one wow fadeInLeft" data-wow-delay="0.1s" src="{{ asset('img/home_one/b_man.png') }}" alt="">
        <img class="p_absolute two wow fadeInRight" data-wow-delay="0.2s" src="{{ asset('img/home_one/b_man_two.png') }}" alt="">
        <img class="p_absolute three wow fadeInUp" data-wow-delay="0.3s" src="{{ asset('img/home_one/flower.png') }}" alt="">
        <img class="p_absolute four wow fadeInRight" data-wow-delay="0.4s" src="{{ asset('img/home_one/girl_img.png') }}" alt="">
        <img class="p_absolute five wow fadeIn" data-wow-delay="0.5s" src="{{ asset('img/home_one/file.png') }}" alt="">
        <img class="p_absolute bl_left" src="{{ asset('img/v.svg') }}" alt="">
        <img class="p_absolute bl_right" src="{{ asset('img/home_one/b_leaf.svg') }}" alt="">
        <div class="container">
            <div class="doc_banner_text">
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Hello, what can we help you find?</h2>
                <p class="wow fadeInUp" data-wow-delay="0.5s">we're here for you. Find articles, help and advice for getting the most our of docall theme</p>
                <form action="#" class="banner_search_form">
                    <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
                <h6><span>Popular topics:</span> <a href="#">Add a Map with a Market</a> <a href="#">Styling a Map</a></h6>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="doc_features_area_one">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="h_title wow fadeInUp">Why {{ $appName }}?</h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media documentation_item wow fadeInUp">
                        <div class="icon">
                            <img src="{{ asset('img/correct.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5>Over 38 Rules</h5>
                            </a>
                            <p>{{ $appName }} has more than 38 rules.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media documentation_item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon">
                            <img src="{{ asset('img/correct.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5>Localization Error Message</h5>
                            </a>
                            <p>{{ $appName }} supports  more than 20 languages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media documentation_item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon">
                            <img src="{{ asset('img/correct.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5>Always Updates</h5>
                            </a>
                            <p>{{ $appName }} always updates to the latest version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media documentation_item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon">
                            <img src="{{ asset('img/correct.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h5>Testing</h5>
                            </a>
                            <p>{{ $appName }} has tests for all rules, and you can use them with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doc_tag_area">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="h_title wow fadeInUp">{{ $appName }} Rules</h2>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane doc_tab_pane fade show active" id="or" role="tabpanel" aria-labelledby="or-tab">
                    <div class="row">
                        @foreach($rules as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.1s">
                                    <ul class="list-unstyled tag_list">
                                        @foreach($item as $rule)
                                            <li>
                                                <a href="{{ route('docs', ['version' => config('app.doc-version'), 'page' => $rule]) }}">
                                                    <i class="icon_document_alt"></i> {{ convertToAsideTitle($rule) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('docs', ['version' => config('app.doc-version'), 'page' => 'all-rules']) }}"
                                        class="learn_btn">View All<i class="arrow_right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doc_feedback_area parallaxie sec_pad" data-background="img/bg.jpg"
        style="background: url({{ asset('img/banner.png') }}) no-repeat scroll;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="doc_feedback_info">
                <h3 class="text-white">
                    If you have any feedback, you can send mail for me: <a href="mailto:milwad.dev@gmail.com">milwad.dev@gmail.com</a>
                </h3>
                <br>
                <h5 class="text-white">
                    Please send your name along with your picture and work field (Backend Developer at ...) .
                </h5>
            </div>
        </div>
    </section>
@endsection
