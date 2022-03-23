<table>
    <tr>
        <th style="text-align: center; padding-right: 30px; padding-left: 30px">Nama</th>
        <th style="text-align: center; padding-right: 30px; padding-left: 30px">NIS</th>
        <th style="text-align: center; padding-right: 30px; padding-left: 30px">Tahun</th>
    </tr>

    @foreach ($teman as $index => $nteman)
        <tr>
            <td style="text-align: center;">{{ $nteman }}</td>
            <td style="text-align: center;">{{ $nis[$index] }}</td>
            <td style="text-align: center;">{{ $tahun[$index] .'th'}}</td>
        </tr>
    @endforeach
</table>
