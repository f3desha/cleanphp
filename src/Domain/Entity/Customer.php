<?php declare(strict_types=1);

namespace CleanPhp\Domain\Entity;

class Customer extends AbstractEntity {
    /**
     * @var string $name
     */
    protected string $name;
    /**
     * @var string $email
     */
    protected string $email;

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Customer
     */
    public function setName(string $name): Customer {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail(string $email): Customer {
        $this->email = $email;
        return $this;
    }

}