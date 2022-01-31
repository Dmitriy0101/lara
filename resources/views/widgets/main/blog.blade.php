@php
    $arrayBlog = [
        ['id' => 0,
        'image' => 'img/blog/1.png',
        'labels' => [
            [
            'text' => 'Полезные советы',
            'color' => 'purple',
            ]
                     ],
        'video' => '',
        'day' => '22',
        'month' => 'сент',
        'text' => 'Как выбрать корм для питомца. Советы профессионалов. Выбираем корм для котов 7+'
        ],

        ['id' => 1,
        'image' => 'img/blog/2.png',
        'labels' => [
            [
            'text' => 'Лайфхаки',
            'color' => 'yellow',
            ]
                     ],
        'video' => '',
        'day' => '19',
        'month' => 'сент',
        'text' => 'Как научить собаку команде "принеси тапочки" в домашних условиях'
        ],

        ['id' => 2,
        'image' => 'img/blog/3.png',
        'labels' => [
            [
            'text' => 'Видео',
            'color' => 'green',
            ]
                     ],
        'video' => 'https://www.youtube.com/watch?v=bMPOfhoDVwo',
        'day' => '14',
        'month' => 'сент',
        'text' => 'Обзор товаров. Выбираем лучшую когтеточку для вашего кота.'
        ],

        ['id' => 3,
        'image' => 'img/blog/4.png',
        'labels' => [
            [
            'text' => 'Обзоры товаров',
            'color' => 'blue',
            ]
                     ],
        'video' => '',
        'day' => '9',
        'month' => 'сент',
        'text' => 'Игрушка для собак Trixie Мяч светящийся с шипами'
        ],
    ];
@endphp

<div class="wrapper">
    <div class="container container--medium">
        <div class="blog">
            <div class="block-search">
                <div class="block-search__body">
                    <div class="block-search__title">
                        Объявления о продаже
                    </div>
                    <div class="block-search__icon">
                        <img src="img/search-blog/lapka.svg" alt="">
                    </div>
                    <div class="title title--green">Найди друга</div>
                    <div class="block-search__info">Ищете питомца? Посмотрите сотни объявлений от проверенных
                        разводителей.
                    </div>
                    <div class="block-search__img">
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/1.png" alt="">
                        </a>
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/2.png" alt="">
                        </a>
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/3.png" alt="">
                        </a>
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/4.png" alt="">
                        </a>
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/5.png" alt="">
                        </a>
                        <a class="block-search__image" href="#">
                            <img src="img/search-blog/6.png" alt="">
                        </a>
                    </div>
                    <a href="#" class="button button--orange">
                        <div class="button__text">Все объявления</div>
                        <svg class="button__icon arrow-right--white" width="12" height="12">
                            <use xlink:href="dist/icons.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="block-blog">
                <div class="title title--black">Полезные материалы</div>
                <div class="block-blog__info">
                    <div class="blog-catalog">
                        <a href="#" class="blog-catalog__item">Новости</a>
                        <a href="#" class="blog-catalog__item">Полезные советы</a>
                        <a href="#" class="blog-catalog__item">Видео</a>
                        <a href="#" class="blog-catalog__item">Обзоры товаров</a>
                        <a href="#" class="blog-catalog__item">Лайфхаки</a>
                    </div>
                    <a href="#" class="link-blog">
                        <div class="link-blog__button">
                            <span class="link-blog__text">
                             Перейти в блог
                            </span>
                        </div>
                    </a>
                </div>
                <div class="block-blog__card">
                    <div class="blog-card">
                        @foreach($arrayBlog as $blog)
                            <div class="blog-card__item">
                                <div class="blog-card__block">
                                    <div class="blog-card__itm">
                                        <a href="#" class="blog-card__button">
                                            <img class="blog-card__image" src="{{ $blog['image']}}" alt="">
                                        </a>
                                        <div class="labels">
                                            @foreach($blog ['labels'] as $label)
                                                <div
                                                    class="label label--{{ $label['color'] }}">{{ $label['text'] }}</div>
                                            @endforeach
                                        </div>
                                        @if($blog['video'])
                                            <button class="popup-video mfp-iframe"
                                                    data-mfp-src="{{$blog['video']}}" data-magnific>
                                                <svg class="video" width="64" height="64">
                                                    <use xlink:href="/dist/icons.svg#video"></use>
                                                </svg>
                                            </button>
                                        @endif

                                    </div>
                                </div>
                                <div class="blog-card__info">
                                    <div class="blog-calendar">
                                        <div class="blog-calendar__date">{{ $blog['day'] }}</div>
                                        <div class="blog-calendar__month">{{ $blog['month'] }}</div>
                                    </div>
                                    <a href="#" class="blog-card__text">{{ $blog['text'] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
