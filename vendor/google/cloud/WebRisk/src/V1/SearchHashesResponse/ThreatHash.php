<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1\SearchHashesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains threat information on a matching hash.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.SearchHashesResponse.ThreatHash</code>
 */
class ThreatHash extends \Google\Protobuf\Internal\Message
{
    /**
     * The ThreatList this threat belongs to.
     * This must contain at least one entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     */
    private $threat_types;
    /**
     * A 32 byte SHA256 hash. This field is in binary format. For JSON
     * requests, hashes are base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     */
    private $hash = '';
    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     */
    private $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $threat_types
     *           The ThreatList this threat belongs to.
     *           This must contain at least one entry.
     *     @type string $hash
     *           A 32 byte SHA256 hash. This field is in binary format. For JSON
     *           requests, hashes are base64-encoded.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The cache lifetime for the returned match. Clients must not cache this
     *           response past this timestamp to avoid false positives.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The ThreatList this threat belongs to.
     * This must contain at least one entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreatTypes()
    {
        return $this->threat_types;
    }

    /**
     * The ThreatList this threat belongs to.
     * This must contain at least one entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreatTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebRisk\V1\ThreatType::class);
        $this->threat_types = $arr;

        return $this;
    }

    /**
     * A 32 byte SHA256 hash. This field is in binary format. For JSON
     * requests, hashes are base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A 32 byte SHA256 hash. This field is in binary format. For JSON
     * requests, hashes are base64-encoded.
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThreatHash::class, \Google\Cloud\WebRisk\V1\SearchHashesResponse_ThreatHash::class);
