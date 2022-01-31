@php

    $arrayMenu = [
    ['id' => '0',
     'href' => '/catalog',
     'name' => 'Товары по питомцам',
                     'children' => [
                                        ['id' => '0',
                                        'href' => '#',
                                        'icon-name' => 'animals',
                                        'icon' => 'dist/icons.svg#animal1',
                                        'width' => '32',
                                        'height' => '32',
                                        'title' => 'Собаки',
                                        'icon-arrow' => 'dist/icons.svg#arrow-right',
                                            'sub-menu' => [
                                                ['id' => '0',
                                                 'sub-title' => 'Корм',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Сухой корм',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Консервы',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Ветеринарные диеты'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Заменители молока'
                                                             ]
                                                          ],
                                                 'watch' => 'Смотреть все >'
                                                 ],

                                                ['id' => '1',
                                                'sub-title' => 'Игрушки',
                                                'href' => '#',
                                                'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Интерактивные',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Удочки и дразнилки',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Мышки'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Мячики'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '2',
                                                'sub-title' => 'Здоровье',
                                                'href' => '#',
                                                'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Средства от блох и клещей',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Витамины и добавки',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Средства от глистов'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Ветеринарные препараты'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '3',
                                                'sub-title' => 'Одежда и обувь',
                                                'href' => '#',
                                                'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Комбинезоны',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Костюмы',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Дождевики'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Свитера'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '4',
                                                 'sub-title' => 'Товары для дома',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Домики',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Когтеточки',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Спальные места'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Миски и поилки'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '5',
                                                 'sub-title' => 'Лакомства',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Кости',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Печенье',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Для дрессировки'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Сушеные лакомства'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '6',
                                                 'sub-title' => 'Уход',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Средства по уходу',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Инструменты для груминга',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Туалеты и пеленки'
                                                             ],
                                                        ],
                                             'watch' => ''
                                             ],

                                                ['id' => '7',
                                                 'sub-title' => 'Косметика',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Шампуни',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Духи',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Кондиционеры и спреи'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Профессиональная и выставочная косметика'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '8',
                                                 'sub-title' => 'Амуниция',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Поводки',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Ошейники',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Шлейки'
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Рулетки'
                                                             ]
                                                        ],
                                                'watch' => 'Смотреть все >'
                                                ],

                                                ['id' => '9',
                                                 'sub-title' => 'Путешествия',
                                                 'href' => '#',
                                                 'link' =>[
                                                             ['href' =>'#',
                                                              'name' => 'Сумки и переноски',
                                                             ],
                                                             ['href' =>'#',
                                                              'name' => 'Автоаксессуары',
                                                             ],
                                                         ],
                                                'watch' => ''
                                                ],
                                                          ]
                                        ],
                                        ['id' => '1',
                                        'href' => '#',
                                        'icon-name' => 'animals',
                                        'icon' => 'dist/icons.svg#animal2',
                                        'width' => '32',
                                        'height' => '32',
                                        'title' => 'Кошки',
                                        'icon-arrow' => 'dist/icons.svg#arrow-right',
                                        'sub-menu' => []
                                        ],
                                        ['id' => '2',
                                        'href' => '#',
                                        'icon-name' => 'animals',
                                        'icon' => 'dist/icons.svg#animal3',
                                        'width' => '32',
                                        'height' => '32',
                                        'title' => 'Птицы',
                                        'icon-arrow' => 'dist/icons.svg#arrow-right',
                                        'sub-menu' => []
                                        ],
                                        ['id' => '3',
                                        'href' => '#',
                                        'icon-name' => 'animals',
                                        'icon' => 'dist/icons.svg#animal4',
                                        'width' => '32',
                                        'height' => '32',
                                        'title' => 'Грызуны',
                                        'icon-arrow' => 'dist/icons.svg#arrow-right',
                                        'sub-menu' => []
                                        ],
                                        ['id' => '4',
                                        'href' => '#',
                                        'icon-name' => 'black-star',
                                        'icon' => 'dist/icons.svg#star',
                                        'width' => '24',
                                        'height' => '24',
                                        'title' => 'Новинки',
                                        'icon-arrow' => '',
                                        'sub-menu' => []
                                        ],
                                        ['id' => '5',
                                        'href' => '#',
                                        'icon-name' => 'percent',
                                        'icon' => 'dist/icons.svg#percent',
                                        'width' => '20',
                                        'height' => '22',
                                        'title' => 'Акции',
                                        'icon-arrow' => '',
                                        'sub-menu' => []
                                        ]
                                 ]
    ],
    ['id' => '1',
     'href' => '#',
     'name' => 'Бренды',
                    'children' => [

                                 ]
    ],
    ['id' => '2',
     'href' => '#',
     'name' => 'Ветаптека',
                         'children' => [

                                       ]
    ],
    ['id' => '3',
     'href' => '#',
     'name' => 'Найди друга',
                         'children' => [


                                       ]
    ],
    ['id' => '4',
     'href' => '#',
     'name' => 'Ветклиники',
                         'children' => [


                                     ]
    ],

  ];
