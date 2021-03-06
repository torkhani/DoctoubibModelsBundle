<?php

namespace Doctoubib\ModelsBundle\Repository;

/**
 * RegionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RegionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getRegions()
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r.name, r.slug');

        return $qb->getQuery()->execute();
    }
}
