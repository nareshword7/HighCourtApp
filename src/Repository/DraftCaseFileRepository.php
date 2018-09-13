<?php

namespace App\Repository;

use App\Entity\DraftCaseFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DraftCaseFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DraftCaseFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DraftCaseFile[]    findAll()
 * @method DraftCaseFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DraftCaseFileRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DraftCaseFile::class);
    }

//    /**
//     * @return DraftCaseFile[] Returns an array of DraftCaseFile objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DraftCaseFile
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
