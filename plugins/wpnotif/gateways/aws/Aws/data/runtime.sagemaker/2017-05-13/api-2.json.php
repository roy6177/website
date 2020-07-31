<?php
// This file was auto-generated from sdk-root/src/data/runtime.sagemaker/2017-05-13/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2017-05-13',
		'endpointPrefix'   => 'runtime.sagemaker',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'Amazon SageMaker Runtime',
		'serviceId'        => 'SageMaker Runtime',
		'signatureVersion' => 'v4',
		'signingName'      => 'sagemaker',
		'uid'              => 'runtime.sagemaker-2017-05-13',
	],
	'operations' => [
		'InvokeEndpoint' => [
			'name'   => 'InvokeEndpoint',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/endpoints/{EndpointName}/invocations',
			],
			'input'  => [ 'shape' => 'InvokeEndpointInput', ],
			'output' => [ 'shape' => 'InvokeEndpointOutput', ],
			'errors' => [
				[ 'shape' => 'InternalFailure', ],
				[ 'shape' => 'ServiceUnavailable', ],
				[ 'shape' => 'ValidationError', ],
				[ 'shape' => 'ModelError', ],
			],
		],
	],
	'shapes'     => [
		'BodyBlob'               => [ 'type' => 'blob', 'max' => 5242880, 'sensitive' => true, ],
		'CustomAttributesHeader' => [ 'type' => 'string', 'max' => 1024, 'sensitive' => true, ],
		'EndpointName'           => [ 'type' => 'string', 'max' => 63, 'pattern' => '^[a-zA-Z0-9](-*[a-zA-Z0-9])*', ],
		'Header'                 => [ 'type' => 'string', 'max' => 1024, ],
		'InternalFailure'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
			'synthetic' => true,
		],
		'InvokeEndpointInput'    => [
			'type'     => 'structure',
			'required' => [ 'EndpointName', 'Body', ],
			'members'  => [
				'EndpointName'     => [
					'shape'        => 'EndpointName',
					'location'     => 'uri',
					'locationName' => 'EndpointName',
				],
				'Body'             => [ 'shape' => 'BodyBlob', ],
				'ContentType'      => [
					'shape'        => 'Header',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Accept'           => [
					'shape'        => 'Header',
					'location'     => 'header',
					'locationName' => 'Accept',
				],
				'CustomAttributes' => [
					'shape'        => 'CustomAttributesHeader',
					'location'     => 'header',
					'locationName' => 'X-Amzn-SageMaker-Custom-Attributes',
				],
			],
			'payload'  => 'Body',
		],
		'InvokeEndpointOutput'   => [
			'type'     => 'structure',
			'required' => [ 'Body', ],
			'members'  => [
				'Body'                     => [ 'shape' => 'BodyBlob', ],
				'ContentType'              => [
					'shape'        => 'Header',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'InvokedProductionVariant' => [
					'shape'        => 'Header',
					'location'     => 'header',
					'locationName' => 'x-Amzn-Invoked-Production-Variant',
				],
				'CustomAttributes'         => [
					'shape'        => 'CustomAttributesHeader',
					'location'     => 'header',
					'locationName' => 'X-Amzn-SageMaker-Custom-Attributes',
				],
			],
			'payload'  => 'Body',
		],
		'LogStreamArn'           => [ 'type' => 'string', ],
		'Message'                => [ 'type' => 'string', 'max' => 2048, ],
		'ModelError'             => [
			'type'      => 'structure',
			'members'   => [
				'Message'            => [ 'shape' => 'Message', ],
				'OriginalStatusCode' => [ 'shape' => 'StatusCode', ],
				'OriginalMessage'    => [ 'shape' => 'Message', ],
				'LogStreamArn'       => [ 'shape' => 'LogStreamArn', ],
			],
			'error'     => [ 'httpStatusCode' => 424, ],
			'exception' => true,
		],
		'ServiceUnavailable'     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'fault'     => true,
			'synthetic' => true,
		],
		'StatusCode'             => [ 'type' => 'integer', ],
		'ValidationError'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
			'synthetic' => true,
		],
	],
];
