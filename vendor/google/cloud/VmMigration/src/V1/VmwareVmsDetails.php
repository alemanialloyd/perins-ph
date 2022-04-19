<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VmwareVmsDetails describes VMs in vCenter.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.VmwareVmsDetails</code>
 */
class VmwareVmsDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The details of the vmware VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmwareVmDetails details = 1;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\VmwareVmDetails[]|\Google\Protobuf\Internal\RepeatedField $details
     *           The details of the vmware VMs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * The details of the vmware VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmwareVmDetails details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * The details of the vmware VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmwareVmDetails details = 1;</code>
     * @param \Google\Cloud\VMMigration\V1\VmwareVmDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\VmwareVmDetails::class);
        $this->details = $arr;

        return $this;
    }

}

