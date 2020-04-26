@foreach ($data as $item)
    <p><a href=" http://{{$item->link_page}} " target="_blank">{{ $item->anons }}</a></p>
@endforeach
