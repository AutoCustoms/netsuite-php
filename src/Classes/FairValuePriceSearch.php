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

class FairValuePriceSearch extends SearchRecord {
    /**
     * @var FairValuePriceSearchBasic
     */
    protected FairValuePriceSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "FairValuePriceSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param FairValuePriceSearchBasic $basic
     * @return FairValuePriceSearch
     */
    public function setBasic(FairValuePriceSearchBasic $basic): FairValuePriceSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FairValuePriceSearchBasic
     */
    public function getBasic(): FairValuePriceSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return FairValuePriceSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): FairValuePriceSearch
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin(): ItemSearchBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return FairValuePriceSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): FairValuePriceSearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
