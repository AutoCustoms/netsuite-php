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

class TaxTypeNexusesTax {
    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $saleTaxAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchTaxAcct;

    static $paramtypesmap = array(
        "nexus" => "RecordRef",
        "description" => "string",
        "saleTaxAcct" => "RecordRef",
        "purchTaxAcct" => "RecordRef",
    );

    /**
     * @param RecordRef $nexus
     * @return TaxTypeNexusesTax
     */
    public function setNexus(RecordRef $nexus): TaxTypeNexusesTax
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param string $description
     * @return TaxTypeNexusesTax
     */
    public function setDescription(string $description): TaxTypeNexusesTax
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRef $saleTaxAcct
     * @return TaxTypeNexusesTax
     */
    public function setSaleTaxAcct(RecordRef $saleTaxAcct): TaxTypeNexusesTax
    {
        $this->saleTaxAcct = $saleTaxAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleTaxAcct(): RecordRef
    {
        return $this->saleTaxAcct;
    }

    /**
     * @param RecordRef $purchTaxAcct
     * @return TaxTypeNexusesTax
     */
    public function setPurchTaxAcct(RecordRef $purchTaxAcct): TaxTypeNexusesTax
    {
        $this->purchTaxAcct = $purchTaxAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchTaxAcct(): RecordRef
    {
        return $this->purchTaxAcct;
    }

}
