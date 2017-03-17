<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <title>Print Laporan tgl {{$from}} s/d {{$to}}</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-extend.min3f0d.css?v2.2.0')}}">
</head>
<body>
    <div class="text-center text-uppercase" style="font-size: 1.2em;">logbook gangguan oss<br>{{$from}} - {{$to}}</div>
    <br>
    <table class="table table-bordered table-condensed">
        <thead style="border-bottom: 2px solid;">
            <tr>
                <th class="text-center" style="width: 100px;">Tanggal</th>
                <th class="text-center" style="width: 50px;">Tiket</th>
                <th class="text-center" style="width: 100px;">No Tiket</th>
                <th class="text-center" style="width: 100px;">WO</th>
                <th class="text-center" style="width: 50px;">Lokasi</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center" style="width: 200px;">Perbaikan</th>
                <th class="text-center" style="width: 125px;">Petugas</th>
            </tr>
        </thead>
        <tbody>
            @if(count($result))
            @foreach($result as $item)
            <tr>
                <td class="text-center">{{$item->tanggal}}</td>
                <td class="text-center">{{$item->tiket}}</td>
                <td class="text-center">{{$item->no_tiket}}</td>
                <td class="text-center">{{$item->wo}}</td>
                <td class="text-center">{{$item->lokasi}}</td>
                <td>{{$item->keterangan}}</td>
                <td class="text-center">
                    @foreach($item->perbaikan as $list)
                    {{$list->perbaikan}},
                    @endforeach
                </td>
                <td class="text-center">
                    @foreach($item->petugas as $list)
                    {{$list->nama}},
                    @endforeach
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="9" class="text-center">Data not found from {{$from}} to {{$to}}</td>
            </tr>  
            @endif
        </tbody>
    </table>
    <div style="font-size: 1em;">Total: {{$found}}</div>
</body>
</html>