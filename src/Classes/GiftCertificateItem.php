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

class GiftCertificateItem extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var string
     */
    protected string $upcCode;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var bool
     */
    protected bool $isGcoCompliant;

    /**
     * @var bool
     */
    protected bool $offerSupport;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $availableToPartners;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var string
     */
    protected string $salesDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $incomeAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $liabilityAccount;

    /**
     * @var int
     */
    protected int $daysBeforeExpiration;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var string
     */
    protected string $urlComponent;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var bool
     */
    protected bool $pricesIncludeTax;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var bool
     */
    protected bool $isFulfillable;

    /**
     * @var string
     */
    protected string $storeDisplayName;

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
    protected string $storeDescription;

    /**
     * @var string
     */
    protected string $storeDetailedDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeItemTemplate;

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
     * @var SitemapPriority
     */
    protected SitemapPriority $sitemapPriority;

    /**
     * @var string
     */
    protected string $searchKeywords;

    /**
     * @var bool
     */
    protected bool $isDonationItem;

    /**
     * @var bool
     */
    protected bool $showDefaultDonationAmount;

    /**
     * @var float
     */
    protected float $maxDonationAmount;

    /**
     * @var bool
     */
    protected bool $dontShowPrice;

    /**
     * @var string
     */
    protected string $noPriceMessage;

    /**
     * @var string
     */
    protected string $outOfStockMessage;

    /**
     * @var bool
     */
    protected bool $onSpecial;

    /**
     * @var ItemOutOfStockBehavior
     */
    protected ItemOutOfStockBehavior $outOfStockBehavior;

    /**
     * @var string
     */
    protected string $specialsDescription;

    /**
     * @var string
     */
    protected string $featuredDescription;

    /**
     * @var string
     */
    protected string $relatedItemsDescription;

    /**
     * @var PricingMatrix
     */
    protected PricingMatrix $pricingMatrix;

    /**
     * @var GiftCertificateItemAuthCodesList
     */
    protected GiftCertificateItemAuthCodesList $authCodesList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var ItemOptionsList
     */
    protected ItemOptionsList $itemOptionsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "includeChildren" => "boolean",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "salesDescription" => "string",
        "incomeAccount" => "RecordRef",
        "liabilityAccount" => "RecordRef",
        "daysBeforeExpiration" => "integer",
        "isTaxable" => "boolean",
        "rate" => "float",
        "urlComponent" => "string",
        "salesTaxCode" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "taxSchedule" => "RecordRef",
        "costEstimate" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "billingSchedule" => "RecordRef",
        "issueProduct" => "RecordRef",
        "isFulfillable" => "boolean",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "onSpecial" => "boolean",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "relatedItemsDescription" => "string",
        "pricingMatrix" => "PricingMatrix",
        "authCodesList" => "GiftCertificateItemAuthCodesList",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "itemOptionsList" => "ItemOptionsList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return GiftCertificateItem
     */
    public function setCreatedDate(string $createdDate): GiftCertificateItem
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return GiftCertificateItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): GiftCertificateItem
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $customForm
     * @return GiftCertificateItem
     */
    public function setCustomForm(RecordRef $customForm): GiftCertificateItem
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param string $itemId
     * @return GiftCertificateItem
     */
    public function setItemId(string $itemId): GiftCertificateItem
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
     * @param string $upcCode
     * @return GiftCertificateItem
     */
    public function setUpcCode(string $upcCode): GiftCertificateItem
    {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode(): string
    {
        return $this->upcCode;
    }

    /**
     * @param string $displayName
     * @return GiftCertificateItem
     */
    public function setDisplayName(string $displayName): GiftCertificateItem
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param bool $includeChildren
     * @return GiftCertificateItem
     */
    public function setIncludeChildren(bool $includeChildren): GiftCertificateItem
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRef $parent
     * @return GiftCertificateItem
     */
    public function setParent(RecordRef $parent): GiftCertificateItem
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param bool $isOnline
     * @return GiftCertificateItem
     */
    public function setIsOnline(bool $isOnline): GiftCertificateItem
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
     * @param bool $isGcoCompliant
     * @return GiftCertificateItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): GiftCertificateItem
    {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGcoCompliant(): bool
    {
        return $this->isGcoCompliant;
    }

    /**
     * @param bool $offerSupport
     * @return GiftCertificateItem
     */
    public function setOfferSupport(bool $offerSupport): GiftCertificateItem
    {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOfferSupport(): bool
    {
        return $this->offerSupport;
    }

    /**
     * @param bool $isInactive
     * @return GiftCertificateItem
     */
    public function setIsInactive(bool $isInactive): GiftCertificateItem
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
     * @param bool $availableToPartners
     * @return GiftCertificateItem
     */
    public function setAvailableToPartners(bool $availableToPartners): GiftCertificateItem
    {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToPartners(): bool
    {
        return $this->availableToPartners;
    }

    /**
     * @param RecordRef $department
     * @return GiftCertificateItem
     */
    public function setDepartment(RecordRef $department): GiftCertificateItem
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return GiftCertificateItem
     */
    public function setClass(RecordRef $class): GiftCertificateItem
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return GiftCertificateItem
     */
    public function setLocation(RecordRef $location): GiftCertificateItem
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return GiftCertificateItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): GiftCertificateItem
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param string $salesDescription
     * @return GiftCertificateItem
     */
    public function setSalesDescription(string $salesDescription): GiftCertificateItem
    {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesDescription(): string
    {
        return $this->salesDescription;
    }

    /**
     * @param RecordRef $incomeAccount
     * @return GiftCertificateItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): GiftCertificateItem
    {
        $this->incomeAccount = $incomeAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncomeAccount(): RecordRef
    {
        return $this->incomeAccount;
    }

    /**
     * @param RecordRef $liabilityAccount
     * @return GiftCertificateItem
     */
    public function setLiabilityAccount(RecordRef $liabilityAccount): GiftCertificateItem
    {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLiabilityAccount(): RecordRef
    {
        return $this->liabilityAccount;
    }

    /**
     * @param int $daysBeforeExpiration
     * @return GiftCertificateItem
     */
    public function setDaysBeforeExpiration(int $daysBeforeExpiration): GiftCertificateItem
    {
        $this->daysBeforeExpiration = $daysBeforeExpiration;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysBeforeExpiration(): int
    {
        return $this->daysBeforeExpiration;
    }

    /**
     * @param bool $isTaxable
     * @return GiftCertificateItem
     */
    public function setIsTaxable(bool $isTaxable): GiftCertificateItem
    {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxable(): bool
    {
        return $this->isTaxable;
    }

    /**
     * @param float $rate
     * @return GiftCertificateItem
     */
    public function setRate(float $rate): GiftCertificateItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param string $urlComponent
     * @return GiftCertificateItem
     */
    public function setUrlComponent(string $urlComponent): GiftCertificateItem
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
     * @param RecordRef $salesTaxCode
     * @return GiftCertificateItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): GiftCertificateItem
    {
        $this->salesTaxCode = $salesTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesTaxCode(): RecordRef
    {
        return $this->salesTaxCode;
    }

    /**
     * @param bool $pricesIncludeTax
     * @return GiftCertificateItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): GiftCertificateItem
    {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPricesIncludeTax(): bool
    {
        return $this->pricesIncludeTax;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return GiftCertificateItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): GiftCertificateItem
    {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule(): RecordRef
    {
        return $this->taxSchedule;
    }

    /**
     * @param float $costEstimate
     * @return GiftCertificateItem
     */
    public function setCostEstimate(float $costEstimate): GiftCertificateItem
    {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate(): float
    {
        return $this->costEstimate;
    }

    /**
     * @param ItemCostEstimateType $costEstimateType
     * @return GiftCertificateItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): GiftCertificateItem
    {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType(): ItemCostEstimateType
    {
        return $this->costEstimateType;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return GiftCertificateItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): GiftCertificateItem
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param RecordRef $issueProduct
     * @return GiftCertificateItem
     */
    public function setIssueProduct(RecordRef $issueProduct): GiftCertificateItem
    {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct(): RecordRef
    {
        return $this->issueProduct;
    }

    /**
     * @param bool $isFulfillable
     * @return GiftCertificateItem
     */
    public function setIsFulfillable(bool $isFulfillable): GiftCertificateItem
    {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFulfillable(): bool
    {
        return $this->isFulfillable;
    }

    /**
     * @param string $storeDisplayName
     * @return GiftCertificateItem
     */
    public function setStoreDisplayName(string $storeDisplayName): GiftCertificateItem
    {
        $this->storeDisplayName = $storeDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDisplayName(): string
    {
        return $this->storeDisplayName;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return GiftCertificateItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): GiftCertificateItem
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
     * @param string $storeDescription
     * @return GiftCertificateItem
     */
    public function setStoreDescription(string $storeDescription): GiftCertificateItem
    {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription(): string
    {
        return $this->storeDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return GiftCertificateItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): GiftCertificateItem
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
     * @param RecordRef $storeItemTemplate
     * @return GiftCertificateItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): GiftCertificateItem
    {
        $this->storeItemTemplate = $storeItemTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreItemTemplate(): RecordRef
    {
        return $this->storeItemTemplate;
    }

    /**
     * @param string $pageTitle
     * @return GiftCertificateItem
     */
    public function setPageTitle(string $pageTitle): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setMetaTagHtml(string $metaTagHtml): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): GiftCertificateItem
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
     * @param SitemapPriority $sitemapPriority
     * @return GiftCertificateItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setSearchKeywords(string $searchKeywords): GiftCertificateItem
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
     * @param bool $isDonationItem
     * @return GiftCertificateItem
     */
    public function setIsDonationItem(bool $isDonationItem): GiftCertificateItem
    {
        $this->isDonationItem = $isDonationItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDonationItem(): bool
    {
        return $this->isDonationItem;
    }

    /**
     * @param bool $showDefaultDonationAmount
     * @return GiftCertificateItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): GiftCertificateItem
    {
        $this->showDefaultDonationAmount = $showDefaultDonationAmount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowDefaultDonationAmount(): bool
    {
        return $this->showDefaultDonationAmount;
    }

    /**
     * @param float $maxDonationAmount
     * @return GiftCertificateItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): GiftCertificateItem
    {
        $this->maxDonationAmount = $maxDonationAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxDonationAmount(): float
    {
        return $this->maxDonationAmount;
    }

    /**
     * @param bool $dontShowPrice
     * @return GiftCertificateItem
     */
    public function setDontShowPrice(bool $dontShowPrice): GiftCertificateItem
    {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDontShowPrice(): bool
    {
        return $this->dontShowPrice;
    }

    /**
     * @param string $noPriceMessage
     * @return GiftCertificateItem
     */
    public function setNoPriceMessage(string $noPriceMessage): GiftCertificateItem
    {
        $this->noPriceMessage = $noPriceMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoPriceMessage(): string
    {
        return $this->noPriceMessage;
    }

    /**
     * @param string $outOfStockMessage
     * @return GiftCertificateItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): GiftCertificateItem
    {
        $this->outOfStockMessage = $outOfStockMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessage(): string
    {
        return $this->outOfStockMessage;
    }

    /**
     * @param bool $onSpecial
     * @return GiftCertificateItem
     */
    public function setOnSpecial(bool $onSpecial): GiftCertificateItem
    {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOnSpecial(): bool
    {
        return $this->onSpecial;
    }

    /**
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return GiftCertificateItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): GiftCertificateItem
    {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior(): ItemOutOfStockBehavior
    {
        return $this->outOfStockBehavior;
    }

    /**
     * @param string $specialsDescription
     * @return GiftCertificateItem
     */
    public function setSpecialsDescription(string $specialsDescription): GiftCertificateItem
    {
        $this->specialsDescription = $specialsDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialsDescription(): string
    {
        return $this->specialsDescription;
    }

    /**
     * @param string $featuredDescription
     * @return GiftCertificateItem
     */
    public function setFeaturedDescription(string $featuredDescription): GiftCertificateItem
    {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription(): string
    {
        return $this->featuredDescription;
    }

    /**
     * @param string $relatedItemsDescription
     * @return GiftCertificateItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): GiftCertificateItem
    {
        $this->relatedItemsDescription = $relatedItemsDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedItemsDescription(): string
    {
        return $this->relatedItemsDescription;
    }

    /**
     * @param PricingMatrix $pricingMatrix
     * @return GiftCertificateItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): GiftCertificateItem
    {
        $this->pricingMatrix = $pricingMatrix;
        return $this;
    }

    /**
     * @return PricingMatrix
     */
    public function getPricingMatrix(): PricingMatrix
    {
        return $this->pricingMatrix;
    }

    /**
     * @param GiftCertificateItemAuthCodesList $authCodesList
     * @return GiftCertificateItem
     */
    public function setAuthCodesList(GiftCertificateItemAuthCodesList $authCodesList): GiftCertificateItem
    {
        $this->authCodesList = $authCodesList;
        return $this;
    }

    /**
     * @return GiftCertificateItemAuthCodesList
     */
    public function getAuthCodesList(): GiftCertificateItemAuthCodesList
    {
        return $this->authCodesList;
    }

    /**
     * @param SiteCategoryList $siteCategoryList
     * @return GiftCertificateItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): GiftCertificateItem
    {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * @return SiteCategoryList
     */
    public function getSiteCategoryList(): SiteCategoryList
    {
        return $this->siteCategoryList;
    }

    /**
     * @param TranslationList $translationsList
     * @return GiftCertificateItem
     */
    public function setTranslationsList(TranslationList $translationsList): GiftCertificateItem
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList(): TranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param ItemOptionsList $itemOptionsList
     * @return GiftCertificateItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): GiftCertificateItem
    {
        $this->itemOptionsList = $itemOptionsList;
        return $this;
    }

    /**
     * @return ItemOptionsList
     */
    public function getItemOptionsList(): ItemOptionsList
    {
        return $this->itemOptionsList;
    }

    /**
     * @param PresentationItemList $presentationItemList
     * @return GiftCertificateItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): GiftCertificateItem
    {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * @return PresentationItemList
     */
    public function getPresentationItemList(): PresentationItemList
    {
        return $this->presentationItemList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return GiftCertificateItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setInternalId(string $internalId): GiftCertificateItem
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
     * @return GiftCertificateItem
     */
    public function setExternalId(string $externalId): GiftCertificateItem
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
