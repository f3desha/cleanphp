<?php

namespace CleanPhp\Domain\Factory;

use CleanPhp\Domain\Entity\Invoice;
use CleanPhp\Domain\Entity\Order;
use DateTime;

class InvoiceFactory {
    public function createFromOrder(Order $order): Invoice {
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setTotal($order->getTotal());
        $invoice->setInvoiceDate(new DateTime());
        return $invoice;
    }

}