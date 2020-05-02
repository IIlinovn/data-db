<h1>Статистика</h1>
<p>
    Всего задач: {{$count}}
</p>
<p>
    <a href="/csv">Выполнить экспорт 500 записей</a>
</p>

<h2>Накопленная информация (50 штук)</h2>

@foreach ($data as $item)
    <p><a href="http://{{$item->link_page}} " target="_blank">{{ $item->anons }}</a></p>
@endforeach
