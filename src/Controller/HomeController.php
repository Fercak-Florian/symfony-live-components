<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

final class HomeController extends AbstractController
{

//    public function __construct(private ChartBuilderInterface $chartBuilder){}

    #[Route('/')]
    public function index(): Response
    {
//        $pieChart = $this->chartBuilder->createChart(Chart::TYPE_PIE);
//
//        $labels = ["bons", "moyens", "mauvais"];
//        $data = [300, 200, 100]; // Les données doivent être dans un tableau unique
//
//        $pieChart->setData([
//            'labels' => $labels, // Définit les étiquettes globales
//            'datasets' => [
//                [
//                    'data' => $data, // Un seul tableau contenant les valeurs correspondant aux labels
//                    'backgroundColor' => [
//                        'rgba(45, 220, 126, .4)', // Couleur pour "bons"
//                        'rgba(255, 99, 132, .4)', // Couleur pour "moyens"
//                        'rgba(54, 162, 235, .4)', // Couleur pour "mauvais"
//                    ],
//                    'borderColor' => [
//                        'rgba(45, 220, 126, 1)',
//                        'rgba(255, 99, 132, 1)',
//                        'rgba(54, 162, 235, 1)',
//                    ],
//                    'borderWidth' => 1, // Bordures des segments
//                ],
//            ],
//        ]);
//
//        $pieChart->setOptions([
//            'responsive' => true,
//            'plugins' => [
//                'legend' => [
//                    'position' => 'top',
//                ],
//            ],
//        ]);


        return $this->render('home/index.html.twig', [
//            'pieChart' => $pieChart,
        ]);
    }
}
