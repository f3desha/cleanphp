<?php declare(strict_types=1);

namespace CleanPhp\Domain\Entity;

class Order extends AbstractEntity {
    /**
     * @var Customer $customer
     */
    protected Customer $customer;
    /**
     * @var int $orderNumber
     */
    protected int $orderNumber;
    /**
     * @var string $description
     */
    protected string $description;
    /**
     * @var float $total
     */
    protected float $total = 0.0;

    /**
     * @return Customer
     */
    public function getCustomer(): Customer {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     *
     * @return Order
     */
    public function setCustomer(Customer $customer): Order {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderNumber(): int {
        return $this->orderNumber;
    }

    /**
     * @param int $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber(int $orderNumber): Order {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Order
     */
    public function setDescription(string $description): Order {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float {
        return $this->total;
    }

    /**
     * @param float $total
     *
     * @return Order
     */
    public function setTotal(float $total): Order {
        $this->total = $total;
        return $this;
    }

}