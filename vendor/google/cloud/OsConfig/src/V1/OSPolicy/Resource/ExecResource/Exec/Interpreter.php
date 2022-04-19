<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec;

use UnexpectedValueException;

/**
 * The interpreter to use.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec.Interpreter</code>
 */
class Interpreter
{
    /**
     * Defaults to NONE.
     *
     * Generated from protobuf enum <code>INTERPRETER_UNSPECIFIED = 0;</code>
     */
    const INTERPRETER_UNSPECIFIED = 0;
    /**
     * If an interpreter is not specified, the
     * source is executed directly. This execution, without an
     * interpreter, only succeeds for executables and scripts that have <a
     * href="https://en.wikipedia.org/wiki/Shebang_(Unix)"
     * class="external">shebang lines</a>.
     *
     * Generated from protobuf enum <code>NONE = 1;</code>
     */
    const NONE = 1;
    /**
     * Indicates that the script runs with `/bin/sh` on Linux and
     * `cmd.exe` on Windows.
     *
     * Generated from protobuf enum <code>SHELL = 2;</code>
     */
    const SHELL = 2;
    /**
     * Indicates that the script runs with PowerShell.
     *
     * Generated from protobuf enum <code>POWERSHELL = 3;</code>
     */
    const POWERSHELL = 3;

    private static $valueToName = [
        self::INTERPRETER_UNSPECIFIED => 'INTERPRETER_UNSPECIFIED',
        self::NONE => 'NONE',
        self::SHELL => 'SHELL',
        self::POWERSHELL => 'POWERSHELL',
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


