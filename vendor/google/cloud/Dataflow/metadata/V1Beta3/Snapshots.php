<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/snapshots.proto

namespace GPBMetadata\Google\Dataflow\V1Beta3;

class Snapshots
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/dataflow/v1beta3/snapshots.protogoogle.dataflow.v1beta3google/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/api/client.proto"t
PubsubSnapshotMetadata

topic_name (	
snapshot_name (	/
expire_time (2.google.protobuf.Timestamp"�
Snapshot

id (	

project_id (	
source_job_id (	1
creation_time (2.google.protobuf.Timestamp&
ttl (2.google.protobuf.Duration5
state (2&.google.dataflow.v1beta3.SnapshotStateH
pubsub_metadata (2/.google.dataflow.v1beta3.PubsubSnapshotMetadata
description (	
disk_size_bytes	 (
region
 (	"O
GetSnapshotRequest

project_id (	
snapshot_id (	
location (	"R
DeleteSnapshotRequest

project_id (	
snapshot_id (	
location (	"
DeleteSnapshotResponse"L
ListSnapshotsRequest

project_id (	
job_id (	
location (	"M
ListSnapshotsResponse4
	snapshots (2!.google.dataflow.v1beta3.Snapshot*i
SnapshotState
UNKNOWN_SNAPSHOT_STATE 
PENDING
RUNNING	
READY

FAILED
DELETED2�
SnapshotsV1Beta3_
GetSnapshot+.google.dataflow.v1beta3.GetSnapshotRequest!.google.dataflow.v1beta3.Snapshot" s
DeleteSnapshot..google.dataflow.v1beta3.DeleteSnapshotRequest/.google.dataflow.v1beta3.DeleteSnapshotResponse" p
ListSnapshots-.google.dataflow.v1beta3.ListSnapshotsRequest..google.dataflow.v1beta3.ListSnapshotsResponse" ��Adataflow.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/compute,https://www.googleapis.com/auth/compute.readonly,https://www.googleapis.com/auth/userinfo.emailB�
com.google.dataflow.v1beta3BSnapshotsProtoPZ?google.golang.org/genproto/googleapis/dataflow/v1beta3;dataflow�Google.Cloud.Dataflow.V1Beta3�Google\\Cloud\\Dataflow\\V1beta3� Google::Cloud::Dataflow::V1beta3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

