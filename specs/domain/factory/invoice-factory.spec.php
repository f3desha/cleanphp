<?php

use CleanPhp\Domain\Entity\Order;
use CleanPhp\Domain\Factory\InvoiceFactory;

describe('InvoiceFactory', function() {
    describe('->createFromOrder()', function() {
        it('should return an invoice object', function() {
            $order = new Order();

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice)->to->be->a->instanceof('CleanPhp\Domain\Entity\Invoice');
        });

        it('should set the total of the order', function() {
            $order = new Order();
            $order->setTotal(500.00);

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getTotal())->to->equal(500.00);
        });

        it('should associate the Order to the Invoice', function() {
            $order = new Order();

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getOrder())->to->equal($order);
        });

        it('should set invoice object date in DateTime format', function() {
            $order = new Order();

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);
            expect($invoice->getInvoiceDate())->to->be->instanceof('DateTime');
        });
    });
});