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

class HcmJob extends Record {
    /**
     * @var string
     */
    protected string $title;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $employmentCategory;

    /**
     * @var string
     */
    protected string $jobId;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "title" => "string",
        "isInactive" => "boolean",
        "employmentCategory" => "RecordRef",
        "jobId" => "string",
        "description" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $title
     * @return HcmJob
     */
    public function setTitle(string $title): HcmJob
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param bool $isInactive
     * @return HcmJob
     */
    public function setIsInactive(bool $isInactive): HcmJob
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
     * @param RecordRef $employmentCategory
     * @return HcmJob
     */
    public function setEmploymentCategory(RecordRef $employmentCategory): HcmJob
    {
        $this->employmentCategory = $employmentCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmploymentCategory(): RecordRef
    {
        return $this->employmentCategory;
    }

    /**
     * @param string $jobId
     * @return HcmJob
     */
    public function setJobId(string $jobId): HcmJob
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }

    /**
     * @param string $description
     * @return HcmJob
     */
    public function setDescription(string $description): HcmJob
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
     * @param CustomFieldList $customFieldList
     * @return HcmJob
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): HcmJob
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return HcmJob
     */
    public function setInternalId(string $internalId): HcmJob
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
     * @return HcmJob
     */
    public function setExternalId(string $externalId): HcmJob
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
