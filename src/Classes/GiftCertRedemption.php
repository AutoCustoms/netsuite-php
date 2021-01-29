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

class GiftCertRedemption {
    /**
     * @var RecordRef
     */
    protected RecordRef $authCode;

    /**
     * @var float
     */
    protected float $authCodeApplied;

    /**
     * @var float
     */
    protected float $authCodeAmtRemaining;

    /**
     * @var float
     */
    protected float $giftCertAvailable;

    static $paramtypesmap = array(
        "authCode" => "RecordRef",
        "authCodeApplied" => "float",
        "authCodeAmtRemaining" => "float",
        "giftCertAvailable" => "float",
    );

    /**
     * @param RecordRef $authCode
     * @return GiftCertRedemption
     */
    public function setAuthCode(RecordRef $authCode): GiftCertRedemption
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAuthCode(): RecordRef
    {
        return $this->authCode;
    }

    /**
     * @param float $authCodeApplied
     * @return GiftCertRedemption
     */
    public function setAuthCodeApplied(float $authCodeApplied): GiftCertRedemption
    {
        $this->authCodeApplied = $authCodeApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getAuthCodeApplied(): float
    {
        return $this->authCodeApplied;
    }

    /**
     * @param float $authCodeAmtRemaining
     * @return GiftCertRedemption
     */
    public function setAuthCodeAmtRemaining(float $authCodeAmtRemaining): GiftCertRedemption
    {
        $this->authCodeAmtRemaining = $authCodeAmtRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getAuthCodeAmtRemaining(): float
    {
        return $this->authCodeAmtRemaining;
    }

    /**
     * @param float $giftCertAvailable
     * @return GiftCertRedemption
     */
    public function setGiftCertAvailable(float $giftCertAvailable): GiftCertRedemption
    {
        $this->giftCertAvailable = $giftCertAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertAvailable(): float
    {
        return $this->giftCertAvailable;
    }

}
