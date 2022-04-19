<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\TokenProperties;

use UnexpectedValueException;

/**
 * Enum that represents the types of invalid token reasons.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.TokenProperties.InvalidReason</code>
 */
class InvalidReason
{
    /**
     * Default unspecified type.
     *
     * Generated from protobuf enum <code>INVALID_REASON_UNSPECIFIED = 0;</code>
     */
    const INVALID_REASON_UNSPECIFIED = 0;
    /**
     * If the failure reason was not accounted for.
     *
     * Generated from protobuf enum <code>UNKNOWN_INVALID_REASON = 1;</code>
     */
    const UNKNOWN_INVALID_REASON = 1;
    /**
     * The provided user verification token was malformed.
     *
     * Generated from protobuf enum <code>MALFORMED = 2;</code>
     */
    const MALFORMED = 2;
    /**
     * The user verification token had expired.
     *
     * Generated from protobuf enum <code>EXPIRED = 3;</code>
     */
    const EXPIRED = 3;
    /**
     * The user verification had already been seen.
     *
     * Generated from protobuf enum <code>DUPE = 4;</code>
     */
    const DUPE = 4;
    /**
     * The user verification token was not present.
     *
     * Generated from protobuf enum <code>MISSING = 5;</code>
     */
    const MISSING = 5;
    /**
     * A retriable error (such as network failure) occurred on the browser.
     * Could easily be simulated by an attacker.
     *
     * Generated from protobuf enum <code>BROWSER_ERROR = 6;</code>
     */
    const BROWSER_ERROR = 6;

    private static $valueToName = [
        self::INVALID_REASON_UNSPECIFIED => 'INVALID_REASON_UNSPECIFIED',
        self::UNKNOWN_INVALID_REASON => 'UNKNOWN_INVALID_REASON',
        self::MALFORMED => 'MALFORMED',
        self::EXPIRED => 'EXPIRED',
        self::DUPE => 'DUPE',
        self::MISSING => 'MISSING',
        self::BROWSER_ERROR => 'BROWSER_ERROR',
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
class_alias(InvalidReason::class, \Google\Cloud\RecaptchaEnterprise\V1\TokenProperties_InvalidReason::class);
