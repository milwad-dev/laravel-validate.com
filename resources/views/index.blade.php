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
                <h2 class="h_title wow fadeInUp">Why {{ config('app.name') }}?</h2>
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
                            <p>{{ config('app.name') }} has more than 38 rules.</p>
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
                            <p>{{ config('app.name') }} supports  more than 20 languages.</p>
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
                            <p>{{ config('app.name') }} always updates to the latest version.</p>
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
                            <p>{{ config('app.name') }} has tests for all rules, and you can use them with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doc_tag_area">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="h_title wow fadeInUp">Popular Tags</h2>
            </div>
            <ul class="nav nav-tabs doc_tag" id="myTab" role="tablist">
                <li class="nav-item wow fadeInLeft">
                    <a class="nav-link active" id="or-tab" data-toggle="tab" href="#or" role="tab" aria-controls="or" aria-selected="true">Ordering</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.1s">
                    <a class="nav-link" id="doc-tab" data-toggle="tab" href="#doc" role="tab" aria-controls="doc" aria-selected="false">Docs</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.2s">
                    <a class="nav-link" id="forum-tab" data-toggle="tab" href="#forum" role="tab" aria-controls="forum" aria-selected="false">Forum</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.3s">
                    <a class="nav-link" id="code-tab" data-toggle="tab" href="#code" role="tab" aria-controls="code" aria-selected="false">Code</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s">
                    <a class="nav-link" id="element-tab" data-toggle="tab" href="#element" role="tab" aria-controls="element" aria-selected="false">Elements</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane doc_tab_pane fade show active" id="or" role="tabpanel" aria-labelledby="or-tab">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp">
                                <div class="doc_tag_title">
                                    <h4>Getting Started</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>BBpress sidebar layout styles</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="doc_tag_title">
                                    <h4>Integrations</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How To Install Manual Theme</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Theme license information</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i create tree structure menu</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="doc_tag_title">
                                    <h4>Cloud Server</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Preparing your server for installation</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="doc_tag_title">
                                    <h4>Solar System</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I contact Customer Care?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How to enable labs features</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="doc_tag_title">
                                    <h4>User Settings</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Do I need to know coding</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Working with Conversations</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Copying Email to Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="doc_tag_title">
                                    <h4>Reporting</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Can I attach files to forms?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="doc" role="tabpanel" aria-labelledby="doc-tab">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp">
                                <div class="doc_tag_title">
                                    <h4>Integrations</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>BBpress sidebar layout styles</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="doc_tag_title">
                                    <h4>Getting Started</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How To Install Manual Theme</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Theme license information</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i create tree structure menu</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="doc_tag_title">
                                    <h4>Cloud Server</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Preparing your server for installation</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp">
                                <div class="doc_tag_title">
                                    <h4>Solar System</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I contact Customer Care?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How to enable labs features</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="doc_tag_title">
                                    <h4>User Settings</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Do I need to know coding</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Working with Conversations</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Copying Email to Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="doc_tag_title">
                                    <h4>Reporting</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Can I attach files to forms?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Cloud Server</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>BBpress sidebar layout styles</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Getting Started</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How To Install Manual Theme</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Theme license information</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i create tree structure menu</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Integrations</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Preparing your server for installation</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Solar System</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I contact Customer Care?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How to enable labs features</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>User Settings</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Do I need to know coding</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Working with Conversations</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Copying Email to Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Reporting</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Can I attach files to forms?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="code" role="tabpanel" aria-labelledby="code-tab">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Getting Started</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>BBpress sidebar layout styles</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Integrations</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How To Install Manual Theme</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Theme license information</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i create tree structure menu</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Cloud Server</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Preparing your server for installation</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Solar System</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I contact Customer Care?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How to enable labs features</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>User Settings</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Do I need to know coding</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Working with Conversations</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Copying Email to Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Reporting</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Can I attach files to forms?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="element" role="tabpanel" aria-labelledby="element-tab">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Getting Started</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>BBpress sidebar layout styles</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Integrations</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How To Install Manual Theme</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Theme license information</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i create tree structure menu</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Cloud Server</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Preparing your server for installation</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Solar System</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I contact Customer Care?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How to enable labs features</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do I login forum section</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Mailbox and User Settings</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>User Settings</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Do I need to know coding</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Managing Docs in Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Working with Conversations</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Copying Email to Docly</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="doc_tag_item">
                                <div class="doc_tag_title">
                                    <h4>Reporting</h4>
                                    <div class="line"></div>
                                </div>
                                <ul class="list-unstyled tag_list">
                                    <li><a href="#"><i class="icon_document_alt"></i>Setup home page layout</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Can I attach files to forms?</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Knowledgebase page setup</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>Creating home page blocks</a></li>
                                    <li><a href="#"><i class="icon_document_alt"></i>How do i add FAQ post</a></li>
                                </ul>
                                <a href="#" class="learn_btn">View All<i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doc_feedback_area parallaxie sec_pad" data-background="img/bg.jpg" style="background: url(img/home_one/feedback_bg.jpg) no-repeat scroll;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="doc_feedback_info">
                <div class="doc_feedback_slider">
                    <div class="item">
                        <div class="author_img">
                            <img src="img/home_one/icon/feedback.jpg" alt="">
                        </div>
                        <p>
                            Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.
                        </p>
                        <h5>Rodney Artichoke</h5>
                        <h6>UI/UX designer</h6>
                    </div>
                    <div class="item">
                        <div class="author_img">
                            <img src="img/home_one/icon/feedback.jpg" alt="">
                        </div>
                        <p>
                            Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.
                        </p>
                        <h5>Rodney Artichoke</h5>
                        <h6>UI/UX designer</h6>
                    </div>
                </div>
                <div class="slider_nav">
                    <div class="prev">
                        <span class="arrow"></span>
                    </div>
                    <div class="next">
                        <span class="arrow"></span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="doc_faq_area sec_pad">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="h_title wow fadeInUp">Do you have any Question?</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">Loaded with awesome features like Documentation, Knowledgebase, Forum & more!</p>
            </div>
            <ul class="nav nav-tabs doc_tag" id="myTabthree" role="tablist">
                <li class="nav-item wow fadeInLeft">
                    <a class="nav-link active" id="ter-tab" data-toggle="tab" href="#ter" role="tab" aria-controls="or" aria-selected="true">Terminal</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.1s">
                    <a class="nav-link" id="docOne-tab" data-toggle="tab" href="#docOne" role="tab" aria-controls="doc" aria-selected="false">Docs</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.2s">
                    <a class="nav-link" id="forumOne-tab" data-toggle="tab" href="#forumOne" role="tab" aria-controls="forum" aria-selected="false">Forum</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.3s">
                    <a class="nav-link" id="elementOne-tab" data-toggle="tab" href="#elementOne" role="tab" aria-controls="element" aria-selected="false">Elements</a>
                </li>
                <li class="nav-item wow fadeInLeft" data-wow-delay="0.4s">
                    <a class="nav-link" id="atlas-tab" data-toggle="tab" href="#atlas" role="tab" aria-controls="code" aria-selected="false">Atlas</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContentthree">
                <div class="tab-pane faq_tab_pane fade show active" id="ter" role="tabpanel" aria-labelledby="ter-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExample">
                                <div class="card active">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExamples">
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExamples">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExamples">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExamples">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExamples">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExamples">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane faq_tab_pane fade" id="docOne" role="tabpanel" aria-labelledby="docOne-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampledoc">
                                <div class="card">
                                    <div class="card-header" id="headingEleven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEleven" class="collapse show" aria-labelledby="headingEleven" data-parent="#accordionExampledoc">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingtwelve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#accordionExampledoc">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingthirteen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsethirteen" class="collapse" aria-labelledby="headingthirteen" data-parent="#accordionExampledoc">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfourteen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefourteen" class="collapse" aria-labelledby="headingfourteen" data-parent="#accordionExampledoc">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfifteenth">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefifteenth" aria-expanded="false" aria-controls="collapsefifteenth">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefifteenth" class="collapse" aria-labelledby="headingfifteenth" data-parent="#accordionExampledoc">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampledocTwo">
                                <div class="card">
                                    <div class="card-header" id="headingsixteenth">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesixteenth" aria-expanded="false" aria-controls="collapsesixteenth">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsesixteenth" class="collapse" aria-labelledby="headingsixteenth" data-parent="#accordionExampledocTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeventeenth">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeenth" aria-expanded="false" aria-controls="collapseSeventeenth">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeventeenth" class="collapse" aria-labelledby="headingSeventeenth" data-parent="#accordionExampledocTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEighteen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExampledocTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNineteen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExampledocTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwenty">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExampledocTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane faq_tab_pane fade" id="forumOne" role="tabpanel" aria-labelledby="forumOne-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleforum">
                                <div class="card">
                                    <div class="card-header" id="headingTwentyone">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyone" aria-expanded="true" aria-controls="collapseTwentyone">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyone" class="collapse show" aria-labelledby="headingTwentyone" data-parent="#accordionExampleforum">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentytwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentytwo" class="collapse" aria-labelledby="headingTwentytwo" data-parent="#accordionExampleforum">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentythree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentythree" class="collapse" aria-labelledby="headingTwentythree" data-parent="#accordionExampleforum">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyfour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyfour" class="collapse" aria-labelledby="headingTwentyfour" data-parent="#accordionExampleforum">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyfive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyfive" class="collapse" aria-labelledby="headingTwentyfive" data-parent="#accordionExampleforum">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleforumTwo">
                                <div class="card">
                                    <div class="card-header" id="headingTwentysix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentysix" aria-expanded="false" aria-controls="collapseTwentysix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentysix" class="collapse" aria-labelledby="headingTwentysix" data-parent="#accordionExampleforumTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyseven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyseven" class="collapse" aria-labelledby="headingTwentyseven" data-parent="#accordionExampleforumTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyeight">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyeight" class="collapse" aria-labelledby="headingTwentyeight" data-parent="#accordionExampleforumTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentynine">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentynine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExampleforumTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyten">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyten" aria-expanded="false" aria-controls="collapseTwentyten">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyten" class="collapse" aria-labelledby="headingTwentyten" data-parent="#accordionExampleforumTwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane faq_tab_pane fade" id="elementOne" role="tabpanel" aria-labelledby="elementOne-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleelement">
                                <div class="card">
                                    <div class="card-header" id="headingTwentye">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentye" aria-expanded="true" aria-controls="collapseTwentye">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentye" class="collapse show" aria-labelledby="headingTwentye" data-parent="#accordionExampleelement">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyt">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyt" aria-expanded="false" aria-controls="collapseTwentyt">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyt" class="collapse" aria-labelledby="headingTwentyt" data-parent="#accordionExampleelement">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyth">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyth" aria-expanded="false" aria-controls="collapseTwentyth">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyth" class="collapse" aria-labelledby="headingTwentyth" data-parent="#accordionExampleelement">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyf">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyf" aria-expanded="false" aria-controls="collapseTwentyf">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyf" class="collapse" aria-labelledby="headingTwentyf" data-parent="#accordionExampleelement">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwentyfi">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyfi" aria-expanded="false" aria-controls="collapseTwentyfi">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwentyfi" class="collapse" aria-labelledby="headingTwentyfi" data-parent="#accordionExampleelement">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleelements">
                                <div class="card">
                                    <div class="card-header" id="headingeleOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeleOne" aria-expanded="false" aria-controls="collapseeleOne">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleOne" class="collapse" aria-labelledby="headingeleOne" data-parent="#accordionExampleelements">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeleTwo" aria-expanded="false" aria-controls="collapseeleTwo">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleTwo" class="collapse" aria-labelledby="headingeleTwo" data-parent="#accordionExampleelements">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeleThree" aria-expanded="false" aria-controls="collapseeleThree">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleThree" class="collapse" aria-labelledby="headingeleThree" data-parent="#accordionExampleelements">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeleFour" aria-expanded="false" aria-controls="collapseeleFour">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleFour" class="collapse" aria-labelledby="headingeleFour" data-parent="#accordionExampleelements">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeleFive" aria-expanded="false" aria-controls="collapseeleFive">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseeleFive" class="collapse" aria-labelledby="headingeleFive" data-parent="#accordionExampleelements">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane faq_tab_pane fade" id="atlas" role="tabpanel" aria-labelledby="atlas-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleatlas">
                                <div class="card">
                                    <div class="card-header" id="headingAtlasone">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAtlasone" aria-expanded="true" aria-controls="collapseAtlasone">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasone" class="collapse show" aria-labelledby="headingAtlasone" data-parent="#accordionExampleatlas">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlastwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlastwo" aria-expanded="false" aria-controls="collapseAtlastwo">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlastwo" class="collapse" aria-labelledby="headingAtlastwo" data-parent="#accordionExampleatlas">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasthree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasthree" aria-expanded="false" aria-controls="collapseAtlasthree">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasthree" class="collapse" aria-labelledby="headingAtlasthree" data-parent="#accordionExampleatlas">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasfour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasfour" aria-expanded="false" aria-controls="collapseAtlasfour">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasfour" class="collapse" aria-labelledby="headingAtlasfour" data-parent="#accordionExampleatlas">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasfive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasfive" aria-expanded="false" aria-controls="collapseAtlasfive">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasfive" class="collapse" aria-labelledby="headingAtlasfive" data-parent="#accordionExampleatlas">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion doc_faq_info" id="accordionExampleatlastwo">
                                <div class="card">
                                    <div class="card-header" id="headingAtlassix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlassix" aria-expanded="false" aria-controls="collapseAtlassix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlassix" class="collapse" aria-labelledby="headingAtlassix" data-parent="#accordionExampleatlastwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasseven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasseven" aria-expanded="false" aria-controls="collapseAtlasseven">
                                                How can I subscribe to the PETSc mailing lists?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasseven" class="collapse" aria-labelledby="headingAtlasseven" data-parent="#accordionExampleatlastwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlaseight">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlaseight" aria-expanded="false" aria-controls="collapseAtlaseight">
                                                Can I run PETSc with extended precision? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlaseight" class="collapse" aria-labelledby="headingAtlaseight" data-parent="#accordionExampleatlastwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasnine">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasnine" aria-expanded="false" aria-controls="collapseAtlasnine">
                                                What kind of license is PETSc released under?<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasnine" class="collapse" aria-labelledby="headingAtlasnine" data-parent="#accordionExampleatlastwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAtlasten">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAtlasten" aria-expanded="false" aria-controls="collapseAtlasten">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAtlasten" class="collapse" aria-labelledby="headingAtlasten" data-parent="#accordionExampleatlastwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my flat William no biggie, gormless me old mucker such a fibber David bum bag so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doc_action_area parallaxie" data-background="img/bg.jpg" style="background: url(img/home_one/action_bg.jpg) no-repeat scroll;">
        <div class="overlay_bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-sm-8">
                    <div class="action_text">
                        <h2>Con't find an answer?</h2>
                        <p>Head over to our Discord channel</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="#" class="action_btn">Discord Channel <i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
