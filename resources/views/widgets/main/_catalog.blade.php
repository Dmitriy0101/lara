@php
    $arrayCatalog = [
        ['href' => '#',
           'name' => 'Корм',
        ],
        ['href' => '#',
           'name' => 'Лакомства',
        ],
        ['href' => '#',
           'name' => 'Игрушки',
        ],
        ['href' => '#',
           'name' => 'Уход',
        ],
        ['href' => '#',
           'name' => 'Здоровье',
        ],
        ['href' => '#',
           'name' => 'Косметика',
        ],
        ['href' => '#',
           'name' => 'Одежда и обувь',
        ],
        ['href' => '#',
           'name' => 'Амуниция',
        ],
        ['href' => '#',
           'name' => 'Путешествия',
        ],
        ['href' => '#',
           'name' => 'Товары для дома',
        ],
    ];
    $arrayCard = [
    ['image' => 'img/catalog/card/1.png',
     'href' => '/catalog_filter',
     'name' => 'Корм',
     'link' => [
         ['name' => 'Сухой корм',
          'href' => '#'
         ],
         ['name' => 'Консервы',
          'href' => '#'
         ],
         ['name' => 'Ветеринарные диеты',
          'href' => '#'
         ],
         ['name' => 'Заменители молока',
          'href' => '#'
         ],
               ],
     'txt' => '',
     'all' => ''
    ],

    ['image' => 'img/catalog/card/2.png',
     'href' => '#',
     'name' => 'Лакомства',
     'link' => [
         ['name' => 'Кости',
          'href' => '#'
         ],
         ['name' => 'Печенье',
          'href' => '#'
         ],
          ['name' => 'Для дрессировки',
           'href' => '#'
         ],
          ['name' => 'Сушеные лакомства',
           'href' => '#'
         ],
               ],
     'txt' => '',
     'all' => ''
    ],

    ['image' => 'img/catalog/card/3.png',
     'href' => '#',
     'name' => 'Игрушки',
     'link' => [
         ['name' => 'Интерактивные',
          'href' => '#'
         ],
         ['name' => 'Удочки и дразнилки',
          'href' => '#'
         ],
         ['name' => 'Мышки',
          'href' => '#'
         ],
         ['name' => 'Мячики',
          'href' => '#'
         ],
               ],
     'txt' => 'all',
     'all' => 'Больше категорий'
    ],

    ['image' => 'img/catalog/card/4.png',
     'href' => '#',
     'name' => 'Уход',
     'link' => [
         ['name' => 'Средства по уходу',
          'href' => '#'
         ],
         ['name' => 'Инструменты для груминга',
          'href' => '#'
         ],
         ['name' => 'Туалеты и пеленки',
          'href' => '#'
         ]
               ],
     'txt' => '',
     'all' => ''
    ],
    ['image' => 'img/catalog/card/5.png',
     'href' => '#',
     'name' => 'Здоровье',
     'link' => [
         ['name' => 'Средства от блох и клещей',
          'href' => '#'
         ],
         ['name' => 'Витамины и добавки',
          'href' => '#'
         ],
         ['name' => 'Средства от глистов',
          'href' => '#'
         ],
         ['name' => 'Ветеринарные препараты',
          'href' => '#'
         ]
               ],
     'txt' => '',
     'all' => ''
    ],
    ['image' => 'img/catalog/card/6.png',
     'href' => '#',
     'name' => 'Косметика',
     'link' => [
         ['name' => 'Шампуни',
          'href' => '#'
         ],
         ['name' => 'Духи',
          'href' => '#'
         ],
         ['name' => 'Кондиционеры и спреи',
          'href' => '#'
         ],
         ['name' => 'Профессиональная и выставочная косметика',
          'href' => '#'
         ],
               ],
     'txt' => '',
     'all' => ''
    ],
    ['image' => 'img/catalog/card/7.png',
     'href' => '#',
     'name' => 'Одежда и обувь',
     'link' => [
         ['name' => 'Комбинезоны',
          'href' => '#'
         ],
         ['name' => 'Костюмы',
          'href' => '#'
         ],
         ['name' => 'Дождевики',
          'href' => '#'
         ],
         ['name' => 'Свитера',
          'href' => '#'
         ]
               ],
     'txt' => 'all',
     'all' => 'Больше категорий'
    ],
    ['image' => 'img/catalog/card/8.png',
     'href' => '#',
     'name' => 'Амуниция',
     'link' => [
         ['name' => 'Поводки',
          'href' => '#'
         ],
         ['name' => 'Ошейники',
          'href' => '#'
         ],
         ['name' => 'Шлейки',
          'href' => '#'
         ],
         ['name' => 'Рулетки',
          'href' => '#'
         ],
         ['name' => 'Намордники',
          'href' => '#'
         ]
               ],
     'txt' => 'all',
     'all' => 'Больше категорий'
    ],
    ['image' => 'img/catalog/card/9.png',
     'href' => '#',
     'name' => 'Товары для дома',
     'link' => [
         ['name' => 'Домики',
          'href' => '#'
         ],
         ['name' => 'Когтеточки',
          'href' => '#'
         ],
         ['name' => 'Спальные места',
          'href' => '#'
         ],
         ['name' => 'Миски и поилки',
          'href' => '#'
         ]
               ],
     'txt' => '',
     'all' => ''
    ],
    ['image' => 'img/catalog/card/10.png',
     'href' => '#',
     'name' => 'Путешествия',
     'link' => [
         ['name' => 'Сумки и переноски',
          'href' => '#'
         ],
         ['name' => 'Автоаксессуары',
          'href' => '#'
         ]
               ],
     'txt' => '',
     'all' => ''
    ]
];
@endphp
<div class="catalog">
    <div class="catalog__top">
        <div class="container container--medium">
            <div class="catalog-header">
                <div class="catalog-label">
                    <div class="catalog-label__top">
                        <div class="catalog-label__text">Товары <br>для</div>
                        <svg class="catalog-label__svg" width="14" height="14">
                            <use xlink:href="dist/icons.svg#help"></use>
                        </svg>
                    </div>
                    <div class="catalog-label__bottom">
                        <div class="catalog-label__info">У вас есть собака?</div>
                        <button class="catalog-label__button">+ Добавить питомца</button>
                    </div>
                </div>
                <div class="catalog-content">
                    <div class="catalog__title">
                        Каталог товаров <br>
                        <span class="catalog__title--normal">
                        для собак
                    </span>
                    </div>
                    <div class="catalog__subtitle">Товары и аксессуары для собак и щенков</div>
                    <div class="catalog-content__list">
                        @foreach($arrayCatalog as $catalog)
                            <a href="{{$catalog['href']}}" class="catalog-content__link">{{$catalog['name']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog__bottom">
        <div class="container container--medium">
            <div class="catalog-list">
                @foreach($arrayCard as $card)
                    <div class="catalog-list__item">
                        <div class="catalog-card">
                            <div class="catalog-card__itm">
                                <a href="{{$card['href']}}">
                                    <img class="catalog-card__img" src="{{$card['image']}}" alt="">
                                </a>
                            </div>
                            <div class="catalog-card__title">{{$card['name']}}</div>
                            <a href="#" class="catalog-card__toggle">
                                <div>Смотреть все</div>
                                <svg class="arrow-right arrow-right--white" width="16" height="8">
                                    <use xlink:href="dist/icons.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="catalog-link">
                            @foreach($card['link'] as $card__link)
                                <a href="{{$card__link['href']}}" class="catalog-link__itm">{{$card__link['name']}}</a>
                            @endforeach
                                <a href="#" class="catalog-link__{{$card['txt']}}">{{$card['all']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
