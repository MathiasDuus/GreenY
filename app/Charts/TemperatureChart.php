<?php

namespace App\Charts;

use App\Models\FirstTimeSetup;
use App\Models\Humidity;
use App\Models\Temperature;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TemperatureChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $location_id = request('location_id');
        $sql_temperatures = Temperature::select('degrees', 'created_at')->where('location_id', $location_id)->get()->toArray();
        $sql_humidity = Humidity::select('percentage')->where('location_id', $location_id)->get()->toArray();
        $temperatures = array();
        $datoer = array();
        $humidities = array();

        echo ("Hum: " . (string) count($sql_humidity));
        echo ("Temp: " . (string) count($sql_temperatures));

        $h = 0;

        for ($i = 0; $i < count($sql_temperatures); $i++) {
            array_push($temperatures, $sql_temperatures[$i]['degrees']);
            array_push($datoer, date('d/m/Y-H:i:s', strtotime($sql_temperatures[$i]['created_at'])));
            if ($i % 2) {
                array_push($humidities, $sql_humidity[$h]['percentage']);
                $h++;
            } else {
                if (count($sql_humidity) <= $h) {
                    $h = count($sql_humidity) - 1;
                }
                array_push($humidities, $sql_humidity[$h]['percentage']);
            }

        }

        return $this->chart->lineChart()
            ->setTitle('Temperature & Humidity')
            ->addData('Temperature', $temperatures)
            ->addData('Humidity', $humidities)
            ->setColors(['#e23243', '#05f5a9'])
            ->setXAxis($datoer);
    }
}
