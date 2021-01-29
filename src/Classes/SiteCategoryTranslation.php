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

class SiteCategoryTranslation {
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
    protected string $storeDetailedDescription;

    /**
     * @var string
     */
    protected string $pageTitle;

    static $paramtypesmap = array(
        "locale" => "Language",
        "language" => "string",
        "displayName" => "string",
        "description" => "string",
        "storeDetailedDescription" => "string",
        "pageTitle" => "string",
    );

    /**
     * @param Language $locale
     * @return SiteCategoryTranslation
     */
    public function setLocale(Language $locale): SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
     */
    public function setLanguage(string $language): SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
     */
    public function setDisplayName(string $displayName): SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
     */
    public function setDescription(string $description): SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): SiteCategoryTranslation
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
     * @param string $pageTitle
     * @return SiteCategoryTranslation
     */
    public function setPageTitle(string $pageTitle): SiteCategoryTranslation
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

}
