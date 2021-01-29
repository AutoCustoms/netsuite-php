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

class IssueRelatedIssues {
    /**
     * @var IssueRelationship
     */
    protected IssueRelationship $relationship;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueNumber;

    /**
     * @var string
     */
    protected string $relationshipComment;

    static $paramtypesmap = array(
        "relationship" => "IssueRelationship",
        "issueNumber" => "RecordRef",
        "relationshipComment" => "string",
    );

    /**
     * @param IssueRelationship $relationship
     * @return IssueRelatedIssues
     */
    public function setRelationship(IssueRelationship $relationship): IssueRelatedIssues
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @return IssueRelationship
     */
    public function getRelationship(): IssueRelationship
    {
        return $this->relationship;
    }

    /**
     * @param RecordRef $issueNumber
     * @return IssueRelatedIssues
     */
    public function setIssueNumber(RecordRef $issueNumber): IssueRelatedIssues
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueNumber(): RecordRef
    {
        return $this->issueNumber;
    }

    /**
     * @param string $relationshipComment
     * @return IssueRelatedIssues
     */
    public function setRelationshipComment(string $relationshipComment): IssueRelatedIssues
    {
        $this->relationshipComment = $relationshipComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipComment(): string
    {
        return $this->relationshipComment;
    }

}
