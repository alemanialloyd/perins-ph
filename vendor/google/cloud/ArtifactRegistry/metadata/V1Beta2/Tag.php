<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/tag.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2;

class Tag
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/devtools/artifactregistry/v1beta2/tag.proto(google.devtools.artifactregistry.v1beta2google/api/resource.proto google/protobuf/field_mask.proto"�
Tag
name (	
version (	:��A�
#artifactregistry.googleapis.com/Tag_projects/{project}/locations/{location}/repositories/{repository}/packages/{package}/tags/{tag}"X
ListTagsRequest
parent (	
filter (	
	page_size (

page_token (	"h
ListTagsResponse;
tags (2-.google.devtools.artifactregistry.v1beta2.Tag
next_page_token (	"
GetTagRequest
name (	"n
CreateTagRequest
parent (	
tag_id (	:
tag (2-.google.devtools.artifactregistry.v1beta2.Tag"
UpdateTagRequest:
tag (2-.google.devtools.artifactregistry.v1beta2.Tag/
update_mask (2.google.protobuf.FieldMask" 
DeleteTagRequest
name (	B�
,com.google.devtools.artifactregistry.v1beta2BTagProtoPZXgoogle.golang.org/genproto/googleapis/devtools/artifactregistry/v1beta2;artifactregistry�%Google.Cloud.ArtifactRegistry.V1Beta2�%Google\\Cloud\\ArtifactRegistry\\V1beta2�(Google::Cloud::ArtifactRegistry::V1beta2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

