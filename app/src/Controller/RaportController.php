<?php

namespace App\Controller;

use App\Service\IHeadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RaportController extends AbstractController
{
    private $service;

    public function __construct(IHeadService $service)
    {
        $this->service = $service;
    }

    /**
     * @Route("/raport", name="app_raport")
     */
    public function index(Request $request): Response
    {
        return $this->render('raport/index.html.twig', [
            'headers' => $this->service->getHeads(),
            'dataset' => $this->service->getAll($request)
        ]);
    }
}
