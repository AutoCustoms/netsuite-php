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

class SiteCategory_accounting {
    /**
     * @var RecordRef
     */
    protected RecordRef $website;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var string
     */
    protected string $categoryDescription;

    static $paramtypesmap = array(
        "website" => "RecordRef",
        "category" => "RecordRef",
        "isDefault" => "boolean",
        "categoryDescription" => "string",
    );

    /**
     * @param RecordRef $website
     * @return SiteCategory_accounting
     */
    public function setWebsite(RecordRef $website): SiteCategory_accounting
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
     * @param RecordRef $category
     * @return SiteCategory_accounting
     */
    public function setCategory(RecordRef $category): SiteCategory_accounting
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param bool $isDefault
     * @return SiteCategory_accounting
     */
    public function setIsDefault(bool $isDefault): SiteCategory_accounting
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param string $categoryDescription
     * @return SiteCategory_accounting
     */
    public function setCategoryDescription(string $categoryDescription): SiteCategory_accounting
    {
        $this->categoryDescription = $categoryDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryDescription(): string
    {
        return $this->categoryDescription;
    }

}
