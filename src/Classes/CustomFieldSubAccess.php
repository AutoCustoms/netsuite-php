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

class CustomFieldSubAccess {
    /**
     * @var RecordRef
     */
    protected RecordRef $sub;

    /**
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

    static $paramtypesmap = array(
        "sub" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
    );

    /**
     * @param RecordRef $sub
     * @return CustomFieldSubAccess
     */
    public function setSub(RecordRef $sub): CustomFieldSubAccess
    {
        $this->sub = $sub;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSub(): RecordRef
    {
        return $this->sub;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return CustomFieldSubAccess
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): CustomFieldSubAccess
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel(): CustomizationAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return CustomFieldSubAccess
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): CustomFieldSubAccess
    {
        $this->searchLevel = $searchLevel;
        return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel(): CustomizationSearchLevel
    {
        return $this->searchLevel;
    }

}
