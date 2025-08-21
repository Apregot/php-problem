<?php

class BankAccount {
    private $balance = 0;
    private $ownerEmail;
    private $accountingSystem;
    private $securitySystem;

    public function __construct($ownerEmail, $accountingSystem, $securitySystem) {
        $this->ownerEmail = $ownerEmail;
        $this->accountingSystem = $accountingSystem;
        $this->securitySystem = $securitySystem;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        $this->notify();
    }

    public function withdraw($amount) {
        $this->balance -= $amount;
        $this->notify();
    }

    private function notify() {
        $this->sendEmail("Balance changed to {$this->balance}");

        $this->sendNotify('Account', "Balance changed to {$this->balance}");

        $this->sendNotify('Security', "Balance changed to {$this->balance}");
    }

    private function sendEmail($text) {
        mb_send_mail($this->ownerEmail, "Notification", $text);
    }

    private function sendNotify($to, $text) {
        // some notification logic
    }
}


$account = new BankAccount('owner@example.com', 'AccountingSystem', 'SecuritySystem');
$account->deposit(100);
$account->withdraw(50);
