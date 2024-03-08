<?php

namespace CleanPhp\Domain\Service;

use CleanPhp\Domain\Repository\OrderRepositoryInterface;

class InvoicingService {
    /**
     * @var OrderRepositoryInterface $orderRepository
     */
    protected OrderRepositoryInterface $orderRepository;

    /**
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    public function generateInvoices(): void {
        $orders = $this->orderRepository->getUninvoicedOrders();
    }

}