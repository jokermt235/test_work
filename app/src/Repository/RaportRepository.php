<?php

namespace App\Repository;

use App\Entity\Raport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;

/**
 * @method Raport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Raport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Raport[]    findAll()
 * @method Raport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Raport::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Raport $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Raport $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getRaportHeads(): array
    {
        $columns = $this->_em->getClassMetadata('App\Entity\Raport')->getColumnNames();
        return  $columns;
    }

    // /**
    //  * @return Raport[] Returns an array of Raport objects
    //  */
    public function findAllByLokal($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.lokal = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    public function query($filters = array())
    {
        return $this->createQueryBuilder('r');
    }



    public function findAllByLokalAndOd($value, $od)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.lokal = :val1')
            ->andWhere('r.data  > :val2')
            ->setParameter('val1', $value)
            ->setParameter('val2', $od)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllByLokalAndDo($value, $do)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.lokal = :val1')
            ->andWhere('r.data  < :val2')
            ->setParameter('val1', $value)
            ->setParameter('val2', $do)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllByOdAndDo($od, $do)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.date < :val1')
            ->andWhere('r.data  > :val2')
            ->setParameter('val1', $od)
            ->setParameter('val2', $do)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllByDo($do)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.date < :val')
            ->setParameter('val', $do)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllByOd($od)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.data  > :val1')
            ->setParameter('val1', $od)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }





    /*
    public function findOneBySomeField($value): ?Raport
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
