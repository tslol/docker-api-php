# # NetworkCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The network&#39;s name. |
**check_duplicate** | **bool** | Deprecated: CheckDuplicate is now always enabled. | [optional]
**driver** | **string** | Name of the network driver plugin to use. | [optional] [default to 'bridge']
**internal** | **bool** | Restrict external access to the network. | [optional]
**attachable** | **bool** | Globally scoped network is manually attachable by regular containers from workers in swarm mode. | [optional]
**ingress** | **bool** | Ingress network is the network which provides the routing-mesh in swarm mode. | [optional]
**ipam** | [**\OpenAPI\Client\Model\IPAM**](IPAM.md) |  | [optional]
**enable_ipv6** | **bool** | Enable IPv6 on the network. | [optional]
**options** | **array<string,string>** | Network specific options to be used by the drivers. | [optional]
**labels** | **array<string,string>** | User-defined key/value metadata. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
