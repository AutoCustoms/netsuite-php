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

class BillingAccountSearch extends SearchRecord {
    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $basic;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BillingAccountSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param BillingAccountSearchBasic $basic
     * @return BillingAccountSearch
     */
    public function setBasic(BillingAccountSearchBasic $basic): BillingAccountSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBasic(): BillingAccountSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return BillingAccountSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): BillingAccountSearch
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin(): JobSearchBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return BillingAccountSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): BillingAccountSearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
