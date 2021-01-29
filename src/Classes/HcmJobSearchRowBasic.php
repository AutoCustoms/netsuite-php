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

class HcmJobSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employmentCategory;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

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
    protected array $jobId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "description" => "SearchColumnStringField[]",
        "employmentCategory" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "jobId" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $description
     * @return HcmJobSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): HcmJobSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $employmentCategory
     * @return HcmJobSearchRowBasic
     */
    public function setEmploymentCategory(SearchColumnSelectField $employmentCategory): HcmJobSearchRowBasic
    {
        $this->employmentCategory[] = $employmentCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmploymentCategory(): array
    {
        return $this->employmentCategory;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return HcmJobSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): HcmJobSearchRowBasic
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
     * @return HcmJobSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): HcmJobSearchRowBasic
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
     * @return HcmJobSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): HcmJobSearchRowBasic
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
     * @param SearchColumnStringField[] $jobId
     * @return HcmJobSearchRowBasic
     */
    public function setJobId(SearchColumnStringField $jobId): HcmJobSearchRowBasic
    {
        $this->jobId[] = $jobId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getJobId(): array
    {
        return $this->jobId;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return HcmJobSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): HcmJobSearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return HcmJobSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): HcmJobSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
