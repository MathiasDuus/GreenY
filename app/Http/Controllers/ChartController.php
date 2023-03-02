<?php
namespace App\Http\Controllers;

use App\Charts\HumidityChart;
use App\Charts\TemperatureChart;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(TemperatureChart $temperatureChart, HumidityChart $humidityChart)
    {
        return view('chart', ['temperature' => $temperatureChart->build(), 'humidity' => $humidityChart->build()]);
    }


}
