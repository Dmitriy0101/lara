@php
    $arrayBenefit = [
        [
            'id' => 0,
            'image' => 'dist/icons.svg#delivery',
            'text' => 'Бесплатная доставка при заказе от 300 грн'
        ],
        [
            'id' => 1,
            'image' => 'dist/icons.svg#many-shops',
            'text' => 'Акции и скидки среди 2400 товаров'
        ],
        [
            'id' => 2,
            'image' => 'dist/icons.svg#many-shops',
            'text' => 'Более 100 магазинов по всей Украине'
        ],
        [
            'id' => 3,
            'image' => 'dist/icons.svg#discount',
            'text' => 'Дисконтная программа ZooBonus.ua'
        ]
    ];
@endphp
<div class="benefit">
    <div class="container container--medium">
        <div class="benefit-block">
            <div class="container container--small">
                    <div class="benefit-block__card">
                        @foreach($arrayBenefit as $benefit)
                        <div class="benefit__card">
                            <div class="circle circle--white">
                                <svg class="delivery" width="44" height="32">
                                    <use xlink:href="{{$benefit['image']}}"></use>
                                </svg>
                            </div>
                            <div class="benefit__text">{{$benefit['text']}}</div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
