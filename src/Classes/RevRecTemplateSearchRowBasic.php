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

class RevRecTemplateSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorPeriod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorStartOffset;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorTermSrc;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $amorType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $contraAccount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $deferralAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $periodOffset;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $targetAccount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useForeignAmounts;

    static $paramtypesmap = array(
        "amorMethod" => "SearchColumnStringField[]",
        "amorPeriod" => "SearchColumnStringField[]",
        "amorStartOffset" => "SearchColumnStringField[]",
        "amorTermSrc" => "SearchColumnStringField[]",
        "amorType" => "SearchColumnStringField[]",
        "contraAccount" => "SearchColumnStringField[]",
        "deferralAccount" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "periodOffset" => "SearchColumnStringField[]",
        "targetAccount" => "SearchColumnStringField[]",
        "useForeignAmounts" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnStringField[] $amorMethod
     * @return RevRecTemplateSearchRowBasic
     */
    public function setAmorMethod(SearchColumnStringField $amorMethod): RevRecTemplateSearchRowBasic
    {
        $this->amorMethod[] = $amorMethod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorMethod(): array
    {
        return $this->amorMethod;
    }

    /**
     * @param SearchColumnStringField[] $amorPeriod
     * @return RevRecTemplateSearchRowBasic
     */
    public function setAmorPeriod(SearchColumnStringField $amorPeriod): RevRecTemplateSearchRowBasic
    {
        $this->amorPeriod[] = $amorPeriod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorPeriod(): array
    {
        return $this->amorPeriod;
    }

    /**
     * @param SearchColumnStringField[] $amorStartOffset
     * @return RevRecTemplateSearchRowBasic
     */
    public function setAmorStartOffset(SearchColumnStringField $amorStartOffset): RevRecTemplateSearchRowBasic
    {
        $this->amorStartOffset[] = $amorStartOffset;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorStartOffset(): array
    {
        return $this->amorStartOffset;
    }

    /**
     * @param SearchColumnStringField[] $amorTermSrc
     * @return RevRecTemplateSearchRowBasic
     */
    public function setAmorTermSrc(SearchColumnStringField $amorTermSrc): RevRecTemplateSearchRowBasic
    {
        $this->amorTermSrc[] = $amorTermSrc;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorTermSrc(): array
    {
        return $this->amorTermSrc;
    }

    /**
     * @param SearchColumnStringField[] $amorType
     * @return RevRecTemplateSearchRowBasic
     */
    public function setAmorType(SearchColumnStringField $amorType): RevRecTemplateSearchRowBasic
    {
        $this->amorType[] = $amorType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorType(): array
    {
        return $this->amorType;
    }

    /**
     * @param SearchColumnStringField[] $contraAccount
     * @return RevRecTemplateSearchRowBasic
     */
    public function setContraAccount(SearchColumnStringField $contraAccount): RevRecTemplateSearchRowBasic
    {
        $this->contraAccount[] = $contraAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContraAccount(): array
    {
        return $this->contraAccount;
    }

    /**
     * @param SearchColumnStringField[] $deferralAccount
     * @return RevRecTemplateSearchRowBasic
     */
    public function setDeferralAccount(SearchColumnStringField $deferralAccount): RevRecTemplateSearchRowBasic
    {
        $this->deferralAccount[] = $deferralAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDeferralAccount(): array
    {
        return $this->deferralAccount;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return RevRecTemplateSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): RevRecTemplateSearchRowBasic
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
     * @return RevRecTemplateSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): RevRecTemplateSearchRowBasic
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
     * @param SearchColumnStringField[] $isInactive
     * @return RevRecTemplateSearchRowBasic
     */
    public function setIsInactive(SearchColumnStringField $isInactive): RevRecTemplateSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return RevRecTemplateSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): RevRecTemplateSearchRowBasic
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
     * @param SearchColumnStringField[] $periodOffset
     * @return RevRecTemplateSearchRowBasic
     */
    public function setPeriodOffset(SearchColumnStringField $periodOffset): RevRecTemplateSearchRowBasic
    {
        $this->periodOffset[] = $periodOffset;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodOffset(): array
    {
        return $this->periodOffset;
    }

    /**
     * @param SearchColumnStringField[] $targetAccount
     * @return RevRecTemplateSearchRowBasic
     */
    public function setTargetAccount(SearchColumnStringField $targetAccount): RevRecTemplateSearchRowBasic
    {
        $this->targetAccount[] = $targetAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTargetAccount(): array
    {
        return $this->targetAccount;
    }

    /**
     * @param SearchColumnBooleanField[] $useForeignAmounts
     * @return RevRecTemplateSearchRowBasic
     */
    public function setUseForeignAmounts(SearchColumnBooleanField $useForeignAmounts): RevRecTemplateSearchRowBasic
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
