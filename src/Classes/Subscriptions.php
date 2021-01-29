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

class Subscriptions {
    /**
     * @var bool
     */
    protected bool $subscribed;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscription;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    static $paramtypesmap = array(
        "subscribed" => "boolean",
        "subscription" => "RecordRef",
        "lastModifiedDate" => "dateTime",
    );

    /**
     * @param bool $subscribed
     * @return Subscriptions
     */
    public function setSubscribed(bool $subscribed): Subscriptions
    {
        $this->subscribed = $subscribed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSubscribed(): bool
    {
        return $this->subscribed;
    }

    /**
     * @param RecordRef $subscription
     * @return Subscriptions
     */
    public function setSubscription(RecordRef $subscription): Subscriptions
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription(): RecordRef
    {
        return $this->subscription;
    }

    /**
     * @param string $lastModifiedDate
     * @return Subscriptions
     */
    public function setLastModifiedDate(string $lastModifiedDate): Subscriptions
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

}
