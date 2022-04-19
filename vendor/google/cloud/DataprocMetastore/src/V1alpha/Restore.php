<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The details of a metadata restore operation.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.Restore</code>
 */
class Restore extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time when the restore started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. The time when the restore ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Output only. The current state of the restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The relative resource name of the metastore service backup to restore
     * from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string backup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $backup = '';
    /**
     * Output only. The type of restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.RestoreType type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $type = 0;
    /**
     * Output only. The restore details containing the revision of the service to be restored
     * to, in format of JSON.
     *
     * Generated from protobuf field <code>string details = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time when the restore started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time when the restore ended.
     *     @type int $state
     *           Output only. The current state of the restore.
     *     @type string $backup
     *           Output only. The relative resource name of the metastore service backup to restore
     *           from, in the following form:
     *           `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *     @type int $type
     *           Output only. The type of restore.
     *     @type string $details
     *           Output only. The restore details containing the revision of the service to be restored
     *           to, in format of JSON.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time when the restore started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. The time when the restore started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the restore ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time when the restore ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of the restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Metastore\V1alpha\Restore\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The relative resource name of the metastore service backup to restore
     * from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string backup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackup()
    {
        return $this->backup;
    }

    /**
     * Output only. The relative resource name of the metastore service backup to restore
     * from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`
     *
     * Generated from protobuf field <code>string backup = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup = $var;

        return $this;
    }

    /**
     * Output only. The type of restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.RestoreType type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of restore.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1alpha.Restore.RestoreType type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Metastore\V1alpha\Restore\RestoreType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The restore details containing the revision of the service to be restored
     * to, in format of JSON.
     *
     * Generated from protobuf field <code>string details = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Output only. The restore details containing the revision of the service to be restored
     * to, in format of JSON.
     *
     * Generated from protobuf field <code>string details = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

