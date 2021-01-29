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

class SiteCategoryList {
    /**
     * @var SiteCategory[]
     */
    protected array $siteCategory;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "siteCategory" => "SiteCategory[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param SiteCategory[] $siteCategory
     * @return SiteCategoryList
     */
    public function setSiteCategory(SiteCategory $siteCategory): SiteCategoryList
    {
        $this->siteCategory[] = $siteCategory;
        return $this;
    }

    /**
     * @return SiteCategory[]
     */
    public function getSiteCategory(): array
    {
        return $this->siteCategory;
    }

    /**
     * @param bool $replaceAll
     * @return SiteCategoryList
     */
    public function setReplaceAll(bool $replaceAll): SiteCategoryList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
