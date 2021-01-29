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

class TermSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $dateDriven;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $dayDiscountExpires;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $dayOfMonthNetDue;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysUntilExpiry;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysUntilNetDue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $discountPercent;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $discountPercentDateDriven;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $dueNextMonthIfWithinDays;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $installment;

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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $preferred;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $recurrenceCount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $recurrenceFrequency;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $repeatEvery;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $splitEvenly;

    static $paramtypesmap = array(
        "dateDriven" => "SearchBooleanField",
        "dayDiscountExpires" => "SearchLongField",
        "dayOfMonthNetDue" => "SearchLongField",
        "daysUntilExpiry" => "SearchLongField",
        "daysUntilNetDue" => "SearchLongField",
        "discountPercent" => "SearchDoubleField",
        "discountPercentDateDriven" => "SearchDoubleField",
        "dueNextMonthIfWithinDays" => "SearchLongField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "installment" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "preferred" => "SearchBooleanField",
        "recurrenceCount" => "SearchLongField",
        "recurrenceFrequency" => "SearchEnumMultiSelectField",
        "repeatEvery" => "SearchLongField",
        "splitEvenly" => "SearchBooleanField",
    );

    /**
     * @param SearchBooleanField $dateDriven
     * @return TermSearchBasic
     */
    public function setDateDriven(SearchBooleanField $dateDriven): TermSearchBasic
    {
        $this->dateDriven = $dateDriven;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDateDriven(): SearchBooleanField
    {
        return $this->dateDriven;
    }

    /**
     * @param SearchLongField $dayDiscountExpires
     * @return TermSearchBasic
     */
    public function setDayDiscountExpires(SearchLongField $dayDiscountExpires): TermSearchBasic
    {
        $this->dayDiscountExpires = $dayDiscountExpires;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDayDiscountExpires(): SearchLongField
    {
        return $this->dayDiscountExpires;
    }

    /**
     * @param SearchLongField $dayOfMonthNetDue
     * @return TermSearchBasic
     */
    public function setDayOfMonthNetDue(SearchLongField $dayOfMonthNetDue): TermSearchBasic
    {
        $this->dayOfMonthNetDue = $dayOfMonthNetDue;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDayOfMonthNetDue(): SearchLongField
    {
        return $this->dayOfMonthNetDue;
    }

    /**
     * @param SearchLongField $daysUntilExpiry
     * @return TermSearchBasic
     */
    public function setDaysUntilExpiry(SearchLongField $daysUntilExpiry): TermSearchBasic
    {
        $this->daysUntilExpiry = $daysUntilExpiry;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysUntilExpiry(): SearchLongField
    {
        return $this->daysUntilExpiry;
    }

    /**
     * @param SearchLongField $daysUntilNetDue
     * @return TermSearchBasic
     */
    public function setDaysUntilNetDue(SearchLongField $daysUntilNetDue): TermSearchBasic
    {
        $this->daysUntilNetDue = $daysUntilNetDue;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysUntilNetDue(): SearchLongField
    {
        return $this->daysUntilNetDue;
    }

    /**
     * @param SearchDoubleField $discountPercent
     * @return TermSearchBasic
     */
    public function setDiscountPercent(SearchDoubleField $discountPercent): TermSearchBasic
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDiscountPercent(): SearchDoubleField
    {
        return $this->discountPercent;
    }

    /**
     * @param SearchDoubleField $discountPercentDateDriven
     * @return TermSearchBasic
     */
    public function setDiscountPercentDateDriven(SearchDoubleField $discountPercentDateDriven): TermSearchBasic
    {
        $this->discountPercentDateDriven = $discountPercentDateDriven;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDiscountPercentDateDriven(): SearchDoubleField
    {
        return $this->discountPercentDateDriven;
    }

    /**
     * @param SearchLongField $dueNextMonthIfWithinDays
     * @return TermSearchBasic
     */
    public function setDueNextMonthIfWithinDays(SearchLongField $dueNextMonthIfWithinDays): TermSearchBasic
    {
        $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDueNextMonthIfWithinDays(): SearchLongField
    {
        return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TermSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TermSearchBasic
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
     * @return TermSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TermSearchBasic
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
     * @param SearchBooleanField $installment
     * @return TermSearchBasic
     */
    public function setInstallment(SearchBooleanField $installment): TermSearchBasic
    {
        $this->installment = $installment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInstallment(): SearchBooleanField
    {
        return $this->installment;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return TermSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TermSearchBasic
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
     * @return TermSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TermSearchBasic
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
     * @return TermSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): TermSearchBasic
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
     * @return TermSearchBasic
     */
    public function setName(SearchStringField $name): TermSearchBasic
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
     * @param SearchBooleanField $preferred
     * @return TermSearchBasic
     */
    public function setPreferred(SearchBooleanField $preferred): TermSearchBasic
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPreferred(): SearchBooleanField
    {
        return $this->preferred;
    }

    /**
     * @param SearchLongField $recurrenceCount
     * @return TermSearchBasic
     */
    public function setRecurrenceCount(SearchLongField $recurrenceCount): TermSearchBasic
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
     * @param SearchEnumMultiSelectField $recurrenceFrequency
     * @return TermSearchBasic
     */
    public function setRecurrenceFrequency(SearchEnumMultiSelectField $recurrenceFrequency): TermSearchBasic
    {
        $this->recurrenceFrequency = $recurrenceFrequency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRecurrenceFrequency(): SearchEnumMultiSelectField
    {
        return $this->recurrenceFrequency;
    }

    /**
     * @param SearchLongField $repeatEvery
     * @return TermSearchBasic
     */
    public function setRepeatEvery(SearchLongField $repeatEvery): TermSearchBasic
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
     * @param SearchBooleanField $splitEvenly
     * @return TermSearchBasic
     */
    public function setSplitEvenly(SearchBooleanField $splitEvenly): TermSearchBasic
    {
        $this->splitEvenly = $splitEvenly;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSplitEvenly(): SearchBooleanField
    {
        return $this->splitEvenly;
    }

}
