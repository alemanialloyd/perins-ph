<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.GetChannelPartnerLink][google.cloud.channel.v1.CloudChannelService.GetChannelPartnerLink].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.GetChannelPartnerLinkRequest</code>
 */
class GetChannelPartnerLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the channel partner link to retrieve.
     * Name uses the format: accounts/{account_id}/channelPartnerLinks/{id}
     * where {id} is the Cloud Identity ID of the partner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the channel partner link to retrieve.
     *           Name uses the format: accounts/{account_id}/channelPartnerLinks/{id}
     *           where {id} is the Cloud Identity ID of the partner.
     *     @type int $view
     *           Optional. The level of granularity the ChannelPartnerLink will display.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the channel partner link to retrieve.
     * Name uses the format: accounts/{account_id}/channelPartnerLinks/{id}
     * where {id} is the Cloud Identity ID of the partner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the channel partner link to retrieve.
     * Name uses the format: accounts/{account_id}/channelPartnerLinks/{id}
     * where {id} is the Cloud Identity ID of the partner.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\ChannelPartnerLinkView::class);
        $this->view = $var;

        return $this;
    }

}

