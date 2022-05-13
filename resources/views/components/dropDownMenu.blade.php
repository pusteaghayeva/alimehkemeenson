<ul class="nav navbar-nav">
    @foreach($items as $item)
        @php

            $locale = Session::get('locale');
            $children = (isset($item->children[0]))?$item->children:false
        @endphp

        @if(!$children)
            <li class="nav-item active">
                @if($item->title == "home")
                    <a href="{{$item->link()}}" class="nav-link dropdown-toggle fa-2x"><i
                                class="fas fa-home mr-1"></i>
                    </a>
                @else
                    <a href="{{$item->link()}}" class="nav-link dropdown-toggle fa-2x" target="{{$item->target}}" >
                           {{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                    </a>
                @endif
            </li>
        @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}} <i
                            class=""></i></a>
                <ul class="dropdown-menu" role="menu">
                    @foreach($children as $child)
                        <li><a href="{{$child->route}}">
{{--                                {{$child->title}}--}}
                                {{$child->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}

                            </a></li>
                    @endforeach
                </ul>
            </li>

        @endif



    @endforeach
</ul>