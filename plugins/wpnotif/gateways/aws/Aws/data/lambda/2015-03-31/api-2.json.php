<?php
// This file was auto-generated from sdk-root/src/data/lambda/2015-03-31/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2015-03-31',
		'endpointPrefix'   => 'lambda',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'AWS Lambda',
		'serviceId'        => 'Lambda',
		'signatureVersion' => 'v4',
		'uid'              => 'lambda-2015-03-31',
	],
	'operations' => [
		'AddLayerVersionPermission'    => [
			'name'   => 'AddLayerVersionPermission',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions/{VersionNumber}/policy',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'AddLayerVersionPermissionRequest', ],
			'output' => [ 'shape' => 'AddLayerVersionPermissionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'PolicyLengthExceededException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'AddPermission'                => [
			'name'   => 'AddPermission',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/policy',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'AddPermissionRequest', ],
			'output' => [ 'shape' => 'AddPermissionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'PolicyLengthExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'CreateAlias'                  => [
			'name'   => 'CreateAlias',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/aliases',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateAliasRequest', ],
			'output' => [ 'shape' => 'AliasConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateEventSourceMapping'     => [
			'name'   => 'CreateEventSourceMapping',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2015-03-31/event-source-mappings/',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'CreateEventSourceMappingRequest', ],
			'output' => [ 'shape' => 'EventSourceMappingConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'CreateFunction'               => [
			'name'   => 'CreateFunction',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2015-03-31/functions',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateFunctionRequest', ],
			'output' => [ 'shape' => 'FunctionConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'CodeStorageExceededException', ],
			],
		],
		'DeleteAlias'                  => [
			'name'   => 'DeleteAlias',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteAliasRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteEventSourceMapping'     => [
			'name'   => 'DeleteEventSourceMapping',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2015-03-31/event-source-mappings/{UUID}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteEventSourceMappingRequest', ],
			'output' => [ 'shape' => 'EventSourceMappingConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceInUseException', ],
			],
		],
		'DeleteFunction'               => [
			'name'   => 'DeleteFunction',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteFunctionRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ResourceConflictException', ],
			],
		],
		'DeleteFunctionConcurrency'    => [
			'name'   => 'DeleteFunctionConcurrency',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-31/functions/{FunctionName}/concurrency',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteFunctionConcurrencyRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'DeleteLayerVersion'           => [
			'name'   => 'DeleteLayerVersion',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions/{VersionNumber}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteLayerVersionRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetAccountSettings'           => [
			'name'   => 'GetAccountSettings',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2016-08-19/account-settings/',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetAccountSettingsRequest', ],
			'output' => [ 'shape' => 'GetAccountSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ServiceException', ],
			],
		],
		'GetAlias'                     => [
			'name'   => 'GetAlias',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetAliasRequest', ],
			'output' => [ 'shape' => 'AliasConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetEventSourceMapping'        => [
			'name'   => 'GetEventSourceMapping',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/event-source-mappings/{UUID}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetEventSourceMappingRequest', ],
			'output' => [ 'shape' => 'EventSourceMappingConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetFunction'                  => [
			'name'   => 'GetFunction',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetFunctionRequest', ],
			'output' => [ 'shape' => 'GetFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'GetFunctionConfiguration'     => [
			'name'   => 'GetFunctionConfiguration',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/configuration',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetFunctionConfigurationRequest', ],
			'output' => [ 'shape' => 'FunctionConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'GetLayerVersion'              => [
			'name'   => 'GetLayerVersion',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions/{VersionNumber}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetLayerVersionRequest', ],
			'output' => [ 'shape' => 'GetLayerVersionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetLayerVersionByArn'         => [
			'name'   => 'GetLayerVersionByArn',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2018-10-31/layers?find=LayerVersion',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetLayerVersionByArnRequest', ],
			'output' => [ 'shape' => 'GetLayerVersionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetLayerVersionPolicy'        => [
			'name'   => 'GetLayerVersionPolicy',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions/{VersionNumber}/policy',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetLayerVersionPolicyRequest', ],
			'output' => [ 'shape' => 'GetLayerVersionPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'GetPolicy'                    => [
			'name'   => 'GetPolicy',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/policy',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetPolicyRequest', ],
			'output' => [ 'shape' => 'GetPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'Invoke'                       => [
			'name'   => 'Invoke',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions/{FunctionName}/invocations', ],
			'input'  => [ 'shape' => 'InvocationRequest', ],
			'output' => [ 'shape' => 'InvocationResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestContentException', ],
				[ 'shape' => 'RequestTooLargeException', ],
				[ 'shape' => 'UnsupportedMediaTypeException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'EC2UnexpectedException', ],
				[ 'shape' => 'SubnetIPAddressLimitReachedException', ],
				[ 'shape' => 'ENILimitReachedException', ],
				[ 'shape' => 'EC2ThrottledException', ],
				[ 'shape' => 'EC2AccessDeniedException', ],
				[ 'shape' => 'InvalidSubnetIDException', ],
				[ 'shape' => 'InvalidSecurityGroupIDException', ],
				[ 'shape' => 'InvalidZipFileException', ],
				[ 'shape' => 'KMSDisabledException', ],
				[ 'shape' => 'KMSInvalidStateException', ],
				[ 'shape' => 'KMSAccessDeniedException', ],
				[ 'shape' => 'KMSNotFoundException', ],
				[ 'shape' => 'InvalidRuntimeException', ],
			],
		],
		'InvokeAsync'                  => [
			'name'       => 'InvokeAsync',
			'http'       => [
				'method'       => 'POST',
				'requestUri'   => '/2014-11-13/functions/{FunctionName}/invoke-async/',
				'responseCode' => 202,
			],
			'input'      => [ 'shape' => 'InvokeAsyncRequest', ],
			'output'     => [ 'shape' => 'InvokeAsyncResponse', ],
			'errors'     => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestContentException', ],
				[ 'shape' => 'InvalidRuntimeException', ],
			],
			'deprecated' => true,
		],
		'ListAliases'                  => [
			'name'   => 'ListAliases',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/aliases',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListAliasesRequest', ],
			'output' => [ 'shape' => 'ListAliasesResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListEventSourceMappings'      => [
			'name'   => 'ListEventSourceMappings',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/event-source-mappings/',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListEventSourceMappingsRequest', ],
			'output' => [ 'shape' => 'ListEventSourceMappingsResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListFunctions'                => [
			'name'   => 'ListFunctions',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListFunctionsRequest', ],
			'output' => [ 'shape' => 'ListFunctionsResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'ListLayerVersions'            => [
			'name'   => 'ListLayerVersions',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListLayerVersionsRequest', ],
			'output' => [ 'shape' => 'ListLayerVersionsResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListLayers'                   => [
			'name'   => 'ListLayers',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2018-10-31/layers',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListLayersRequest', ],
			'output' => [ 'shape' => 'ListLayersResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListTags'                     => [
			'name'   => 'ListTags',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/2017-03-31/tags/{ARN}', ],
			'input'  => [ 'shape' => 'ListTagsRequest', ],
			'output' => [ 'shape' => 'ListTagsResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListVersionsByFunction'       => [
			'name'   => 'ListVersionsByFunction',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/versions',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListVersionsByFunctionRequest', ],
			'output' => [ 'shape' => 'ListVersionsByFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PublishLayerVersion'          => [
			'name'   => 'PublishLayerVersion',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PublishLayerVersionRequest', ],
			'output' => [ 'shape' => 'PublishLayerVersionResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'CodeStorageExceededException', ],
			],
		],
		'PublishVersion'               => [
			'name'   => 'PublishVersion',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/versions',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PublishVersionRequest', ],
			'output' => [ 'shape' => 'FunctionConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'CodeStorageExceededException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'PutFunctionConcurrency'       => [
			'name'   => 'PutFunctionConcurrency',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2017-10-31/functions/{FunctionName}/concurrency',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'PutFunctionConcurrencyRequest', ],
			'output' => [ 'shape' => 'Concurrency', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'RemoveLayerVersionPermission' => [
			'name'   => 'RemoveLayerVersionPermission',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2018-10-31/layers/{LayerName}/versions/{VersionNumber}/policy/{StatementId}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'RemoveLayerVersionPermissionRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'RemovePermission'             => [
			'name'   => 'RemovePermission',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/policy/{StatementId}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'RemovePermissionRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'TagResource'                  => [
			'name'   => 'TagResource',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-03-31/tags/{ARN}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UntagResource'                => [
			'name'   => 'UntagResource',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-03-31/tags/{ARN}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateAlias'                  => [
			'name'   => 'UpdateAlias',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/aliases/{Name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateAliasRequest', ],
			'output' => [ 'shape' => 'AliasConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'UpdateEventSourceMapping'     => [
			'name'   => 'UpdateEventSourceMapping',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2015-03-31/event-source-mappings/{UUID}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'UpdateEventSourceMappingRequest', ],
			'output' => [ 'shape' => 'EventSourceMappingConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'ResourceInUseException', ],
			],
		],
		'UpdateFunctionCode'           => [
			'name'   => 'UpdateFunctionCode',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/code',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateFunctionCodeRequest', ],
			'output' => [ 'shape' => 'FunctionConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'CodeStorageExceededException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
		'UpdateFunctionConfiguration'  => [
			'name'   => 'UpdateFunctionConfiguration',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2015-03-31/functions/{FunctionName}/configuration',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateFunctionConfigurationRequest', ],
			'output' => [ 'shape' => 'FunctionConfiguration', ],
			'errors' => [
				[ 'shape' => 'ServiceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ResourceConflictException', ],
				[ 'shape' => 'PreconditionFailedException', ],
			],
		],
	],
	'shapes'     => [
		'AccountLimit'                         => [
			'type'    => 'structure',
			'members' => [
				'TotalCodeSize'                  => [ 'shape' => 'Long', ],
				'CodeSizeUnzipped'               => [ 'shape' => 'Long', ],
				'CodeSizeZipped'                 => [ 'shape' => 'Long', ],
				'ConcurrentExecutions'           => [ 'shape' => 'Integer', ],
				'UnreservedConcurrentExecutions' => [ 'shape' => 'UnreservedConcurrentExecutions', ],
			],
		],
		'AccountUsage'                         => [
			'type'    => 'structure',
			'members' => [
				'TotalCodeSize' => [ 'shape' => 'Long', ],
				'FunctionCount' => [ 'shape' => 'Long', ],
			],
		],
		'Action'                               => [
			'type'    => 'string',
			'pattern' => '(lambda:[*]|lambda:[a-zA-Z]+|[*])',
		],
		'AddLayerVersionPermissionRequest'     => [
			'type'     => 'structure',
			'required' => [
				'LayerName',
				'VersionNumber',
				'StatementId',
				'Action',
				'Principal',
			],
			'members'  => [
				'LayerName'      => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'VersionNumber'  => [
					'shape'        => 'LayerVersionNumber',
					'location'     => 'uri',
					'locationName' => 'VersionNumber',
				],
				'StatementId'    => [ 'shape' => 'StatementId', ],
				'Action'         => [ 'shape' => 'LayerPermissionAllowedAction', ],
				'Principal'      => [ 'shape' => 'LayerPermissionAllowedPrincipal', ],
				'OrganizationId' => [ 'shape' => 'OrganizationId', ],
				'RevisionId'     => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'RevisionId',
				],
			],
		],
		'AddLayerVersionPermissionResponse'    => [
			'type'    => 'structure',
			'members' => [
				'Statement'  => [ 'shape' => 'String', ],
				'RevisionId' => [ 'shape' => 'String', ],
			],
		],
		'AddPermissionRequest'                 => [
			'type'     => 'structure',
			'required' => [
				'FunctionName',
				'StatementId',
				'Action',
				'Principal',
			],
			'members'  => [
				'FunctionName'     => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'StatementId'      => [ 'shape' => 'StatementId', ],
				'Action'           => [ 'shape' => 'Action', ],
				'Principal'        => [ 'shape' => 'Principal', ],
				'SourceArn'        => [ 'shape' => 'Arn', ],
				'SourceAccount'    => [ 'shape' => 'SourceOwner', ],
				'EventSourceToken' => [ 'shape' => 'EventSourceToken', ],
				'Qualifier'        => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
				'RevisionId'       => [ 'shape' => 'String', ],
			],
		],
		'AddPermissionResponse'                => [
			'type'    => 'structure',
			'members' => [ 'Statement' => [ 'shape' => 'String', ], ],
		],
		'AdditionalVersion'                    => [
			'type'    => 'string',
			'max'     => 1024,
			'min'     => 1,
			'pattern' => '[0-9]+',
		],
		'AdditionalVersionWeights'             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AdditionalVersion', ],
			'value' => [ 'shape' => 'Weight', ],
		],
		'Alias'                                => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '(?!^[0-9]+$)([a-zA-Z0-9-_]+)',
		],
		'AliasConfiguration'                   => [
			'type'    => 'structure',
			'members' => [
				'AliasArn'        => [ 'shape' => 'FunctionArn', ],
				'Name'            => [ 'shape' => 'Alias', ],
				'FunctionVersion' => [ 'shape' => 'Version', ],
				'Description'     => [ 'shape' => 'Description', ],
				'RoutingConfig'   => [ 'shape' => 'AliasRoutingConfiguration', ],
				'RevisionId'      => [ 'shape' => 'String', ],
			],
		],
		'AliasList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AliasConfiguration', ],
		],
		'AliasRoutingConfiguration'            => [
			'type'    => 'structure',
			'members' => [ 'AdditionalVersionWeights' => [ 'shape' => 'AdditionalVersionWeights', ], ],
		],
		'Arn'                                  => [
			'type'    => 'string',
			'pattern' => 'arn:(aws[a-zA-Z0-9-]*):([a-zA-Z0-9\\-])+:([a-z]{2}(-gov)?-[a-z]+-\\d{1})?:(\\d{12})?:(.*)',
		],
		'BatchSize'                            => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ],
		'Blob'                                 => [ 'type' => 'blob', 'sensitive' => true, ],
		'BlobStream'                           => [ 'type' => 'blob', 'streaming' => true, ],
		'Boolean'                              => [ 'type' => 'boolean', ],
		'CodeStorageExceededException'         => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'CompatibleRuntimes'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Runtime', ],
			'max'    => 5,
		],
		'Concurrency'                          => [
			'type'    => 'structure',
			'members' => [ 'ReservedConcurrentExecutions' => [ 'shape' => 'ReservedConcurrentExecutions', ], ],
		],
		'CreateAliasRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'Name', 'FunctionVersion', ],
			'members'  => [
				'FunctionName'    => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Name'            => [ 'shape' => 'Alias', ],
				'FunctionVersion' => [ 'shape' => 'Version', ],
				'Description'     => [ 'shape' => 'Description', ],
				'RoutingConfig'   => [ 'shape' => 'AliasRoutingConfiguration', ],
			],
		],
		'CreateEventSourceMappingRequest'      => [
			'type'     => 'structure',
			'required' => [ 'EventSourceArn', 'FunctionName', ],
			'members'  => [
				'EventSourceArn'            => [ 'shape' => 'Arn', ],
				'FunctionName'              => [ 'shape' => 'FunctionName', ],
				'Enabled'                   => [ 'shape' => 'Enabled', ],
				'BatchSize'                 => [ 'shape' => 'BatchSize', ],
				'StartingPosition'          => [ 'shape' => 'EventSourcePosition', ],
				'StartingPositionTimestamp' => [ 'shape' => 'Date', ],
			],
		],
		'CreateFunctionRequest'                => [
			'type'     => 'structure',
			'required' => [
				'FunctionName',
				'Runtime',
				'Role',
				'Handler',
				'Code',
			],
			'members'  => [
				'FunctionName'     => [ 'shape' => 'FunctionName', ],
				'Runtime'          => [ 'shape' => 'Runtime', ],
				'Role'             => [ 'shape' => 'RoleArn', ],
				'Handler'          => [ 'shape' => 'Handler', ],
				'Code'             => [ 'shape' => 'FunctionCode', ],
				'Description'      => [ 'shape' => 'Description', ],
				'Timeout'          => [ 'shape' => 'Timeout', ],
				'MemorySize'       => [ 'shape' => 'MemorySize', ],
				'Publish'          => [ 'shape' => 'Boolean', ],
				'VpcConfig'        => [ 'shape' => 'VpcConfig', ],
				'DeadLetterConfig' => [ 'shape' => 'DeadLetterConfig', ],
				'Environment'      => [ 'shape' => 'Environment', ],
				'KMSKeyArn'        => [ 'shape' => 'KMSKeyArn', ],
				'TracingConfig'    => [ 'shape' => 'TracingConfig', ],
				'Tags'             => [ 'shape' => 'Tags', ],
				'Layers'           => [ 'shape' => 'LayerList', ],
			],
		],
		'Date'                                 => [ 'type' => 'timestamp', ],
		'DeadLetterConfig'                     => [
			'type'    => 'structure',
			'members' => [ 'TargetArn' => [ 'shape' => 'ResourceArn', ], ],
		],
		'DeleteAliasRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'Name', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Name'         => [
					'shape'        => 'Alias',
					'location'     => 'uri',
					'locationName' => 'Name',
				],
			],
		],
		'DeleteEventSourceMappingRequest'      => [
			'type'     => 'structure',
			'required' => [ 'UUID', ],
			'members'  => [
				'UUID' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'UUID',
				],
			],
		],
		'DeleteFunctionConcurrencyRequest'     => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
			],
		],
		'DeleteFunctionRequest'                => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Qualifier'    => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
			],
		],
		'DeleteLayerVersionRequest'            => [
			'type'     => 'structure',
			'required' => [ 'LayerName', 'VersionNumber', ],
			'members'  => [
				'LayerName'     => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'VersionNumber' => [
					'shape'        => 'LayerVersionNumber',
					'location'     => 'uri',
					'locationName' => 'VersionNumber',
				],
			],
		],
		'Description'                          => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'EC2AccessDeniedException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'EC2ThrottledException'                => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'EC2UnexpectedException'               => [
			'type'      => 'structure',
			'members'   => [
				'Type'         => [ 'shape' => 'String', ],
				'Message'      => [ 'shape' => 'String', ],
				'EC2ErrorCode' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'ENILimitReachedException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'Enabled'                              => [ 'type' => 'boolean', ],
		'Environment'                          => [
			'type'    => 'structure',
			'members' => [ 'Variables' => [ 'shape' => 'EnvironmentVariables', ], ],
		],
		'EnvironmentError'                     => [
			'type'    => 'structure',
			'members' => [
				'ErrorCode' => [ 'shape' => 'String', ],
				'Message'   => [ 'shape' => 'SensitiveString', ],
			],
		],
		'EnvironmentResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'Variables' => [ 'shape' => 'EnvironmentVariables', ],
				'Error'     => [ 'shape' => 'EnvironmentError', ],
			],
		],
		'EnvironmentVariableName'              => [
			'type'      => 'string',
			'pattern'   => '[a-zA-Z]([a-zA-Z0-9_])+',
			'sensitive' => true,
		],
		'EnvironmentVariableValue'             => [ 'type' => 'string', 'sensitive' => true, ],
		'EnvironmentVariables'                 => [
			'type'      => 'map',
			'key'       => [ 'shape' => 'EnvironmentVariableName', ],
			'value'     => [ 'shape' => 'EnvironmentVariableValue', ],
			'sensitive' => true,
		],
		'EventSourceMappingConfiguration'      => [
			'type'    => 'structure',
			'members' => [
				'UUID'                  => [ 'shape' => 'String', ],
				'BatchSize'             => [ 'shape' => 'BatchSize', ],
				'EventSourceArn'        => [ 'shape' => 'Arn', ],
				'FunctionArn'           => [ 'shape' => 'FunctionArn', ],
				'LastModified'          => [ 'shape' => 'Date', ],
				'LastProcessingResult'  => [ 'shape' => 'String', ],
				'State'                 => [ 'shape' => 'String', ],
				'StateTransitionReason' => [ 'shape' => 'String', ],
			],
		],
		'EventSourceMappingsList'              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EventSourceMappingConfiguration', ],
		],
		'EventSourcePosition'                  => [
			'type' => 'string',
			'enum' => [ 'TRIM_HORIZON', 'LATEST', 'AT_TIMESTAMP', ],
		],
		'EventSourceToken'                     => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '[a-zA-Z0-9._\\-]+',
		],
		'FunctionArn'                          => [
			'type'    => 'string',
			'pattern' => 'arn:(aws[a-zA-Z-]*)?:lambda:[a-z]{2}(-gov)?-[a-z]+-\\d{1}:\\d{12}:function:[a-zA-Z0-9-_]+(:(\\$LATEST|[a-zA-Z0-9-_]+))?',
		],
		'FunctionCode'                         => [
			'type'    => 'structure',
			'members' => [
				'ZipFile'         => [ 'shape' => 'Blob', ],
				'S3Bucket'        => [ 'shape' => 'S3Bucket', ],
				'S3Key'           => [ 'shape' => 'S3Key', ],
				'S3ObjectVersion' => [ 'shape' => 'S3ObjectVersion', ],
			],
		],
		'FunctionCodeLocation'                 => [
			'type'    => 'structure',
			'members' => [
				'RepositoryType' => [ 'shape' => 'String', ],
				'Location'       => [ 'shape' => 'String', ],
			],
		],
		'FunctionConfiguration'                => [
			'type'    => 'structure',
			'members' => [
				'FunctionName'     => [ 'shape' => 'NamespacedFunctionName', ],
				'FunctionArn'      => [ 'shape' => 'NameSpacedFunctionArn', ],
				'Runtime'          => [ 'shape' => 'Runtime', ],
				'Role'             => [ 'shape' => 'RoleArn', ],
				'Handler'          => [ 'shape' => 'Handler', ],
				'CodeSize'         => [ 'shape' => 'Long', ],
				'Description'      => [ 'shape' => 'Description', ],
				'Timeout'          => [ 'shape' => 'Timeout', ],
				'MemorySize'       => [ 'shape' => 'MemorySize', ],
				'LastModified'     => [ 'shape' => 'Timestamp', ],
				'CodeSha256'       => [ 'shape' => 'String', ],
				'Version'          => [ 'shape' => 'Version', ],
				'VpcConfig'        => [ 'shape' => 'VpcConfigResponse', ],
				'DeadLetterConfig' => [ 'shape' => 'DeadLetterConfig', ],
				'Environment'      => [ 'shape' => 'EnvironmentResponse', ],
				'KMSKeyArn'        => [ 'shape' => 'KMSKeyArn', ],
				'TracingConfig'    => [ 'shape' => 'TracingConfigResponse', ],
				'MasterArn'        => [ 'shape' => 'FunctionArn', ],
				'RevisionId'       => [ 'shape' => 'String', ],
				'Layers'           => [ 'shape' => 'LayersReferenceList', ],
			],
		],
		'FunctionList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FunctionConfiguration', ],
		],
		'FunctionName'                         => [
			'type'    => 'string',
			'max'     => 140,
			'min'     => 1,
			'pattern' => '(arn:(aws[a-zA-Z-]*)?:lambda:)?([a-z]{2}(-gov)?-[a-z]+-\\d{1}:)?(\\d{12}:)?(function:)?([a-zA-Z0-9-_]+)(:(\\$LATEST|[a-zA-Z0-9-_]+))?',
		],
		'FunctionVersion'                      => [ 'type' => 'string', 'enum' => [ 'ALL', ], ],
		'GetAccountSettingsRequest'            => [ 'type' => 'structure', 'members' => [], ],
		'GetAccountSettingsResponse'           => [
			'type'    => 'structure',
			'members' => [
				'AccountLimit' => [ 'shape' => 'AccountLimit', ],
				'AccountUsage' => [ 'shape' => 'AccountUsage', ],
			],
		],
		'GetAliasRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'Name', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Name'         => [
					'shape'        => 'Alias',
					'location'     => 'uri',
					'locationName' => 'Name',
				],
			],
		],
		'GetEventSourceMappingRequest'         => [
			'type'     => 'structure',
			'required' => [ 'UUID', ],
			'members'  => [
				'UUID' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'UUID',
				],
			],
		],
		'GetFunctionConfigurationRequest'      => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Qualifier'    => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
			],
		],
		'GetFunctionRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Qualifier'    => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
			],
		],
		'GetFunctionResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'Configuration' => [ 'shape' => 'FunctionConfiguration', ],
				'Code'          => [ 'shape' => 'FunctionCodeLocation', ],
				'Tags'          => [ 'shape' => 'Tags', ],
				'Concurrency'   => [ 'shape' => 'Concurrency', ],
			],
		],
		'GetLayerVersionByArnRequest'          => [
			'type'     => 'structure',
			'required' => [ 'Arn', ],
			'members'  => [
				'Arn' => [
					'shape'        => 'LayerVersionArn',
					'location'     => 'querystring',
					'locationName' => 'Arn',
				],
			],
		],
		'GetLayerVersionPolicyRequest'         => [
			'type'     => 'structure',
			'required' => [ 'LayerName', 'VersionNumber', ],
			'members'  => [
				'LayerName'     => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'VersionNumber' => [
					'shape'        => 'LayerVersionNumber',
					'location'     => 'uri',
					'locationName' => 'VersionNumber',
				],
			],
		],
		'GetLayerVersionPolicyResponse'        => [
			'type'    => 'structure',
			'members' => [
				'Policy'     => [ 'shape' => 'String', ],
				'RevisionId' => [ 'shape' => 'String', ],
			],
		],
		'GetLayerVersionRequest'               => [
			'type'     => 'structure',
			'required' => [ 'LayerName', 'VersionNumber', ],
			'members'  => [
				'LayerName'     => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'VersionNumber' => [
					'shape'        => 'LayerVersionNumber',
					'location'     => 'uri',
					'locationName' => 'VersionNumber',
				],
			],
		],
		'GetLayerVersionResponse'              => [
			'type'    => 'structure',
			'members' => [
				'Content'            => [ 'shape' => 'LayerVersionContentOutput', ],
				'LayerArn'           => [ 'shape' => 'LayerArn', ],
				'LayerVersionArn'    => [ 'shape' => 'LayerVersionArn', ],
				'Description'        => [ 'shape' => 'Description', ],
				'CreatedDate'        => [ 'shape' => 'Timestamp', ],
				'Version'            => [ 'shape' => 'LayerVersionNumber', ],
				'CompatibleRuntimes' => [ 'shape' => 'CompatibleRuntimes', ],
				'LicenseInfo'        => [ 'shape' => 'LicenseInfo', ],
			],
		],
		'GetPolicyRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Qualifier'    => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
			],
		],
		'GetPolicyResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'Policy'     => [ 'shape' => 'String', ],
				'RevisionId' => [ 'shape' => 'String', ],
			],
		],
		'Handler'                              => [ 'type' => 'string', 'max' => 128, 'pattern' => '[^\\s]+', ],
		'HttpStatus'                           => [ 'type' => 'integer', ],
		'Integer'                              => [ 'type' => 'integer', ],
		'InvalidParameterValueException'       => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidRequestContentException'       => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidRuntimeException'              => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'InvalidSecurityGroupIDException'      => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'InvalidSubnetIDException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'InvalidZipFileException'              => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'InvocationRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName'   => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'InvocationType' => [
					'shape'        => 'InvocationType',
					'location'     => 'header',
					'locationName' => 'X-Amz-Invocation-Type',
				],
				'LogType'        => [
					'shape'        => 'LogType',
					'location'     => 'header',
					'locationName' => 'X-Amz-Log-Type',
				],
				'ClientContext'  => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'X-Amz-Client-Context',
				],
				'Payload'        => [ 'shape' => 'Blob', ],
				'Qualifier'      => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
			],
			'payload'  => 'Payload',
		],
		'InvocationResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'StatusCode'      => [
					'shape'    => 'Integer',
					'location' => 'statusCode',
				],
				'FunctionError'   => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'X-Amz-Function-Error',
				],
				'LogResult'       => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'X-Amz-Log-Result',
				],
				'Payload'         => [ 'shape' => 'Blob', ],
				'ExecutedVersion' => [
					'shape'        => 'Version',
					'location'     => 'header',
					'locationName' => 'X-Amz-Executed-Version',
				],
			],
			'payload' => 'Payload',
		],
		'InvocationType'                       => [
			'type' => 'string',
			'enum' => [ 'Event', 'RequestResponse', 'DryRun', ],
		],
		'InvokeAsyncRequest'                   => [
			'type'       => 'structure',
			'required'   => [ 'FunctionName', 'InvokeArgs', ],
			'members'    => [
				'FunctionName' => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'InvokeArgs'   => [ 'shape' => 'BlobStream', ],
			],
			'deprecated' => true,
			'payload'    => 'InvokeArgs',
		],
		'InvokeAsyncResponse'                  => [
			'type'       => 'structure',
			'members'    => [
				'Status' => [
					'shape'    => 'HttpStatus',
					'location' => 'statusCode',
				],
			],
			'deprecated' => true,
		],
		'KMSAccessDeniedException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'KMSDisabledException'                 => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'KMSInvalidStateException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'KMSKeyArn'                            => [
			'type'    => 'string',
			'pattern' => '(arn:(aws[a-zA-Z-]*)?:[a-z0-9-.]+:.*)|()',
		],
		'KMSNotFoundException'                 => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'Layer'                                => [
			'type'    => 'structure',
			'members' => [
				'Arn'      => [ 'shape' => 'LayerVersionArn', ],
				'CodeSize' => [ 'shape' => 'Long', ],
			],
		],
		'LayerArn'                             => [
			'type'    => 'string',
			'max'     => 140,
			'min'     => 1,
			'pattern' => 'arn:[a-zA-Z0-9-]+:lambda:[a-zA-Z0-9-]+:\\d{12}:layer:[a-zA-Z0-9-_]+',
		],
		'LayerList'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'LayerVersionArn', ], ],
		'LayerName'                            => [
			'type'    => 'string',
			'max'     => 140,
			'min'     => 1,
			'pattern' => '(arn:[a-zA-Z0-9-]+:lambda:[a-zA-Z0-9-]+:\\d{12}:layer:[a-zA-Z0-9-_]+)|[a-zA-Z0-9-_]+',
		],
		'LayerPermissionAllowedAction'         => [ 'type' => 'string', 'pattern' => 'lambda:GetLayerVersion', ],
		'LayerPermissionAllowedPrincipal'      => [
			'type'    => 'string',
			'pattern' => '\\d{12}|\\*|arn:(aws[a-zA-Z-]*):iam::\\d{12}:root',
		],
		'LayerVersionArn'                      => [
			'type'    => 'string',
			'max'     => 140,
			'min'     => 1,
			'pattern' => 'arn:[a-zA-Z0-9-]+:lambda:[a-zA-Z0-9-]+:\\d{12}:layer:[a-zA-Z0-9-_]+:[0-9]+',
		],
		'LayerVersionContentInput'             => [
			'type'    => 'structure',
			'members' => [
				'S3Bucket'        => [ 'shape' => 'S3Bucket', ],
				'S3Key'           => [ 'shape' => 'S3Key', ],
				'S3ObjectVersion' => [ 'shape' => 'S3ObjectVersion', ],
				'ZipFile'         => [ 'shape' => 'Blob', ],
			],
		],
		'LayerVersionContentOutput'            => [
			'type'    => 'structure',
			'members' => [
				'Location'   => [ 'shape' => 'String', ],
				'CodeSha256' => [ 'shape' => 'String', ],
				'CodeSize'   => [ 'shape' => 'Long', ],
			],
		],
		'LayerVersionNumber'                   => [ 'type' => 'long', ],
		'LayerVersionsList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LayerVersionsListItem', ],
		],
		'LayerVersionsListItem'                => [
			'type'    => 'structure',
			'members' => [
				'LayerVersionArn'    => [ 'shape' => 'LayerVersionArn', ],
				'Version'            => [ 'shape' => 'LayerVersionNumber', ],
				'Description'        => [ 'shape' => 'Description', ],
				'CreatedDate'        => [ 'shape' => 'Timestamp', ],
				'CompatibleRuntimes' => [ 'shape' => 'CompatibleRuntimes', ],
				'LicenseInfo'        => [ 'shape' => 'LicenseInfo', ],
			],
		],
		'LayersList'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'LayersListItem', ], ],
		'LayersListItem'                       => [
			'type'    => 'structure',
			'members' => [
				'LayerName'             => [ 'shape' => 'LayerName', ],
				'LayerArn'              => [ 'shape' => 'LayerArn', ],
				'LatestMatchingVersion' => [ 'shape' => 'LayerVersionsListItem', ],
			],
		],
		'LayersReferenceList'                  => [ 'type' => 'list', 'member' => [ 'shape' => 'Layer', ], ],
		'LicenseInfo'                          => [ 'type' => 'string', 'max' => 512, ],
		'ListAliasesRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName'    => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'FunctionVersion' => [
					'shape'        => 'Version',
					'location'     => 'querystring',
					'locationName' => 'FunctionVersion',
				],
				'Marker'          => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'        => [
					'shape'        => 'MaxListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListAliasesResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'NextMarker' => [ 'shape' => 'String', ],
				'Aliases'    => [ 'shape' => 'AliasList', ],
			],
		],
		'ListEventSourceMappingsRequest'       => [
			'type'    => 'structure',
			'members' => [
				'EventSourceArn' => [
					'shape'        => 'Arn',
					'location'     => 'querystring',
					'locationName' => 'EventSourceArn',
				],
				'FunctionName'   => [
					'shape'        => 'FunctionName',
					'location'     => 'querystring',
					'locationName' => 'FunctionName',
				],
				'Marker'         => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'       => [
					'shape'        => 'MaxListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListEventSourceMappingsResponse'      => [
			'type'    => 'structure',
			'members' => [
				'NextMarker'          => [ 'shape' => 'String', ],
				'EventSourceMappings' => [ 'shape' => 'EventSourceMappingsList', ],
			],
		],
		'ListFunctionsRequest'                 => [
			'type'    => 'structure',
			'members' => [
				'MasterRegion'    => [
					'shape'        => 'MasterRegion',
					'location'     => 'querystring',
					'locationName' => 'MasterRegion',
				],
				'FunctionVersion' => [
					'shape'        => 'FunctionVersion',
					'location'     => 'querystring',
					'locationName' => 'FunctionVersion',
				],
				'Marker'          => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'        => [
					'shape'        => 'MaxListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListFunctionsResponse'                => [
			'type'    => 'structure',
			'members' => [
				'NextMarker' => [ 'shape' => 'String', ],
				'Functions'  => [ 'shape' => 'FunctionList', ],
			],
		],
		'ListLayerVersionsRequest'             => [
			'type'     => 'structure',
			'required' => [ 'LayerName', ],
			'members'  => [
				'CompatibleRuntime' => [
					'shape'        => 'Runtime',
					'location'     => 'querystring',
					'locationName' => 'CompatibleRuntime',
				],
				'LayerName'         => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'Marker'            => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'          => [
					'shape'        => 'MaxLayerListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListLayerVersionsResponse'            => [
			'type'    => 'structure',
			'members' => [
				'NextMarker'    => [ 'shape' => 'String', ],
				'LayerVersions' => [ 'shape' => 'LayerVersionsList', ],
			],
		],
		'ListLayersRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'CompatibleRuntime' => [
					'shape'        => 'Runtime',
					'location'     => 'querystring',
					'locationName' => 'CompatibleRuntime',
				],
				'Marker'            => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'          => [
					'shape'        => 'MaxLayerListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListLayersResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'NextMarker' => [ 'shape' => 'String', ],
				'Layers'     => [ 'shape' => 'LayersList', ],
			],
		],
		'ListTagsRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Resource', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'FunctionArn',
					'location'     => 'uri',
					'locationName' => 'ARN',
				],
			],
		],
		'ListTagsResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'Tags' => [ 'shape' => 'Tags', ], ],
		],
		'ListVersionsByFunctionRequest'        => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'NamespacedFunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Marker'       => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'     => [
					'shape'        => 'MaxListItems',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListVersionsByFunctionResponse'       => [
			'type'    => 'structure',
			'members' => [
				'NextMarker' => [ 'shape' => 'String', ],
				'Versions'   => [ 'shape' => 'FunctionList', ],
			],
		],
		'LogType'                              => [ 'type' => 'string', 'enum' => [ 'None', 'Tail', ], ],
		'Long'                                 => [ 'type' => 'long', ],
		'MasterRegion'                         => [
			'type'    => 'string',
			'pattern' => 'ALL|[a-z]{2}(-gov)?-[a-z]+-\\d{1}',
		],
		'MaxLayerListItems'                    => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'MaxListItems'                         => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ],
		'MemorySize'                           => [ 'type' => 'integer', 'max' => 3008, 'min' => 128, ],
		'NameSpacedFunctionArn'                => [
			'type'    => 'string',
			'pattern' => 'arn:(aws[a-zA-Z-]*)?:lambda:[a-z]{2}(-gov)?-[a-z]+-\\d{1}:\\d{12}:function:[a-zA-Z0-9-_\\.]+(:(\\$LATEST|[a-zA-Z0-9-_]+))?',
		],
		'NamespacedFunctionName'               => [
			'type'    => 'string',
			'max'     => 170,
			'min'     => 1,
			'pattern' => '(arn:(aws[a-zA-Z-]*)?:lambda:)?([a-z]{2}(-gov)?-[a-z]+-\\d{1}:)?(\\d{12}:)?(function:)?([a-zA-Z0-9-_\\.]+)(:(\\$LATEST|[a-zA-Z0-9-_]+))?',
		],
		'NamespacedStatementId'                => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '([a-zA-Z0-9-_.]+)',
		],
		'OrganizationId'                       => [ 'type' => 'string', 'pattern' => 'o-[a-z0-9]{10,32}', ],
		'PolicyLengthExceededException'        => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'PreconditionFailedException'          => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 412, ],
			'exception' => true,
		],
		'Principal'                            => [ 'type' => 'string', 'pattern' => '.*', ],
		'PublishLayerVersionRequest'           => [
			'type'     => 'structure',
			'required' => [ 'LayerName', 'Content', ],
			'members'  => [
				'LayerName'          => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'Description'        => [ 'shape' => 'Description', ],
				'Content'            => [ 'shape' => 'LayerVersionContentInput', ],
				'CompatibleRuntimes' => [ 'shape' => 'CompatibleRuntimes', ],
				'LicenseInfo'        => [ 'shape' => 'LicenseInfo', ],
			],
		],
		'PublishLayerVersionResponse'          => [
			'type'    => 'structure',
			'members' => [
				'Content'            => [ 'shape' => 'LayerVersionContentOutput', ],
				'LayerArn'           => [ 'shape' => 'LayerArn', ],
				'LayerVersionArn'    => [ 'shape' => 'LayerVersionArn', ],
				'Description'        => [ 'shape' => 'Description', ],
				'CreatedDate'        => [ 'shape' => 'Timestamp', ],
				'Version'            => [ 'shape' => 'LayerVersionNumber', ],
				'CompatibleRuntimes' => [ 'shape' => 'CompatibleRuntimes', ],
				'LicenseInfo'        => [ 'shape' => 'LicenseInfo', ],
			],
		],
		'PublishVersionRequest'                => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'CodeSha256'   => [ 'shape' => 'String', ],
				'Description'  => [ 'shape' => 'Description', ],
				'RevisionId'   => [ 'shape' => 'String', ],
			],
		],
		'PutFunctionConcurrencyRequest'        => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'ReservedConcurrentExecutions', ],
			'members'  => [
				'FunctionName'                 => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'ReservedConcurrentExecutions' => [ 'shape' => 'ReservedConcurrentExecutions', ],
			],
		],
		'Qualifier'                            => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '(|[a-zA-Z0-9$_-]+)',
		],
		'RemoveLayerVersionPermissionRequest'  => [
			'type'     => 'structure',
			'required' => [ 'LayerName', 'VersionNumber', 'StatementId', ],
			'members'  => [
				'LayerName'     => [
					'shape'        => 'LayerName',
					'location'     => 'uri',
					'locationName' => 'LayerName',
				],
				'VersionNumber' => [
					'shape'        => 'LayerVersionNumber',
					'location'     => 'uri',
					'locationName' => 'VersionNumber',
				],
				'StatementId'   => [
					'shape'        => 'StatementId',
					'location'     => 'uri',
					'locationName' => 'StatementId',
				],
				'RevisionId'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'RevisionId',
				],
			],
		],
		'RemovePermissionRequest'              => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'StatementId', ],
			'members'  => [
				'FunctionName' => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'StatementId'  => [
					'shape'        => 'NamespacedStatementId',
					'location'     => 'uri',
					'locationName' => 'StatementId',
				],
				'Qualifier'    => [
					'shape'        => 'Qualifier',
					'location'     => 'querystring',
					'locationName' => 'Qualifier',
				],
				'RevisionId'   => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'RevisionId',
				],
			],
		],
		'RequestTooLargeException'             => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 413, ],
			'exception' => true,
		],
		'ReservedConcurrentExecutions'         => [ 'type' => 'integer', 'min' => 0, ],
		'ResourceArn'                          => [
			'type'    => 'string',
			'pattern' => '(arn:(aws[a-zA-Z-]*)?:[a-z0-9-.]+:.*)|()',
		],
		'ResourceConflictException'            => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'ResourceInUseException'               => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ResourceNotFoundException'            => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'RoleArn'                              => [
			'type'    => 'string',
			'pattern' => 'arn:(aws[a-zA-Z-]*)?:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+',
		],
		'Runtime'                              => [
			'type' => 'string',
			'enum' => [
				'nodejs',
				'nodejs4.3',
				'nodejs6.10',
				'nodejs8.10',
				'nodejs10.x',
				'java8',
				'python2.7',
				'python3.6',
				'python3.7',
				'dotnetcore1.0',
				'dotnetcore2.0',
				'dotnetcore2.1',
				'nodejs4.3-edge',
				'go1.x',
				'ruby2.5',
				'provided',
			],
		],
		'S3Bucket'                             => [
			'type'    => 'string',
			'max'     => 63,
			'min'     => 3,
			'pattern' => '^[0-9A-Za-z\\.\\-_]*(?<!\\.)$',
		],
		'S3Key'                                => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'S3ObjectVersion'                      => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'SecurityGroupId'                      => [ 'type' => 'string', ],
		'SecurityGroupIds'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityGroupId', ],
			'max'    => 5,
		],
		'SensitiveString'                      => [ 'type' => 'string', 'sensitive' => true, ],
		'ServiceException'                     => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
		],
		'SourceOwner'                          => [ 'type' => 'string', 'pattern' => '\\d{12}', ],
		'StatementId'                          => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '([a-zA-Z0-9-_]+)',
		],
		'String'                               => [ 'type' => 'string', ],
		'SubnetIPAddressLimitReachedException' => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 502, ],
			'exception' => true,
		],
		'SubnetId'                             => [ 'type' => 'string', ],
		'SubnetIds'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SubnetId', ],
			'max'    => 16,
		],
		'TagKey'                               => [ 'type' => 'string', ],
		'TagKeyList'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ],
		'TagResourceRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Resource', 'Tags', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'FunctionArn',
					'location'     => 'uri',
					'locationName' => 'ARN',
				],
				'Tags'     => [ 'shape' => 'Tags', ],
			],
		],
		'TagValue'                             => [ 'type' => 'string', ],
		'Tags'                                 => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TagKey', ],
			'value' => [ 'shape' => 'TagValue', ],
		],
		'ThrottleReason'                       => [
			'type' => 'string',
			'enum' => [
				'ConcurrentInvocationLimitExceeded',
				'FunctionInvocationRateLimitExceeded',
				'ReservedFunctionConcurrentInvocationLimitExceeded',
				'ReservedFunctionInvocationRateLimitExceeded',
				'CallerRateLimitExceeded',
			],
		],
		'Timeout'                              => [ 'type' => 'integer', 'min' => 1, ],
		'Timestamp'                            => [ 'type' => 'string', ],
		'TooManyRequestsException'             => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'Type'              => [ 'shape' => 'String', ],
				'message'           => [ 'shape' => 'String', ],
				'Reason'            => [ 'shape' => 'ThrottleReason', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'TracingConfig'                        => [
			'type'    => 'structure',
			'members' => [ 'Mode' => [ 'shape' => 'TracingMode', ], ],
		],
		'TracingConfigResponse'                => [
			'type'    => 'structure',
			'members' => [ 'Mode' => [ 'shape' => 'TracingMode', ], ],
		],
		'TracingMode'                          => [ 'type' => 'string', 'enum' => [ 'Active', 'PassThrough', ], ],
		'UnreservedConcurrentExecutions'       => [ 'type' => 'integer', 'min' => 0, ],
		'UnsupportedMediaTypeException'        => [
			'type'      => 'structure',
			'members'   => [
				'Type'    => [ 'shape' => 'String', ],
				'message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 415, ],
			'exception' => true,
		],
		'UntagResourceRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Resource', 'TagKeys', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'FunctionArn',
					'location'     => 'uri',
					'locationName' => 'ARN',
				],
				'TagKeys'  => [
					'shape'        => 'TagKeyList',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
		],
		'UpdateAliasRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', 'Name', ],
			'members'  => [
				'FunctionName'    => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Name'            => [
					'shape'        => 'Alias',
					'location'     => 'uri',
					'locationName' => 'Name',
				],
				'FunctionVersion' => [ 'shape' => 'Version', ],
				'Description'     => [ 'shape' => 'Description', ],
				'RoutingConfig'   => [ 'shape' => 'AliasRoutingConfiguration', ],
				'RevisionId'      => [ 'shape' => 'String', ],
			],
		],
		'UpdateEventSourceMappingRequest'      => [
			'type'     => 'structure',
			'required' => [ 'UUID', ],
			'members'  => [
				'UUID'         => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'UUID',
				],
				'FunctionName' => [ 'shape' => 'FunctionName', ],
				'Enabled'      => [ 'shape' => 'Enabled', ],
				'BatchSize'    => [ 'shape' => 'BatchSize', ],
			],
		],
		'UpdateFunctionCodeRequest'            => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName'    => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'ZipFile'         => [ 'shape' => 'Blob', ],
				'S3Bucket'        => [ 'shape' => 'S3Bucket', ],
				'S3Key'           => [ 'shape' => 'S3Key', ],
				'S3ObjectVersion' => [ 'shape' => 'S3ObjectVersion', ],
				'Publish'         => [ 'shape' => 'Boolean', ],
				'DryRun'          => [ 'shape' => 'Boolean', ],
				'RevisionId'      => [ 'shape' => 'String', ],
			],
		],
		'UpdateFunctionConfigurationRequest'   => [
			'type'     => 'structure',
			'required' => [ 'FunctionName', ],
			'members'  => [
				'FunctionName'     => [
					'shape'        => 'FunctionName',
					'location'     => 'uri',
					'locationName' => 'FunctionName',
				],
				'Role'             => [ 'shape' => 'RoleArn', ],
				'Handler'          => [ 'shape' => 'Handler', ],
				'Description'      => [ 'shape' => 'Description', ],
				'Timeout'          => [ 'shape' => 'Timeout', ],
				'MemorySize'       => [ 'shape' => 'MemorySize', ],
				'VpcConfig'        => [ 'shape' => 'VpcConfig', ],
				'Environment'      => [ 'shape' => 'Environment', ],
				'Runtime'          => [ 'shape' => 'Runtime', ],
				'DeadLetterConfig' => [ 'shape' => 'DeadLetterConfig', ],
				'KMSKeyArn'        => [ 'shape' => 'KMSKeyArn', ],
				'TracingConfig'    => [ 'shape' => 'TracingConfig', ],
				'RevisionId'       => [ 'shape' => 'String', ],
				'Layers'           => [ 'shape' => 'LayerList', ],
			],
		],
		'Version'                              => [
			'type'    => 'string',
			'max'     => 1024,
			'min'     => 1,
			'pattern' => '(\\$LATEST|[0-9]+)',
		],
		'VpcConfig'                            => [
			'type'    => 'structure',
			'members' => [
				'SubnetIds'        => [ 'shape' => 'SubnetIds', ],
				'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ],
			],
		],
		'VpcConfigResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'SubnetIds'        => [ 'shape' => 'SubnetIds', ],
				'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ],
				'VpcId'            => [ 'shape' => 'VpcId', ],
			],
		],
		'VpcId'                                => [ 'type' => 'string', ],
		'Weight'                               => [ 'type' => 'double', 'max' => 1, 'min' => 0, ],
	],
];
