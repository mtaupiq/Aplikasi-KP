<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logbook;
use Carbon\Carbon;
use PDF;
use Excel;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function formlaporan()
    {
        $page = 'print';
        return view('laporan.formlaporan',compact('page'));
    }

    public function cetak(Request $request)
    {
        $start = date("Y-m-d", strtotime($request->get('tanggal')));
        $from = $request->get('tanggal');
        $end = date("Y-m-d", strtotime($request->get('sampai')));
        $to = $request->get('sampai');

        $query = Logbook::with('perbaikan','petugas')->where('tanggal','>=',$start)->where('tanggal','<=',$end);
        $result = $query->get();
        $found = $result->count();

        $pdf = PDF::loadView('file.pdf',compact('result','from','to','found'))->setPaper('legal', 'landscape');
        return $pdf->stream();
    }
    public function formexcel()
    {
        $page = 'excel';
        return view('laporan.formexcel',compact('page'));
    }
    public function excel(Request $request)
    {
        $start = date("Y-m-d", strtotime($request->get('tanggal')));
        $end = date("Y-m-d", strtotime($request->get('sampai')));

        $namafile =  date("F", strtotime($request->get('tanggal')));
        $bulan = strtoupper($namafile);

        $query = Logbook::with('perbaikan','petugas')->where('tanggal','>=',$start)->where('tanggal','<=',$end);
        $result = $query->get();

        Excel::create($namafile, function($excel) use($result, $bulan) {
            $excel->sheet('Sheet 1', function($sheet) use($result, $bulan) {
                $sheet->loadView('file.excel',compact('result','bulan'));
            });
        })->download('xlsx');
        return back();
    }
}
