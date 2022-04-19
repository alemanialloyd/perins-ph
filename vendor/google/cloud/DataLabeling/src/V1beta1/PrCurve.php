<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.PrCurve</code>
 */
class PrCurve extends \Google\Protobuf\Internal\Message
{
    /**
     * The annotation spec of the label for which the precision-recall curve
     * calculated. If this field is empty, that means the precision-recall curve
     * is an aggregate curve for all labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     */
    private $annotation_spec = null;
    /**
     * Area under the precision-recall curve. Not to be confused with area under
     * a receiver operating characteristic (ROC) curve.
     *
     * Generated from protobuf field <code>float area_under_curve = 2;</code>
     */
    private $area_under_curve = 0.0;
    /**
     * Entries that make up the precision-recall graph. Each entry is a "point" on
     * the graph drawn for a different `confidence_threshold`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.PrCurve.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     */
    private $confidence_metrics_entries;
    /**
     * Mean average prcision of this curve.
     *
     * Generated from protobuf field <code>float mean_average_precision = 4;</code>
     */
    private $mean_average_precision = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $annotation_spec
     *           The annotation spec of the label for which the precision-recall curve
     *           calculated. If this field is empty, that means the precision-recall curve
     *           is an aggregate curve for all labels.
     *     @type float $area_under_curve
     *           Area under the precision-recall curve. Not to be confused with area under
     *           a receiver operating characteristic (ROC) curve.
     *     @type \Google\Cloud\DataLabeling\V1beta1\PrCurve\ConfidenceMetricsEntry[]|\Google\Protobuf\Internal\RepeatedField $confidence_metrics_entries
     *           Entries that make up the precision-recall graph. Each entry is a "point" on
     *           the graph drawn for a different `confidence_threshold`.
     *     @type float $mean_average_precision
     *           Mean average prcision of this curve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * The annotation spec of the label for which the precision-recall curve
     * calculated. If this field is empty, that means the precision-recall curve
     * is an aggregate curve for all labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec|null
     */
    public function getAnnotationSpec()
    {
        return $this->annotation_spec;
    }

    public function hasAnnotationSpec()
    {
        return isset($this->annotation_spec);
    }

    public function clearAnnotationSpec()
    {
        unset($this->annotation_spec);
    }

    /**
     * The annotation spec of the label for which the precision-recall curve
     * calculated. If this field is empty, that means the precision-recall curve
     * is an aggregate curve for all labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $var
     * @return $this
     */
    public function setAnnotationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_spec = $var;

        return $this;
    }

    /**
     * Area under the precision-recall curve. Not to be confused with area under
     * a receiver operating characteristic (ROC) curve.
     *
     * Generated from protobuf field <code>float area_under_curve = 2;</code>
     * @return float
     */
    public function getAreaUnderCurve()
    {
        return $this->area_under_curve;
    }

    /**
     * Area under the precision-recall curve. Not to be confused with area under
     * a receiver operating characteristic (ROC) curve.
     *
     * Generated from protobuf field <code>float area_under_curve = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setAreaUnderCurve($var)
    {
        GPBUtil::checkFloat($var);
        $this->area_under_curve = $var;

        return $this;
    }

    /**
     * Entries that make up the precision-recall graph. Each entry is a "point" on
     * the graph drawn for a different `confidence_threshold`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.PrCurve.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfidenceMetricsEntries()
    {
        return $this->confidence_metrics_entries;
    }

    /**
     * Entries that make up the precision-recall graph. Each entry is a "point" on
     * the graph drawn for a different `confidence_threshold`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.PrCurve.ConfidenceMetricsEntry confidence_metrics_entries = 3;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\PrCurve\ConfidenceMetricsEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfidenceMetricsEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\PrCurve\ConfidenceMetricsEntry::class);
        $this->confidence_metrics_entries = $arr;

        return $this;
    }

    /**
     * Mean average prcision of this curve.
     *
     * Generated from protobuf field <code>float mean_average_precision = 4;</code>
     * @return float
     */
    public function getMeanAveragePrecision()
    {
        return $this->mean_average_precision;
    }

    /**
     * Mean average prcision of this curve.
     *
     * Generated from protobuf field <code>float mean_average_precision = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanAveragePrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->mean_average_precision = $var;

        return $this;
    }

}

