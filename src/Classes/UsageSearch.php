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

class UsageSearch extends SearchRecord {
    /**
     * @var UsageSearchBasic
     */
    protected UsageSearchBasic $basic;

    /**
     * @var ChargeSearchBasic
     */
    protected ChargeSearchBasic $chargeJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $subscriptionPlanJoin;

    static $paramtypesmap = array(
        "basic" => "UsageSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "subscriptionPlanJoin" => "ItemSearchBasic",
    );

    /**
     * @param UsageSearchBasic $basic
     * @return UsageSearch
     */
    public function setBasic(UsageSearchBasic $basic): UsageSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return UsageSearchBasic
     */
    public function getBasic(): UsageSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ChargeSearchBasic $chargeJoin
     * @return UsageSearch
     */
    public function setChargeJoin(ChargeSearchBasic $chargeJoin): UsageSearch
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getChargeJoin(): ChargeSearchBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return UsageSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): UsageSearch
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin(): CustomerSearchBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return UsageSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): UsageSearch
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
     * @param ItemSearchBasic $subscriptionPlanJoin
     * @return UsageSearch
     */
    public function setSubscriptionPlanJoin(ItemSearchBasic $subscriptionPlanJoin): UsageSearch
    {
        $this->subscriptionPlanJoin = $subscriptionPlanJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getSubscriptionPlanJoin(): ItemSearchBasic
    {
        return $this->subscriptionPlanJoin;
    }

}
