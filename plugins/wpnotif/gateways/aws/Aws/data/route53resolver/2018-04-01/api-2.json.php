<?php
// This file was auto-generated from sdk-root/src/data/route53resolver/2018-04-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2018-04-01',
		'endpointPrefix'      => 'route53resolver',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'Route53Resolver',
		'serviceFullName'     => 'Amazon Route 53 Resolver',
		'serviceId'           => 'Route53Resolver',
		'signatureVersion'    => 'v4',
		'targetPrefix'        => 'Route53Resolver',
		'uid'                 => 'route53resolver-2018-04-01',
	],
	'operations' => [
		'AssociateResolverEndpointIpAddress'    => [
			'name'   => 'AssociateResolverEndpointIpAddress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateResolverEndpointIpAddressRequest', ],
			'output' => [ 'shape' => 'AssociateResolverEndpointIpAddressResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceExistsException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'AssociateResolverRule'                 => [
			'name'   => 'AssociateResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateResolverRuleRequest', ],
			'output' => [ 'shape' => 'AssociateResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceUnavailableException', ],
				[ 'shape' => 'ResourceExistsException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'CreateResolverEndpoint'                => [
			'name'   => 'CreateResolverEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateResolverEndpointRequest', ],
			'output' => [ 'shape' => 'CreateResolverEndpointResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'CreateResolverRule'                    => [
			'name'   => 'CreateResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateResolverRuleRequest', ],
			'output' => [ 'shape' => 'CreateResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceExistsException', ],
				[ 'shape' => 'ResourceUnavailableException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DeleteResolverEndpoint'                => [
			'name'   => 'DeleteResolverEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteResolverEndpointRequest', ],
			'output' => [ 'shape' => 'DeleteResolverEndpointResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DeleteResolverRule'                    => [
			'name'   => 'DeleteResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteResolverRuleRequest', ],
			'output' => [ 'shape' => 'DeleteResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DisassociateResolverEndpointIpAddress' => [
			'name'   => 'DisassociateResolverEndpointIpAddress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateResolverEndpointIpAddressRequest', ],
			'output' => [ 'shape' => 'DisassociateResolverEndpointIpAddressResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceExistsException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DisassociateResolverRule'              => [
			'name'   => 'DisassociateResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateResolverRuleRequest', ],
			'output' => [ 'shape' => 'DisassociateResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'GetResolverEndpoint'                   => [
			'name'   => 'GetResolverEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetResolverEndpointRequest', ],
			'output' => [ 'shape' => 'GetResolverEndpointResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'GetResolverRule'                       => [
			'name'   => 'GetResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetResolverRuleRequest', ],
			'output' => [ 'shape' => 'GetResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'GetResolverRuleAssociation'            => [
			'name'   => 'GetResolverRuleAssociation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetResolverRuleAssociationRequest', ],
			'output' => [ 'shape' => 'GetResolverRuleAssociationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'GetResolverRulePolicy'                 => [
			'name'   => 'GetResolverRulePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetResolverRulePolicyRequest', ],
			'output' => [ 'shape' => 'GetResolverRulePolicyResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'UnknownResourceException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
			],
		],
		'ListResolverEndpointIpAddresses'       => [
			'name'   => 'ListResolverEndpointIpAddresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListResolverEndpointIpAddressesRequest', ],
			'output' => [ 'shape' => 'ListResolverEndpointIpAddressesResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListResolverEndpoints'                 => [
			'name'   => 'ListResolverEndpoints',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListResolverEndpointsRequest', ],
			'output' => [ 'shape' => 'ListResolverEndpointsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListResolverRuleAssociations'          => [
			'name'   => 'ListResolverRuleAssociations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListResolverRuleAssociationsRequest', ],
			'output' => [ 'shape' => 'ListResolverRuleAssociationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListResolverRules'                     => [
			'name'   => 'ListResolverRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListResolverRulesRequest', ],
			'output' => [ 'shape' => 'ListResolverRulesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListTagsForResource'                   => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'PutResolverRulePolicy'                 => [
			'name'   => 'PutResolverRulePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutResolverRulePolicyRequest', ],
			'output' => [ 'shape' => 'PutResolverRulePolicyResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidPolicyDocument', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'UnknownResourceException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
			],
		],
		'TagResource'                           => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidTagException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'UntagResource'                         => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'UpdateResolverEndpoint'                => [
			'name'   => 'UpdateResolverEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateResolverEndpointRequest', ],
			'output' => [ 'shape' => 'UpdateResolverEndpointResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'UpdateResolverRule'                    => [
			'name'   => 'UpdateResolverRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateResolverRuleRequest', ],
			'output' => [ 'shape' => 'UpdateResolverRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceUnavailableException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServiceErrorException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
	],
	'shapes'     => [
		'AccountId'                                     => [ 'type' => 'string', 'max' => 32, 'min' => 12, ],
		'Arn'                                           => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'AssociateResolverEndpointIpAddressRequest'     => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', 'IpAddress', ],
			'members'  => [
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
				'IpAddress'          => [ 'shape' => 'IpAddressUpdate', ],
			],
		],
		'AssociateResolverEndpointIpAddressResponse'    => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'AssociateResolverRuleRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'ResolverRuleId', 'VPCId', ],
			'members'  => [
				'ResolverRuleId' => [ 'shape' => 'ResourceId', ],
				'Name'           => [ 'shape' => 'Name', ],
				'VPCId'          => [ 'shape' => 'ResourceId', ],
			],
		],
		'AssociateResolverRuleResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'ResolverRuleAssociation' => [ 'shape' => 'ResolverRuleAssociation', ], ],
		],
		'Boolean'                                       => [ 'type' => 'boolean', ],
		'CreateResolverEndpointRequest'                 => [
			'type'     => 'structure',
			'required' => [
				'CreatorRequestId',
				'SecurityGroupIds',
				'Direction',
				'IpAddresses',
			],
			'members'  => [
				'CreatorRequestId' => [ 'shape' => 'CreatorRequestId', ],
				'Name'             => [ 'shape' => 'Name', ],
				'SecurityGroupIds' => [
					'shape' => 'SecurityGroupIds',
					'box'   => true,
				],
				'Direction'        => [ 'shape' => 'ResolverEndpointDirection', ],
				'IpAddresses'      => [ 'shape' => 'IpAddressesRequest', ],
				'Tags'             => [
					'shape' => 'TagList',
					'box'   => true,
				],
			],
		],
		'CreateResolverEndpointResponse'                => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'CreateResolverRuleRequest'                     => [
			'type'     => 'structure',
			'required' => [
				'CreatorRequestId',
				'RuleType',
				'DomainName',
			],
			'members'  => [
				'CreatorRequestId'   => [ 'shape' => 'CreatorRequestId', ],
				'Name'               => [ 'shape' => 'Name', ],
				'RuleType'           => [ 'shape' => 'RuleTypeOption', ],
				'DomainName'         => [ 'shape' => 'DomainName', ],
				'TargetIps'          => [
					'shape' => 'TargetList',
					'box'   => true,
				],
				'ResolverEndpointId' => [
					'shape' => 'ResourceId',
					'box'   => true,
				],
				'Tags'               => [
					'shape' => 'TagList',
					'box'   => true,
				],
			],
		],
		'CreateResolverRuleResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'ResolverRule' => [ 'shape' => 'ResolverRule', ], ],
		],
		'CreatorRequestId'                              => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'DeleteResolverEndpointRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', ],
			'members'  => [ 'ResolverEndpointId' => [ 'shape' => 'ResourceId', ], ],
		],
		'DeleteResolverEndpointResponse'                => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'DeleteResolverRuleRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ResolverRuleId', ],
			'members'  => [ 'ResolverRuleId' => [ 'shape' => 'ResourceId', ], ],
		],
		'DeleteResolverRuleResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'ResolverRule' => [ 'shape' => 'ResolverRule', ], ],
		],
		'DisassociateResolverEndpointIpAddressRequest'  => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', 'IpAddress', ],
			'members'  => [
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
				'IpAddress'          => [ 'shape' => 'IpAddressUpdate', ],
			],
		],
		'DisassociateResolverEndpointIpAddressResponse' => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'DisassociateResolverRuleRequest'               => [
			'type'     => 'structure',
			'required' => [ 'VPCId', 'ResolverRuleId', ],
			'members'  => [
				'VPCId'          => [ 'shape' => 'ResourceId', ],
				'ResolverRuleId' => [ 'shape' => 'ResourceId', ],
			],
		],
		'DisassociateResolverRuleResponse'              => [
			'type'    => 'structure',
			'members' => [ 'ResolverRuleAssociation' => [ 'shape' => 'ResolverRuleAssociation', ], ],
		],
		'DomainName'                                    => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'ExceptionMessage'                              => [ 'type' => 'string', ],
		'Filter'                                        => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [ 'shape' => 'FilterName', ],
				'Values' => [ 'shape' => 'FilterValues', ],
			],
		],
		'FilterName'                                    => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'FilterValue'                                   => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'FilterValues'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FilterValue', ],
		],
		'Filters'                                       => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
		'GetResolverEndpointRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', ],
			'members'  => [ 'ResolverEndpointId' => [ 'shape' => 'ResourceId', ], ],
		],
		'GetResolverEndpointResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'GetResolverRuleAssociationRequest'             => [
			'type'     => 'structure',
			'required' => [ 'ResolverRuleAssociationId', ],
			'members'  => [ 'ResolverRuleAssociationId' => [ 'shape' => 'ResourceId', ], ],
		],
		'GetResolverRuleAssociationResponse'            => [
			'type'    => 'structure',
			'members' => [ 'ResolverRuleAssociation' => [ 'shape' => 'ResolverRuleAssociation', ], ],
		],
		'GetResolverRulePolicyRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'Arn', ],
			'members'  => [ 'Arn' => [ 'shape' => 'Arn', ], ],
		],
		'GetResolverRulePolicyResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'ResolverRulePolicy' => [ 'shape' => 'ResolverRulePolicy', ], ],
		],
		'GetResolverRuleRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'ResolverRuleId', ],
			'members'  => [ 'ResolverRuleId' => [ 'shape' => 'ResourceId', ], ],
		],
		'GetResolverRuleResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'ResolverRule' => [ 'shape' => 'ResolverRule', ], ],
		],
		'InternalServiceErrorException'                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'InvalidNextTokenException'                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'InvalidParameterException'                     => [
			'type'      => 'structure',
			'required'  => [ 'Message', ],
			'members'   => [
				'Message'   => [ 'shape' => 'ExceptionMessage', ],
				'FieldName' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'InvalidPolicyDocument'                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'InvalidRequestException'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'InvalidTagException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'Ip'                                            => [ 'type' => 'string', 'max' => 36, 'min' => 7, ],
		'IpAddressCount'                                => [ 'type' => 'integer', ],
		'IpAddressRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'SubnetId', ],
			'members'  => [
				'SubnetId' => [ 'shape' => 'SubnetId', ],
				'Ip'       => [
					'shape' => 'Ip',
					'box'   => true,
				],
			],
		],
		'IpAddressResponse'                             => [
			'type'    => 'structure',
			'members' => [
				'IpId'             => [ 'shape' => 'ResourceId', ],
				'SubnetId'         => [ 'shape' => 'SubnetId', ],
				'Ip'               => [ 'shape' => 'Ip', ],
				'Status'           => [ 'shape' => 'IpAddressStatus', ],
				'StatusMessage'    => [ 'shape' => 'StatusMessage', ],
				'CreationTime'     => [ 'shape' => 'Rfc3339TimeString', ],
				'ModificationTime' => [ 'shape' => 'Rfc3339TimeString', ],
			],
		],
		'IpAddressStatus'                               => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'FAILED_CREATION',
				'ATTACHING',
				'ATTACHED',
				'REMAP_DETACHING',
				'REMAP_ATTACHING',
				'DETACHING',
				'FAILED_RESOURCE_GONE',
				'DELETING',
				'DELETE_FAILED_FAS_EXPIRED',
			],
		],
		'IpAddressUpdate'                               => [
			'type'    => 'structure',
			'members' => [
				'IpId'     => [
					'shape' => 'ResourceId',
					'box'   => true,
				],
				'SubnetId' => [
					'shape' => 'SubnetId',
					'box'   => true,
				],
				'Ip'       => [
					'shape' => 'Ip',
					'box'   => true,
				],
			],
		],
		'IpAddressesRequest'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IpAddressRequest', ],
			'max'    => 10,
			'min'    => 1,
		],
		'IpAddressesResponse'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IpAddressResponse', ],
		],
		'LimitExceededException'                        => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'ListResolverEndpointIpAddressesRequest'        => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', ],
			'members'  => [
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
				'MaxResults'         => [
					'shape' => 'MaxResults',
					'box'   => true,
				],
				'NextToken'          => [
					'shape' => 'NextToken',
					'box'   => true,
				],
			],
		],
		'ListResolverEndpointIpAddressesResponse'       => [
			'type'    => 'structure',
			'members' => [
				'NextToken'   => [ 'shape' => 'NextToken', ],
				'MaxResults'  => [ 'shape' => 'MaxResults', ],
				'IpAddresses' => [ 'shape' => 'IpAddressesResponse', ],
			],
		],
		'ListResolverEndpointsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape' => 'MaxResults',
					'box'   => true,
				],
				'NextToken'  => [
					'shape' => 'NextToken',
					'box'   => true,
				],
				'Filters'    => [
					'shape' => 'Filters',
					'box'   => true,
				],
			],
		],
		'ListResolverEndpointsResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'NextToken'         => [ 'shape' => 'NextToken', ],
				'MaxResults'        => [ 'shape' => 'MaxResults', ],
				'ResolverEndpoints' => [ 'shape' => 'ResolverEndpoints', ],
			],
		],
		'ListResolverRuleAssociationsRequest'           => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape' => 'MaxResults',
					'box'   => true,
				],
				'NextToken'  => [
					'shape' => 'NextToken',
					'box'   => true,
				],
				'Filters'    => [
					'shape' => 'Filters',
					'box'   => true,
				],
			],
		],
		'ListResolverRuleAssociationsResponse'          => [
			'type'    => 'structure',
			'members' => [
				'NextToken'                => [ 'shape' => 'NextToken', ],
				'MaxResults'               => [ 'shape' => 'MaxResults', ],
				'ResolverRuleAssociations' => [ 'shape' => 'ResolverRuleAssociations', ],
			],
		],
		'ListResolverRulesRequest'                      => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape' => 'MaxResults',
					'box'   => true,
				],
				'NextToken'  => [
					'shape' => 'NextToken',
					'box'   => true,
				],
				'Filters'    => [
					'shape' => 'Filters',
					'box'   => true,
				],
			],
		],
		'ListResolverRulesResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'NextToken'     => [ 'shape' => 'NextToken', ],
				'MaxResults'    => [ 'shape' => 'MaxResults', ],
				'ResolverRules' => [ 'shape' => 'ResolverRules', ],
			],
		],
		'ListTagsForResourceRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'Arn', ],
				'MaxResults'  => [
					'shape' => 'MaxResults',
					'box'   => true,
				],
				'NextToken'   => [
					'shape' => 'NextToken',
					'box'   => true,
				],
			],
		],
		'ListTagsForResourceResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'Tags'      => [ 'shape' => 'TagList', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'MaxResults'                                    => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'Name'                                          => [
			'type'    => 'string',
			'max'     => 64,
			'pattern' => '(?!^[0-9]+$)([a-zA-Z0-9-_\' \']+)',
		],
		'NextToken'                                     => [ 'type' => 'string', ],
		'Port'                                          => [ 'type' => 'integer', 'max' => 65535, 'min' => 0, ],
		'PutResolverRulePolicyRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'Arn', 'ResolverRulePolicy', ],
			'members'  => [
				'Arn'                => [ 'shape' => 'Arn', ],
				'ResolverRulePolicy' => [ 'shape' => 'ResolverRulePolicy', ],
			],
		],
		'PutResolverRulePolicyResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'ReturnValue' => [ 'shape' => 'Boolean', ], ],
		],
		'ResolverEndpoint'                              => [
			'type'    => 'structure',
			'members' => [
				'Id'               => [ 'shape' => 'ResourceId', ],
				'CreatorRequestId' => [ 'shape' => 'CreatorRequestId', ],
				'Arn'              => [ 'shape' => 'Arn', ],
				'Name'             => [ 'shape' => 'Name', ],
				'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ],
				'Direction'        => [ 'shape' => 'ResolverEndpointDirection', ],
				'IpAddressCount'   => [ 'shape' => 'IpAddressCount', ],
				'HostVPCId'        => [ 'shape' => 'ResourceId', ],
				'Status'           => [ 'shape' => 'ResolverEndpointStatus', ],
				'StatusMessage'    => [ 'shape' => 'StatusMessage', ],
				'CreationTime'     => [ 'shape' => 'Rfc3339TimeString', ],
				'ModificationTime' => [ 'shape' => 'Rfc3339TimeString', ],
			],
		],
		'ResolverEndpointDirection'                     => [
			'type' => 'string',
			'enum' => [ 'INBOUND', 'OUTBOUND', ],
		],
		'ResolverEndpointStatus'                        => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'OPERATIONAL',
				'UPDATING',
				'AUTO_RECOVERING',
				'ACTION_NEEDED',
				'DELETING',
			],
		],
		'ResolverEndpoints'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResolverEndpoint', ],
		],
		'ResolverRule'                                  => [
			'type'    => 'structure',
			'members' => [
				'Id'                 => [ 'shape' => 'ResourceId', ],
				'CreatorRequestId'   => [ 'shape' => 'CreatorRequestId', ],
				'Arn'                => [ 'shape' => 'Arn', ],
				'DomainName'         => [ 'shape' => 'DomainName', ],
				'Status'             => [ 'shape' => 'ResolverRuleStatus', ],
				'StatusMessage'      => [ 'shape' => 'StatusMessage', ],
				'RuleType'           => [ 'shape' => 'RuleTypeOption', ],
				'Name'               => [ 'shape' => 'Name', ],
				'TargetIps'          => [ 'shape' => 'TargetList', ],
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
				'OwnerId'            => [ 'shape' => 'AccountId', ],
				'ShareStatus'        => [ 'shape' => 'ShareStatus', ],
			],
		],
		'ResolverRuleAssociation'                       => [
			'type'    => 'structure',
			'members' => [
				'Id'             => [ 'shape' => 'ResourceId', ],
				'ResolverRuleId' => [ 'shape' => 'ResourceId', ],
				'Name'           => [ 'shape' => 'Name', ],
				'VPCId'          => [ 'shape' => 'ResourceId', ],
				'Status'         => [ 'shape' => 'ResolverRuleAssociationStatus', ],
				'StatusMessage'  => [ 'shape' => 'StatusMessage', ],
			],
		],
		'ResolverRuleAssociationStatus'                 => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'COMPLETE',
				'DELETING',
				'FAILED',
				'OVERRIDDEN',
			],
		],
		'ResolverRuleAssociations'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResolverRuleAssociation', ],
		],
		'ResolverRuleConfig'                            => [
			'type'    => 'structure',
			'members' => [
				'Name'               => [ 'shape' => 'Name', ],
				'TargetIps'          => [ 'shape' => 'TargetList', ],
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
			],
		],
		'ResolverRulePolicy'                            => [ 'type' => 'string', 'max' => 5000, ],
		'ResolverRuleStatus'                            => [
			'type' => 'string',
			'enum' => [
				'COMPLETE',
				'DELETING',
				'UPDATING',
				'FAILED',
			],
		],
		'ResolverRules'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResolverRule', ],
		],
		'ResourceExistsException'                       => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'ResourceId'                                    => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'ResourceInUseException'                        => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'ResourceNotFoundException'                     => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'ResourceUnavailableException'                  => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
			'exception' => true,
		],
		'Rfc3339TimeString'                             => [ 'type' => 'string', 'max' => 40, 'min' => 20, ],
		'RuleTypeOption'                                => [
			'type' => 'string',
			'enum' => [ 'FORWARD', 'SYSTEM', 'RECURSIVE', ],
		],
		'SecurityGroupIds'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceId', ],
		],
		'ShareStatus'                                   => [
			'type' => 'string',
			'enum' => [
				'NOT_SHARED',
				'SHARED_WITH_ME',
				'SHARED_BY_ME',
			],
		],
		'StatusMessage'                                 => [ 'type' => 'string', 'max' => 255, ],
		'String'                                        => [ 'type' => 'string', ],
		'SubnetId'                                      => [ 'type' => 'string', 'max' => 32, 'min' => 1, ],
		'Tag'                                           => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                        => [ 'type' => 'string', ],
		'TagKeyList'                                    => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ],
		'TagList'                                       => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagResourceRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'Arn', ],
				'Tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagResourceResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                      => [ 'type' => 'string', ],
		'TargetAddress'                                 => [
			'type'     => 'structure',
			'required' => [ 'Ip', ],
			'members'  => [
				'Ip'   => [ 'shape' => 'Ip', ],
				'Port' => [
					'shape' => 'Port',
					'box'   => true,
				],
			],
		],
		'TargetList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetAddress', ],
			'min'    => 1,
		],
		'ThrottlingException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'UnknownResourceException'                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'UntagResourceRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeys', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'Arn', ],
				'TagKeys'     => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UntagResourceResponse'                         => [ 'type' => 'structure', 'members' => [], ],
		'UpdateResolverEndpointRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'ResolverEndpointId', ],
			'members'  => [
				'ResolverEndpointId' => [ 'shape' => 'ResourceId', ],
				'Name'               => [
					'shape' => 'Name',
					'box'   => true,
				],
			],
		],
		'UpdateResolverEndpointResponse'                => [
			'type'    => 'structure',
			'members' => [ 'ResolverEndpoint' => [ 'shape' => 'ResolverEndpoint', ], ],
		],
		'UpdateResolverRuleRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ResolverRuleId', 'Config', ],
			'members'  => [
				'ResolverRuleId' => [ 'shape' => 'ResourceId', ],
				'Config'         => [ 'shape' => 'ResolverRuleConfig', ],
			],
		],
		'UpdateResolverRuleResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'ResolverRule' => [ 'shape' => 'ResolverRule', ], ],
		],
	],
];
