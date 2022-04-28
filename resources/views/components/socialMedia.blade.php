<div class="social-links d-md-flex align-items-center">
    @foreach($items as $item)
    <a href="{{$item->link()}}" target="{{$item->target}}" class="twitter"><i class="fa-brands {{$item->icon_class}}"></i></a>
    @endforeach
</div>