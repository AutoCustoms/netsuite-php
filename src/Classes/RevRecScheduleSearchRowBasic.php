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

class RevRecScheduleSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $amorStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorTemplate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amortizedAmount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $amorType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $deferredAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $destAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $initialAmt;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isRecognized;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $jeDoc;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $lineSequenceNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $nameUrl;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $pctComplete;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $pctRecognition;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $periodOffset;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurFxAmount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $schedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $scheduleNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $sourceAcct;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $srcDocLine;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $srcTran;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $srcTranPostPeriod;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $startOffset;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useForeignAmounts;

    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "amorStatus" => "SearchColumnEnumSelectField[]",
        "amorTemplate" => "SearchColumnStringField[]",
        "amortizedAmount" => "SearchColumnDoubleField[]",
        "amorType" => "SearchColumnEnumSelectField[]",
        "amount" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnStringField[]",
        "deferredAmount" => "SearchColumnDoubleField[]",
        "destAcct" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "initialAmt" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isRecognized" => "SearchColumnBooleanField[]",
        "jeDoc" => "SearchColumnStringField[]",
        "lineSequenceNumber" => "SearchColumnLongField[]",
        "name" => "SearchColumnStringField[]",
        "nameUrl" => "SearchColumnStringField[]",
        "pctComplete" => "SearchColumnDoubleField[]",
        "pctRecognition" => "SearchColumnDoubleField[]",
        "periodOffset" => "SearchColumnLongField[]",
        "recurAmount" => "SearchColumnDoubleField[]",
        "recurFxAmount" => "SearchColumnDoubleField[]",
        "schedDate" => "SearchColumnDateField[]",
        "scheduleNumber" => "SearchColumnStringField[]",
        "sourceAcct" => "SearchColumnStringField[]",
        "srcDocLine" => "SearchColumnStringField[]",
        "srcTran" => "SearchColumnStringField[]",
        "srcTranPostPeriod" => "SearchColumnStringField[]",
        "startOffset" => "SearchColumnLongField[]",
        "useForeignAmounts" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): RevRecScheduleSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnEnumSelectField[] $amorStatus
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAmorStatus(SearchColumnEnumSelectField $amorStatus): RevRecScheduleSearchRowBasic
    {
        $this->amorStatus[] = $amorStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAmorStatus(): array
    {
        return $this->amorStatus;
    }

    /**
     * @param SearchColumnStringField[] $amorTemplate
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAmorTemplate(SearchColumnStringField $amorTemplate): RevRecScheduleSearchRowBasic
    {
        $this->amorTemplate[] = $amorTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorTemplate(): array
    {
        return $this->amorTemplate;
    }

    /**
     * @param SearchColumnDoubleField[] $amortizedAmount
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAmortizedAmount(SearchColumnDoubleField $amortizedAmount): RevRecScheduleSearchRowBasic
    {
        $this->amortizedAmount[] = $amortizedAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmortizedAmount(): array
    {
        return $this->amortizedAmount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $amorType
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAmorType(SearchColumnEnumSelectField $amorType): RevRecScheduleSearchRowBasic
    {
        $this->amorType[] = $amorType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAmorType(): array
    {
        return $this->amorType;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return RevRecScheduleSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): RevRecScheduleSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnStringField[] $currency
     * @return RevRecScheduleSearchRowBasic
     */
    public function setCurrency(SearchColumnStringField $currency): RevRecScheduleSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnDoubleField[] $deferredAmount
     * @return RevRecScheduleSearchRowBasic
     */
    public function setDeferredAmount(SearchColumnDoubleField $deferredAmount): RevRecScheduleSearchRowBasic
    {
        $this->deferredAmount[] = $deferredAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDeferredAmount(): array
    {
        return $this->deferredAmount;
    }

    /**
     * @param SearchColumnStringField[] $destAcct
     * @return RevRecScheduleSearchRowBasic
     */
    public function setDestAcct(SearchColumnStringField $destAcct): RevRecScheduleSearchRowBasic
    {
        $this->destAcct[] = $destAcct;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDestAcct(): array
    {
        return $this->destAcct;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return RevRecScheduleSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): RevRecScheduleSearchRowBasic
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
     * @param SearchColumnDoubleField[] $initialAmt
     * @return RevRecScheduleSearchRowBasic
     */
    public function setInitialAmt(SearchColumnDoubleField $initialAmt): RevRecScheduleSearchRowBasic
    {
        $this->initialAmt[] = $initialAmt;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInitialAmt(): array
    {
        return $this->initialAmt;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return RevRecScheduleSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): RevRecScheduleSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isRecognized
     * @return RevRecScheduleSearchRowBasic
     */
    public function setIsRecognized(SearchColumnBooleanField $isRecognized): RevRecScheduleSearchRowBasic
    {
        $this->isRecognized[] = $isRecognized;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsRecognized(): array
    {
        return $this->isRecognized;
    }

    /**
     * @param SearchColumnStringField[] $jeDoc
     * @return RevRecScheduleSearchRowBasic
     */
    public function setJeDoc(SearchColumnStringField $jeDoc): RevRecScheduleSearchRowBasic
    {
        $this->jeDoc[] = $jeDoc;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getJeDoc(): array
    {
        return $this->jeDoc;
    }

    /**
     * @param SearchColumnLongField[] $lineSequenceNumber
     * @return RevRecScheduleSearchRowBasic
     */
    public function setLineSequenceNumber(SearchColumnLongField $lineSequenceNumber): RevRecScheduleSearchRowBasic
    {
        $this->lineSequenceNumber[] = $lineSequenceNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineSequenceNumber(): array
    {
        return $this->lineSequenceNumber;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return RevRecScheduleSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): RevRecScheduleSearchRowBasic
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
     * @param SearchColumnStringField[] $nameUrl
     * @return RevRecScheduleSearchRowBasic
     */
    public function setNameUrl(SearchColumnStringField $nameUrl): RevRecScheduleSearchRowBasic
    {
        $this->nameUrl[] = $nameUrl;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameUrl(): array
    {
        return $this->nameUrl;
    }

    /**
     * @param SearchColumnDoubleField[] $pctComplete
     * @return RevRecScheduleSearchRowBasic
     */
    public function setPctComplete(SearchColumnDoubleField $pctComplete): RevRecScheduleSearchRowBasic
    {
        $this->pctComplete[] = $pctComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPctComplete(): array
    {
        return $this->pctComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $pctRecognition
     * @return RevRecScheduleSearchRowBasic
     */
    public function setPctRecognition(SearchColumnDoubleField $pctRecognition): RevRecScheduleSearchRowBasic
    {
        $this->pctRecognition[] = $pctRecognition;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPctRecognition(): array
    {
        return $this->pctRecognition;
    }

    /**
     * @param SearchColumnLongField[] $periodOffset
     * @return RevRecScheduleSearchRowBasic
     */
    public function setPeriodOffset(SearchColumnLongField $periodOffset): RevRecScheduleSearchRowBasic
    {
        $this->periodOffset[] = $periodOffset;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPeriodOffset(): array
    {
        return $this->periodOffset;
    }

    /**
     * @param SearchColumnDoubleField[] $recurAmount
     * @return RevRecScheduleSearchRowBasic
     */
    public function setRecurAmount(SearchColumnDoubleField $recurAmount): RevRecScheduleSearchRowBasic
    {
        $this->recurAmount[] = $recurAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurAmount(): array
    {
        return $this->recurAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $recurFxAmount
     * @return RevRecScheduleSearchRowBasic
     */
    public function setRecurFxAmount(SearchColumnDoubleField $recurFxAmount): RevRecScheduleSearchRowBasic
    {
        $this->recurFxAmount[] = $recurFxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurFxAmount(): array
    {
        return $this->recurFxAmount;
    }

    /**
     * @param SearchColumnDateField[] $schedDate
     * @return RevRecScheduleSearchRowBasic
     */
    public function setSchedDate(SearchColumnDateField $schedDate): RevRecScheduleSearchRowBasic
    {
        $this->schedDate[] = $schedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSchedDate(): array
    {
        return $this->schedDate;
    }

    /**
     * @param SearchColumnStringField[] $scheduleNumber
     * @return RevRecScheduleSearchRowBasic
     */
    public function setScheduleNumber(SearchColumnStringField $scheduleNumber): RevRecScheduleSearchRowBasic
    {
        $this->scheduleNumber[] = $scheduleNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleNumber(): array
    {
        return $this->scheduleNumber;
    }

    /**
     * @param SearchColumnStringField[] $sourceAcct
     * @return RevRecScheduleSearchRowBasic
     */
    public function setSourceAcct(SearchColumnStringField $sourceAcct): RevRecScheduleSearchRowBasic
    {
        $this->sourceAcct[] = $sourceAcct;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSourceAcct(): array
    {
        return $this->sourceAcct;
    }

    /**
     * @param SearchColumnStringField[] $srcDocLine
     * @return RevRecScheduleSearchRowBasic
     */
    public function setSrcDocLine(SearchColumnStringField $srcDocLine): RevRecScheduleSearchRowBasic
    {
        $this->srcDocLine[] = $srcDocLine;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcDocLine(): array
    {
        return $this->srcDocLine;
    }

    /**
     * @param SearchColumnStringField[] $srcTran
     * @return RevRecScheduleSearchRowBasic
     */
    public function setSrcTran(SearchColumnStringField $srcTran): RevRecScheduleSearchRowBasic
    {
        $this->srcTran[] = $srcTran;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcTran(): array
    {
        return $this->srcTran;
    }

    /**
     * @param SearchColumnStringField[] $srcTranPostPeriod
     * @return RevRecScheduleSearchRowBasic
     */
    public function setSrcTranPostPeriod(SearchColumnStringField $srcTranPostPeriod): RevRecScheduleSearchRowBasic
    {
        $this->srcTranPostPeriod[] = $srcTranPostPeriod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcTranPostPeriod(): array
    {
        return $this->srcTranPostPeriod;
    }

    /**
     * @param SearchColumnLongField[] $startOffset
     * @return RevRecScheduleSearchRowBasic
     */
    public function setStartOffset(SearchColumnLongField $startOffset): RevRecScheduleSearchRowBasic
    {
        $this->startOffset[] = $startOffset;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getStartOffset(): array
    {
        return $this->startOffset;
    }

    /**
     * @param SearchColumnBooleanField[] $useForeignAmounts
     * @return RevRecScheduleSearchRowBasic
     */
    public function setUseForeignAmounts(SearchColumnBooleanField $useForeignAmounts): RevRecScheduleSearchRowBasic
    {
        $this->useForeignAmounts[] = $useForeignAmounts;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseForeignAmounts(): array
    {
        return $this->useForeignAmounts;
    }

}
