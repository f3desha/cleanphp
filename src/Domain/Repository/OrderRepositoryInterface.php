<?php

namespace CleanPhp\Domain\Repository;

interface OrderRepositoryInterface extends RepositoryInterface {
    public function getUninvoicedOrders(): array;
}