@endphp

<div class="header-menu">
    <div class="header-menu__top">
        <div class="header-menu__top-left">
            <div class="top-left">
                <div class="top-left__item">
                    <div class="region">
                        <button class="region__button">
                            <svg class="region__icon" width="12" height="14">
                                <use xlink:href="dist/icons.svg#region"></use>
                            </svg>
                        </button>
                        <div class="region__name">Херсон</div>
                    </div>
                </div>
                <div class="top-left__item">
                    <a href="#" class="top-left__item-link">Магазины</a>
                    <a href="#" class="top-left__item-link">Блог</a>
                    <a href="#" class="top-left__item-link">Покупателям</a>
                </div>
            </div>
        </div>
        <div class="header-menu__top-right">
            <div class="top-right">
                <div class="top-right__item">
                    <div class="dropdown">
                        <div class="dropdown-phones__text">Консультация:</div>
                        <div class="dropdown-phones">
                            <div class="dropdown-phones__header">
                                <a class="dropdown-phones__number" href="tel:0444903100">(044) 490 31 00</a>
                                <div class="dropdown-phones__toggle">
                                    <button class="button button--theme-number">
                                        <svg class="button__toggle" width="12" height="14">
                                            <use xlink:href="dist/icons.svg#arr-down"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="dropdown-phones__menu">
                                    <a class="dropdown-phones__number" href="tel:0444903100">(044) 490 31 00</a>
                                    <a class="dropdown-phones__number" href="tel:0444903100">(044) 490 31 00</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="top-right__item">
                    <div class="lang">
                        <a href="#" class="lang__link">УКР</a>
                        <a class="lang__link lang__link--active">РУС</a>
                        <a href="#" class="lang__link">ENG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu__bottom">
        <div class="header-menu__bottom-left">
            <div class="bottom-left">
                <a href="/" class="logotip">
                    <svg class="logo" width="117" height="45">
                        <use xlink:href="dist/icons.svg#wezom_logo"></use>
                    </svg>
                </a>
                <nav class="directory">
                    @foreach($arrayMenu as  $index => $menu)
                        <div class="directory__item" data-menu-ns="lvl1" data-menu-button="{{$index}}" data-menu>
                            <a href="{{$menu['href']}}" target="_blank" class="directory__link">{{$menu['name']}}</a>
                            @if(isset($menu['children']) && count($menu['children']) > 0 )
                                @include('modules.dropdown-menu', ['menu' => $menu['children'], 'index' => $index])
                            @endif
                        </div>
                    @endforeach
                </nav>
            </div>
        </div>
        <div class="header-menu__bottom-right">
            <div class="bottom-right">
                <div class="header-search" data-search-block>
                    <button class="header-search__img">
                        <svg class="wish" width="26" height="26">
                            <use xlink:href="dist/icons.svg#search"></use>
                        </svg>
                    </button>
                    <div class="header-search__block">
                        <div class="header-search__text">
                            Поиск
                        </div>
                    </div>
                </div>
                @include('modules.search')
                <div class="header-actions">
                    <button class="user mfp-inline" data-mfp-src="#form-popup" data-magnific>
                        <svg class="wish" width="22" height="26">
                            <use xlink:href="dist/icons.svg#user"></use>
                        </svg>
                    </button>

                    @include('modules.authorization')
                    <button class="favorite">
                        <svg class="wish" width="27" height="25">
                            <use xlink:href="dist/icons.svg#fav"></use>
                        </svg>
                    </button>
                    <button class="shopping-card">
                        <div class="shopping-card__item">
                            <svg class="shopping-card__icon wish" width="32" height="32">
                                <use xlink:href="dist/icons.svg#basket"></use>
                            </svg>
                            <div class="shopping-card__count">0</div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
