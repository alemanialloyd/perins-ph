<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Node information for nodes appearing in a [QueryPlan.plan_nodes][google.spanner.v1.QueryPlan.plan_nodes].
 *
 * Generated from protobuf message <code>google.spanner.v1.PlanNode</code>
 */
class PlanNode extends \Google\Protobuf\Internal\Message
{
    /**
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     */
    private $index = 0;
    /**
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     */
    private $kind = 0;
    /**
     * The display name for the node.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * List of child node `index`es and their relationship to this parent.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     */
    private $child_links;
    /**
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     */
    private $short_representation = null;
    /**
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 6;</code>
     */
    private $metadata = null;
    /**
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct execution_stats = 7;</code>
     */
    private $execution_stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     *     @type int $kind
     *           Used to determine the type of node. May be needed for visualizing
     *           different kinds of nodes differently. For example, If the node is a
     *           [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     *           which can be used to directly embed a description of the node in its
     *           parent.
     *     @type string $display_name
     *           The display name for the node.
     *     @type \Google\Cloud\Spanner\V1\PlanNode\ChildLink[]|\Google\Protobuf\Internal\RepeatedField $child_links
     *           List of child node `index`es and their relationship to this parent.
     *     @type \Google\Cloud\Spanner\V1\PlanNode\ShortRepresentation $short_representation
     *           Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     *     @type \Google\Protobuf\Struct $metadata
     *           Attributes relevant to the node contained in a group of key-value pairs.
     *           For example, a Parameter Reference node could have the following
     *           information in its metadata:
     *               {
     *                 "parameter_reference": "param1",
     *                 "parameter_type": "array"
     *               }
     *     @type \Google\Protobuf\Struct $execution_stats
     *           The execution statistics associated with the node, contained in a group of
     *           key-value pairs. Only present if the plan was returned as a result of a
     *           profile query. For example, number of executions, number of rows/time per
     *           execution etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The `PlanNode`'s index in [node list][google.spanner.v1.QueryPlan.plan_nodes].
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Used to determine the type of node. May be needed for visualizing
     * different kinds of nodes differently. For example, If the node is a
     * [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] node, it will have a condensed representation
     * which can be used to directly embed a description of the node in its
     * parent.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.Kind kind = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\V1\PlanNode\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * The display name for the node.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name for the node.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * List of child node `index`es and their relationship to this parent.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildLinks()
    {
        return $this->child_links;
    }

    /**
     * List of child node `index`es and their relationship to this parent.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.PlanNode.ChildLink child_links = 4;</code>
     * @param \Google\Cloud\Spanner\V1\PlanNode\ChildLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\PlanNode\ChildLink::class);
        $this->child_links = $arr;

        return $this;
    }

    /**
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     * @return \Google\Cloud\Spanner\V1\PlanNode\ShortRepresentation|null
     */
    public function getShortRepresentation()
    {
        return $this->short_representation;
    }

    public function hasShortRepresentation()
    {
        return isset($this->short_representation);
    }

    public function clearShortRepresentation()
    {
        unset($this->short_representation);
    }

    /**
     * Condensed representation for [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] nodes.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PlanNode.ShortRepresentation short_representation = 5;</code>
     * @param \Google\Cloud\Spanner\V1\PlanNode\ShortRepresentation $var
     * @return $this
     */
    public function setShortRepresentation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\PlanNode\ShortRepresentation::class);
        $this->short_representation = $var;

        return $this;
    }

    /**
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 6;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Attributes relevant to the node contained in a group of key-value pairs.
     * For example, a Parameter Reference node could have the following
     * information in its metadata:
     *     {
     *       "parameter_reference": "param1",
     *       "parameter_type": "array"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct execution_stats = 7;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getExecutionStats()
    {
        return $this->execution_stats;
    }

    public function hasExecutionStats()
    {
        return isset($this->execution_stats);
    }

    public function clearExecutionStats()
    {
        unset($this->execution_stats);
    }

    /**
     * The execution statistics associated with the node, contained in a group of
     * key-value pairs. Only present if the plan was returned as a result of a
     * profile query. For example, number of executions, number of rows/time per
     * execution etc.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct execution_stats = 7;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setExecutionStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->execution_stats = $var;

        return $this;
    }

}

