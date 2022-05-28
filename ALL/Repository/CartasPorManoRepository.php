<?php

namespace App\Repository;

use App\Entity\CartasPorMano;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CartasPorMano>
 *
 * @method CartasPorMano|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartasPorMano|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartasPorMano[]    findAll()
 * @method CartasPorMano[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartasPorManoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartasPorMano::class);
    }

    public function add(CartasPorMano $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CartasPorMano $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CartasPorMano[] Returns an array of CartasPorMano objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CartasPorMano
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
