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

class UsageSearchRow extends SearchRow {
    /**
     * @var UsageSearchRowBasic
     */
    protected UsageSearchRowBasic $basic;

    /**
     * @var ChargeSearchRowBasic
     */
    protected ChargeSearchRowBasic $chargeJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $subscriptionPlanJoin;

    static $paramtypesmap = array(
        "basic" => "UsageSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "subscriptionPlanJoin" => "ItemSearchRowBasic",
    );

    /**
     * @param UsageSearchRowBasic $basic
     * @return UsageSearchRow
     */
    public function setBasic(UsageSearchRowBasic $basic): UsageSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return UsageSearchRowBasic
     */
    public function getBasic(): UsageSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ChargeSearchRowBasic $chargeJoin
     * @return UsageSearchRow
     */
    public function setChargeJoin(ChargeSearchRowBasic $chargeJoin): UsageSearchRow
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getChargeJoin(): ChargeSearchRowBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return UsageSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): UsageSearchRow
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return UsageSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): UsageSearchRow
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
     * @param ItemSearchRowBasic $subscriptionPlanJoin
     * @return UsageSearchRow
     */
    public function setSubscriptionPlanJoin(ItemSearchRowBasic $subscriptionPlanJoin): UsageSearchRow
    {
        $this->subscriptionPlanJoin = $subscriptionPlanJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getSubscriptionPlanJoin(): ItemSearchRowBasic
    {
        return $this->subscriptionPlanJoin;
    }

}
