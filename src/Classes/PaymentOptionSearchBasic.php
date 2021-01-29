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

class PaymentOptionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $paymentInstrumentType;

    static $paramtypesmap = array(
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "paymentInstrumentType" => "SearchEnumMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $internalId
     * @return PaymentOptionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PaymentOptionSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return PaymentOptionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PaymentOptionSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentInstrumentType
     * @return PaymentOptionSearchBasic
     */
    public function setPaymentInstrumentType(SearchEnumMultiSelectField $paymentInstrumentType): PaymentOptionSearchBasic
    {
        $this->paymentInstrumentType = $paymentInstrumentType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentInstrumentType(): SearchEnumMultiSelectField
    {
        return $this->paymentInstrumentType;
    }

}
