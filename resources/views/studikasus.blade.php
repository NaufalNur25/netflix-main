@if ($title == 'nama')
    {{ $nama }}
@endif

@if ($title == 'kelas')
    {{ $kelas }}
@endif

@if ($title == 'teman')
    @foreach ($teman as $items => $sitem)
        {!! $sitem . $nis[$items] !!}
    @endforeach
@endif
