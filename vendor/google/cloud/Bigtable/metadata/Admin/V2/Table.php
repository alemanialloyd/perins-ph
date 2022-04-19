<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Table
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$google/bigtable/admin/v2/table.protogoogle.bigtable.admin.v2google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
RestoreInfo@
source_type (2+.google.bigtable.admin.v2.RestoreSourceType;
backup_info (2$.google.bigtable.admin.v2.BackupInfoH B
source_info"�
Table
name (	J
cluster_states (22.google.bigtable.admin.v2.Table.ClusterStatesEntryL
column_families (23.google.bigtable.admin.v2.Table.ColumnFamiliesEntryI
granularity (24.google.bigtable.admin.v2.Table.TimestampGranularity;
restore_info (2%.google.bigtable.admin.v2.RestoreInfo�
ClusterStateX
replication_state (2=.google.bigtable.admin.v2.Table.ClusterState.ReplicationStateF
encryption_info (2(.google.bigtable.admin.v2.EncryptionInfoB�A"�
ReplicationState
STATE_NOT_KNOWN 
INITIALIZING
PLANNED_MAINTENANCE
UNPLANNED_MAINTENANCE	
READY
READY_OPTIMIZINGb
ClusterStatesEntry
key (	;
value (2,.google.bigtable.admin.v2.Table.ClusterState:8]
ColumnFamiliesEntry
key (	5
value (2&.google.bigtable.admin.v2.ColumnFamily:8"I
TimestampGranularity%
!TIMESTAMP_GRANULARITY_UNSPECIFIED 

MILLIS"q
View
VIEW_UNSPECIFIED 
	NAME_ONLY
SCHEMA_VIEW
REPLICATION_VIEW
ENCRYPTION_VIEW
FULL:_�A\\
"bigtableadmin.googleapis.com/Table6projects/{project}/instances/{instance}/tables/{table}"A
ColumnFamily1
gc_rule (2 .google.bigtable.admin.v2.GcRule"�
GcRule
max_num_versions (H ,
max_age (2.google.protobuf.DurationH E
intersection (2-.google.bigtable.admin.v2.GcRule.IntersectionH 7
union (2&.google.bigtable.admin.v2.GcRule.UnionH ?
Intersection/
rules (2 .google.bigtable.admin.v2.GcRule8
Union/
rules (2 .google.bigtable.admin.v2.GcRuleB
rule"�
EncryptionInfoU
encryption_type (27.google.bigtable.admin.v2.EncryptionInfo.EncryptionTypeB�A2
encryption_status (2.google.rpc.StatusB�AI
kms_key_version (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion"q
EncryptionType
ENCRYPTION_TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTION"�
Snapshot
name (	5
source_table (2.google.bigtable.admin.v2.Table
data_size_bytes (/
create_time (2.google.protobuf.Timestamp/
delete_time (2.google.protobuf.Timestamp7
state (2(.google.bigtable.admin.v2.Snapshot.State
description (	"5
State
STATE_NOT_KNOWN 	
READY
CREATING:{�Ax
%bigtableadmin.googleapis.com/SnapshotOprojects/{project}/instances/{instance}/clusters/{cluster}/snapshots/{snapshot}"�
Backup
name (	B�A
source_table (	B�A�A4
expire_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A

size_bytes (B�A:
state (2&.google.bigtable.admin.v2.Backup.StateB�AF
encryption_info	 (2(.google.bigtable.admin.v2.EncryptionInfoB�A"7
State
STATE_UNSPECIFIED 
CREATING	
READY:u�Ar
#bigtableadmin.googleapis.com/BackupKprojects/{project}/instances/{instance}/clusters/{cluster}/backups/{backup}"�

BackupInfo
backup (	B�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
source_table (	B�A*D
RestoreSourceType#
RESTORE_SOURCE_TYPE_UNSPECIFIED 

BACKUPB�
com.google.bigtable.admin.v2B
TableProtoPZ=google.golang.org/genproto/googleapis/bigtable/admin/v2;admin�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

