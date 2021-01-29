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

class BillingScheduleSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $applyToSubtotal;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $frequency;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $inArrears;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $initialAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $initialTerms;

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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPublic;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $recurrenceCount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $recurrencePattern;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $recurrenceTerms;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $repeatEvery;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    static $paramtypesmap = array(
        "applyToSubtotal" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "frequency" => "SearchEnumMultiSelectField",
        "inArrears" => "SearchBooleanField",
        "initialAmount" => "SearchDoubleField",
        "initialTerms" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isPublic" => "SearchBooleanField",
        "name" => "SearchStringField",
        "recurrenceCount" => "SearchLongField",
        "recurrencePattern" => "SearchEnumMultiSelectField",
        "recurrenceTerms" => "SearchMultiSelectField",
        "repeatEvery" => "SearchLongField",
        "type" => "SearchEnumMultiSelectField",
    );

    /**
     * @param SearchBooleanField $applyToSubtotal
     * @return BillingScheduleSearchBasic
     */
    public function setApplyToSubtotal(SearchBooleanField $applyToSubtotal): BillingScheduleSearchBasic
    {
        $this->applyToSubtotal = $applyToSubtotal;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyToSubtotal(): SearchBooleanField
    {
        return $this->applyToSubtotal;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return BillingScheduleSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): BillingScheduleSearchBasic
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
     * @param SearchEnumMultiSelectField $frequency
     * @return BillingScheduleSearchBasic
     */
    public function setFrequency(SearchEnumMultiSelectField $frequency): BillingScheduleSearchBasic
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFrequency(): SearchEnumMultiSelectField
    {
        return $this->frequency;
    }

    /**
     * @param SearchBooleanField $inArrears
     * @return BillingScheduleSearchBasic
     */
    public function setInArrears(SearchBooleanField $inArrears): BillingScheduleSearchBasic
    {
        $this->inArrears = $inArrears;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInArrears(): SearchBooleanField
    {
        return $this->inArrears;
    }

    /**
     * @param SearchDoubleField $initialAmount
     * @return BillingScheduleSearchBasic
     */
    public function setInitialAmount(SearchDoubleField $initialAmount): BillingScheduleSearchBasic
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInitialAmount(): SearchDoubleField
    {
        return $this->initialAmount;
    }

    /**
     * @param SearchMultiSelectField $initialTerms
     * @return BillingScheduleSearchBasic
     */
    public function setInitialTerms(SearchMultiSelectField $initialTerms): BillingScheduleSearchBasic
    {
        $this->initialTerms = $initialTerms;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInitialTerms(): SearchMultiSelectField
    {
        return $this->initialTerms;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return BillingScheduleSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): BillingScheduleSearchBasic
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
     * @param SearchBooleanField $isPublic
     * @return BillingScheduleSearchBasic
     */
    public function setIsPublic(SearchBooleanField $isPublic): BillingScheduleSearchBasic
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPublic(): SearchBooleanField
    {
        return $this->isPublic;
    }

    /**
     * @param SearchStringField $name
     * @return BillingScheduleSearchBasic
     */
    public function setName(SearchStringField $name): BillingScheduleSearchBasic
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
     * @param SearchLongField $recurrenceCount
     * @return BillingScheduleSearchBasic
     */
    public function setRecurrenceCount(SearchLongField $recurrenceCount): BillingScheduleSearchBasic
    {
        $this->recurrenceCount = $recurrenceCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRecurrenceCount(): SearchLongField
    {
        return $this->recurrenceCount;
    }

    /**
     * @param SearchEnumMultiSelectField $recurrencePattern
     * @return BillingScheduleSearchBasic
     */
    public function setRecurrencePattern(SearchEnumMultiSelectField $recurrencePattern): BillingScheduleSearchBasic
    {
        $this->recurrencePattern = $recurrencePattern;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRecurrencePattern(): SearchEnumMultiSelectField
    {
        return $this->recurrencePattern;
    }

    /**
     * @param SearchMultiSelectField $recurrenceTerms
     * @return BillingScheduleSearchBasic
     */
    public function setRecurrenceTerms(SearchMultiSelectField $recurrenceTerms): BillingScheduleSearchBasic
    {
        $this->recurrenceTerms = $recurrenceTerms;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecurrenceTerms(): SearchMultiSelectField
    {
        return $this->recurrenceTerms;
    }

    /**
     * @param SearchLongField $repeatEvery
     * @return BillingScheduleSearchBasic
     */
    public function setRepeatEvery(SearchLongField $repeatEvery): BillingScheduleSearchBasic
    {
        $this->repeatEvery = $repeatEvery;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRepeatEvery(): SearchLongField
    {
        return $this->repeatEvery;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return BillingScheduleSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): BillingScheduleSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

}
