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

class CustomSaleShipGroupList {
    /**
     * @var CustomSaleShipGroup[]
     */
    protected array $customSaleShipgroup;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "customSaleShipgroup" => "CustomSaleShipGroup[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param CustomSaleShipGroup[] $customSaleShipgroup
     * @return CustomSaleShipGroupList
     */
    public function setCustomSaleShipgroup(CustomSaleShipGroup $customSaleShipgroup): CustomSaleShipGroupList
    {
        $this->customSaleShipgroup[] = $customSaleShipgroup;
        return $this;
    }

    /**
     * @return CustomSaleShipGroup[]
     */
    public function getCustomSaleShipgroup(): array
    {
        return $this->customSaleShipgroup;
    }

    /**
     * @param bool $replaceAll
     * @return CustomSaleShipGroupList
     */
    public function setReplaceAll(bool $replaceAll): CustomSaleShipGroupList
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
