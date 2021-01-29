<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class EmployeeDirectDeposit {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var bool
     */
    protected bool $netAccount;

    /**
     * @var bool
     */
    protected bool $savingsAccount;

    /**
     * @var bool
     */
    protected bool $accountPrenoted;

    /**
     * @var EmployeeDirectDepositAccountStatus
     */
    protected EmployeeDirectDepositAccountStatus $accountStatus;

    /**
     * @var string
     */
    protected string $bankName;

    /**
     * @var string
     */
    protected string $bankId;

    /**
     * @var string
     */
    protected string $bankNumber;

    /**
     * @var string
     */
    protected string $bankRoutingNumber;

    /**
     * @var string
     */
    protected string $bankAccountNumber;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var bool
     */
    protected bool $inactive;

    static $paramtypesmap = array(
        "id" => "integer",
        "netAccount" => "boolean",
        "savingsAccount" => "boolean",
        "accountPrenoted" => "boolean",
        "accountStatus" => "EmployeeDirectDepositAccountStatus",
        "bankName" => "string",
        "bankId" => "string",
        "bankNumber" => "string",
        "bankRoutingNumber" => "string",
        "bankAccountNumber" => "string",
        "amount" => "float",
        "inactive" => "boolean",
    );

    /**
     * @param int $id
     * @return EmployeeDirectDeposit
     */
    public function setId(int $id): EmployeeDirectDeposit
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param bool $netAccount
     * @return EmployeeDirectDeposit
     */
    public function setNetAccount(bool $netAccount): EmployeeDirectDeposit
    {
        $this->netAccount = $netAccount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNetAccount(): bool
    {
        return $this->netAccount;
    }

    /**
     * @param bool $savingsAccount
     * @return EmployeeDirectDeposit
     */
    public function setSavingsAccount(bool $savingsAccount): EmployeeDirectDeposit
    {
        $this->savingsAccount = $savingsAccount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSavingsAccount(): bool
    {
        return $this->savingsAccount;
    }

    /**
     * @param bool $accountPrenoted
     * @return EmployeeDirectDeposit
     */
    public function setAccountPrenoted(bool $accountPrenoted): EmployeeDirectDeposit
    {
        $this->accountPrenoted = $accountPrenoted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAccountPrenoted(): bool
    {
        return $this->accountPrenoted;
    }

    /**
     * @param EmployeeDirectDepositAccountStatus $accountStatus
     * @return EmployeeDirectDeposit
     */
    public function setAccountStatus(EmployeeDirectDepositAccountStatus $accountStatus): EmployeeDirectDeposit
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    /**
     * @return EmployeeDirectDepositAccountStatus
     */
    public function getAccountStatus(): EmployeeDirectDepositAccountStatus
    {
        return $this->accountStatus;
    }

    /**
     * @param string $bankName
     * @return EmployeeDirectDeposit
     */
    public function setBankName(string $bankName): EmployeeDirectDeposit
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankId
     * @return EmployeeDirectDeposit
     */
    public function setBankId(string $bankId): EmployeeDirectDeposit
    {
        $this->bankId = $bankId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankId(): string
    {
        return $this->bankId;
    }

    /**
     * @param string $bankNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankNumber(string $bankNumber): EmployeeDirectDeposit
    {
        $this->bankNumber = $bankNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankNumber(): string
    {
        return $this->bankNumber;
    }

    /**
     * @param string $bankRoutingNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankRoutingNumber(string $bankRoutingNumber): EmployeeDirectDeposit
    {
        $this->bankRoutingNumber = $bankRoutingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankRoutingNumber(): string
    {
        return $this->bankRoutingNumber;
    }

    /**
     * @param string $bankAccountNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankAccountNumber(string $bankAccountNumber): EmployeeDirectDeposit
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber(): string
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param float $amount
     * @return EmployeeDirectDeposit
     */
    public function setAmount(float $amount): EmployeeDirectDeposit
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param bool $inactive
     * @return EmployeeDirectDeposit
     */
    public function setInactive(bool $inactive): EmployeeDirectDeposit
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool
    {
        return $this->inactive;
    }

}
