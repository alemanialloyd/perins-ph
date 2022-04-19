<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Health checking configuration for VM instances. Unhealthy instances
 * are killed and replaced with new instances. Only applicable for
 * instances in App Engine flexible environment.
 *
 * Generated from protobuf message <code>google.appengine.v1.HealthCheck</code>
 */
class HealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to explicitly disable health checks for this instance.
     *
     * Generated from protobuf field <code>bool disable_health_check = 1;</code>
     */
    private $disable_health_check = false;
    /**
     * Host header to send when performing an HTTP health check.
     * Example: "myapp.appspot.com"
     *
     * Generated from protobuf field <code>string host = 2;</code>
     */
    private $host = '';
    /**
     * Number of consecutive successful health checks required before receiving
     * traffic.
     *
     * Generated from protobuf field <code>uint32 healthy_threshold = 3;</code>
     */
    private $healthy_threshold = 0;
    /**
     * Number of consecutive failed health checks required before removing
     * traffic.
     *
     * Generated from protobuf field <code>uint32 unhealthy_threshold = 4;</code>
     */
    private $unhealthy_threshold = 0;
    /**
     * Number of consecutive failed health checks required before an instance is
     * restarted.
     *
     * Generated from protobuf field <code>uint32 restart_threshold = 5;</code>
     */
    private $restart_threshold = 0;
    /**
     * Interval between health checks.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration check_interval = 6;</code>
     */
    private $check_interval = null;
    /**
     * Time before the health check is considered failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 7;</code>
     */
    private $timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable_health_check
     *           Whether to explicitly disable health checks for this instance.
     *     @type string $host
     *           Host header to send when performing an HTTP health check.
     *           Example: "myapp.appspot.com"
     *     @type int $healthy_threshold
     *           Number of consecutive successful health checks required before receiving
     *           traffic.
     *     @type int $unhealthy_threshold
     *           Number of consecutive failed health checks required before removing
     *           traffic.
     *     @type int $restart_threshold
     *           Number of consecutive failed health checks required before an instance is
     *           restarted.
     *     @type \Google\Protobuf\Duration $check_interval
     *           Interval between health checks.
     *     @type \Google\Protobuf\Duration $timeout
     *           Time before the health check is considered failed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AppYaml::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to explicitly disable health checks for this instance.
     *
     * Generated from protobuf field <code>bool disable_health_check = 1;</code>
     * @return bool
     */
    public function getDisableHealthCheck()
    {
        return $this->disable_health_check;
    }

    /**
     * Whether to explicitly disable health checks for this instance.
     *
     * Generated from protobuf field <code>bool disable_health_check = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableHealthCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_health_check = $var;

        return $this;
    }

    /**
     * Host header to send when performing an HTTP health check.
     * Example: "myapp.appspot.com"
     *
     * Generated from protobuf field <code>string host = 2;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Host header to send when performing an HTTP health check.
     * Example: "myapp.appspot.com"
     *
     * Generated from protobuf field <code>string host = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Number of consecutive successful health checks required before receiving
     * traffic.
     *
     * Generated from protobuf field <code>uint32 healthy_threshold = 3;</code>
     * @return int
     */
    public function getHealthyThreshold()
    {
        return $this->healthy_threshold;
    }

    /**
     * Number of consecutive successful health checks required before receiving
     * traffic.
     *
     * Generated from protobuf field <code>uint32 healthy_threshold = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHealthyThreshold($var)
    {
        GPBUtil::checkUint32($var);
        $this->healthy_threshold = $var;

        return $this;
    }

    /**
     * Number of consecutive failed health checks required before removing
     * traffic.
     *
     * Generated from protobuf field <code>uint32 unhealthy_threshold = 4;</code>
     * @return int
     */
    public function getUnhealthyThreshold()
    {
        return $this->unhealthy_threshold;
    }

    /**
     * Number of consecutive failed health checks required before removing
     * traffic.
     *
     * Generated from protobuf field <code>uint32 unhealthy_threshold = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUnhealthyThreshold($var)
    {
        GPBUtil::checkUint32($var);
        $this->unhealthy_threshold = $var;

        return $this;
    }

    /**
     * Number of consecutive failed health checks required before an instance is
     * restarted.
     *
     * Generated from protobuf field <code>uint32 restart_threshold = 5;</code>
     * @return int
     */
    public function getRestartThreshold()
    {
        return $this->restart_threshold;
    }

    /**
     * Number of consecutive failed health checks required before an instance is
     * restarted.
     *
     * Generated from protobuf field <code>uint32 restart_threshold = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRestartThreshold($var)
    {
        GPBUtil::checkUint32($var);
        $this->restart_threshold = $var;

        return $this;
    }

    /**
     * Interval between health checks.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration check_interval = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCheckInterval()
    {
        return $this->check_interval;
    }

    public function hasCheckInterval()
    {
        return isset($this->check_interval);
    }

    public function clearCheckInterval()
    {
        unset($this->check_interval);
    }

    /**
     * Interval between health checks.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration check_interval = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCheckInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->check_interval = $var;

        return $this;
    }

    /**
     * Time before the health check is considered failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Time before the health check is considered failed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

}
