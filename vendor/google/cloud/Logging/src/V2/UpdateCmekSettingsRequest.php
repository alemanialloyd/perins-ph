<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to
 * [UpdateCmekSettings][google.logging.v2.ConfigServiceV2.UpdateCmekSettings].
 * See [Enabling CMEK for Log
 * Router](https://cloud.google.com/logging/docs/routing/managed-encryption) for
 * more information.
 *
 * Generated from protobuf message <code>google.logging.v2.UpdateCmekSettingsRequest</code>
 */
class UpdateCmekSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name for the CMEK settings to update.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * For example:
     *   `"organizations/12345/cmekSettings"`
     * Note: CMEK for the Log Router can currently only be configured for Google
     * Cloud organizations. Once configured, it applies to all projects and
     * folders in the Google Cloud organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The CMEK settings to update.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>.google.logging.v2.CmekSettings cmek_settings = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cmek_settings = null;
    /**
     * Optional. Field mask identifying which fields from `cmek_settings` should
     * be updated. A field will be overwritten if and only if it is in the update
     * mask. Output only fields cannot be updated.
     * See [FieldMask][google.protobuf.FieldMask] for more information.
     * For example: `"updateMask=kmsKeyName"`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name for the CMEK settings to update.
     *               "projects/[PROJECT_ID]/cmekSettings"
     *               "organizations/[ORGANIZATION_ID]/cmekSettings"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *               "folders/[FOLDER_ID]/cmekSettings"
     *           For example:
     *             `"organizations/12345/cmekSettings"`
     *           Note: CMEK for the Log Router can currently only be configured for Google
     *           Cloud organizations. Once configured, it applies to all projects and
     *           folders in the Google Cloud organization.
     *     @type \Google\Cloud\Logging\V2\CmekSettings $cmek_settings
     *           Required. The CMEK settings to update.
     *           See [Enabling CMEK for Log
     *           Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     *           for more information.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask identifying which fields from `cmek_settings` should
     *           be updated. A field will be overwritten if and only if it is in the update
     *           mask. Output only fields cannot be updated.
     *           See [FieldMask][google.protobuf.FieldMask] for more information.
     *           For example: `"updateMask=kmsKeyName"`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for the CMEK settings to update.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * For example:
     *   `"organizations/12345/cmekSettings"`
     * Note: CMEK for the Log Router can currently only be configured for Google
     * Cloud organizations. Once configured, it applies to all projects and
     * folders in the Google Cloud organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name for the CMEK settings to update.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * For example:
     *   `"organizations/12345/cmekSettings"`
     * Note: CMEK for the Log Router can currently only be configured for Google
     * Cloud organizations. Once configured, it applies to all projects and
     * folders in the Google Cloud organization.
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
     * Required. The CMEK settings to update.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>.google.logging.v2.CmekSettings cmek_settings = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Logging\V2\CmekSettings|null
     */
    public function getCmekSettings()
    {
        return $this->cmek_settings;
    }

    public function hasCmekSettings()
    {
        return isset($this->cmek_settings);
    }

    public function clearCmekSettings()
    {
        unset($this->cmek_settings);
    }

    /**
     * Required. The CMEK settings to update.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>.google.logging.v2.CmekSettings cmek_settings = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Logging\V2\CmekSettings $var
     * @return $this
     */
    public function setCmekSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\CmekSettings::class);
        $this->cmek_settings = $var;

        return $this;
    }

    /**
     * Optional. Field mask identifying which fields from `cmek_settings` should
     * be updated. A field will be overwritten if and only if it is in the update
     * mask. Output only fields cannot be updated.
     * See [FieldMask][google.protobuf.FieldMask] for more information.
     * For example: `"updateMask=kmsKeyName"`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Field mask identifying which fields from `cmek_settings` should
     * be updated. A field will be overwritten if and only if it is in the update
     * mask. Output only fields cannot be updated.
     * See [FieldMask][google.protobuf.FieldMask] for more information.
     * For example: `"updateMask=kmsKeyName"`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

