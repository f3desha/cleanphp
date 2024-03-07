<?php declare(strict_types=1);

namespace CleanPhp\Domain\Entity;

use DateTime;

class Invoice {
    /**
     * @var Order $order
     */
    protected Order $order;
    /**
     * @var DateTime $invoiceDate
     */
    protected DateTime $invoiceDate;
    /**
     * @var float $total
     */
    protected float $total;

    /**
     * @return Order
     */
    public function getOrder(): Order {
        return $this->order;
    }

    /**
     * @param Order $order
     *
     * @return Invoice
     */
    public function setOrder(Order $order): Invoice {
        $this->order = $order;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getInvoiceDate(): DateTime {
        return $this->invoiceDate;
    }

    /**
     * @param DateTime $invoiceDate
     *
     * @return Invoice
     */
    public function setInvoiceDate(DateTime $invoiceDate): Invoice {
        $this->invoiceDate = $invoiceDate;
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
     * @return Invoice
     */
    public function setTotal(float $total): Invoice {
        $this->total = $total;
        return $this;
    }

}