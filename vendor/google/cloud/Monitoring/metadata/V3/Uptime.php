<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Uptime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!google/monitoring/v3/uptime.protogoogle.monitoring.v3google/api/resource.protogoogle/protobuf/duration.proto"�
InternalChecker
name (	
display_name (	
network (	
gcp_zone (	
peer_project_id (	:
state (2+.google.monitoring.v3.InternalChecker.State"3
State
UNSPECIFIED 
CREATING
RUNNING:"�
UptimeCheckConfig
name (	
display_name (	;
monitored_resource (2.google.api.MonitoredResourceH O
resource_group (25.google.monitoring.v3.UptimeCheckConfig.ResourceGroupH G

http_check (21.google.monitoring.v3.UptimeCheckConfig.HttpCheckHE
	tcp_check (20.google.monitoring.v3.UptimeCheckConfig.TcpCheckH)
period (2.google.protobuf.Duration*
timeout (2.google.protobuf.DurationP
content_matchers	 (26.google.monitoring.v3.UptimeCheckConfig.ContentMatcherA
selected_regions
 (2\'.google.monitoring.v3.UptimeCheckRegion
is_internal (BD
internal_checkers (2%.google.monitoring.v3.InternalCheckerBa
ResourceGroup
group_id (	>
resource_type (2\'.google.monitoring.v3.GroupResourceType�
	HttpCheckW
request_method (2?.google.monitoring.v3.UptimeCheckConfig.HttpCheck.RequestMethod
use_ssl (
path (	
port (X
	auth_info (2E.google.monitoring.v3.UptimeCheckConfig.HttpCheck.BasicAuthentication
mask_headers (O
headers (2>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.HeadersEntryS
content_type	 (2=.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ContentType
validate_ssl (
body
 (9
BasicAuthentication
username (	
password (	.
HeadersEntry
key (	
value (	:8":
RequestMethod
METHOD_UNSPECIFIED 
GET
POST"4
ContentType
TYPE_UNSPECIFIED 
URL_ENCODED
TcpCheck
port (�
ContentMatcher
content (	\\
matcher (2K.google.monitoring.v3.UptimeCheckConfig.ContentMatcher.ContentMatcherOption"�
ContentMatcherOption&
"CONTENT_MATCHER_OPTION_UNSPECIFIED 
CONTAINS_STRING
NOT_CONTAINS_STRING
MATCHES_REGEX
NOT_MATCHES_REGEX:��A�
+monitoring.googleapis.com/UptimeCheckConfig;projects/{project}/uptimeCheckConfigs/{uptime_check_config}Eorganizations/{organization}/uptimeCheckConfigs/{uptime_check_config}9folders/{folder}/uptimeCheckConfigs/{uptime_check_config}*B

resourceB
check_request_type"n
UptimeCheckIp7
region (2\'.google.monitoring.v3.UptimeCheckRegion
location (	

ip_address (	*e
UptimeCheckRegion
REGION_UNSPECIFIED 
USA

EUROPE
SOUTH_AMERICA
ASIA_PACIFIC*[
GroupResourceType
RESOURCE_TYPE_UNSPECIFIED 
INSTANCE
AWS_ELB_LOAD_BALANCERB�
com.google.monitoring.v3BUptimeProtoPZ>google.golang.org/genproto/googleapis/monitoring/v3;monitoring�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

