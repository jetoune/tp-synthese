<?php

namespace Imie\skillsBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * skillsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class skillsRepository extends EntityRepository
{
	public function findAll() {
		return $this->createQueryBuilder('s')
					//->add('select', 'libelle')
					//->add('from', 'skills as s')
					->getQuery()
					->getResult();
	}
}
