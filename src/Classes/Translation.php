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

class Translation {
    /**
     * @var Language
     */
    protected Language $locale;

    /**
     * @var string
     */
    protected string $language;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $salesDescription;

    /**
     * @var string
     */
    protected string $storeDisplayName;

    /**
     * @var string
     */
    protected string $storeDescription;

    /**
     * @var string
     */
    protected string $storeDetailedDescription;

    /**
     * @var string
     */
    protected string $featuredDescription;

    /**
     * @var string
     */
    protected string $specialsDescription;

    /**
     * @var string
     */
    protected string $pageTitle;

    /**
     * @var string
     */
    protected string $noPriceMessage;

    /**
     * @var string
     */
    protected string $outOfStockMessage;

    static $paramtypesmap = array(
        "locale" => "Language",
        "language" => "string",
        "displayName" => "string",
        "description" => "string",
        "salesDescription" => "string",
        "storeDisplayName" => "string",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "featuredDescription" => "string",
        "specialsDescription" => "string",
        "pageTitle" => "string",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
    );

    /**
     * @param Language $locale
     * @return Translation
     */
    public function setLocale(Language $locale): Translation
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLocale(): Language
    {
        return $this->locale;
    }

    /**
     * @param string $language
     * @return Translation
     */
    public function setLanguage(string $language): Translation
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $displayName
     * @return Translation
     */
    public function setDisplayName(string $displayName): Translation
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
     * @param string $description
     * @return Translation
     */
    public function setDescription(string $description): Translation
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
     * @param string $salesDescription
     * @return Translation
     */
    public function setSalesDescription(string $salesDescription): Translation
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
     * @param string $storeDisplayName
     * @return Translation
     */
    public function setStoreDisplayName(string $storeDisplayName): Translation
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
     * @param string $storeDescription
     * @return Translation
     */
    public function setStoreDescription(string $storeDescription): Translation
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
     * @return Translation
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): Translation
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
     * @param string $featuredDescription
     * @return Translation
     */
    public function setFeaturedDescription(string $featuredDescription): Translation
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
     * @param string $specialsDescription
     * @return Translation
     */
    public function setSpecialsDescription(string $specialsDescription): Translation
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
     * @param string $pageTitle
     * @return Translation
     */
    public function setPageTitle(string $pageTitle): Translation
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
     * @param string $noPriceMessage
     * @return Translation
     */
    public function setNoPriceMessage(string $noPriceMessage): Translation
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
     * @return Translation
     */
    public function setOutOfStockMessage(string $outOfStockMessage): Translation
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

}
