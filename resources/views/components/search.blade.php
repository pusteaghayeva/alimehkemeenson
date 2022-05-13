@foreach($items as $item)
    @php
        $locale = Session::get('locale');
    @endphp
<form class="form-inline" action="{{route('news')}}">
    <input class="form-control mr-sm-2" type="search" placeholder="{{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}..." aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
        {{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
    </button>
</form>
@endforeach