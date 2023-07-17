<aside class="doc_left_sidebarlist">
    <div class="open_icon" id="left">
        <i class="arrow_carrot-right"></i>
        <i class="arrow_carrot-left"></i>
    </div>
    <div class="scroll">
        <ul class="list-unstyled nav-sidebar">
            @foreach(config('sidebar', []) as $sidebar)
                @if (is_array($sidebar))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            {{ convertToAsideTitle($sidebar[0]) }}
                        </a>
                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                        <ul class="list-unstyled dropdown_nav">
                            @foreach($sidebar as $side)
                                <li>
                                    <a href="{{ route('docs', ['version' => $version ?? config('app.doc-version'), 'page' => $side]) }}">
                                        {{ convertToAsideTitle($side) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('docs', ['version' => $version ?? config('app.doc-version'), 'page' => $sidebar]) }}" class="nav-link">
                            {{ convertToAsideTitle($sidebar) }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</aside>
