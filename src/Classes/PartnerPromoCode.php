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

class PartnerPromoCode {
    /**
     * @var RecordRef
     */
    protected RecordRef $promoCode;

    /**
     * @var string
     */
    protected string $discount;

    /**
     * @var string
     */
    protected string $endDate;

    static $paramtypesmap = array(
        "promoCode" => "RecordRef",
        "discount" => "string",
        "endDate" => "dateTime",
    );

    /**
     * @param RecordRef $promoCode
     * @return PartnerPromoCode
     */
    public function setPromoCode(RecordRef $promoCode): PartnerPromoCode
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromoCode(): RecordRef
    {
        return $this->promoCode;
    }

    /**
     * @param string $discount
     * @return PartnerPromoCode
     */
    public function setDiscount(string $discount): PartnerPromoCode
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount(): string
    {
        return $this->discount;
    }

    /**
     * @param string $endDate
     * @return PartnerPromoCode
     */
    public function setEndDate(string $endDate): PartnerPromoCode
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

}
