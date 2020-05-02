<h1>Статистика</h1>
<p>
    Всего задач: {{$count}}
</p>
<p>
    <a href="/csv">Выполнить экспорт</a>
</p>
<p>
    <a href="/csv/all">Выполнить полный экспорт</a>
</p>

<h2>Накопленная информация (500 штук)</h2>

@foreach ($data as $item)
    <p><a href="http://{{$item->link_page}} " target="_blank">{{ $item->anons }}</a></p>
@endforeach
