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

class FairValuePriceSearchRow extends SearchRow {
    /**
     * @var FairValuePriceSearchRowBasic
     */
    protected FairValuePriceSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "FairValuePriceSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param FairValuePriceSearchRowBasic $basic
     * @return FairValuePriceSearchRow
     */
    public function setBasic(FairValuePriceSearchRowBasic $basic): FairValuePriceSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FairValuePriceSearchRowBasic
     */
    public function getBasic(): FairValuePriceSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return FairValuePriceSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): FairValuePriceSearchRow
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin(): ItemSearchRowBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return FairValuePriceSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): FairValuePriceSearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
