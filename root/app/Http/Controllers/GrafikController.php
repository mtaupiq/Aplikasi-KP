<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logbook;
use Charts;

class GrafikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function perhari()
    {
        $page = 'perhari';
        $hari = Charts::database(Logbook::all(),'area','morris')
                        ->title('Grafik Logbook Gangguan OSS')
                        ->elementLabel('Total Gangguan Closed')
                        ->dimensions(0,250)
                        ->groupByDay();
        return view('grafik.perhari',compact('hari','page'));
    }

    public function perbulan()
    {
        $page = 'perbulan';
        $bulan = Charts::database(Logbook::all(),'area','morris')
                        ->title('Grafik Logbook Gangguan OSS')
                        ->elementLabel('Total Gangguan Closed')
                        ->dimensions(0,250)
                        ->groupByMonth();
        return view('grafik.perbulan',compact('bulan','page'));
    }

    public function pertahun()
    {
        $page = 'pertahun';
         $tahun = Charts::database(Logbook::all(),'area','morris')
                        ->title('Grafik Logbook Gangguan OSS')
                        ->elementLabel('Total Gangguan Closed')
                        ->dimensions(0,250)
                        ->groupByYear();
        return view('grafik.pertahun',compact('tahun','page'));
    }
}
