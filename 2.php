<?php

class Order {
    private $amount;
    private $customerType;

    public function __construct($amount, $customerType) {
        $this->amount = $amount;
        $this->customerType = $customerType;
    }

    public function calculateDiscount() {
        if ($this->customerType === 'regular') {
            return $this->amount * 0.05;
        } elseif ($this->customerType === 'vip') {
            return $this->amount * 0.20;
        } elseif ($this->customerType === 'promotion') {
            return $this->amount > 100 ? $this->amount * 0.10 : 0;
        } else {
            return 0;
        }
    }

    public function getTotalAmount() {
        return $this->amount - $this->calculateDiscount();
    }
}

$order1 = new Order(150, 'regular');
echo "Total (Regular): " . $order1->getTotalAmount() . "\n";

$order2 = new Order(150, 'vip');
echo "Total (VIP): " . $order2->getTotalAmount() . "\n";

$order3 = new Order(150, 'promotion');
echo "Total (Promotion): " . $order3->getTotalAmount() . "\n";