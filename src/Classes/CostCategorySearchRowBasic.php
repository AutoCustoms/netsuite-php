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

class CostCategorySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

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
     * @var SearchColumnEnumSelectField[]
     */
    protected array $itemCostType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemCostType" => "SearchColumnEnumSelectField[]",
        "name" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnSelectField[] $account
     * @return CostCategorySearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): CostCategorySearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return CostCategorySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CostCategorySearchRowBasic
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
     * @return CostCategorySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CostCategorySearchRowBasic
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
     * @return CostCategorySearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): CostCategorySearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $itemCostType
     * @return CostCategorySearchRowBasic
     */
    public function setItemCostType(SearchColumnEnumSelectField $itemCostType): CostCategorySearchRowBasic
    {
        $this->itemCostType[] = $itemCostType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemCostType(): array
    {
        return $this->itemCostType;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return CostCategorySearchRowBasic
     */
    public function setName(SearchColumnStringField $name): CostCategorySearchRowBasic
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

}
