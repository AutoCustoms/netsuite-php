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

class SupportCaseStatus extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $insertBefore;

    /**
     * @var SupportCaseStatusStage
     */
    protected SupportCaseStatusStage $stage;

    /**
     * @var bool
     */
    protected bool $caseOnHold;

    /**
     * @var bool
     */
    protected bool $autoCloseCase;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "insertBefore" => "RecordRef",
        "stage" => "SupportCaseStatusStage",
        "caseOnHold" => "boolean",
        "autoCloseCase" => "boolean",
        "description" => "string",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return SupportCaseStatus
     */
    public function setName(string $name): SupportCaseStatus
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param RecordRef $insertBefore
     * @return SupportCaseStatus
     */
    public function setInsertBefore(RecordRef $insertBefore): SupportCaseStatus
    {
        $this->insertBefore = $insertBefore;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertBefore(): RecordRef
    {
        return $this->insertBefore;
    }

    /**
     * @param SupportCaseStatusStage $stage
     * @return SupportCaseStatus
     */
    public function setStage(SupportCaseStatusStage $stage): SupportCaseStatus
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return SupportCaseStatusStage
     */
    public function getStage(): SupportCaseStatusStage
    {
        return $this->stage;
    }

    /**
     * @param bool $caseOnHold
     * @return SupportCaseStatus
     */
    public function setCaseOnHold(bool $caseOnHold): SupportCaseStatus
    {
        $this->caseOnHold = $caseOnHold;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCaseOnHold(): bool
    {
        return $this->caseOnHold;
    }

    /**
     * @param bool $autoCloseCase
     * @return SupportCaseStatus
     */
    public function setAutoCloseCase(bool $autoCloseCase): SupportCaseStatus
    {
        $this->autoCloseCase = $autoCloseCase;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoCloseCase(): bool
    {
        return $this->autoCloseCase;
    }

    /**
     * @param string $description
     * @return SupportCaseStatus
     */
    public function setDescription(string $description): SupportCaseStatus
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $isInactive
     * @return SupportCaseStatus
     */
    public function setIsInactive(bool $isInactive): SupportCaseStatus
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $internalId
     * @return SupportCaseStatus
     */
    public function setInternalId(string $internalId): SupportCaseStatus
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return SupportCaseStatus
     */
    public function setExternalId(string $externalId): SupportCaseStatus
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
