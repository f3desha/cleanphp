<?php declare(strict_types=1);

namespace CleanPhp\Domain\Entity;

abstract class AbstractEntity {
    /**
     * @var int $id
     */
    protected int $id;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return AbstractEntity
     */
    public function setId(int $id): AbstractEntity {
        $this->id = $id;
        return $this;
    }

}