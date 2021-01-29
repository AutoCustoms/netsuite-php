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

class PartnerAddressbookList {
    /**
     * @var PartnerAddressbook[]
     */
    protected array $addressbook;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "PartnerAddressbook[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param PartnerAddressbook[] $addressbook
     * @return PartnerAddressbookList
     */
    public function setAddressbook(PartnerAddressbook $addressbook): PartnerAddressbookList
    {
        $this->addressbook[] = $addressbook;
        return $this;
    }

    /**
     * @return PartnerAddressbook[]
     */
    public function getAddressbook(): array
    {
        return $this->addressbook;
    }

    /**
     * @param bool $replaceAll
     * @return PartnerAddressbookList
     */
    public function setReplaceAll(bool $replaceAll): PartnerAddressbookList
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
