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

class PaymentInstrumentSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $paymentInstrumentType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $preserveOnFile;

    static $paramtypesmap = array(
        "customer" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "paymentInstrumentType" => "SearchEnumMultiSelectField",
        "preserveOnFile" => "SearchBooleanField",
    );

    /**
     * @param SearchMultiSelectField $customer
     * @return PaymentInstrumentSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): PaymentInstrumentSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return PaymentInstrumentSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PaymentInstrumentSearchBasic
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
     * @return PaymentInstrumentSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PaymentInstrumentSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return PaymentInstrumentSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): PaymentInstrumentSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentInstrumentType
     * @return PaymentInstrumentSearchBasic
     */
    public function setPaymentInstrumentType(SearchEnumMultiSelectField $paymentInstrumentType): PaymentInstrumentSearchBasic
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

    /**
     * @param SearchBooleanField $preserveOnFile
     * @return PaymentInstrumentSearchBasic
     */
    public function setPreserveOnFile(SearchBooleanField $preserveOnFile): PaymentInstrumentSearchBasic
    {
        $this->preserveOnFile = $preserveOnFile;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPreserveOnFile(): SearchBooleanField
    {
        return $this->preserveOnFile;
    }

}
