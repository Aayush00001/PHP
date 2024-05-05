<?php
// 3. Create a class called &amp; BankAccount &amp; that has the following properties:
// accountNumber (string), balance (float)
//  The class should also have the following methods:
// __construct() method that takes in the account number and balance
// of the bank account and sets them as properties of the object.
// deposit() method that takes in a deposit amount and adds it to the
// balance.
// withdraw() method that takes in a withdrawal amount and subtracts
// it from the balance.
// getBalance() method that returns the current balance of the account.
class BankAccount
{
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function deposit($amount) 
    {
        if ($amount > 0) 
        {
            $this->balance+=$amount;
        } 
        else
        {
            echo "Invalid deposit amount";
        }
    }
    public function withdraw($amount) 
    {
        if ($amount <= $this->balance) 
        {
            $this->balance-=$amount;
        } 
        else 
        {
            echo "<br>Insufficient balance.<br>";
        }
    }
    public function getAccountNumber() 
    {
        return $this->accountNumber;
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$bankAccount = new BankAccount("AC-111111",1000.0);
echo "<br>Account Number:->>".$bankAccount->getAccountNumber();
echo "<br>Initial Balance:->>".$bankAccount->getBalance();
$bankAccount->deposit(500.0);
echo "<br>Balance after Deposit:->>".$bankAccount->getBalance();
$bankAccount->withdraw(200.0);
echo "<br>Balance after Withdrawal:->>".$bankAccount->getBalance();

?>