<?php

namespace PHPSF\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [ $rootDir . '/src'],
            true // modo Desenvolvimento
        );
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/database/banco.sqlite'
        ];

        return EntityManager::create($connection, $config);
    }

}