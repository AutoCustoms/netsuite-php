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

class InvoicePartnersList {
    /**
     * @var Partners[]
     */
    protected array $partners;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "partners" => "Partners[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param Partners[] $partners
     * @return InvoicePartnersList
     */
    public function setPartners(Partners $partners): InvoicePartnersList
    {
        $this->partners[] = $partners;
        return $this;
    }

    /**
     * @return Partners[]
     */
    public function getPartners(): array
    {
        return $this->partners;
    }

    /**
     * @param bool $replaceAll
     * @return InvoicePartnersList
     */
    public function setReplaceAll(bool $replaceAll): InvoicePartnersList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
