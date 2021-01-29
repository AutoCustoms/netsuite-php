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

class SiteCategory extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $website;

    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $categoryListLayout;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemListLayout;

    /**
     * @var RecordRef
     */
    protected RecordRef $relatedItemsListLayout;

    /**
     * @var RecordRef
     */
    protected RecordRef $correlatedItemsListLayout;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $storeDetailedDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayThumbnail;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayImage;

    /**
     * @var string
     */
    protected string $pageTitle;

    /**
     * @var string
     */
    protected string $metaTagHtml;

    /**
     * @var bool
     */
    protected bool $excludeFromSitemap;

    /**
     * @var string
     */
    protected string $urlComponent;

    /**
     * @var SitemapPriority
     */
    protected SitemapPriority $sitemapPriority;

    /**
     * @var string
     */
    protected string $searchKeywords;

    /**
     * @var SiteCategoryPresentationItemList
     */
    protected SiteCategoryPresentationItemList $presentationItemList;

    /**
     * @var SiteCategoryTranslationList
     */
    protected SiteCategoryTranslationList $translationsList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "website" => "RecordRef",
        "itemId" => "string",
        "parentCategory" => "RecordRef",
        "categoryListLayout" => "RecordRef",
        "itemListLayout" => "RecordRef",
        "relatedItemsListLayout" => "RecordRef",
        "correlatedItemsListLayout" => "RecordRef",
        "isOnline" => "boolean",
        "isInactive" => "boolean",
        "description" => "string",
        "storeDetailedDescription" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "pageTitle" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "urlComponent" => "string",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "presentationItemList" => "SiteCategoryPresentationItemList",
        "translationsList" => "SiteCategoryTranslationList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $website
     * @return SiteCategory
     */
    public function setWebsite(RecordRef $website): SiteCategory
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWebsite(): RecordRef
    {
        return $this->website;
    }

    /**
     * @param string $itemId
     * @return SiteCategory
     */
    public function setItemId(string $itemId): SiteCategory
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param RecordRef $parentCategory
     * @return SiteCategory
     */
    public function setParentCategory(RecordRef $parentCategory): SiteCategory
    {
        $this->parentCategory = $parentCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentCategory(): RecordRef
    {
        return $this->parentCategory;
    }

    /**
     * @param RecordRef $categoryListLayout
     * @return SiteCategory
     */
    public function setCategoryListLayout(RecordRef $categoryListLayout): SiteCategory
    {
        $this->categoryListLayout = $categoryListLayout;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategoryListLayout(): RecordRef
    {
        return $this->categoryListLayout;
    }

    /**
     * @param RecordRef $itemListLayout
     * @return SiteCategory
     */
    public function setItemListLayout(RecordRef $itemListLayout): SiteCategory
    {
        $this->itemListLayout = $itemListLayout;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemListLayout(): RecordRef
    {
        return $this->itemListLayout;
    }

    /**
     * @param RecordRef $relatedItemsListLayout
     * @return SiteCategory
     */
    public function setRelatedItemsListLayout(RecordRef $relatedItemsListLayout): SiteCategory
    {
        $this->relatedItemsListLayout = $relatedItemsListLayout;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRelatedItemsListLayout(): RecordRef
    {
        return $this->relatedItemsListLayout;
    }

    /**
     * @param RecordRef $correlatedItemsListLayout
     * @return SiteCategory
     */
    public function setCorrelatedItemsListLayout(RecordRef $correlatedItemsListLayout): SiteCategory
    {
        $this->correlatedItemsListLayout = $correlatedItemsListLayout;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCorrelatedItemsListLayout(): RecordRef
    {
        return $this->correlatedItemsListLayout;
    }

    /**
     * @param bool $isOnline
     * @return SiteCategory
     */
    public function setIsOnline(bool $isOnline): SiteCategory
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool $isInactive
     * @return SiteCategory
     */
    public function setIsInactive(bool $isInactive): SiteCategory
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
     * @param string $description
     * @return SiteCategory
     */
    public function setDescription(string $description): SiteCategory
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
     * @param string $storeDetailedDescription
     * @return SiteCategory
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): SiteCategory
    {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription(): string
    {
        return $this->storeDetailedDescription;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return SiteCategory
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): SiteCategory
    {
        $this->storeDisplayThumbnail = $storeDisplayThumbnail;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail(): RecordRef
    {
        return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayImage
     * @return SiteCategory
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): SiteCategory
    {
        $this->storeDisplayImage = $storeDisplayImage;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayImage(): RecordRef
    {
        return $this->storeDisplayImage;
    }

    /**
     * @param string $pageTitle
     * @return SiteCategory
     */
    public function setPageTitle(string $pageTitle): SiteCategory
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * @param string $metaTagHtml
     * @return SiteCategory
     */
    public function setMetaTagHtml(string $metaTagHtml): SiteCategory
    {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTagHtml(): string
    {
        return $this->metaTagHtml;
    }

    /**
     * @param bool $excludeFromSitemap
     * @return SiteCategory
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): SiteCategory
    {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeFromSitemap(): bool
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param string $urlComponent
     * @return SiteCategory
     */
    public function setUrlComponent(string $urlComponent): SiteCategory
    {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent(): string
    {
        return $this->urlComponent;
    }

    /**
     * @param SitemapPriority $sitemapPriority
     * @return SiteCategory
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): SiteCategory
    {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * @return SitemapPriority
     */
    public function getSitemapPriority(): SitemapPriority
    {
        return $this->sitemapPriority;
    }

    /**
     * @param string $searchKeywords
     * @return SiteCategory
     */
    public function setSearchKeywords(string $searchKeywords): SiteCategory
    {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywords(): string
    {
        return $this->searchKeywords;
    }

    /**
     * @param SiteCategoryPresentationItemList $presentationItemList
     * @return SiteCategory
     */
    public function setPresentationItemList(SiteCategoryPresentationItemList $presentationItemList): SiteCategory
    {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * @return SiteCategoryPresentationItemList
     */
    public function getPresentationItemList(): SiteCategoryPresentationItemList
    {
        return $this->presentationItemList;
    }

    /**
     * @param SiteCategoryTranslationList $translationsList
     * @return SiteCategory
     */
    public function setTranslationsList(SiteCategoryTranslationList $translationsList): SiteCategory
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return SiteCategoryTranslationList
     */
    public function getTranslationsList(): SiteCategoryTranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param string $internalId
     * @return SiteCategory
     */
    public function setInternalId(string $internalId): SiteCategory
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
     * @return SiteCategory
     */
    public function setExternalId(string $externalId): SiteCategory
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
