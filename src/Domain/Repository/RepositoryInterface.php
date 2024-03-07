<?php

namespace CleanPhp\Domain\Repository;

interface RepositoryInterface {
    public function getById(int $id);

    public function getAll();

    public function persist($entity);

    public function begin();

    public function commit();
}