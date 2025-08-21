<?
class PaymentProcessor {
    private $paymentSystem;

    public function __construct(SwiftPaymentSystem $paymentSystem) {
        $this->paymentSystem = $paymentSystem;
    }

    public function processPayment($amount) {
        $this->paymentSystem->pay($amount);
    }
}


// SWIFT.API.LIB
class SwiftPaymentSystem {
    public function pay($amount) {
        echo "Paying $amount using old payment system.\n";
    }
}

// MIR.API.LIB
class MirPaymentSystem {
    public function makePayment($amount) {
        echo "Paying $amount using new payment system.\n";
    }
}

// $mirPaymentSystem = new MirPaymentSystem();
// $paymentProcessor = new PaymentProcessor($mirPaymentSystem);
// $paymentProcessor->processPayment(100);