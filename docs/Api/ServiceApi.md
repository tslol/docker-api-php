# OpenAPI\Client\ServiceApi

All URIs are relative to http://localhost/v1.44, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serviceCreate()**](ServiceApi.md#serviceCreate) | **POST** /services/create | Create a service |
| [**serviceDelete()**](ServiceApi.md#serviceDelete) | **DELETE** /services/{id} | Delete a service |
| [**serviceInspect()**](ServiceApi.md#serviceInspect) | **GET** /services/{id} | Inspect a service |
| [**serviceList()**](ServiceApi.md#serviceList) | **GET** /services | List services |
| [**serviceLogs()**](ServiceApi.md#serviceLogs) | **GET** /services/{id}/logs | Get service logs |
| [**serviceUpdate()**](ServiceApi.md#serviceUpdate) | **POST** /services/{id}/update | Update a service |


## `serviceCreate()`

```php
serviceCreate($body, $x_registry_auth): \OpenAPI\Client\Model\ServiceCreateResponse
```

Create a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\ServiceCreateRequest(); // \OpenAPI\Client\Model\ServiceCreateRequest
$x_registry_auth = 'x_registry_auth_example'; // string | A base64url-encoded auth configuration for pulling from private registries.  Refer to the [authentication section](#section/Authentication) for details.

try {
    $result = $apiInstance->serviceCreate($body, $x_registry_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ServiceCreateRequest**](../Model/ServiceCreateRequest.md)|  | |
| **x_registry_auth** | **string**| A base64url-encoded auth configuration for pulling from private registries.  Refer to the [authentication section](#section/Authentication) for details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceCreateResponse**](../Model/ServiceCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceDelete()`

```php
serviceDelete($id)
```

Delete a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.

try {
    $apiInstance->serviceDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID or name of service. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceInspect()`

```php
serviceInspect($id, $insert_defaults): \OpenAPI\Client\Model\Service
```

Inspect a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.
$insert_defaults = false; // bool | Fill empty fields with default values.

try {
    $result = $apiInstance->serviceInspect($id, $insert_defaults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID or name of service. | |
| **insert_defaults** | **bool**| Fill empty fields with default values. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceList()`

```php
serviceList($filters, $status): \OpenAPI\Client\Model\Service[]
```

List services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the services list.  Available filters:  - `id=<service id>` - `label=<service label>` - `mode=[\"replicated\"|\"global\"]` - `name=<service name>`
$status = True; // bool | Include service status, with count of running and desired tasks.

try {
    $result = $apiInstance->serviceList($filters, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the services list.  Available filters:  - &#x60;id&#x3D;&lt;service id&gt;&#x60; - &#x60;label&#x3D;&lt;service label&gt;&#x60; - &#x60;mode&#x3D;[\&quot;replicated\&quot;|\&quot;global\&quot;]&#x60; - &#x60;name&#x3D;&lt;service name&gt;&#x60; | [optional] |
| **status** | **bool**| Include service status, with count of running and desired tasks. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceLogs()`

```php
serviceLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail): \SplFileObject
```

Get service logs

Get `stdout` and `stderr` logs from a service. See also [`/containers/{id}/logs`](#operation/ContainerLogs).  **Note**: This endpoint works only for services with the `local`, `json-file` or `journald` logging drivers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of the service
$details = false; // bool | Show service context and extra details provided to logs.
$follow = false; // bool | Keep connection after returning logs.
$stdout = false; // bool | Return logs from `stdout`
$stderr = false; // bool | Return logs from `stderr`
$since = 0; // int | Only return logs since this time, as a UNIX timestamp
$timestamps = false; // bool | Add timestamps to every log line
$tail = 'all'; // string | Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.

try {
    $result = $apiInstance->serviceLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID or name of the service | |
| **details** | **bool**| Show service context and extra details provided to logs. | [optional] [default to false] |
| **follow** | **bool**| Keep connection after returning logs. | [optional] [default to false] |
| **stdout** | **bool**| Return logs from &#x60;stdout&#x60; | [optional] [default to false] |
| **stderr** | **bool**| Return logs from &#x60;stderr&#x60; | [optional] [default to false] |
| **since** | **int**| Only return logs since this time, as a UNIX timestamp | [optional] [default to 0] |
| **timestamps** | **bool**| Add timestamps to every log line | [optional] [default to false] |
| **tail** | **string**| Only return this number of log lines from the end of the logs. Specify as an integer or &#x60;all&#x60; to output all log lines. | [optional] [default to &#39;all&#39;] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.docker.raw-stream`, `application/vnd.docker.multiplexed-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceUpdate()`

```php
serviceUpdate($id, $version, $body, $registry_auth_from, $rollback, $x_registry_auth): \OpenAPI\Client\Model\ServiceUpdateResponse
```

Update a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID or name of service.
$version = 56; // int | The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling `GET /services/{id}`
$body = new \OpenAPI\Client\Model\ServiceUpdateRequest(); // \OpenAPI\Client\Model\ServiceUpdateRequest
$registry_auth_from = 'spec'; // string | If the `X-Registry-Auth` header is not specified, this parameter indicates where to find registry authorization credentials.
$rollback = 'rollback_example'; // string | Set to this parameter to `previous` to cause a server-side rollback to the previous service spec. The supplied spec will be ignored in this case.
$x_registry_auth = 'x_registry_auth_example'; // string | A base64url-encoded auth configuration for pulling from private registries.  Refer to the [authentication section](#section/Authentication) for details.

try {
    $result = $apiInstance->serviceUpdate($id, $version, $body, $registry_auth_from, $rollback, $x_registry_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID or name of service. | |
| **version** | **int**| The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling &#x60;GET /services/{id}&#x60; | |
| **body** | [**\OpenAPI\Client\Model\ServiceUpdateRequest**](../Model/ServiceUpdateRequest.md)|  | |
| **registry_auth_from** | **string**| If the &#x60;X-Registry-Auth&#x60; header is not specified, this parameter indicates where to find registry authorization credentials. | [optional] [default to &#39;spec&#39;] |
| **rollback** | **string**| Set to this parameter to &#x60;previous&#x60; to cause a server-side rollback to the previous service spec. The supplied spec will be ignored in this case. | [optional] |
| **x_registry_auth** | **string**| A base64url-encoded auth configuration for pulling from private registries.  Refer to the [authentication section](#section/Authentication) for details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceUpdateResponse**](../Model/ServiceUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
