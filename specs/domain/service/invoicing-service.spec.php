<?php

use CleanPhp\Domain\Entity\Invoice;
use CleanPhp\Domain\Entity\Order;
use CleanPhp\Domain\Service\InvoicingService;

describe('InvoicingService', function() {
    describe('->generateInvoices()', function() {
        beforeEach(function() {
            $this->repository = $this->getProphet()->prophesize('CleanPhp\Domain\Repository\OrderRepositoryInterface');
            $this->factory = $this->getProphet()->prophesize('CleanPhp\Domain\Factory\InvoiceFactory');
        });
        afterEach(function() {
            $this->getProphet()->checkPredictions();
        });

        it('should query the repository for uninvoiced Orders', function() {
            $this->repository->getUninvoicedOrders()->shouldBeCalled();
            $service = new InvoicingService(
                $this->repository->reveal(),
                $this->factory->reveal()
            );
            $service->generateInvoices();
        });

        it('should return an Invoice for each uninvoiced Order', function() {
            $orders = [(new Order())->setTotal(400.00)];
            $invoices = [(new Invoice())->setTotal(400.00)];

            $this->repository->getUninvoicedOrders()->willReturn($orders);
            $this->factory->createFromOrder($orders[0])->willReturn($invoices[0]);

            $service = new InvoicingService(
                $this->repository->reveal(),
                $this->factory->reveal()
            );
            $invoices = $service->generateInvoices();

            expect($invoices)->to->be->a('array');
            expect($invoices)->to->have->length(count($orders));
        });
    });
});