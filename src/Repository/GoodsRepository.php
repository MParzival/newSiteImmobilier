<?php

namespace App\Repository;

use App\Entity\Goods;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Goods|null find($id, $lockMode = null, $lockVersion = null)
 * @method Goods|null findOneBy(array $criteria, array $orderBy = null)
 * @method Goods[]    findAll()
 * @method Goods[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset =null)
 * */

class GoodsRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
       parent::__construct($registry, Goods::class);
   }

}