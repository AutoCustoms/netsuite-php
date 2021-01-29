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

class ExpenseCategoryRatesList {
    /**
     * @var ExpenseCategoryRates[]
     */
    protected array $expenseCategoryRates;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "expenseCategoryRates" => "ExpenseCategoryRates[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param ExpenseCategoryRates[] $expenseCategoryRates
     * @return ExpenseCategoryRatesList
     */
    public function setExpenseCategoryRates(ExpenseCategoryRates $expenseCategoryRates): ExpenseCategoryRatesList
    {
        $this->expenseCategoryRates[] = $expenseCategoryRates;
        return $this;
    }

    /**
     * @return ExpenseCategoryRates[]
     */
    public function getExpenseCategoryRates(): array
    {
        return $this->expenseCategoryRates;
    }

    /**
     * @param bool $replaceAll
     * @return ExpenseCategoryRatesList
     */
    public function setReplaceAll(bool $replaceAll): ExpenseCategoryRatesList
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
