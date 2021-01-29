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

class GiftCertificateSearchRow extends SearchRow {
    /**
     * @var GiftCertificateSearchRowBasic
     */
    protected GiftCertificateSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "GiftCertificateSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param GiftCertificateSearchRowBasic $basic
     * @return GiftCertificateSearchRow
     */
    public function setBasic(GiftCertificateSearchRowBasic $basic): GiftCertificateSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return GiftCertificateSearchRowBasic
     */
    public function getBasic(): GiftCertificateSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return GiftCertificateSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): GiftCertificateSearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return GiftCertificateSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): GiftCertificateSearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
