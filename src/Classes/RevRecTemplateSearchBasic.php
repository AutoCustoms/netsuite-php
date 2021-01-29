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

class RevRecTemplateSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $amorMethod;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $amorPeriod;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $amorStartOffset;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $amorTermSrc;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $amorType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $contraAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $deferralAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $periodOffset;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $targetAccount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useForeignAmounts;

    static $paramtypesmap = array(
        "amorMethod" => "SearchEnumMultiSelectField",
        "amorPeriod" => "SearchLongField",
        "amorStartOffset" => "SearchLongField",
        "amorTermSrc" => "SearchEnumMultiSelectField",
        "amorType" => "SearchEnumMultiSelectField",
        "contraAccount" => "SearchMultiSelectField",
        "deferralAccount" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "periodOffset" => "SearchLongField",
        "targetAccount" => "SearchMultiSelectField",
        "useForeignAmounts" => "SearchBooleanField",
    );

    /**
     * @param SearchEnumMultiSelectField $amorMethod
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorMethod(SearchEnumMultiSelectField $amorMethod): RevRecTemplateSearchBasic
    {
        $this->amorMethod = $amorMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorMethod(): SearchEnumMultiSelectField
    {
        return $this->amorMethod;
    }

    /**
     * @param SearchLongField $amorPeriod
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorPeriod(SearchLongField $amorPeriod): RevRecTemplateSearchBasic
    {
        $this->amorPeriod = $amorPeriod;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAmorPeriod(): SearchLongField
    {
        return $this->amorPeriod;
    }

    /**
     * @param SearchLongField $amorStartOffset
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorStartOffset(SearchLongField $amorStartOffset): RevRecTemplateSearchBasic
    {
        $this->amorStartOffset = $amorStartOffset;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAmorStartOffset(): SearchLongField
    {
        return $this->amorStartOffset;
    }

    /**
     * @param SearchEnumMultiSelectField $amorTermSrc
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorTermSrc(SearchEnumMultiSelectField $amorTermSrc): RevRecTemplateSearchBasic
    {
        $this->amorTermSrc = $amorTermSrc;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorTermSrc(): SearchEnumMultiSelectField
    {
        return $this->amorTermSrc;
    }

    /**
     * @param SearchEnumMultiSelectField $amorType
     * @return RevRecTemplateSearchBasic
     */
    public function setAmorType(SearchEnumMultiSelectField $amorType): RevRecTemplateSearchBasic
    {
        $this->amorType = $amorType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorType(): SearchEnumMultiSelectField
    {
        return $this->amorType;
    }

    /**
     * @param SearchMultiSelectField $contraAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setContraAccount(SearchMultiSelectField $contraAccount): RevRecTemplateSearchBasic
    {
        $this->contraAccount = $contraAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContraAccount(): SearchMultiSelectField
    {
        return $this->contraAccount;
    }

    /**
     * @param SearchMultiSelectField $deferralAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setDeferralAccount(SearchMultiSelectField $deferralAccount): RevRecTemplateSearchBasic
    {
        $this->deferralAccount = $deferralAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeferralAccount(): SearchMultiSelectField
    {
        return $this->deferralAccount;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return RevRecTemplateSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): RevRecTemplateSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return RevRecTemplateSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): RevRecTemplateSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return RevRecTemplateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): RevRecTemplateSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return RevRecTemplateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): RevRecTemplateSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return RevRecTemplateSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): RevRecTemplateSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchStringField $name
     * @return RevRecTemplateSearchBasic
     */
    public function setName(SearchStringField $name): RevRecTemplateSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchLongField $periodOffset
     * @return RevRecTemplateSearchBasic
     */
    public function setPeriodOffset(SearchLongField $periodOffset): RevRecTemplateSearchBasic
    {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPeriodOffset(): SearchLongField
    {
        return $this->periodOffset;
    }

    /**
     * @param SearchMultiSelectField $targetAccount
     * @return RevRecTemplateSearchBasic
     */
    public function setTargetAccount(SearchMultiSelectField $targetAccount): RevRecTemplateSearchBasic
    {
        $this->targetAccount = $targetAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTargetAccount(): SearchMultiSelectField
    {
        return $this->targetAccount;
    }

    /**
     * @param SearchBooleanField $useForeignAmounts
     * @return RevRecTemplateSearchBasic
     */
    public function setUseForeignAmounts(SearchBooleanField $useForeignAmounts): RevRecTemplateSearchBasic
    {
        $this->useForeignAmounts = $useForeignAmounts;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseForeignAmounts(): SearchBooleanField
    {
        return $this->useForeignAmounts;
    }

}
