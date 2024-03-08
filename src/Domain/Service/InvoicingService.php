<?php

namespace CleanPhp\Domain\Service;

use CleanPhp\Domain\Entity\Invoice;
use CleanPhp\Domain\Factory\InvoiceFactory;
use CleanPhp\Domain\Repository\OrderRepositoryInterface;

class InvoicingService {
    /**
     * @var OrderRepositoryInterface $orderRepository
     */
    protected OrderRepositoryInterface $orderRepository;
    /**
     * @var InvoiceFactory $invoiceFactory
     */
    protected InvoiceFactory $invoiceFactory;

    /**
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        OrderRepositoryInterface $orderRepository,
        InvoiceFactory $invoiceFactory
    ) {
        $this->orderRepository = $orderRepository;
        $this->invoiceFactory = $invoiceFactory;
    }

    /**
     * @return Invoice[]
     */
    public function generateInvoices(): array {
        $orders = $this->orderRepository->getUninvoicedOrders();

        $invoices = [];

        foreach ($orders as $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }

        return $invoices;
    }

}