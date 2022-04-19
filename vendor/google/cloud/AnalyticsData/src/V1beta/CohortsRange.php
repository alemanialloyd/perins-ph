<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configures the extended reporting date range for a cohort report. Specifies
 * an offset duration to follow the cohorts over.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.CohortsRange</code>
 */
class CohortsRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The granularity used to interpret the `startOffset` and
     * `endOffset` for the extended reporting date range for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange.Granularity granularity = 1;</code>
     */
    private $granularity = 0;
    /**
     * `startOffset` specifies the start date of the extended reporting date range
     * for a cohort report. `startOffset` is commonly set to 0 so that reports
     * contain data from the acquisition of the cohort forward.
     * If `granularity` is `DAILY`, the `startDate` of the extended reporting date
     * range is `startDate` of the cohort plus `startOffset` days.
     * If `granularity` is `WEEKLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 start_offset = 2;</code>
     */
    private $start_offset = 0;
    /**
     * Required. `endOffset` specifies the end date of the extended reporting date
     * range for a cohort report. `endOffset` can be any positive integer but is
     * commonly set to 5 to 10 so that reports contain data on the cohort for the
     * next several granularity time periods.
     * If `granularity` is `DAILY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset` days.
     * If `granularity` is `WEEKLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 end_offset = 3;</code>
     */
    private $end_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $granularity
     *           Required. The granularity used to interpret the `startOffset` and
     *           `endOffset` for the extended reporting date range for a cohort report.
     *     @type int $start_offset
     *           `startOffset` specifies the start date of the extended reporting date range
     *           for a cohort report. `startOffset` is commonly set to 0 so that reports
     *           contain data from the acquisition of the cohort forward.
     *           If `granularity` is `DAILY`, the `startDate` of the extended reporting date
     *           range is `startDate` of the cohort plus `startOffset` days.
     *           If `granularity` is `WEEKLY`, the `startDate` of the extended reporting
     *           date range is `startDate` of the cohort plus `startOffset * 7` days.
     *           If `granularity` is `MONTHLY`, the `startDate` of the extended reporting
     *           date range is `startDate` of the cohort plus `startOffset * 30` days.
     *     @type int $end_offset
     *           Required. `endOffset` specifies the end date of the extended reporting date
     *           range for a cohort report. `endOffset` can be any positive integer but is
     *           commonly set to 5 to 10 so that reports contain data on the cohort for the
     *           next several granularity time periods.
     *           If `granularity` is `DAILY`, the `endDate` of the extended reporting date
     *           range is `endDate` of the cohort plus `endOffset` days.
     *           If `granularity` is `WEEKLY`, the `endDate` of the extended reporting date
     *           range is `endDate` of the cohort plus `endOffset * 7` days.
     *           If `granularity` is `MONTHLY`, the `endDate` of the extended reporting date
     *           range is `endDate` of the cohort plus `endOffset * 30` days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The granularity used to interpret the `startOffset` and
     * `endOffset` for the extended reporting date range for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange.Granularity granularity = 1;</code>
     * @return int
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * Required. The granularity used to interpret the `startOffset` and
     * `endOffset` for the extended reporting date range for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.CohortsRange.Granularity granularity = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGranularity($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1beta\CohortsRange\Granularity::class);
        $this->granularity = $var;

        return $this;
    }

    /**
     * `startOffset` specifies the start date of the extended reporting date range
     * for a cohort report. `startOffset` is commonly set to 0 so that reports
     * contain data from the acquisition of the cohort forward.
     * If `granularity` is `DAILY`, the `startDate` of the extended reporting date
     * range is `startDate` of the cohort plus `startOffset` days.
     * If `granularity` is `WEEKLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 start_offset = 2;</code>
     * @return int
     */
    public function getStartOffset()
    {
        return $this->start_offset;
    }

    /**
     * `startOffset` specifies the start date of the extended reporting date range
     * for a cohort report. `startOffset` is commonly set to 0 so that reports
     * contain data from the acquisition of the cohort forward.
     * If `granularity` is `DAILY`, the `startDate` of the extended reporting date
     * range is `startDate` of the cohort plus `startOffset` days.
     * If `granularity` is `WEEKLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `startDate` of the extended reporting
     * date range is `startDate` of the cohort plus `startOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 start_offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_offset = $var;

        return $this;
    }

    /**
     * Required. `endOffset` specifies the end date of the extended reporting date
     * range for a cohort report. `endOffset` can be any positive integer but is
     * commonly set to 5 to 10 so that reports contain data on the cohort for the
     * next several granularity time periods.
     * If `granularity` is `DAILY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset` days.
     * If `granularity` is `WEEKLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 end_offset = 3;</code>
     * @return int
     */
    public function getEndOffset()
    {
        return $this->end_offset;
    }

    /**
     * Required. `endOffset` specifies the end date of the extended reporting date
     * range for a cohort report. `endOffset` can be any positive integer but is
     * commonly set to 5 to 10 so that reports contain data on the cohort for the
     * next several granularity time periods.
     * If `granularity` is `DAILY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset` days.
     * If `granularity` is `WEEKLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 7` days.
     * If `granularity` is `MONTHLY`, the `endDate` of the extended reporting date
     * range is `endDate` of the cohort plus `endOffset * 30` days.
     *
     * Generated from protobuf field <code>int32 end_offset = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->end_offset = $var;

        return $this;
    }

}
