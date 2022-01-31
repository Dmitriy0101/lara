<div class="menu" data-menu-ns="lvl1" data-menu-container="{{$index}}">
    @foreach($menu as $i => $child)

        <div class="menu__item" data-menu-ns="lvl2" data-menu-button="{{$i}}" data-menu>
            <div class="menu-item">
                <a href="{{ $child['href'] }}" class="menu-item__link">
                    <div class="menu-item__svg">
                        <svg class="{{$child['icon-name']}}" width="{{$child['width']}}"
                             height="{{$child['height']}}">
                            <use xlink:href="{{$child['icon']}}"></use>
                        </svg>
                    </div>
                    <div class="menu-item__content">{{$child['title']}}</div>
                    <div class="menu-item__svg">
                        <svg class="arrow-right" width="9" height="14">
                            <use xlink:href="{{$child['icon-arrow']}}"></use>
                        </svg>
                    </div>
                </a>
            </div>
            @if(isset($child['sub-menu']) && count($child['sub-menu']) > 0 )
                <div class="menu-list" data-menu-ns="lvl2" data-menu-container="{{$i}}">
                    <div class="menu-list__item">
                        @foreach($child['sub-menu'] as $submenu)
                            <div class="menu-link">
                                <div class="menu-link__title">{{$submenu['sub-title']}}</div>
                                <div class="menu-link__content">
                                    @foreach($submenu['link'] as $link)
                                        <a class="menu-link__content-item"
                                           href="{{$link['href']}}">{{$link['name']}}</a>
                                    @endforeach
                                </div>
                                <a class="menu-link__see" href="{{$submenu['href']}}">{{$submenu['watch']}}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="menu-list__footer">
                        <img class="menu-list__img" src="img/menu-list__img/1.png" alt="">
                        <img class="menu-list__label" src="img/label.png" alt="">
                    </div>
                </div>
            @endif
        </div>

    @endforeach
</div>
