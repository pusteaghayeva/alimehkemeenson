@foreach($items as $item)
    use Illuminate\Support\Facades\Session;

    @php

        $locale =Session ::get('locale');
        $children = (isset($item->children[0]))?$item->children:false
    @endphp
    <div class="main-menu col-6 col-xs-12 col-sm-4 col-xs-12 col-md-2 col-lg-2">
        <a href="{{$item->link()}}" class="menu-link bold">
            {{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
        @if(!$children)
        @else
            @foreach($children as $child)
                <p class="menu-text">
                    <a href="{{$child->route}}" class="text-light big-li">
                        {{$child->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                    </a>
                </p>
            @endforeach
        @endif
    </div>
@endforeach


