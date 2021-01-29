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

class InterCompanyJournalEntryAccountingBookDetailList {
    /**
     * @var InterCompanyJournalEntryAccountingBookDetail[]
     */
    protected array $interCompanyJournalEntryAccountingBookDetail;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "interCompanyJournalEntryAccountingBookDetail" => "InterCompanyJournalEntryAccountingBookDetail[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param InterCompanyJournalEntryAccountingBookDetail[] $interCompanyJournalEntryAccountingBookDetail
     * @return InterCompanyJournalEntryAccountingBookDetailList
     */
    public function setInterCompanyJournalEntryAccountingBookDetail(InterCompanyJournalEntryAccountingBookDetail $interCompanyJournalEntryAccountingBookDetail): InterCompanyJournalEntryAccountingBookDetailList
    {
        $this->interCompanyJournalEntryAccountingBookDetail[] = $interCompanyJournalEntryAccountingBookDetail;
        return $this;
    }

    /**
     * @return InterCompanyJournalEntryAccountingBookDetail[]
     */
    public function getInterCompanyJournalEntryAccountingBookDetail(): array
    {
        return $this->interCompanyJournalEntryAccountingBookDetail;
    }

    /**
     * @param bool $replaceAll
     * @return InterCompanyJournalEntryAccountingBookDetailList
     */
    public function setReplaceAll(bool $replaceAll): InterCompanyJournalEntryAccountingBookDetailList
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
