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

class FolderSearchRow extends SearchRow {
    /**
     * @var FolderSearchRowBasic
     */
    protected FolderSearchRowBasic $basic;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "FolderSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param FolderSearchRowBasic $basic
     * @return FolderSearchRow
     */
    public function setBasic(FolderSearchRowBasic $basic): FolderSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FolderSearchRowBasic
     */
    public function getBasic(): FolderSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return FolderSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): FolderSearchRow
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin(): FileSearchRowBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return FolderSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): FolderSearchRow
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

}
