<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The batch response containing multiple reports.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.BatchRunReportsResponse</code>
 */
class BatchRunReportsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Individual responses. Each response has a separate report request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.RunReportResponse reports = 1;</code>
     */
    private $reports;
    /**
     * Identifies what kind of resource this message is. This `kind` is always the
     * fixed string "analyticsData#batchRunReports". Useful to distinguish between
     * response types in JSON.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    private $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\RunReportResponse[]|\Google\Protobuf\Internal\RepeatedField $reports
     *           Individual responses. Each response has a separate report request.
     *     @type string $kind
     *           Identifies what kind of resource this message is. This `kind` is always the
     *           fixed string "analyticsData#batchRunReports". Useful to distinguish between
     *           response types in JSON.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Individual responses. Each response has a separate report request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.RunReportResponse reports = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * Individual responses. Each response has a separate report request.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.RunReportResponse reports = 1;</code>
     * @param \Google\Analytics\Data\V1beta\RunReportResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\RunReportResponse::class);
        $this->reports = $arr;

        return $this;
    }

    /**
     * Identifies what kind of resource this message is. This `kind` is always the
     * fixed string "analyticsData#batchRunReports". Useful to distinguish between
     * response types in JSON.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Identifies what kind of resource this message is. This `kind` is always the
     * fixed string "analyticsData#batchRunReports". Useful to distinguish between
     * response types in JSON.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

