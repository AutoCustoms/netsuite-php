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

class ItemReceipt extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $inboundShipment;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemFulfillment;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var LandedCostMethod
     */
    protected LandedCostMethod $landedCostMethod;

    /**
     * @var bool
     */
    protected bool $landedCostPerLine;

    /**
     * @var ItemReceiptItemList
     */
    protected ItemReceiptItemList $itemList;

    /**
     * @var ItemReceiptExpenseList
     */
    protected ItemReceiptExpenseList $expenseList;

    /**
     * @var PurchLandedCostList
     */
    protected PurchLandedCostList $landedCostsList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "exchangeRate" => "float",
        "entity" => "RecordRef",
        "currencyName" => "string",
        "subsidiary" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "partner" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "inboundShipment" => "RecordRef",
        "memo" => "string",
        "itemFulfillment" => "RecordRef",
        "currency" => "RecordRef",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "itemList" => "ItemReceiptItemList",
        "expenseList" => "ItemReceiptExpenseList",
        "landedCostsList" => "PurchLandedCostList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ItemReceipt
     */
    public function setCreatedDate(string $createdDate): ItemReceipt
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return ItemReceipt
     */
    public function setLastModifiedDate(string $lastModifiedDate): ItemReceipt
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $customForm
     * @return ItemReceipt
     */
    public function setCustomForm(RecordRef $customForm): ItemReceipt
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param float $exchangeRate
     * @return ItemReceipt
     */
    public function setExchangeRate(float $exchangeRate): ItemReceipt
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * @param RecordRef $entity
     * @return ItemReceipt
     */
    public function setEntity(RecordRef $entity): ItemReceipt
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param string $currencyName
     * @return ItemReceipt
     */
    public function setCurrencyName(string $currencyName): ItemReceipt
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @param RecordRef $subsidiary
     * @return ItemReceipt
     */
    public function setSubsidiary(RecordRef $subsidiary): ItemReceipt
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $createdFrom
     * @return ItemReceipt
     */
    public function setCreatedFrom(RecordRef $createdFrom): ItemReceipt
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param string $tranDate
     * @return ItemReceipt
     */
    public function setTranDate(string $tranDate): ItemReceipt
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param RecordRef $partner
     * @return ItemReceipt
     */
    public function setPartner(RecordRef $partner): ItemReceipt
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner(): RecordRef
    {
        return $this->partner;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return ItemReceipt
     */
    public function setPostingPeriod(RecordRef $postingPeriod): ItemReceipt
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $tranId
     * @return ItemReceipt
     */
    public function setTranId(string $tranId): ItemReceipt
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param RecordRef $inboundShipment
     * @return ItemReceipt
     */
    public function setInboundShipment(RecordRef $inboundShipment): ItemReceipt
    {
        $this->inboundShipment = $inboundShipment;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInboundShipment(): RecordRef
    {
        return $this->inboundShipment;
    }

    /**
     * @param string $memo
     * @return ItemReceipt
     */
    public function setMemo(string $memo): ItemReceipt
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param RecordRef $itemFulfillment
     * @return ItemReceipt
     */
    public function setItemFulfillment(RecordRef $itemFulfillment): ItemReceipt
    {
        $this->itemFulfillment = $itemFulfillment;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemFulfillment(): RecordRef
    {
        return $this->itemFulfillment;
    }

    /**
     * @param RecordRef $currency
     * @return ItemReceipt
     */
    public function setCurrency(RecordRef $currency): ItemReceipt
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
     * @param LandedCostMethod $landedCostMethod
     * @return ItemReceipt
     */
    public function setLandedCostMethod(LandedCostMethod $landedCostMethod): ItemReceipt
    {
        $this->landedCostMethod = $landedCostMethod;
        return $this;
    }

    /**
     * @return LandedCostMethod
     */
    public function getLandedCostMethod(): LandedCostMethod
    {
        return $this->landedCostMethod;
    }

    /**
     * @param bool $landedCostPerLine
     * @return ItemReceipt
     */
    public function setLandedCostPerLine(bool $landedCostPerLine): ItemReceipt
    {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLandedCostPerLine(): bool
    {
        return $this->landedCostPerLine;
    }

    /**
     * @param ItemReceiptItemList $itemList
     * @return ItemReceipt
     */
    public function setItemList(ItemReceiptItemList $itemList): ItemReceipt
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return ItemReceiptItemList
     */
    public function getItemList(): ItemReceiptItemList
    {
        return $this->itemList;
    }

    /**
     * @param ItemReceiptExpenseList $expenseList
     * @return ItemReceipt
     */
    public function setExpenseList(ItemReceiptExpenseList $expenseList): ItemReceipt
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return ItemReceiptExpenseList
     */
    public function getExpenseList(): ItemReceiptExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param PurchLandedCostList $landedCostsList
     * @return ItemReceipt
     */
    public function setLandedCostsList(PurchLandedCostList $landedCostsList): ItemReceipt
    {
        $this->landedCostsList = $landedCostsList;
        return $this;
    }

    /**
     * @return PurchLandedCostList
     */
    public function getLandedCostsList(): PurchLandedCostList
    {
        return $this->landedCostsList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return ItemReceipt
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): ItemReceipt
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemReceipt
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemReceipt
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return ItemReceipt
     */
    public function setInternalId(string $internalId): ItemReceipt
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return ItemReceipt
     */
    public function setExternalId(string $externalId): ItemReceipt
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
