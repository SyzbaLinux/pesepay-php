<?php

namespace EmmanuelSiziba\Payments;

class Response {
    private $success;
    private $referenceNumber;
    private $pollUrl;
    private $redirectUrl;
    private $paid;
    private $transactionStatus;

    public function __construct($referenceNumber, $pollUrl, $redirectUrl = null, $paid = false, $transactionStatus = null) {
        $this->success = true;
        $this->referenceNumber = $referenceNumber;
        $this->pollUrl = $pollUrl;
        $this->redirectUrl = $redirectUrl;
        $this->paid = $paid;
        $this->transactionStatus = $transactionStatus;
    }

    public function success() {
        return $this->success;
    }

    public function pollUrl() {
        return $this->pollUrl;
    }

    public function referenceNumber() {
        return $this->referenceNumber;
    }

    public function redirectUrl() {
        return $this->redirectUrl;
    }

    public function paid() {
        return $this->paid;
    }

    public function transactionStatus() {
        return $this->transactionStatus;
    }
}

?>