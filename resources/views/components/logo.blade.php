<div class="first position-relative">
    @foreach($items as $item)
        @php
            $locale = Session::get('locale');
        @endphp
        <a href="/" class="footer-logo">
            <img src="assets/img/logo.png" class="logo-img" alt="">
            <p class="logo-text">
                {{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
            </p>
        </a>
    @endforeach
</div>