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

class FileSiteCategory {
    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var string
     */
    protected string $categoryDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $website;

    static $paramtypesmap = array(
        "isDefault" => "boolean",
        "category" => "RecordRef",
        "categoryDescription" => "string",
        "website" => "RecordRef",
    );

    /**
     * @param bool $isDefault
     * @return FileSiteCategory
     */
    public function setIsDefault(bool $isDefault): FileSiteCategory
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
     * @param RecordRef $category
     * @return FileSiteCategory
     */
    public function setCategory(RecordRef $category): FileSiteCategory
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
     * @param string $categoryDescription
     * @return FileSiteCategory
     */
    public function setCategoryDescription(string $categoryDescription): FileSiteCategory
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

    /**
     * @param RecordRef $website
     * @return FileSiteCategory
     */
    public function setWebsite(RecordRef $website): FileSiteCategory
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

}
