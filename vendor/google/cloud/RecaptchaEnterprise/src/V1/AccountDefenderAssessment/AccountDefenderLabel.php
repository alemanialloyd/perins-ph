<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment;

use UnexpectedValueException;

/**
 * Labels returned by Account Defender for this request.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment.AccountDefenderLabel</code>
 */
class AccountDefenderLabel
{
    /**
     * Default unspecified type.
     *
     * Generated from protobuf enum <code>ACCOUNT_DEFENDER_LABEL_UNSPECIFIED = 0;</code>
     */
    const ACCOUNT_DEFENDER_LABEL_UNSPECIFIED = 0;
    /**
     * The request matches a known good profile for the user.
     *
     * Generated from protobuf enum <code>PROFILE_MATCH = 1;</code>
     */
    const PROFILE_MATCH = 1;
    /**
     * The request is potentially a suspicious login event and should be further
     * verified either via multi-factor authentication or another system.
     *
     * Generated from protobuf enum <code>SUSPICIOUS_LOGIN_ACTIVITY = 2;</code>
     */
    const SUSPICIOUS_LOGIN_ACTIVITY = 2;
    /**
     * The request matched a profile that previously had suspicious account
     * creation behavior. This could mean this is a fake account.
     *
     * Generated from protobuf enum <code>SUSPICIOUS_ACCOUNT_CREATION = 3;</code>
     */
    const SUSPICIOUS_ACCOUNT_CREATION = 3;
    /**
     * The account in the request has a high number of related accounts. It does
     * not necessarily imply that the account is bad but could require
     * investigating.
     *
     * Generated from protobuf enum <code>RELATED_ACCOUNTS_NUMBER_HIGH = 4;</code>
     */
    const RELATED_ACCOUNTS_NUMBER_HIGH = 4;

    private static $valueToName = [
        self::ACCOUNT_DEFENDER_LABEL_UNSPECIFIED => 'ACCOUNT_DEFENDER_LABEL_UNSPECIFIED',
        self::PROFILE_MATCH => 'PROFILE_MATCH',
        self::SUSPICIOUS_LOGIN_ACTIVITY => 'SUSPICIOUS_LOGIN_ACTIVITY',
        self::SUSPICIOUS_ACCOUNT_CREATION => 'SUSPICIOUS_ACCOUNT_CREATION',
        self::RELATED_ACCOUNTS_NUMBER_HIGH => 'RELATED_ACCOUNTS_NUMBER_HIGH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountDefenderLabel::class, \Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment_AccountDefenderLabel::class);
