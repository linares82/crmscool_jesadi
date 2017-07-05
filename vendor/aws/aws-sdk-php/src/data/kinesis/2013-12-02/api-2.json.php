<?php
// This file was auto-generated from sdk-root/src/data/kinesis/2013-12-02/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2013-12-02', 'endpointPrefix' => 'kinesis', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Kinesis', 'serviceFullName' => 'Amazon Kinesis', 'signatureVersion' => 'v4', 'targetPrefix' => 'Kinesis_20131202', 'uid' => 'kinesis-2013-12-02', ], 'operations' => [ 'AddTagsToStream' => [ 'name' => 'AddTagsToStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AddTagsToStreamInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'CreateStream' => [ 'name' => 'CreateStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateStreamInput', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], ], ], 'DecreaseStreamRetentionPeriod' => [ 'name' => 'DecreaseStreamRetentionPeriod', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DecreaseStreamRetentionPeriodInput', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], ], ], 'DeleteStream' => [ 'name' => 'DeleteStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteStreamInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DescribeLimits' => [ 'name' => 'DescribeLimits', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLimitsInput', ], 'output' => [ 'shape' => 'DescribeLimitsOutput', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], ], ], 'DescribeStream' => [ 'name' => 'DescribeStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeStreamInput', ], 'output' => [ 'shape' => 'DescribeStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DisableEnhancedMonitoring' => [ 'name' => 'DisableEnhancedMonitoring', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisableEnhancedMonitoringInput', ], 'output' => [ 'shape' => 'EnhancedMonitoringOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'EnableEnhancedMonitoring' => [ 'name' => 'EnableEnhancedMonitoring', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'EnableEnhancedMonitoringInput', ], 'output' => [ 'shape' => 'EnhancedMonitoringOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetRecords' => [ 'name' => 'GetRecords', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetRecordsInput', ], 'output' => [ 'shape' => 'GetRecordsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ProvisionedThroughputExceededException', ], [ 'shape' => 'ExpiredIteratorException', ], ], ], 'GetShardIterator' => [ 'name' => 'GetShardIterator', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetShardIteratorInput', ], 'output' => [ 'shape' => 'GetShardIteratorOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ProvisionedThroughputExceededException', ], ], ], 'IncreaseStreamRetentionPeriod' => [ 'name' => 'IncreaseStreamRetentionPeriod', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'IncreaseStreamRetentionPeriodInput', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], ], ], 'ListStreams' => [ 'name' => 'ListStreams', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListStreamsInput', ], 'output' => [ 'shape' => 'ListStreamsOutput', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], ], ], 'ListTagsForStream' => [ 'name' => 'ListTagsForStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForStreamInput', ], 'output' => [ 'shape' => 'ListTagsForStreamOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'MergeShards' => [ 'name' => 'MergeShards', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'MergeShardsInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'PutRecord' => [ 'name' => 'PutRecord', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutRecordInput', ], 'output' => [ 'shape' => 'PutRecordOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ProvisionedThroughputExceededException', ], ], ], 'PutRecords' => [ 'name' => 'PutRecords', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutRecordsInput', ], 'output' => [ 'shape' => 'PutRecordsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ProvisionedThroughputExceededException', ], ], ], 'RemoveTagsFromStream' => [ 'name' => 'RemoveTagsFromStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemoveTagsFromStreamInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'SplitShard' => [ 'name' => 'SplitShard', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SplitShardInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'UpdateShardCount' => [ 'name' => 'UpdateShardCount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateShardCountInput', ], 'output' => [ 'shape' => 'UpdateShardCountOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'AddTagsToStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'Tags', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'BooleanObject' => [ 'type' => 'boolean', ], 'CreateStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardCount', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardCount' => [ 'shape' => 'PositiveIntegerObject', ], ], ], 'Data' => [ 'type' => 'blob', 'max' => 1048576, 'min' => 0, ], 'DecreaseStreamRetentionPeriodInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'RetentionPeriodHours', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'RetentionPeriodHours' => [ 'shape' => 'PositiveIntegerObject', ], ], ], 'DeleteStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], ], ], 'DescribeLimitsInput' => [ 'type' => 'structure', 'members' => [], ], 'DescribeLimitsOutput' => [ 'type' => 'structure', 'required' => [ 'ShardLimit', 'OpenShardCount', ], 'members' => [ 'ShardLimit' => [ 'shape' => 'ShardCountObject', ], 'OpenShardCount' => [ 'shape' => 'ShardCountObject', ], ], ], 'DescribeStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'Limit' => [ 'shape' => 'DescribeStreamInputLimit', ], 'ExclusiveStartShardId' => [ 'shape' => 'ShardId', ], ], ], 'DescribeStreamInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'DescribeStreamOutput' => [ 'type' => 'structure', 'required' => [ 'StreamDescription', ], 'members' => [ 'StreamDescription' => [ 'shape' => 'StreamDescription', ], ], ], 'DisableEnhancedMonitoringInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardLevelMetrics', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardLevelMetrics' => [ 'shape' => 'MetricsNameList', ], ], ], 'EnableEnhancedMonitoringInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardLevelMetrics', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardLevelMetrics' => [ 'shape' => 'MetricsNameList', ], ], ], 'EnhancedMetrics' => [ 'type' => 'structure', 'members' => [ 'ShardLevelMetrics' => [ 'shape' => 'MetricsNameList', ], ], ], 'EnhancedMonitoringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnhancedMetrics', ], ], 'EnhancedMonitoringOutput' => [ 'type' => 'structure', 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'CurrentShardLevelMetrics' => [ 'shape' => 'MetricsNameList', ], 'DesiredShardLevelMetrics' => [ 'shape' => 'MetricsNameList', ], ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExpiredIteratorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'GetRecordsInput' => [ 'type' => 'structure', 'required' => [ 'ShardIterator', ], 'members' => [ 'ShardIterator' => [ 'shape' => 'ShardIterator', ], 'Limit' => [ 'shape' => 'GetRecordsInputLimit', ], ], ], 'GetRecordsInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'GetRecordsOutput' => [ 'type' => 'structure', 'required' => [ 'Records', ], 'members' => [ 'Records' => [ 'shape' => 'RecordList', ], 'NextShardIterator' => [ 'shape' => 'ShardIterator', ], 'MillisBehindLatest' => [ 'shape' => 'MillisBehindLatest', ], ], ], 'GetShardIteratorInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardId', 'ShardIteratorType', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardId' => [ 'shape' => 'ShardId', ], 'ShardIteratorType' => [ 'shape' => 'ShardIteratorType', ], 'StartingSequenceNumber' => [ 'shape' => 'SequenceNumber', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], ], ], 'GetShardIteratorOutput' => [ 'type' => 'structure', 'members' => [ 'ShardIterator' => [ 'shape' => 'ShardIterator', ], ], ], 'HashKey' => [ 'type' => 'string', 'pattern' => '0|([1-9]\\d{0,38})', ], 'HashKeyRange' => [ 'type' => 'structure', 'required' => [ 'StartingHashKey', 'EndingHashKey', ], 'members' => [ 'StartingHashKey' => [ 'shape' => 'HashKey', ], 'EndingHashKey' => [ 'shape' => 'HashKey', ], ], ], 'IncreaseStreamRetentionPeriodInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'RetentionPeriodHours', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'RetentionPeriodHours' => [ 'shape' => 'PositiveIntegerObject', ], ], ], 'InvalidArgumentException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListStreamsInput' => [ 'type' => 'structure', 'members' => [ 'Limit' => [ 'shape' => 'ListStreamsInputLimit', ], 'ExclusiveStartStreamName' => [ 'shape' => 'StreamName', ], ], ], 'ListStreamsInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'ListStreamsOutput' => [ 'type' => 'structure', 'required' => [ 'StreamNames', 'HasMoreStreams', ], 'members' => [ 'StreamNames' => [ 'shape' => 'StreamNameList', ], 'HasMoreStreams' => [ 'shape' => 'BooleanObject', ], ], ], 'ListTagsForStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ExclusiveStartTagKey' => [ 'shape' => 'TagKey', ], 'Limit' => [ 'shape' => 'ListTagsForStreamInputLimit', ], ], ], 'ListTagsForStreamInputLimit' => [ 'type' => 'integer', 'max' => 10, 'min' => 1, ], 'ListTagsForStreamOutput' => [ 'type' => 'structure', 'required' => [ 'Tags', 'HasMoreTags', ], 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], 'HasMoreTags' => [ 'shape' => 'BooleanObject', ], ], ], 'MergeShardsInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardToMerge', 'AdjacentShardToMerge', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardToMerge' => [ 'shape' => 'ShardId', ], 'AdjacentShardToMerge' => [ 'shape' => 'ShardId', ], ], ], 'MetricsName' => [ 'type' => 'string', 'enum' => [ 'IncomingBytes', 'IncomingRecords', 'OutgoingBytes', 'OutgoingRecords', 'WriteProvisionedThroughputExceeded', 'ReadProvisionedThroughputExceeded', 'IteratorAgeMilliseconds', 'ALL', ], ], 'MetricsNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricsName', ], 'max' => 7, 'min' => 1, ], 'MillisBehindLatest' => [ 'type' => 'long', 'min' => 0, ], 'PartitionKey' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'PositiveIntegerObject' => [ 'type' => 'integer', 'max' => 100000, 'min' => 1, ], 'ProvisionedThroughputExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'PutRecordInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'Data', 'PartitionKey', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'Data' => [ 'shape' => 'Data', ], 'PartitionKey' => [ 'shape' => 'PartitionKey', ], 'ExplicitHashKey' => [ 'shape' => 'HashKey', ], 'SequenceNumberForOrdering' => [ 'shape' => 'SequenceNumber', ], ], ], 'PutRecordOutput' => [ 'type' => 'structure', 'required' => [ 'ShardId', 'SequenceNumber', ], 'members' => [ 'ShardId' => [ 'shape' => 'ShardId', ], 'SequenceNumber' => [ 'shape' => 'SequenceNumber', ], ], ], 'PutRecordsInput' => [ 'type' => 'structure', 'required' => [ 'Records', 'StreamName', ], 'members' => [ 'Records' => [ 'shape' => 'PutRecordsRequestEntryList', ], 'StreamName' => [ 'shape' => 'StreamName', ], ], ], 'PutRecordsOutput' => [ 'type' => 'structure', 'required' => [ 'Records', ], 'members' => [ 'FailedRecordCount' => [ 'shape' => 'PositiveIntegerObject', ], 'Records' => [ 'shape' => 'PutRecordsResultEntryList', ], ], ], 'PutRecordsRequestEntry' => [ 'type' => 'structure', 'required' => [ 'Data', 'PartitionKey', ], 'members' => [ 'Data' => [ 'shape' => 'Data', ], 'ExplicitHashKey' => [ 'shape' => 'HashKey', ], 'PartitionKey' => [ 'shape' => 'PartitionKey', ], ], ], 'PutRecordsRequestEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutRecordsRequestEntry', ], 'max' => 500, 'min' => 1, ], 'PutRecordsResultEntry' => [ 'type' => 'structure', 'members' => [ 'SequenceNumber' => [ 'shape' => 'SequenceNumber', ], 'ShardId' => [ 'shape' => 'ShardId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'PutRecordsResultEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutRecordsResultEntry', ], 'max' => 500, 'min' => 1, ], 'Record' => [ 'type' => 'structure', 'required' => [ 'SequenceNumber', 'Data', 'PartitionKey', ], 'members' => [ 'SequenceNumber' => [ 'shape' => 'SequenceNumber', ], 'ApproximateArrivalTimestamp' => [ 'shape' => 'Timestamp', ], 'Data' => [ 'shape' => 'Data', ], 'PartitionKey' => [ 'shape' => 'PartitionKey', ], ], ], 'RecordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Record', ], ], 'RemoveTagsFromStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'TagKeys', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ScalingType' => [ 'type' => 'string', 'enum' => [ 'UNIFORM_SCALING', ], ], 'SequenceNumber' => [ 'type' => 'string', 'pattern' => '0|([1-9]\\d{0,128})', ], 'SequenceNumberRange' => [ 'type' => 'structure', 'required' => [ 'StartingSequenceNumber', ], 'members' => [ 'StartingSequenceNumber' => [ 'shape' => 'SequenceNumber', ], 'EndingSequenceNumber' => [ 'shape' => 'SequenceNumber', ], ], ], 'Shard' => [ 'type' => 'structure', 'required' => [ 'ShardId', 'HashKeyRange', 'SequenceNumberRange', ], 'members' => [ 'ShardId' => [ 'shape' => 'ShardId', ], 'ParentShardId' => [ 'shape' => 'ShardId', ], 'AdjacentParentShardId' => [ 'shape' => 'ShardId', ], 'HashKeyRange' => [ 'shape' => 'HashKeyRange', ], 'SequenceNumberRange' => [ 'shape' => 'SequenceNumberRange', ], ], ], 'ShardCountObject' => [ 'type' => 'integer', 'max' => 1000000, 'min' => 0, ], 'ShardId' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'ShardIterator' => [ 'type' => 'string', 'max' => 512, 'min' => 1, ], 'ShardIteratorType' => [ 'type' => 'string', 'enum' => [ 'AT_SEQUENCE_NUMBER', 'AFTER_SEQUENCE_NUMBER', 'TRIM_HORIZON', 'LATEST', 'AT_TIMESTAMP', ], ], 'ShardList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shard', ], ], 'SplitShardInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'ShardToSplit', 'NewStartingHashKey', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'ShardToSplit' => [ 'shape' => 'ShardId', ], 'NewStartingHashKey' => [ 'shape' => 'HashKey', ], ], ], 'StreamARN' => [ 'type' => 'string', ], 'StreamDescription' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'StreamARN', 'StreamStatus', 'Shards', 'HasMoreShards', 'RetentionPeriodHours', 'StreamCreationTimestamp', 'EnhancedMonitoring', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'StreamARN', ], 'StreamStatus' => [ 'shape' => 'StreamStatus', ], 'Shards' => [ 'shape' => 'ShardList', ], 'HasMoreShards' => [ 'shape' => 'BooleanObject', ], 'RetentionPeriodHours' => [ 'shape' => 'PositiveIntegerObject', ], 'StreamCreationTimestamp' => [ 'shape' => 'Timestamp', ], 'EnhancedMonitoring' => [ 'shape' => 'EnhancedMonitoringList', ], ], ], 'StreamName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'StreamNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamName', ], ], 'StreamStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'DELETING', 'ACTIVE', 'UPDATING', ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 10, 'min' => 1, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 10, 'min' => 1, ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UpdateShardCountInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', 'TargetShardCount', 'ScalingType', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'TargetShardCount' => [ 'shape' => 'PositiveIntegerObject', ], 'ScalingType' => [ 'shape' => 'ScalingType', ], ], ], 'UpdateShardCountOutput' => [ 'type' => 'structure', 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'CurrentShardCount' => [ 'shape' => 'PositiveIntegerObject', ], 'TargetShardCount' => [ 'shape' => 'PositiveIntegerObject', ], ], ], ],];
