<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [DataprocMetastore.ListMetadataImports][google.cloud.metastore.v1.DataprocMetastore.ListMetadataImports].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.ListMetadataImportsRequest</code>
 */
class ListMetadataImportsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the service whose metadata imports to
     * list, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/metadataImports`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of imports to return. The response may contain less
     * than the maximum number. If unspecified, no more than 500 imports are
     * returned. The maximum value is 1000; values above 1000 are changed to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices]
     * call. Provide this token to retrieve the subsequent page.
     * To retrieve the first page, supply an empty page token.
     * When paginating, other parameters provided to
     * [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices] must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. Specify the ordering of results as described in [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     * If not specified, the results will be sorted in the default order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative resource name of the service whose metadata imports to
     *           list, in the following form:
     *           `projects/{project_number}/locations/{location_id}/services/{service_id}/metadataImports`.
     *     @type int $page_size
     *           Optional. The maximum number of imports to return. The response may contain less
     *           than the maximum number. If unspecified, no more than 500 imports are
     *           returned. The maximum value is 1000; values above 1000 are changed to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices]
     *           call. Provide this token to retrieve the subsequent page.
     *           To retrieve the first page, supply an empty page token.
     *           When paginating, other parameters provided to
     *           [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices] must match the call that provided the
     *           page token.
     *     @type string $filter
     *           Optional. The filter to apply to list results.
     *     @type string $order_by
     *           Optional. Specify the ordering of results as described in [Sorting
     *           Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     *           If not specified, the results will be sorted in the default order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the service whose metadata imports to
     * list, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/metadataImports`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative resource name of the service whose metadata imports to
     * list, in the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}/metadataImports`.
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
     * Optional. The maximum number of imports to return. The response may contain less
     * than the maximum number. If unspecified, no more than 500 imports are
     * returned. The maximum value is 1000; values above 1000 are changed to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of imports to return. The response may contain less
     * than the maximum number. If unspecified, no more than 500 imports are
     * returned. The maximum value is 1000; values above 1000 are changed to 1000.
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
     * Optional. A page token, received from a previous [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices]
     * call. Provide this token to retrieve the subsequent page.
     * To retrieve the first page, supply an empty page token.
     * When paginating, other parameters provided to
     * [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices] must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices]
     * call. Provide this token to retrieve the subsequent page.
     * To retrieve the first page, supply an empty page token.
     * When paginating, other parameters provided to
     * [DataprocMetastore.ListServices][google.cloud.metastore.v1.DataprocMetastore.ListServices] must match the call that provided the
     * page token.
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
     * Optional. The filter to apply to list results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter to apply to list results.
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

    /**
     * Optional. Specify the ordering of results as described in [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     * If not specified, the results will be sorted in the default order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Specify the ordering of results as described in [Sorting
     * Order](https://cloud.google.com/apis/design/design_patterns#sorting_order).
     * If not specified, the results will be sorted in the default order.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

