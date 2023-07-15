<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand sticky_logo" href="{{ route('home.index') }}">
            <img src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo.png') }} 2x" alt="logo">
            <img src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo.png') }} 2x" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_toggle">
                                <span class="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="hamburger-cross">
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item dropdown submenu active">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a href="index.html" class="nav-link">Cool Template</a></li>
                        <li class="nav-item"><a href="index.html" class="nav-link">Light Template</a></li>
                        <li class="nav-item"><a href="index-helpdesk.html" class="nav-link">Help Desk</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu mega_menu tab-demo">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu scroll">
                        <li>
                            <div class="row">
                                <div class="col-lg-5 tabHeader">
                                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <li class="nav-item active">
                                            <a class="nav-link active" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="true">Doc Topics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-code-tab" data-toggle="pill" href="#v-pills-code" role="tab" aria-controls="v-pills-code" aria-selected="false">Shortcodes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill" href="#v-pills-layout" role="tab" aria-controls="v-pills-layout" aria-selected="false">Layouts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Tour</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-content" aria-selected="false">Content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">Other Pages</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div class="tab-content tabContent" id="v-pills-tabContent">
                                        <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li>
                                                        <a href="doc-archive.html">Doc Archive</a>
                                                    </li>
                                                    <li>
                                                        <a href="doclist.html">Doc Topic</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doclist.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="tab.html">Tabs</a></li>
                                                    <li><a href="accordion.html">Accordion</a></li>
                                                    <li><a href="notice.html">Notice</a></li>
                                                    <li><a href="tab.html">Tables</a></li>
                                                    <li><a href="image-pointing.html">Image Lightbox</a></li>
                                                </ul>
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="tooltip.html">Tooltip</a></li>
                                                    <li><a href="lightbox.html">Lightbox</a></li>
                                                    <li><a href="can-use.html">Can I Use</a></li>
                                                    <li><a href="footnote.html">Footnote</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doclist.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="layouts.html">Both Sidebar</a></li>
                                                    <li><a href="layout-leftsidebar.html">Left Sidebar</a></li>
                                                    <li><a href="layout-full.html">Full-wdith</a></li>
                                                    <li><a href="sticky-menu.html">Sticky menu</a></li>
                                                    <li><a href="simple-footer.html">Simple Footer</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list w_100">
                                                    <li><a href="image-pointing.html">Image Hotspot</a></li>
                                                    <li><a href="tour.html">Application Interface</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-content-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="code.html">Code</a></li>
                                                    <li><a href="image.html">Image</a></li>
                                                    <li><a href="video.html">Video</a></li>
                                                    <li><a href="keyboard-shortcuts.html">Keyboard Shortcuts</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="doclist.html">Doc Topics</a>
                                                    </li>
                                                    <li><a href="Onepage.html">Onepage</a>
                                                    </li>
                                                    <li><a href="cheatsheet.html">Cheatseet</a>
                                                    </li>
                                                    <li><a href="changelog.html">Changelog</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doclist.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="signin.html" class="nav-link">Sign In</a></li>
                        <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                        <li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                        <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                        <li class="nav-item"><a href="forum-single.html" class="nav-link">Forum Single</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu dropdown_menu_two">
                        <li class="nav-item">
                            <a href="doc-archive.html" class="nav-link">
                                <img src="img/tick.png" alt="">
                                <div class="text">
                                    <h5>Docly</h5>
                                    <p>Launch Simple Websites</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="doclist.html" class="nav-link">
                                <img src="img/sheet.png" alt="">
                                <div class="text">
                                    <h5>docall</h5>
                                    <p>Digital Assets Subscription</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <img src="img/shopping-bag.png" alt="">
                                <div class="text">
                                    <h5>Docenvato</h5>
                                    <p>Tutorials & Courses</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <img src="img/gear.png" alt="">
                                <div class="text">
                                    <h5>Tools</h5>
                                    <p>Hire a Freelancer</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                        <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a></li>
                        <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                        <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                    </ul>
                </li>
            </ul>
            <a class="nav_btn" href="#">Free Trail</a>
        </div>
    </div>
</nav>
