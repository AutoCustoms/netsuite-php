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

class PricingSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $maximumQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $minimumQuantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $priceLevel;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $quantityRange;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $saleUnit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitPrice;

    static $paramtypesmap = array(
        "currency" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "maximumQuantity" => "SearchColumnDoubleField[]",
        "minimumQuantity" => "SearchColumnDoubleField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "quantityRange" => "SearchColumnStringField[]",
        "saleUnit" => "SearchColumnSelectField[]",
        "unitPrice" => "SearchColumnDoubleField[]",
    );

    /**
     * @param SearchColumnSelectField[] $currency
     * @return PricingSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): PricingSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return PricingSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): PricingSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return PricingSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PricingSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return PricingSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): PricingSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnDoubleField[] $maximumQuantity
     * @return PricingSearchRowBasic
     */
    public function setMaximumQuantity(SearchColumnDoubleField $maximumQuantity): PricingSearchRowBasic
    {
        $this->maximumQuantity[] = $maximumQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMaximumQuantity(): array
    {
        return $this->maximumQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $minimumQuantity
     * @return PricingSearchRowBasic
     */
    public function setMinimumQuantity(SearchColumnDoubleField $minimumQuantity): PricingSearchRowBasic
    {
        $this->minimumQuantity[] = $minimumQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMinimumQuantity(): array
    {
        return $this->minimumQuantity;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return PricingSearchRowBasic
     */
    public function setPriceLevel(SearchColumnSelectField $priceLevel): PricingSearchRowBasic
    {
        $this->priceLevel[] = $priceLevel;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriceLevel(): array
    {
        return $this->priceLevel;
    }

    /**
     * @param SearchColumnStringField[] $quantityRange
     * @return PricingSearchRowBasic
     */
    public function setQuantityRange(SearchColumnStringField $quantityRange): PricingSearchRowBasic
    {
        $this->quantityRange[] = $quantityRange;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getQuantityRange(): array
    {
        return $this->quantityRange;
    }

    /**
     * @param SearchColumnSelectField[] $saleUnit
     * @return PricingSearchRowBasic
     */
    public function setSaleUnit(SearchColumnSelectField $saleUnit): PricingSearchRowBasic
    {
        $this->saleUnit[] = $saleUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSaleUnit(): array
    {
        return $this->saleUnit;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPrice
     * @return PricingSearchRowBasic
     */
    public function setUnitPrice(SearchColumnDoubleField $unitPrice): PricingSearchRowBasic
    {
        $this->unitPrice[] = $unitPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPrice(): array
    {
        return $this->unitPrice;
    }

}
