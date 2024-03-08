<?php

namespace CleanPhp\Domain\Repository;

use CleanPhp\Domain\Entity\Order;

interface OrderRepositoryInterface extends RepositoryInterface {
    public function getUninvoicedOrders(): Order;
}