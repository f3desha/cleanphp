<?php

namespace CleanPhp\Domain\Repository;

use CleanPhp\Domain\Entity\Order;

interface OrderRepositoryInterface extends RepositoryInterface {
    /**
     * @return Order[]
     */
    public function getUninvoicedOrders(): array;
}