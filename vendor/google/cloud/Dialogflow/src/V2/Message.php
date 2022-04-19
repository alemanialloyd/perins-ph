<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a message posted into a conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The unique identifier of the message.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Required. The message content.
     *
     * Generated from protobuf field <code>string content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $content = '';
    /**
     * Optional. The message language.
     * This should be a [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag. Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';
    /**
     * Output only. The participant that sends this message.
     *
     * Generated from protobuf field <code>string participant = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $participant = '';
    /**
     * Output only. The role of the participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant.Role participant_role = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $participant_role = 0;
    /**
     * Output only. The time when the message was created in Contact Center AI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Optional. The time when the message was sent.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp send_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $send_time = null;
    /**
     * Output only. The annotation for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.MessageAnnotation message_annotation = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $message_annotation = null;
    /**
     * Output only. The sentiment analysis result for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisResult sentiment_analysis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sentiment_analysis = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The unique identifier of the message.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *     @type string $content
     *           Required. The message content.
     *     @type string $language_code
     *           Optional. The message language.
     *           This should be a [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     *           language tag. Example: "en-US".
     *     @type string $participant
     *           Output only. The participant that sends this message.
     *     @type int $participant_role
     *           Output only. The role of the participant.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the message was created in Contact Center AI.
     *     @type \Google\Protobuf\Timestamp $send_time
     *           Optional. The time when the message was sent.
     *     @type \Google\Cloud\Dialogflow\V2\MessageAnnotation $message_annotation
     *           Output only. The annotation for the message.
     *     @type \Google\Cloud\Dialogflow\V2\SentimentAnalysisResult $sentiment_analysis
     *           Output only. The sentiment analysis result for the message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The unique identifier of the message.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The unique identifier of the message.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The message content.
     *
     * Generated from protobuf field <code>string content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Required. The message content.
     *
     * Generated from protobuf field <code>string content = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Optional. The message language.
     * This should be a [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag. Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The message language.
     * This should be a [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt)
     * language tag. Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. The participant that sends this message.
     *
     * Generated from protobuf field <code>string participant = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Output only. The participant that sends this message.
     *
     * Generated from protobuf field <code>string participant = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant = $var;

        return $this;
    }

    /**
     * Output only. The role of the participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant.Role participant_role = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getParticipantRole()
    {
        return $this->participant_role;
    }

    /**
     * Output only. The role of the participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant.Role participant_role = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setParticipantRole($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Participant\Role::class);
        $this->participant_role = $var;

        return $this;
    }

    /**
     * Output only. The time when the message was created in Contact Center AI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the message was created in Contact Center AI.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Optional. The time when the message was sent.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp send_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSendTime()
    {
        return $this->send_time;
    }

    public function hasSendTime()
    {
        return isset($this->send_time);
    }

    public function clearSendTime()
    {
        unset($this->send_time);
    }

    /**
     * Optional. The time when the message was sent.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp send_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSendTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->send_time = $var;

        return $this;
    }

    /**
     * Output only. The annotation for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.MessageAnnotation message_annotation = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\V2\MessageAnnotation|null
     */
    public function getMessageAnnotation()
    {
        return $this->message_annotation;
    }

    public function hasMessageAnnotation()
    {
        return isset($this->message_annotation);
    }

    public function clearMessageAnnotation()
    {
        unset($this->message_annotation);
    }

    /**
     * Output only. The annotation for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.MessageAnnotation message_annotation = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\V2\MessageAnnotation $var
     * @return $this
     */
    public function setMessageAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\MessageAnnotation::class);
        $this->message_annotation = $var;

        return $this;
    }

    /**
     * Output only. The sentiment analysis result for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisResult sentiment_analysis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\V2\SentimentAnalysisResult|null
     */
    public function getSentimentAnalysis()
    {
        return $this->sentiment_analysis;
    }

    public function hasSentimentAnalysis()
    {
        return isset($this->sentiment_analysis);
    }

    public function clearSentimentAnalysis()
    {
        unset($this->sentiment_analysis);
    }

    /**
     * Output only. The sentiment analysis result for the message.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SentimentAnalysisResult sentiment_analysis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\V2\SentimentAnalysisResult $var
     * @return $this
     */
    public function setSentimentAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SentimentAnalysisResult::class);
        $this->sentiment_analysis = $var;

        return $this;
    }

}
