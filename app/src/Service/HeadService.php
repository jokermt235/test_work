<?php

namespace App\Service;

use App\Repository\RaportRepository;
use Symfony\Component\HttpFoundation\Request;

class HeadService implements IHeadService{
    
    private $raportRepository;
    private $raport;

    public function __construct(RaportRepository $raportRepository)
    {
        $this->raportRepository = $raportRepository;
    }

    public function getHeads()
    {
        return $this->raportRepository->getRaportHeads();
    }

    public function getAll(Request $request){
        
        $query =  $this->raportRepository->query();

        if(!empty($request->query->get('lokal'))){
           
            $query->andWhere('r.lokal = :val1')
            ->setParameter('val1', $request->query->get('lokal'));
        }

        if(!empty($request->query->get('od'))){
           
            $query->andWhere('r.data > :val2')
            ->setParameter('val2', $request->query->get('od'));
        }

        if(!empty($request->query->get('do'))){
           
            $query->andWhere('r.data < :val3')
            ->setParameter('val3', $request->query->get('do'));
        }



        return $query->orderBy('r.id', 'ASC')
        ->setMaxResults(20)
        ->getQuery()
        ->getResult();

    }

}