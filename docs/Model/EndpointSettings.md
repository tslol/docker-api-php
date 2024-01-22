# # EndpointSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ipam_config** | [**\OpenAPI\Client\Model\EndpointIPAMConfig**](EndpointIPAMConfig.md) |  | [optional]
**links** | **string[]** |  | [optional]
**mac_address** | **string** | MAC address for the endpoint on this network. The network driver might ignore this parameter. | [optional]
**aliases** | **string[]** |  | [optional]
**network_id** | **string** | Unique ID of the network. | [optional]
**endpoint_id** | **string** | Unique ID for the service endpoint in a Sandbox. | [optional]
**gateway** | **string** | Gateway address for this network. | [optional]
**ip_address** | **string** | IPv4 address. | [optional]
**ip_prefix_len** | **int** | Mask length of the IPv4 address. | [optional]
**ipv6_gateway** | **string** | IPv6 gateway address. | [optional]
**global_ipv6_address** | **string** | Global IPv6 address. | [optional]
**global_ipv6_prefix_len** | **int** | Mask length of the global IPv6 address. | [optional]
**driver_opts** | **array<string,string>** | DriverOpts is a mapping of driver options and values. These options are passed directly to the driver and are driver specific. | [optional]
**dns_names** | **string[]** | List of all DNS names an endpoint has on a specific network. This list is based on the container name, network aliases, container short ID, and hostname.  These DNS names are non-fully qualified but can contain several dots. You can get fully qualified DNS names by appending &#x60;.&lt;network-name&gt;&#x60;. For instance, if container name is &#x60;my.ctr&#x60; and the network is named &#x60;testnet&#x60;, &#x60;DNSNames&#x60; will contain &#x60;my.ctr&#x60; and the FQDN will be &#x60;my.ctr.testnet&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
