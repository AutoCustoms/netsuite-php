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

class ExpenseCategorySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

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
    protected array $name;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $rateRequired;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "rateRequired" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $account
     * @return ExpenseCategorySearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): ExpenseCategorySearchRowBasic
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
     * @param SearchColumnStringField[] $description
     * @return ExpenseCategorySearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): ExpenseCategorySearchRowBasic
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
     * @return ExpenseCategorySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ExpenseCategorySearchRowBasic
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
     * @return ExpenseCategorySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ExpenseCategorySearchRowBasic
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
     * @return ExpenseCategorySearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): ExpenseCategorySearchRowBasic
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
     * @param SearchColumnStringField[] $name
     * @return ExpenseCategorySearchRowBasic
     */
    public function setName(SearchColumnStringField $name): ExpenseCategorySearchRowBasic
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
     * @param SearchColumnBooleanField[] $rateRequired
     * @return ExpenseCategorySearchRowBasic
     */
    public function setRateRequired(SearchColumnBooleanField $rateRequired): ExpenseCategorySearchRowBasic
    {
        $this->rateRequired[] = $rateRequired;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRateRequired(): array
    {
        return $this->rateRequired;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ExpenseCategorySearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ExpenseCategorySearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ExpenseCategorySearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ExpenseCategorySearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
