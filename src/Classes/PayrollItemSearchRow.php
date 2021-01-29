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

class PayrollItemSearchRow extends SearchRow {
    /**
     * @var PayrollItemSearchRowBasic
     */
    protected PayrollItemSearchRowBasic $basic;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "PayrollItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param PayrollItemSearchRowBasic $basic
     * @return PayrollItemSearchRow
     */
    public function setBasic(PayrollItemSearchRowBasic $basic): PayrollItemSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getBasic(): PayrollItemSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return PayrollItemSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): PayrollItemSearchRow
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
