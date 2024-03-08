<?php

use CleanPhp\Domain\Service\InvoicingService;

describe('InvoicingService', function() {
    describe('->generateInvoices()', function() {
        beforeEach(function() {
            $this->repository = $this->getProphet()->prophesize('CleanPhp\Domain\Repository\OrderRepositoryInterface');
        });
        afterEach(function() {
            $this->getProphet()->checkPredictions();
        });

        it('should query the repository for uninvoiced Orders', function() {
            $this->repository->getUninvoicedOrders()->shouldBeCalled();
            $service = new InvoicingService($this->repository->reveal());
            $service->generateInvoices();
        });

        it('should return and Invoice for each uninvoiced Order', function() {

        });
    });
});