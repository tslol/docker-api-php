# # TaskSpecContainerSpecConfigsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | [**\OpenAPI\Client\Model\TaskSpecContainerSpecConfigsInnerFile**](TaskSpecContainerSpecConfigsInnerFile.md) |  | [optional]
**runtime** | **object** | Runtime represents a target that is not mounted into the container but is used by the task  &lt;p&gt;&lt;br /&gt;&lt;p&gt;  &gt; **Note**: &#x60;Configs.File&#x60; and &#x60;Configs.Runtime&#x60; are mutually &gt; exclusive | [optional]
**config_id** | **string** | ConfigID represents the ID of the specific config that we&#39;re referencing. | [optional]
**config_name** | **string** | ConfigName is the name of the config that this references, but this is just provided for lookup/display purposes. The config in the reference will be identified by its ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
