<?php

namespace Urbem\CoreBundle\Model\Ppa;

use Doctrine\ORM;
use Urbem\CoreBundle\AbstractModel;
use Urbem\CoreBundle\Entity;
use Urbem\CoreBundle\Repository;
use Symfony\Component\Validator\Validator;

class AcaoRecursoModel extends AbstractModel
{
    protected $entityManager = null;
    protected $repository = null;

    public function __construct(ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $this->entityManager->getRepository("CoreBundle:Ppa\\AcaoRecurso");
    }

    /**
     * @param $codRecurso
     * @param $exercicio
     * @return null|object
     */
    public function findOneByCodRecursoAndExercicio($codRecurso, $exercicio)
    {
        return $this->repository->findOneBy(['codRecurso' => $codRecurso, 'exercicioRecurso' => $exercicio]);
    }
}