<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PipelineService.ListPipelineJobs][google.cloud.aiplatform.v1.PipelineService.ListPipelineJobs].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListPipelineJobsRequest</code>
 */
class ListPipelineJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list the PipelineJobs from.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `display_name`: Supports `=`, `!=` comparisons, and `:` wildcard.
     * * `pipeline_job_user_id`: Supports `=`, `!=` comparisons, and `:` wildcard.
     *  for example, can check if pipeline's display_name contains *step* by doing
     *   display_name:\"*step*\"
     * * `state`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * The standard list page token.
     * Typically obtained via
     * [ListPipelineJobsResponse.next_page_token][google.cloud.aiplatform.v1.ListPipelineJobsResponse.next_page_token] of the previous
     * [PipelineService.ListPipelineJobs][google.cloud.aiplatform.v1.PipelineService.ListPipelineJobs] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * A comma-separated list of fields to order by. The default sort order is in
     * ascending order. Use "desc" after a field name for descending. You can have
     * multiple order_by fields provided e.g. "create_time desc, end_time",
     * "end_time, start_time, update_time" For example, using "create_time desc,
     * end_time" will order results by create time in descending order, and if
     * there are multiple jobs having the same create time, order them by the end
     * time in ascending order. if order_by is not specified, it will order by
     * default order is create time in descending order. Supported fields:
     *   * `create_time`
     *   * `update_time`
     *   * `end_time`
     *   * `start_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to list the PipelineJobs from.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Lists the PipelineJobs that match the filter expression. The following
     *           fields are supported:
     *           * `pipeline_name`: Supports `=` and `!=` comparisons.
     *           * `display_name`: Supports `=`, `!=` comparisons, and `:` wildcard.
     *           * `pipeline_job_user_id`: Supports `=`, `!=` comparisons, and `:` wildcard.
     *            for example, can check if pipeline's display_name contains *step* by doing
     *             display_name:\"*step*\"
     *           * `state`: Supports `=` and `!=` comparisons.
     *           * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `labels`: Supports key-value equality and key presence.
     *           Filter expressions can be combined together using logical operators
     *           (`AND` & `OR`).
     *           For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     *           The syntax to define filter expression is based on
     *           https://google.aip.dev/160.
     *           Examples:
     *           * `create_time>"2021-05-18T00:00:00Z" OR
     *             update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *             after 2020-05-18 00:00:00 UTC.
     *           * `labels.env = "prod"`
     *             PipelineJobs with label "env" set to "prod".
     *     @type int $page_size
     *           The standard list page size.
     *     @type string $page_token
     *           The standard list page token.
     *           Typically obtained via
     *           [ListPipelineJobsResponse.next_page_token][google.cloud.aiplatform.v1.ListPipelineJobsResponse.next_page_token] of the previous
     *           [PipelineService.ListPipelineJobs][google.cloud.aiplatform.v1.PipelineService.ListPipelineJobs] call.
     *     @type string $order_by
     *           A comma-separated list of fields to order by. The default sort order is in
     *           ascending order. Use "desc" after a field name for descending. You can have
     *           multiple order_by fields provided e.g. "create_time desc, end_time",
     *           "end_time, start_time, update_time" For example, using "create_time desc,
     *           end_time" will order results by create time in descending order, and if
     *           there are multiple jobs having the same create time, order them by the end
     *           time in ascending order. if order_by is not specified, it will order by
     *           default order is create time in descending order. Supported fields:
     *             * `create_time`
     *             * `update_time`
     *             * `end_time`
     *             * `start_time`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list the PipelineJobs from.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list the PipelineJobs from.
     * Format: `projects/{project}/locations/{location}`
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
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `display_name`: Supports `=`, `!=` comparisons, and `:` wildcard.
     * * `pipeline_job_user_id`: Supports `=`, `!=` comparisons, and `:` wildcard.
     *  for example, can check if pipeline's display_name contains *step* by doing
     *   display_name:\"*step*\"
     * * `state`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `display_name`: Supports `=`, `!=` comparisons, and `:` wildcard.
     * * `pipeline_job_user_id`: Supports `=`, `!=` comparisons, and `:` wildcard.
     *  for example, can check if pipeline's display_name contains *step* by doing
     *   display_name:\"*step*\"
     * * `state`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
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
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * The standard list page token.
     * Typically obtained via
     * [ListPipelineJobsResponse.next_page_token][google.cloud.aiplatform.v1.ListPipelineJobsResponse.next_page_token] of the previous
     * [PipelineService.ListPipelineJobs][google.cloud.aiplatform.v1.PipelineService.ListPipelineJobs] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The standard list page token.
     * Typically obtained via
     * [ListPipelineJobsResponse.next_page_token][google.cloud.aiplatform.v1.ListPipelineJobsResponse.next_page_token] of the previous
     * [PipelineService.ListPipelineJobs][google.cloud.aiplatform.v1.PipelineService.ListPipelineJobs] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
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
     * A comma-separated list of fields to order by. The default sort order is in
     * ascending order. Use "desc" after a field name for descending. You can have
     * multiple order_by fields provided e.g. "create_time desc, end_time",
     * "end_time, start_time, update_time" For example, using "create_time desc,
     * end_time" will order results by create time in descending order, and if
     * there are multiple jobs having the same create time, order them by the end
     * time in ascending order. if order_by is not specified, it will order by
     * default order is create time in descending order. Supported fields:
     *   * `create_time`
     *   * `update_time`
     *   * `end_time`
     *   * `start_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields to order by. The default sort order is in
     * ascending order. Use "desc" after a field name for descending. You can have
     * multiple order_by fields provided e.g. "create_time desc, end_time",
     * "end_time, start_time, update_time" For example, using "create_time desc,
     * end_time" will order results by create time in descending order, and if
     * there are multiple jobs having the same create time, order them by the end
     * time in ascending order. if order_by is not specified, it will order by
     * default order is create time in descending order. Supported fields:
     *   * `create_time`
     *   * `update_time`
     *   * `end_time`
     *   * `start_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
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

