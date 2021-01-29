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

class PaycheckJournalDeductionList {
    /**
     * @var PaycheckJournalDeduction[]
     */
    protected array $paycheckJournalDeduction;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "paycheckJournalDeduction" => "PaycheckJournalDeduction[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param PaycheckJournalDeduction[] $paycheckJournalDeduction
     * @return PaycheckJournalDeductionList
     */
    public function setPaycheckJournalDeduction(PaycheckJournalDeduction $paycheckJournalDeduction): PaycheckJournalDeductionList
    {
        $this->paycheckJournalDeduction[] = $paycheckJournalDeduction;
        return $this;
    }

    /**
     * @return PaycheckJournalDeduction[]
     */
    public function getPaycheckJournalDeduction(): array
    {
        return $this->paycheckJournalDeduction;
    }

    /**
     * @param bool $replaceAll
     * @return PaycheckJournalDeductionList
     */
    public function setReplaceAll(bool $replaceAll): PaycheckJournalDeductionList
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
