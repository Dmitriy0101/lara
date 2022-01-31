@php
    $arraySearch = [
    ['id' => '0',
     'name' => 'Товары',
     'col' => '256',
     'link'=> [
         ['name' => 'Корм для собак (86)'],
         ['name' => 'Корм для котов (65)'],
         ['name' => 'Корм для птиц (32)'],
         ['name' => 'Корма для грызунов (18)'],
         ['name' => 'Аксессуары для кормления животных (3)'],
         ['name' => 'Кормушки, поилки для собак (18)']
               ]
    ],
    ['id' => '1',
     'name' => 'Статьи',
     'col' => '24',
     'link' => []
    ],
    ['id' => '2',
     'name' => 'Ветклиники',
     'col' => '5',
     'link' => []
    ],
];
$arraySearch_card= [
    ['id' => '0',
     'title' => 'Корм для собак',
     'card' => [
         ['img' => 'img/search-result/1.png',
          'info' => 'TOMi 3 kinds of poultry ТОМи 3 ВИДА ПТИЦЫ супер премиум корм, консервы...',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/2.png',
          'info' => '1st Choice Puppy Toy&Small Lamb&Fish ФЕСТ ЧОЙС ЩЕНОК МИНИ ЯГНЕНОК...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/3.png',
          'info' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/4.png',
          'info' => 'Pronature Original Adult Chicken ПРОНАТЮР ОРИДЖИНАЛ КУРИЦА корм...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/5.png',
          'info' => 'Schesir Dog Small Adult Lamb ШЕЗИР ВЗРОСЛЫЙ МАЛЫХ ЯГНЕНОК сухой...',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
               ],
     'all' => 'Смотреть все >',
    ],
    ['id' => '1',
     'title' => 'Корм для Котов',
     'card' => [
         ['img' => 'img/search-result/6.png',
          'info' => 'Schesir Chicken Fillet ШЕЗИР ФИЛЕ КУРИЦЫ в желе натуральные консерв...',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/7.png',
          'info' => 'Stuzzy Cat Rabbit ШТУЗИ КЕТ КРОЛИК в желе корм для кошек, пауч, 100г',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/8.png',
          'info' => 'Schesir Tuna Chicken ШЕЗИР ТУНЕЦ С ФИЛЕ КУРИЦЫ в желе натуральные...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/9.png',
          'info' => '1st Choice Weight Control Adult ФЕСТ ЧОЙС КОНТРОЛЬ ВЕСА сухой супер премиум...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/10.png',
          'info' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ]
               ],
     'all' => 'Смотреть все >',
    ],
    ['id' => '2',
     'title' => 'Корм для птиц',
     'card' => [
         ['img' => 'img/search-result/11.png',
          'info' => 'Versele-Laga Prestige Вudgies ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ ПОПУГАЙЧИК...',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/12.png',
          'info' => 'Versele-Laga Prestige Premium Tropical Finches ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/13.png',
          'info' => 'Versele-Laga Prestige Premium Parrots ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ ПРЕМИУМ...',
          'old-price' => '1 700,22',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/14.png',
          'info' => '1st Choice Weight Control Adult ФЕСТ ЧОЙС КОНТРОЛЬ ВЕСА сухой супер премиум...',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ],
         ['img' => 'img/search-result/15.png',
          'info' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
          'old-price' => '',
          'new-price' => '1 600,22 ₴'
         ]
               ],
     'all' => 'Смотреть все >',
    ]
                   ];
@endphp
<div class="result">
    <div class="container container--medium">
        <div class="search-result">

            <div class="search-result__menu">
                @foreach($arraySearch as $search)
                    <div class="search-result__item">
                        <a href="#" class="search-result__top">
                            <div class="search-result__title">{{$search['name']}}</div>
                            <div class="search-result__col">{{$search['col']}}</div>
                        </a>
                        <div class="search-result__content">
                            @foreach($search['link'] as $newsearch)
                                <a class="search-result__link" href="#">{{$newsearch['name']}}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="search-result__card">
                <div class="search-card">
                    @foreach($arraySearch_card as $search_card)
                        <div class="search-card__block">
                            <div class="search-card__title">{{$search_card['title']}}</div>
                            @foreach($search_card['card'] as $new_card)
                                <div class="search-card__item">
                                    <a class="search-card__img" href="#">
                                        <img src="{{$new_card['img']}}" alt="">
                                    </a>
                                    <div class="search-card__content">
                                        <a href="#" class="search-card__info">{{$new_card['info']}}</a>
                                        <div class="search-card__cost">
                                            <div class="search-card__oldcost">{{$new_card['old-price']}}</div>
                                            <div class="search-card__newcost">{{$new_card['new-price']}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="search-card__all">{{$search_card['all']}}</div>
                        </div>
                    @endforeach
                </div>
                <button class="button button--orange search-card__btn">
                    <div class="button__text">Все Товары</div>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
