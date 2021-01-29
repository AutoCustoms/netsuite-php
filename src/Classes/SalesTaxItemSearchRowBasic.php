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

class SalesTaxItemSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxType;

    static $paramtypesmap = array(
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "taxType" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnStringField[] $description
     * @return SalesTaxItemSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): SalesTaxItemSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return SalesTaxItemSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): SalesTaxItemSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return SalesTaxItemSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): SalesTaxItemSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return SalesTaxItemSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): SalesTaxItemSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $itemId
     * @return SalesTaxItemSearchRowBasic
     */
    public function setItemId(SearchColumnStringField $itemId): SalesTaxItemSearchRowBasic
    {
        $this->itemId[] = $itemId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId(): array
    {
        return $this->itemId;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return SalesTaxItemSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): SalesTaxItemSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return SalesTaxItemSearchRowBasic
     */
    public function setTaxType(SearchColumnSelectField $taxType): SalesTaxItemSearchRowBasic
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType(): array
    {
        return $this->taxType;
    }

}
