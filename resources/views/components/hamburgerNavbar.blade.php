@foreach($items as $item)
    @php
        $children = (isset($item->children[0]))?$item->children:false
    @endphp
    <div class="main-menu col-6 col-xs-12 col-sm-4 col-xs-12 col-md-2 col-lg-2">
        <a href="{{$item->link()}}" class="menu-link bold">
            {{$item->title}}</a>
        @if(!$children)
        @else
            @foreach($children as $child)
                <p class="menu-text"><a href="{{$child->route}}" class="text-light big-li">{{$child->title}}</a></p>
            @endforeach
        @endif
    </div>
@endforeach


