<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/import.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The inline source for the input config for ImportUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.UserEventInlineSource</code>
 */
class UserEventInlineSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $user_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\UserEvent[]|\Google\Protobuf\Internal\RepeatedField $user_events
     *           Optional. A list of user events to import. Recommended max of 10k items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Import::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEvents()
    {
        return $this->user_events;
    }

    /**
     * Optional. A list of user events to import. Recommended max of 10k items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\UserEvent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\UserEvent::class);
        $this->user_events = $arr;

        return $this;
    }

}

