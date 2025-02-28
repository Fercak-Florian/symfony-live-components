<?php

namespace App\Twig\Components;

use App\Service\BuildChartService;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class PieChart
{
    public function __construct(private BuildChartService $buildChartService){}

    use DefaultActionTrait;

    public Chart $pieChart;

    public string $value = "non défini";

    public function getPieChart(): Chart {
        $labels = ["bons", "moyens", "mauvais"];
        $data = [300, 200, 100];

        return $this->pieChart = $this->buildChartService->buildPieChart($labels, $data);
    }

    #[LiveListener('changeRequest')]
    public function changePieChart(#[LiveArg] string $value): Chart {
        $labels = ["bons", "moyens", "mauvais"];
        $data = [rand(0, 100), rand(0, 100), rand(0, 100)];
        $this->value = $value;

        return $this->pieChart = $this->buildChartService->buildPieChart($labels, $data);
    }
}