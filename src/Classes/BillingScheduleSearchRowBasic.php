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

class BillingScheduleSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $applyToSubtotal;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $frequency;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $inArrears;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $initialAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $initialTerms;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isPublic;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $recurrenceCount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $recurrencePattern;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recurrenceTerms;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $repeatEvery;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $type;

    static $paramtypesmap = array(
        "applyToSubtotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "frequency" => "SearchColumnEnumSelectField[]",
        "inArrears" => "SearchColumnBooleanField[]",
        "initialAmount" => "SearchColumnStringField[]",
        "initialTerms" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "recurrenceCount" => "SearchColumnLongField[]",
        "recurrencePattern" => "SearchColumnEnumSelectField[]",
        "recurrenceTerms" => "SearchColumnStringField[]",
        "repeatEvery" => "SearchColumnLongField[]",
        "type" => "SearchColumnEnumSelectField[]",
    );

    /**
     * @param SearchColumnBooleanField[] $applyToSubtotal
     * @return BillingScheduleSearchRowBasic
     */
    public function setApplyToSubtotal(SearchColumnBooleanField $applyToSubtotal): BillingScheduleSearchRowBasic
    {
        $this->applyToSubtotal[] = $applyToSubtotal;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApplyToSubtotal(): array
    {
        return $this->applyToSubtotal;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return BillingScheduleSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): BillingScheduleSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $frequency
     * @return BillingScheduleSearchRowBasic
     */
    public function setFrequency(SearchColumnEnumSelectField $frequency): BillingScheduleSearchRowBasic
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFrequency(): array
    {
        return $this->frequency;
    }

    /**
     * @param SearchColumnBooleanField[] $inArrears
     * @return BillingScheduleSearchRowBasic
     */
    public function setInArrears(SearchColumnBooleanField $inArrears): BillingScheduleSearchRowBasic
    {
        $this->inArrears[] = $inArrears;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInArrears(): array
    {
        return $this->inArrears;
    }

    /**
     * @param SearchColumnStringField[] $initialAmount
     * @return BillingScheduleSearchRowBasic
     */
    public function setInitialAmount(SearchColumnStringField $initialAmount): BillingScheduleSearchRowBasic
    {
        $this->initialAmount[] = $initialAmount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInitialAmount(): array
    {
        return $this->initialAmount;
    }

    /**
     * @param SearchColumnStringField[] $initialTerms
     * @return BillingScheduleSearchRowBasic
     */
    public function setInitialTerms(SearchColumnStringField $initialTerms): BillingScheduleSearchRowBasic
    {
        $this->initialTerms[] = $initialTerms;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInitialTerms(): array
    {
        return $this->initialTerms;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return BillingScheduleSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BillingScheduleSearchRowBasic
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
     * @return BillingScheduleSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): BillingScheduleSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isPublic
     * @return BillingScheduleSearchRowBasic
     */
    public function setIsPublic(SearchColumnBooleanField $isPublic): BillingScheduleSearchRowBasic
    {
        $this->isPublic[] = $isPublic;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPublic(): array
    {
        return $this->isPublic;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return BillingScheduleSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): BillingScheduleSearchRowBasic
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
     * @param SearchColumnLongField[] $recurrenceCount
     * @return BillingScheduleSearchRowBasic
     */
    public function setRecurrenceCount(SearchColumnLongField $recurrenceCount): BillingScheduleSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $recurrencePattern
     * @return BillingScheduleSearchRowBasic
     */
    public function setRecurrencePattern(SearchColumnEnumSelectField $recurrencePattern): BillingScheduleSearchRowBasic
    {
        $this->recurrencePattern[] = $recurrencePattern;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRecurrencePattern(): array
    {
        return $this->recurrencePattern;
    }

    /**
     * @param SearchColumnStringField[] $recurrenceTerms
     * @return BillingScheduleSearchRowBasic
     */
    public function setRecurrenceTerms(SearchColumnStringField $recurrenceTerms): BillingScheduleSearchRowBasic
    {
        $this->recurrenceTerms[] = $recurrenceTerms;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecurrenceTerms(): array
    {
        return $this->recurrenceTerms;
    }

    /**
     * @param SearchColumnLongField[] $repeatEvery
     * @return BillingScheduleSearchRowBasic
     */
    public function setRepeatEvery(SearchColumnLongField $repeatEvery): BillingScheduleSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $type
     * @return BillingScheduleSearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): BillingScheduleSearchRowBasic
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType(): array
    {
        return $this->type;
    }

}
