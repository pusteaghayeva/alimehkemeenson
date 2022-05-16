<footer>
    <div class="copyright ">
        @foreach($items as $item)
            @php
                $locale = Session::get('locale');
            @endphp
            <p class="copy-text ">
                <a href="{{$item->link()}}" target="{{$item->target}} " class="copy-link ">&copy; <?php echo date("Y"); ?>
                    {{$item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                </a>
            </p>
        @endforeach
    </div>
</footer>