<?php

namespace App\Service;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class BuildChartService
{
    public function __construct(private ChartBuilderInterface $chartBuilder){}

    public Chart $pieChart;

    public function buildPieChart(array $labels, array $data): Chart {

        $this->pieChart = $this->chartBuilder->createChart(Chart::TYPE_PIE);

        $this->pieChart->setData([
            'labels' => $labels, // Définit les étiquettes globales
            'datasets' => [
                [
                    'data' => $data, // Un seul tableau contenant les valeurs correspondant aux labels
                    'backgroundColor' => [
                        'rgba(45, 220, 126, .4)', // Couleur pour "bons"
                        'rgba(255, 99, 132, .4)', // Couleur pour "moyens"
                        'rgba(54, 162, 235, .4)', // Couleur pour "mauvais"
                    ],
                    'borderColor' => [
                        'rgba(45, 220, 126, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    'borderWidth' => 1, // Bordures des segments
                ],
            ],
        ]);

        $this->pieChart->setOptions([
            'responsive' => true,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
            ],
        ]);
        return $this->pieChart;
    }
}