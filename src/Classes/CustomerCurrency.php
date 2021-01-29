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

class CustomerCurrency {
    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $consolBalance;

    /**
     * @var float
     */
    protected float $depositBalance;

    /**
     * @var float
     */
    protected float $consolDepositBalance;

    /**
     * @var float
     */
    protected float $overdueBalance;

    /**
     * @var float
     */
    protected float $consolOverdueBalance;

    /**
     * @var float
     */
    protected float $unbilledOrders;

    /**
     * @var float
     */
    protected float $consolUnbilledOrders;

    /**
     * @var bool
     */
    protected bool $overrideCurrencyFormat;

    /**
     * @var string
     */
    protected string $displaySymbol;

    /**
     * @var CurrencySymbolPlacement
     */
    protected CurrencySymbolPlacement $symbolPlacement;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "balance" => "float",
        "consolBalance" => "float",
        "depositBalance" => "float",
        "consolDepositBalance" => "float",
        "overdueBalance" => "float",
        "consolOverdueBalance" => "float",
        "unbilledOrders" => "float",
        "consolUnbilledOrders" => "float",
        "overrideCurrencyFormat" => "boolean",
        "displaySymbol" => "string",
        "symbolPlacement" => "CurrencySymbolPlacement",
    );

    /**
     * @param RecordRef $currency
     * @return CustomerCurrency
     */
    public function setCurrency(RecordRef $currency): CustomerCurrency
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param float $balance
     * @return CustomerCurrency
     */
    public function setBalance(float $balance): CustomerCurrency
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $consolBalance
     * @return CustomerCurrency
     */
    public function setConsolBalance(float $consolBalance): CustomerCurrency
    {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolBalance(): float
    {
        return $this->consolBalance;
    }

    /**
     * @param float $depositBalance
     * @return CustomerCurrency
     */
    public function setDepositBalance(float $depositBalance): CustomerCurrency
    {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepositBalance(): float
    {
        return $this->depositBalance;
    }

    /**
     * @param float $consolDepositBalance
     * @return CustomerCurrency
     */
    public function setConsolDepositBalance(float $consolDepositBalance): CustomerCurrency
    {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolDepositBalance(): float
    {
        return $this->consolDepositBalance;
    }

    /**
     * @param float $overdueBalance
     * @return CustomerCurrency
     */
    public function setOverdueBalance(float $overdueBalance): CustomerCurrency
    {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverdueBalance(): float
    {
        return $this->overdueBalance;
    }

    /**
     * @param float $consolOverdueBalance
     * @return CustomerCurrency
     */
    public function setConsolOverdueBalance(float $consolOverdueBalance): CustomerCurrency
    {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolOverdueBalance(): float
    {
        return $this->consolOverdueBalance;
    }

    /**
     * @param float $unbilledOrders
     * @return CustomerCurrency
     */
    public function setUnbilledOrders(float $unbilledOrders): CustomerCurrency
    {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrders(): float
    {
        return $this->unbilledOrders;
    }

    /**
     * @param float $consolUnbilledOrders
     * @return CustomerCurrency
     */
    public function setConsolUnbilledOrders(float $consolUnbilledOrders): CustomerCurrency
    {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolUnbilledOrders(): float
    {
        return $this->consolUnbilledOrders;
    }

    /**
     * @param bool $overrideCurrencyFormat
     * @return CustomerCurrency
     */
    public function setOverrideCurrencyFormat(bool $overrideCurrencyFormat): CustomerCurrency
    {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideCurrencyFormat(): bool
    {
        return $this->overrideCurrencyFormat;
    }

    /**
     * @param string $displaySymbol
     * @return CustomerCurrency
     */
    public function setDisplaySymbol(string $displaySymbol): CustomerCurrency
    {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol(): string
    {
        return $this->displaySymbol;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return CustomerCurrency
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement): CustomerCurrency
    {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement(): CurrencySymbolPlacement
    {
        return $this->symbolPlacement;
    }

}
