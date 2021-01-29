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

class SiteCategorySearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateViewed;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $excludeFromSitemap;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $name;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $sitemapPriority;

    static $paramtypesmap = array(
        "dateViewed" => "SearchDateField",
        "description" => "SearchStringField",
        "excludeFromSitemap" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "name" => "SearchMultiSelectField",
        "sitemapPriority" => "SearchEnumMultiSelectField",
    );

    /**
     * @param SearchDateField $dateViewed
     * @return SiteCategorySearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed): SiteCategorySearchBasic
    {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed(): SearchDateField
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchStringField $description
     * @return SiteCategorySearchBasic
     */
    public function setDescription(SearchStringField $description): SiteCategorySearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchBooleanField $excludeFromSitemap
     * @return SiteCategorySearchBasic
     */
    public function setExcludeFromSitemap(SearchBooleanField $excludeFromSitemap): SiteCategorySearchBasic
    {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap(): SearchBooleanField
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return SiteCategorySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): SiteCategorySearchBasic
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
     * @return SiteCategorySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): SiteCategorySearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return SiteCategorySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): SiteCategorySearchBasic
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
     * @return SiteCategorySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): SiteCategorySearchBasic
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
     * @param SearchMultiSelectField $name
     * @return SiteCategorySearchBasic
     */
    public function setName(SearchMultiSelectField $name): SiteCategorySearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getName(): SearchMultiSelectField
    {
        return $this->name;
    }

    /**
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return SiteCategorySearchBasic
     */
    public function setSitemapPriority(SearchEnumMultiSelectField $sitemapPriority): SiteCategorySearchBasic
    {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority(): SearchEnumMultiSelectField
    {
        return $this->sitemapPriority;
    }

}
