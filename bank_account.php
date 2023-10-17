<?php
class BankAccount {
    private $accountName;
    private $balance;

    public function __construct($accountName, $balance) {
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return $this->balance;
        } else {
            echo "Insufficient funds for withdrawal.";
            return $this->balance;
        }
    }
}

?>