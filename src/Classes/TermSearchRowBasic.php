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

class TermSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $dateDriven;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $dayDiscountExpires;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $dayOfMonthNetDue;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysUntilExpiry;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysUntilNetDue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $discountPercent;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $discountPercentDateDriven;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $dueNextMonthIfWithinDays;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $installment;

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
    protected array $preferred;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $recurrenceCount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recurrenceFrequency;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $repeatEvery;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $splitEvenly;

    static $paramtypesmap = array(
        "dateDriven" => "SearchColumnBooleanField[]",
        "dayDiscountExpires" => "SearchColumnLongField[]",
        "dayOfMonthNetDue" => "SearchColumnLongField[]",
        "daysUntilExpiry" => "SearchColumnLongField[]",
        "daysUntilNetDue" => "SearchColumnLongField[]",
        "discountPercent" => "SearchColumnDoubleField[]",
        "discountPercentDateDriven" => "SearchColumnDoubleField[]",
        "dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "installment" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "preferred" => "SearchColumnBooleanField[]",
        "recurrenceCount" => "SearchColumnLongField[]",
        "recurrenceFrequency" => "SearchColumnStringField[]",
        "repeatEvery" => "SearchColumnLongField[]",
        "splitEvenly" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnBooleanField[] $dateDriven
     * @return TermSearchRowBasic
     */
    public function setDateDriven(SearchColumnBooleanField $dateDriven): TermSearchRowBasic
    {
        $this->dateDriven[] = $dateDriven;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDateDriven(): array
    {
        return $this->dateDriven;
    }

    /**
     * @param SearchColumnLongField[] $dayDiscountExpires
     * @return TermSearchRowBasic
     */
    public function setDayDiscountExpires(SearchColumnLongField $dayDiscountExpires): TermSearchRowBasic
    {
        $this->dayDiscountExpires[] = $dayDiscountExpires;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDayDiscountExpires(): array
    {
        return $this->dayDiscountExpires;
    }

    /**
     * @param SearchColumnLongField[] $dayOfMonthNetDue
     * @return TermSearchRowBasic
     */
    public function setDayOfMonthNetDue(SearchColumnLongField $dayOfMonthNetDue): TermSearchRowBasic
    {
        $this->dayOfMonthNetDue[] = $dayOfMonthNetDue;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDayOfMonthNetDue(): array
    {
        return $this->dayOfMonthNetDue;
    }

    /**
     * @param SearchColumnLongField[] $daysUntilExpiry
     * @return TermSearchRowBasic
     */
    public function setDaysUntilExpiry(SearchColumnLongField $daysUntilExpiry): TermSearchRowBasic
    {
        $this->daysUntilExpiry[] = $daysUntilExpiry;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysUntilExpiry(): array
    {
        return $this->daysUntilExpiry;
    }

    /**
     * @param SearchColumnLongField[] $daysUntilNetDue
     * @return TermSearchRowBasic
     */
    public function setDaysUntilNetDue(SearchColumnLongField $daysUntilNetDue): TermSearchRowBasic
    {
        $this->daysUntilNetDue[] = $daysUntilNetDue;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysUntilNetDue(): array
    {
        return $this->daysUntilNetDue;
    }

    /**
     * @param SearchColumnDoubleField[] $discountPercent
     * @return TermSearchRowBasic
     */
    public function setDiscountPercent(SearchColumnDoubleField $discountPercent): TermSearchRowBasic
    {
        $this->discountPercent[] = $discountPercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPercent(): array
    {
        return $this->discountPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $discountPercentDateDriven
     * @return TermSearchRowBasic
     */
    public function setDiscountPercentDateDriven(SearchColumnDoubleField $discountPercentDateDriven): TermSearchRowBasic
    {
        $this->discountPercentDateDriven[] = $discountPercentDateDriven;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPercentDateDriven(): array
    {
        return $this->discountPercentDateDriven;
    }

    /**
     * @param SearchColumnLongField[] $dueNextMonthIfWithinDays
     * @return TermSearchRowBasic
     */
    public function setDueNextMonthIfWithinDays(SearchColumnLongField $dueNextMonthIfWithinDays): TermSearchRowBasic
    {
        $this->dueNextMonthIfWithinDays[] = $dueNextMonthIfWithinDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDueNextMonthIfWithinDays(): array
    {
        return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TermSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TermSearchRowBasic
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
     * @param SearchColumnBooleanField[] $installment
     * @return TermSearchRowBasic
     */
    public function setInstallment(SearchColumnBooleanField $installment): TermSearchRowBasic
    {
        $this->installment[] = $installment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInstallment(): array
    {
        return $this->installment;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return TermSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TermSearchRowBasic
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
     * @return TermSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): TermSearchRowBasic
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
     * @return TermSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): TermSearchRowBasic
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
     * @param SearchColumnBooleanField[] $preferred
     * @return TermSearchRowBasic
     */
    public function setPreferred(SearchColumnBooleanField $preferred): TermSearchRowBasic
    {
        $this->preferred[] = $preferred;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPreferred(): array
    {
        return $this->preferred;
    }

    /**
     * @param SearchColumnLongField[] $recurrenceCount
     * @return TermSearchRowBasic
     */
    public function setRecurrenceCount(SearchColumnLongField $recurrenceCount): TermSearchRowBasic
    {
        $this->recurrenceCount[] = $recurrenceCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRecurrenceCount(): array
    {
        return $this->recurrenceCount;
    }

    /**
     * @param SearchColumnStringField[] $recurrenceFrequency
     * @return TermSearchRowBasic
     */
    public function setRecurrenceFrequency(SearchColumnStringField $recurrenceFrequency): TermSearchRowBasic
    {
        $this->recurrenceFrequency[] = $recurrenceFrequency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecurrenceFrequency(): array
    {
        return $this->recurrenceFrequency;
    }

    /**
     * @param SearchColumnLongField[] $repeatEvery
     * @return TermSearchRowBasic
     */
    public function setRepeatEvery(SearchColumnLongField $repeatEvery): TermSearchRowBasic
    {
        $this->repeatEvery[] = $repeatEvery;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRepeatEvery(): array
    {
        return $this->repeatEvery;
    }

    /**
     * @param SearchColumnBooleanField[] $splitEvenly
     * @return TermSearchRowBasic
     */
    public function setSplitEvenly(SearchColumnBooleanField $splitEvenly): TermSearchRowBasic
    {
        $this->splitEvenly[] = $splitEvenly;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSplitEvenly(): array
    {
        return $this->splitEvenly;
    }

}
