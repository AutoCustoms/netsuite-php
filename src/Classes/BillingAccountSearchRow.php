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

class BillingAccountSearchRow extends SearchRow {
    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $basic;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BillingAccountSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param BillingAccountSearchRowBasic $basic
     * @return BillingAccountSearchRow
     */
    public function setBasic(BillingAccountSearchRowBasic $basic): BillingAccountSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBasic(): BillingAccountSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return BillingAccountSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): BillingAccountSearchRow
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin(): JobSearchRowBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return BillingAccountSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): BillingAccountSearchRow
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
