<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_service.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListInsights` method.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.ListInsightsRequest</code>
 */
class ListInsightsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The container resource on which to execute the request.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `projects/[PROJECT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `folders/[FOLDER_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `organizations/[ORGANIZATION_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * LOCATION here refers to GCP Locations:
     * https://cloud.google.com/about/locations/
     * INSIGHT_TYPE_ID refers to supported insight types:
     * https://cloud.google.com/recommender/docs/insights/insight-types.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of results to return from this request.  Non-positive
     * values are ignored. If not specified, the server will determine the number
     * of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. If present, retrieves the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of other method parameters must be identical
     * to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Filter expression to restrict the insights returned. Supported
     * filter fields:
     * * `stateInfo.state`
     * * `insightSubtype`
     * * `severity`
     * Examples:
     * * `stateInfo.state = ACTIVE OR stateInfo.state = DISMISSED`
     * * `insightSubtype = PERMISSIONS_USAGE`
     * * `severity = CRITICAL OR severity = HIGH`
     * * `stateInfo.state = ACTIVE AND (severity = CRITICAL OR severity = HIGH)`
     * (These expressions are based on the filter language described at
     * https://google.aip.dev/160)
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The container resource on which to execute the request.
     *           Acceptable formats:
     *           * `projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     *           * `projects/[PROJECT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     *           * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     *           * `folders/[FOLDER_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     *           * `organizations/[ORGANIZATION_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     *           LOCATION here refers to GCP Locations:
     *           https://cloud.google.com/about/locations/
     *           INSIGHT_TYPE_ID refers to supported insight types:
     *           https://cloud.google.com/recommender/docs/insights/insight-types.
     *     @type int $page_size
     *           Optional. The maximum number of results to return from this request.  Non-positive
     *           values are ignored. If not specified, the server will determine the number
     *           of results to return.
     *     @type string $page_token
     *           Optional. If present, retrieves the next batch of results from the preceding call to
     *           this method. `page_token` must be the value of `next_page_token` from the
     *           previous response. The values of other method parameters must be identical
     *           to those in the previous call.
     *     @type string $filter
     *           Optional. Filter expression to restrict the insights returned. Supported
     *           filter fields:
     *           * `stateInfo.state`
     *           * `insightSubtype`
     *           * `severity`
     *           Examples:
     *           * `stateInfo.state = ACTIVE OR stateInfo.state = DISMISSED`
     *           * `insightSubtype = PERMISSIONS_USAGE`
     *           * `severity = CRITICAL OR severity = HIGH`
     *           * `stateInfo.state = ACTIVE AND (severity = CRITICAL OR severity = HIGH)`
     *           (These expressions are based on the filter language described at
     *           https://google.aip.dev/160)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\RecommenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The container resource on which to execute the request.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `projects/[PROJECT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `folders/[FOLDER_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `organizations/[ORGANIZATION_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * LOCATION here refers to GCP Locations:
     * https://cloud.google.com/about/locations/
     * INSIGHT_TYPE_ID refers to supported insight types:
     * https://cloud.google.com/recommender/docs/insights/insight-types.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The container resource on which to execute the request.
     * Acceptable formats:
     * * `projects/[PROJECT_NUMBER]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `projects/[PROJECT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `folders/[FOLDER_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * * `organizations/[ORGANIZATION_ID]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE_ID]`
     * LOCATION here refers to GCP Locations:
     * https://cloud.google.com/about/locations/
     * INSIGHT_TYPE_ID refers to supported insight types:
     * https://cloud.google.com/recommender/docs/insights/insight-types.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return from this request.  Non-positive
     * values are ignored. If not specified, the server will determine the number
     * of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return from this request.  Non-positive
     * values are ignored. If not specified, the server will determine the number
     * of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If present, retrieves the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of other method parameters must be identical
     * to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, retrieves the next batch of results from the preceding call to
     * this method. `page_token` must be the value of `next_page_token` from the
     * previous response. The values of other method parameters must be identical
     * to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter expression to restrict the insights returned. Supported
     * filter fields:
     * * `stateInfo.state`
     * * `insightSubtype`
     * * `severity`
     * Examples:
     * * `stateInfo.state = ACTIVE OR stateInfo.state = DISMISSED`
     * * `insightSubtype = PERMISSIONS_USAGE`
     * * `severity = CRITICAL OR severity = HIGH`
     * * `stateInfo.state = ACTIVE AND (severity = CRITICAL OR severity = HIGH)`
     * (These expressions are based on the filter language described at
     * https://google.aip.dev/160)
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter expression to restrict the insights returned. Supported
     * filter fields:
     * * `stateInfo.state`
     * * `insightSubtype`
     * * `severity`
     * Examples:
     * * `stateInfo.state = ACTIVE OR stateInfo.state = DISMISSED`
     * * `insightSubtype = PERMISSIONS_USAGE`
     * * `severity = CRITICAL OR severity = HIGH`
     * * `stateInfo.state = ACTIVE AND (severity = CRITICAL OR severity = HIGH)`
     * (These expressions are based on the filter language described at
     * https://google.aip.dev/160)
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

