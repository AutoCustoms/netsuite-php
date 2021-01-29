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

class SiteCategorySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateViewed;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $excludeFromSitemap;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fullName;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $hidden;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $hits;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $longDescription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pageTitle;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $sitemapPriority;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $urlComponent;

    static $paramtypesmap = array(
        "dateViewed" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "excludeFromSitemap" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fullName" => "SearchColumnStringField[]",
        "hidden" => "SearchColumnBooleanField[]",
        "hits" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "longDescription" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "pageTitle" => "SearchColumnStringField[]",
        "sitemapPriority" => "SearchColumnEnumSelectField[]",
        "urlComponent" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return SiteCategorySearchRowBasic
     */
    public function setDateViewed(SearchColumnDateField $dateViewed): SiteCategorySearchRowBasic
    {
        $this->dateViewed[] = $dateViewed;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed(): array
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return SiteCategorySearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): SiteCategorySearchRowBasic
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
     * @param SearchColumnBooleanField[] $excludeFromSitemap
     * @return SiteCategorySearchRowBasic
     */
    public function setExcludeFromSitemap(SearchColumnBooleanField $excludeFromSitemap): SiteCategorySearchRowBasic
    {
        $this->excludeFromSitemap[] = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromSitemap(): array
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return SiteCategorySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): SiteCategorySearchRowBasic
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
     * @param SearchColumnStringField[] $fullName
     * @return SiteCategorySearchRowBasic
     */
    public function setFullName(SearchColumnStringField $fullName): SiteCategorySearchRowBasic
    {
        $this->fullName[] = $fullName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFullName(): array
    {
        return $this->fullName;
    }

    /**
     * @param SearchColumnBooleanField[] $hidden
     * @return SiteCategorySearchRowBasic
     */
    public function setHidden(SearchColumnBooleanField $hidden): SiteCategorySearchRowBasic
    {
        $this->hidden[] = $hidden;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHidden(): array
    {
        return $this->hidden;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return SiteCategorySearchRowBasic
     */
    public function setHits(SearchColumnLongField $hits): SiteCategorySearchRowBasic
    {
        $this->hits[] = $hits;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits(): array
    {
        return $this->hits;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return SiteCategorySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): SiteCategorySearchRowBasic
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
     * @param SearchColumnStringField[] $longDescription
     * @return SiteCategorySearchRowBasic
     */
    public function setLongDescription(SearchColumnStringField $longDescription): SiteCategorySearchRowBasic
    {
        $this->longDescription[] = $longDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLongDescription(): array
    {
        return $this->longDescription;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return SiteCategorySearchRowBasic
     */
    public function setName(SearchColumnStringField $name): SiteCategorySearchRowBasic
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
     * @param SearchColumnStringField[] $pageTitle
     * @return SiteCategorySearchRowBasic
     */
    public function setPageTitle(SearchColumnStringField $pageTitle): SiteCategorySearchRowBasic
    {
        $this->pageTitle[] = $pageTitle;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPageTitle(): array
    {
        return $this->pageTitle;
    }

    /**
     * @param SearchColumnEnumSelectField[] $sitemapPriority
     * @return SiteCategorySearchRowBasic
     */
    public function setSitemapPriority(SearchColumnEnumSelectField $sitemapPriority): SiteCategorySearchRowBasic
    {
        $this->sitemapPriority[] = $sitemapPriority;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSitemapPriority(): array
    {
        return $this->sitemapPriority;
    }

    /**
     * @param SearchColumnStringField[] $urlComponent
     * @return SiteCategorySearchRowBasic
     */
    public function setUrlComponent(SearchColumnStringField $urlComponent): SiteCategorySearchRowBasic
    {
        $this->urlComponent[] = $urlComponent;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrlComponent(): array
    {
        return $this->urlComponent;
    }

}
