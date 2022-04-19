<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateTagTemplate][google.cloud.datacatalog.v1.DataCatalog.UpdateTagTemplate].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateTagTemplateRequest</code>
 */
class UpdateTagTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The template to update. The `name` field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tag_template = null;
    /**
     * Names of fields whose values to overwrite on a tag template. Currently,
     * only `display_name` and `is_publicly_readable` can be overwritten.
     * If this parameter is absent or empty, all modifiable fields
     * are overwritten. If such fields are non-required and omitted in the
     * request body, their values are emptied.
     * Note: Updating the `is_publicly_readable` field may require up to 12
     * hours to take effect in search results. Additionally, it also requires
     * the `tagTemplates.getIamPolicy` and `tagTemplates.setIamPolicy`
     * permissions.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\TagTemplate $tag_template
     *           Required. The template to update. The `name` field must be set.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Names of fields whose values to overwrite on a tag template. Currently,
     *           only `display_name` and `is_publicly_readable` can be overwritten.
     *           If this parameter is absent or empty, all modifiable fields
     *           are overwritten. If such fields are non-required and omitted in the
     *           request body, their values are emptied.
     *           Note: Updating the `is_publicly_readable` field may require up to 12
     *           hours to take effect in search results. Additionally, it also requires
     *           the `tagTemplates.getIamPolicy` and `tagTemplates.setIamPolicy`
     *           permissions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The template to update. The `name` field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\TagTemplate|null
     */
    public function getTagTemplate()
    {
        return $this->tag_template;
    }

    public function hasTagTemplate()
    {
        return isset($this->tag_template);
    }

    public function clearTagTemplate()
    {
        unset($this->tag_template);
    }

    /**
     * Required. The template to update. The `name` field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplate tag_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\TagTemplate $var
     * @return $this
     */
    public function setTagTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\TagTemplate::class);
        $this->tag_template = $var;

        return $this;
    }

    /**
     * Names of fields whose values to overwrite on a tag template. Currently,
     * only `display_name` and `is_publicly_readable` can be overwritten.
     * If this parameter is absent or empty, all modifiable fields
     * are overwritten. If such fields are non-required and omitted in the
     * request body, their values are emptied.
     * Note: Updating the `is_publicly_readable` field may require up to 12
     * hours to take effect in search results. Additionally, it also requires
     * the `tagTemplates.getIamPolicy` and `tagTemplates.setIamPolicy`
     * permissions.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Names of fields whose values to overwrite on a tag template. Currently,
     * only `display_name` and `is_publicly_readable` can be overwritten.
     * If this parameter is absent or empty, all modifiable fields
     * are overwritten. If such fields are non-required and omitted in the
     * request body, their values are emptied.
     * Note: Updating the `is_publicly_readable` field may require up to 12
     * hours to take effect in search results. Additionally, it also requires
     * the `tagTemplates.getIamPolicy` and `tagTemplates.setIamPolicy`
     * permissions.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

