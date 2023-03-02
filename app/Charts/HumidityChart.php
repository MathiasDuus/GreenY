<?php

namespace App\Charts;

use App\Models\Humidity;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HumidityChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $location_id = request('location_id');
        $sql_humidity = Humidity::select('percentage', 'created_at')->where('location_id', $location_id)->get()->toArray();

        $datoer = array();
        $humidities = array();

        foreach ($sql_humidity as $hum) {
            array_push($humidities, $hum['percentage']);
            array_push($datoer, date('Y/m/d - h:i:s', strtotime($hum['created_at'])));
            // print_r($temp['degrees']);
        }


        return $this->chart->lineChart()
            ->setTitle('Humidity')
            ->addData('Humidity', $humidities)
            ->setColors(['#05f5a9'])
            ->setXAxis($datoer);
    }
}
