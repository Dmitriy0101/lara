<div class="card">
    <div class="card__top">
        <a href="{{ $list['href'] }}" class="card__image">
            <img class="card__img" src="{{ $list['image'] }}" alt="">
        </a>
        <div class="labels">
            @foreach($list ['labels'] as $label)
                <div class="label label--{{ $label['color'] }}">{{ $label['text'] }}</div>
            @endforeach
        </div>
    </div>
    <div class="card__info">
        <a href="{{ $list['href'] }}" class="card__info-title">
            {{ $list['text'] }}
        </a>
        <div class="rating">
            @for($i = 1; $i <= 5; $i++)
                <svg class="star {{ $list ['rate'] < $i ? 'bad-star' : '' }}" width="14" height="14">
                    <use xlink:href="dist/icons.svg#star"></use>
                </svg>
            @endfor
            <span class="rating__reviews zero">{{$list ['reviews']}}</span>
        </div>
        <div class="trade">
            <div class="trade-body">
                <div class="trade-body__new-price">
                    <div class="new-price">
                        <a href="{{ $list['href'] }}" class="new-price__update">
                            <svg class="update" width="15" height="15">
                                <use xlink:href="dist/icons.svg#update"></use>
                            </svg>
                        </a>
                        @if($list['from'] != $list['new-price'])
                            <span class="new-price__cost">{{$list['from']}}{{$list['new-price']}}</span>
                        @endif
                    </div>
                </div>
                <div class="trade-body__old-price">
                    <div class="old-price">
                        @if($list['from'] != $list['discount'])
                            <div class="old-price__discount">{{$list['from']}}{{$list['discount']}}</div>
                        @endif
                        @if($list['from'] != $list['price'])
                            <div class="old-price__cost">{{$list['from']}}{{$list['price']}}</div>
                        @endif
                    </div>
                </div>
            </div>
            <button class="button button--basket">
                <svg class="wish wish__blue" width="21" height="20">
                    <use xlink:href="dist/icons.svg#basket"></use>
                </svg>
            </button>
        </div>
    </div>
</div>
