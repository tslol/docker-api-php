# # MountBindOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**propagation** | **string** | A propagation mode with the value &#x60;[r]private&#x60;, &#x60;[r]shared&#x60;, or &#x60;[r]slave&#x60;. | [optional]
**non_recursive** | **bool** | Disable recursive bind mount. | [optional] [default to false]
**create_mountpoint** | **bool** | Create mount point on host if missing | [optional] [default to false]
**read_only_non_recursive** | **bool** | Make the mount non-recursively read-only, but still leave the mount recursive (unless NonRecursive is set to true in conjunction). | [optional] [default to false]
**read_only_force_recursive** | **bool** | Raise an error if the mount cannot be made recursively read-only. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
