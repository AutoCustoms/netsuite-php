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

class GiftCertificateSearchAdvanced extends SearchRecord {
    /**
     * @var GiftCertificateSearch
     */
    protected GiftCertificateSearch $criteria;

    /**
     * @var GiftCertificateSearchRow
     */
    protected GiftCertificateSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "GiftCertificateSearch",
        "columns" => "GiftCertificateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param GiftCertificateSearch $criteria
     * @return GiftCertificateSearchAdvanced
     */
    public function setCriteria(GiftCertificateSearch $criteria): GiftCertificateSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return GiftCertificateSearch
     */
    public function getCriteria(): GiftCertificateSearch
    {
        return $this->criteria;
    }

    /**
     * @param GiftCertificateSearchRow $columns
     * @return GiftCertificateSearchAdvanced
     */
    public function setColumns(GiftCertificateSearchRow $columns): GiftCertificateSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return GiftCertificateSearchRow
     */
    public function getColumns(): GiftCertificateSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return GiftCertificateSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): GiftCertificateSearchAdvanced
    {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId(): string
    {
        return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return GiftCertificateSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): GiftCertificateSearchAdvanced
    {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId(): string
    {
        return $this->savedSearchScriptId;
    }

}
