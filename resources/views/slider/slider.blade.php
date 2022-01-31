@php
    $arraylist = [
      ['id' => 0,
        'image' => 'img/product/prod2.png',
        'href' => '#',
        'labels' => [
            ['text' => 'ТОП продаж',
            'color' => 'purple',],
            [
            'text' => 'Скидка -5%',
            'color' => 'red'
        ]
            ],
        'text' => ' Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг',
        'rate' => 0,
        'reviews' => '(0)',
        'new-price' => '1 550,22 ₴',
        'discount' => '1 700,22',
        'price' => '1 600,22 ₴',
        'from' => ''
      ],

      ['id' => 1,
            'image' => 'img/product/prod1.png',
            'href' => '#',
            'labels' => [
            ['text' => 'Скидка -5%',
             'color' => 'red'
            ]
                     ],
            'text' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
            'rate' => 5,
            'reviews' => '(12)',
            'new-price' => ' 198,22 ₴',
            'discount' => ' 260,22',
            'price' => ' 206,71 ₴',
            'from' => 'от'
          ],

          ['id' => 2,
            'image' => 'img/product/prod3.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'Новинка',
            'color' => 'green',
            ]
                        ],
            'text' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
            'rate' => 4,
            'reviews' => '(65)',
            'new-price' => 'Автозаказ',
            'discount' => '',
            'price' => '1 600,22 ₴',
            'from' => ''
          ],

           ['id' => 3,
            'image' => 'img/product/prod4.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'ТОП продаж',
            'color' => 'purple',
            ],
            ['text' => 'Скидка -5%',
             'color' => 'red'
            ]
                        ],
            'text' => 'Scalibor (Скалибор) ошейник 48 см',
            'rate' => 0,
            'reviews' => '(0)',
            'new-price' => '520,00 ₴',
            'discount' => '640,22',
            'price' => '560,22 ₴',
            'from' => ''
           ],

           ['id' => 4,
            'image' => 'img/product/prod5.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'ТОП продаж',
            'color' => 'purple',
            ]
                        ],
            'text' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
            'rate' => 0,
            'reviews' => '(0)',
            'new-price' => '1 550,22 ₴',
            'discount' => '',
            'price' => '1 600,22 ₴',
            'from' => ''
           ],

          ['id' => 5,
            'image' => 'img/product/prod2.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'ТОП продаж',
            'color' => 'purple',
            ],
            ['text' => 'Скидка -5%',
             'color' => 'red'
            ]
                        ],
            'text' => ' Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг',
            'rate' => 0,
            'reviews' => '(0)',
            'new-price' => '1 550,22 ₴',
            'discount' => '1 700,22',
            'price' => '1 600,22 ₴',
            'from' => ''
          ],

        ['id' => 6,
            'image' => 'img/product/prod1.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'Скидка -5%',
            'color' => 'red',
            ]
                     ],
            'text' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
            'rate' => 5,
            'reviews' => '(12)',
            'new-price' => 'от 198,22 ₴',
            'discount' => '260,22',
            'price' => '206,71 ₴',
            'from' => 'от'
        ],

          ['id' => 7,
            'image' => 'img/product/prod3.png',
            'href' => '#',
            'labels' => [
            [
            'text' => 'Новинка',
            'color' => 'green',
            ]
                        ],
            'text' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
            'rate' => 4,
            'reviews' => '(65)',
            'new-price' => 'Автозаказ',
            'discount' => '',
            'price' => '1 600,22 ₴',
            'from' => ''
          ]
    ];

@endphp
<div class="block-slider">
    <div class="container container--medium">
        <div class="best">
            <div class="best__title">
                Лучшие предложения недели
            </div>
            <div class="best-deals">
                <a href="#" class="best-deals__link best-deals__link--active">Собакам</a>
                <a href="#" class="best-deals__link">Кошкам</a>
                <a href="#" class="best-deals__link">Птицам</a>
                <a href="#" class="best-deals__link">Грызунам</a>
            </div>
        </div>
        <div class="slider" data-slider>
            @foreach($arraylist as $list)
                @include('widgets.main.product-card', ['list' => $list])
            @endforeach
        </div>
    </div>
</div>
