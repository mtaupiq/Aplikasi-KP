<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<table>
    <tr>
        <th colspan="8" style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">LOGBOOK GANGGUAN OSS {{$bulan}}</th>
    </tr>
    <tr>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">TANGGAL</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">TIKET</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">NO TIKET</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">WO</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">LOKASI</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">KETERANGAN</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">PERBAIKAN</th>
        <th style="background-color: #8db4e2;border: 1px solid #000;" align="center" height="30" valign="middle">PETUGAS</th>
    </tr>
    @if(count($result))
    @foreach($result as $item)
    <tr>
        <td style="border: 1px solid #000;" align="center">{{$item->tanggal}}</td>
        <td style="border: 1px solid #000;" align="center">{{$item->tiket}}</td>
        <td style="border: 1px solid #000;" align="center">{{$item->no_tiket}}</td>
        <td style="border: 1px solid #000;" align="center">{{$item->wo}}</td>
        <td style="border: 1px solid #000;" align="center">{{$item->lokasi}}</td>
        <td style="border: 1px solid #000;">{{$item->keterangan}}</td>
        <td style="border: 1px solid #000;">
            @foreach($item->perbaikan as $list)
            {{$list->perbaikan}}
            @endforeach
        </td>
        <td style="border: 1px solid #000;" align="center">
            @foreach($item->petugas as $list)
            {{$list->nama}}
            @endforeach
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td style="border: 1px solid #000;" colspan="8" align="center">Data tidak ditemukan!</td>
    </tr>  
    @endif
</table>
</html>