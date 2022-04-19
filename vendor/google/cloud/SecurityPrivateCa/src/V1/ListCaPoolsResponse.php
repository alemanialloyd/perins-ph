<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CertificateAuthorityService.ListCaPools][google.cloud.security.privateca.v1.CertificateAuthorityService.ListCaPools].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.ListCaPoolsResponse</code>
 */
class ListCaPoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of [CaPools][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.CaPool ca_pools = 1;</code>
     */
    private $ca_pools;
    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificateAuthoritiesRequest.next_page_token][] to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\CaPool[]|\Google\Protobuf\Internal\RepeatedField $ca_pools
     *           The list of [CaPools][google.cloud.security.privateca.v1.CaPool].
     *     @type string $next_page_token
     *           A token to retrieve next page of results. Pass this value in
     *           [ListCertificateAuthoritiesRequest.next_page_token][] to retrieve the next
     *           page of results.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           A list of locations (e.g. "us-west1") that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of [CaPools][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.CaPool ca_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCaPools()
    {
        return $this->ca_pools;
    }

    /**
     * The list of [CaPools][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.CaPool ca_pools = 1;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CaPool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCaPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1\CaPool::class);
        $this->ca_pools = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificateAuthoritiesRequest.next_page_token][] to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCertificateAuthoritiesRequest.next_page_token][] to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * A list of locations (e.g. "us-west1") that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}
