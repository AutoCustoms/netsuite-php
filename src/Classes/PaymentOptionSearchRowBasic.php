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

class PaymentOptionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mask;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $paymentInstrumentType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paymentMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $preserveOnFile;

    static $paramtypesmap = array(
        "internalId" => "SearchColumnSelectField[]",
        "mask" => "SearchColumnStringField[]",
        "paymentInstrumentType" => "SearchColumnEnumSelectField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "preserveOnFile" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return PaymentOptionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PaymentOptionSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnStringField[] $mask
     * @return PaymentOptionSearchRowBasic
     */
    public function setMask(SearchColumnStringField $mask): PaymentOptionSearchRowBasic
    {
        $this->mask[] = $mask;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMask(): array
    {
        return $this->mask;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentInstrumentType
     * @return PaymentOptionSearchRowBasic
     */
    public function setPaymentInstrumentType(SearchColumnEnumSelectField $paymentInstrumentType): PaymentOptionSearchRowBasic
    {
        $this->paymentInstrumentType[] = $paymentInstrumentType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentInstrumentType(): array
    {
        return $this->paymentInstrumentType;
    }

    /**
     * @param SearchColumnSelectField[] $paymentMethod
     * @return PaymentOptionSearchRowBasic
     */
    public function setPaymentMethod(SearchColumnSelectField $paymentMethod): PaymentOptionSearchRowBasic
    {
        $this->paymentMethod[] = $paymentMethod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentMethod(): array
    {
        return $this->paymentMethod;
    }

    /**
     * @param SearchColumnStringField[] $preserveOnFile
     * @return PaymentOptionSearchRowBasic
     */
    public function setPreserveOnFile(SearchColumnStringField $preserveOnFile): PaymentOptionSearchRowBasic
    {
        $this->preserveOnFile[] = $preserveOnFile;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreserveOnFile(): array
    {
        return $this->preserveOnFile;
    }

}
