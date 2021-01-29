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

class RevRecScheduleSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $amorStatus;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amortizedAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $amorType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $deferredAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $destAcct;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $initialAmt;

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
    protected SearchBooleanField $isRecognized;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $jeDoc;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $pctComplete;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $pctRecognition;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $periodOffset;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $postPeriod;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $schedDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $scheduleNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $scheduleNumberText;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $sourceAcct;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $srcTranPostPeriod;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $srcTranType;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $startOffset;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $templateName;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useForeignAmounts;

    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "amorStatus" => "SearchEnumMultiSelectField",
        "amortizedAmount" => "SearchDoubleField",
        "amorType" => "SearchEnumMultiSelectField",
        "amount" => "SearchDoubleField",
        "currency" => "SearchMultiSelectField",
        "deferredAmount" => "SearchDoubleField",
        "destAcct" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "initialAmt" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isRecognized" => "SearchBooleanField",
        "jeDoc" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "pctComplete" => "SearchDoubleField",
        "pctRecognition" => "SearchDoubleField",
        "periodOffset" => "SearchLongField",
        "postPeriod" => "SearchMultiSelectField",
        "schedDate" => "SearchDateField",
        "scheduleNumber" => "SearchLongField",
        "scheduleNumberText" => "SearchStringField",
        "sourceAcct" => "SearchMultiSelectField",
        "srcTranPostPeriod" => "SearchMultiSelectField",
        "srcTranType" => "SearchMultiSelectField",
        "startOffset" => "SearchLongField",
        "templateName" => "SearchStringField",
        "useForeignAmounts" => "SearchBooleanField",
    );

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return RevRecScheduleSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): RevRecScheduleSearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchEnumMultiSelectField $amorStatus
     * @return RevRecScheduleSearchBasic
     */
    public function setAmorStatus(SearchEnumMultiSelectField $amorStatus): RevRecScheduleSearchBasic
    {
        $this->amorStatus = $amorStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorStatus(): SearchEnumMultiSelectField
    {
        return $this->amorStatus;
    }

    /**
     * @param SearchDoubleField $amortizedAmount
     * @return RevRecScheduleSearchBasic
     */
    public function setAmortizedAmount(SearchDoubleField $amortizedAmount): RevRecScheduleSearchBasic
    {
        $this->amortizedAmount = $amortizedAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmortizedAmount(): SearchDoubleField
    {
        return $this->amortizedAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $amorType
     * @return RevRecScheduleSearchBasic
     */
    public function setAmorType(SearchEnumMultiSelectField $amorType): RevRecScheduleSearchBasic
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
     * @param SearchDoubleField $amount
     * @return RevRecScheduleSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): RevRecScheduleSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return RevRecScheduleSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): RevRecScheduleSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchDoubleField $deferredAmount
     * @return RevRecScheduleSearchBasic
     */
    public function setDeferredAmount(SearchDoubleField $deferredAmount): RevRecScheduleSearchBasic
    {
        $this->deferredAmount = $deferredAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDeferredAmount(): SearchDoubleField
    {
        return $this->deferredAmount;
    }

    /**
     * @param SearchMultiSelectField $destAcct
     * @return RevRecScheduleSearchBasic
     */
    public function setDestAcct(SearchMultiSelectField $destAcct): RevRecScheduleSearchBasic
    {
        $this->destAcct = $destAcct;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDestAcct(): SearchMultiSelectField
    {
        return $this->destAcct;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return RevRecScheduleSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): RevRecScheduleSearchBasic
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
     * @return RevRecScheduleSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): RevRecScheduleSearchBasic
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
     * @param SearchDoubleField $initialAmt
     * @return RevRecScheduleSearchBasic
     */
    public function setInitialAmt(SearchDoubleField $initialAmt): RevRecScheduleSearchBasic
    {
        $this->initialAmt = $initialAmt;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInitialAmt(): SearchDoubleField
    {
        return $this->initialAmt;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return RevRecScheduleSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): RevRecScheduleSearchBasic
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
     * @return RevRecScheduleSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): RevRecScheduleSearchBasic
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
     * @param SearchBooleanField $isRecognized
     * @return RevRecScheduleSearchBasic
     */
    public function setIsRecognized(SearchBooleanField $isRecognized): RevRecScheduleSearchBasic
    {
        $this->isRecognized = $isRecognized;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsRecognized(): SearchBooleanField
    {
        return $this->isRecognized;
    }

    /**
     * @param SearchMultiSelectField $jeDoc
     * @return RevRecScheduleSearchBasic
     */
    public function setJeDoc(SearchMultiSelectField $jeDoc): RevRecScheduleSearchBasic
    {
        $this->jeDoc = $jeDoc;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJeDoc(): SearchMultiSelectField
    {
        return $this->jeDoc;
    }

    /**
     * @param SearchStringField $name
     * @return RevRecScheduleSearchBasic
     */
    public function setName(SearchStringField $name): RevRecScheduleSearchBasic
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
     * @param SearchDoubleField $pctComplete
     * @return RevRecScheduleSearchBasic
     */
    public function setPctComplete(SearchDoubleField $pctComplete): RevRecScheduleSearchBasic
    {
        $this->pctComplete = $pctComplete;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPctComplete(): SearchDoubleField
    {
        return $this->pctComplete;
    }

    /**
     * @param SearchDoubleField $pctRecognition
     * @return RevRecScheduleSearchBasic
     */
    public function setPctRecognition(SearchDoubleField $pctRecognition): RevRecScheduleSearchBasic
    {
        $this->pctRecognition = $pctRecognition;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPctRecognition(): SearchDoubleField
    {
        return $this->pctRecognition;
    }

    /**
     * @param SearchLongField $periodOffset
     * @return RevRecScheduleSearchBasic
     */
    public function setPeriodOffset(SearchLongField $periodOffset): RevRecScheduleSearchBasic
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
     * @param SearchMultiSelectField $postPeriod
     * @return RevRecScheduleSearchBasic
     */
    public function setPostPeriod(SearchMultiSelectField $postPeriod): RevRecScheduleSearchBasic
    {
        $this->postPeriod = $postPeriod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPostPeriod(): SearchMultiSelectField
    {
        return $this->postPeriod;
    }

    /**
     * @param SearchDateField $schedDate
     * @return RevRecScheduleSearchBasic
     */
    public function setSchedDate(SearchDateField $schedDate): RevRecScheduleSearchBasic
    {
        $this->schedDate = $schedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSchedDate(): SearchDateField
    {
        return $this->schedDate;
    }

    /**
     * @param SearchLongField $scheduleNumber
     * @return RevRecScheduleSearchBasic
     */
    public function setScheduleNumber(SearchLongField $scheduleNumber): RevRecScheduleSearchBasic
    {
        $this->scheduleNumber = $scheduleNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getScheduleNumber(): SearchLongField
    {
        return $this->scheduleNumber;
    }

    /**
     * @param SearchStringField $scheduleNumberText
     * @return RevRecScheduleSearchBasic
     */
    public function setScheduleNumberText(SearchStringField $scheduleNumberText): RevRecScheduleSearchBasic
    {
        $this->scheduleNumberText = $scheduleNumberText;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleNumberText(): SearchStringField
    {
        return $this->scheduleNumberText;
    }

    /**
     * @param SearchMultiSelectField $sourceAcct
     * @return RevRecScheduleSearchBasic
     */
    public function setSourceAcct(SearchMultiSelectField $sourceAcct): RevRecScheduleSearchBasic
    {
        $this->sourceAcct = $sourceAcct;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceAcct(): SearchMultiSelectField
    {
        return $this->sourceAcct;
    }

    /**
     * @param SearchMultiSelectField $srcTranPostPeriod
     * @return RevRecScheduleSearchBasic
     */
    public function setSrcTranPostPeriod(SearchMultiSelectField $srcTranPostPeriod): RevRecScheduleSearchBasic
    {
        $this->srcTranPostPeriod = $srcTranPostPeriod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSrcTranPostPeriod(): SearchMultiSelectField
    {
        return $this->srcTranPostPeriod;
    }

    /**
     * @param SearchMultiSelectField $srcTranType
     * @return RevRecScheduleSearchBasic
     */
    public function setSrcTranType(SearchMultiSelectField $srcTranType): RevRecScheduleSearchBasic
    {
        $this->srcTranType = $srcTranType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSrcTranType(): SearchMultiSelectField
    {
        return $this->srcTranType;
    }

    /**
     * @param SearchLongField $startOffset
     * @return RevRecScheduleSearchBasic
     */
    public function setStartOffset(SearchLongField $startOffset): RevRecScheduleSearchBasic
    {
        $this->startOffset = $startOffset;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getStartOffset(): SearchLongField
    {
        return $this->startOffset;
    }

    /**
     * @param SearchStringField $templateName
     * @return RevRecScheduleSearchBasic
     */
    public function setTemplateName(SearchStringField $templateName): RevRecScheduleSearchBasic
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTemplateName(): SearchStringField
    {
        return $this->templateName;
    }

    /**
     * @param SearchBooleanField $useForeignAmounts
     * @return RevRecScheduleSearchBasic
     */
    public function setUseForeignAmounts(SearchBooleanField $useForeignAmounts): RevRecScheduleSearchBasic
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
