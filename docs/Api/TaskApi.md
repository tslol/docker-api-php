# OpenAPI\Client\TaskApi

All URIs are relative to http://localhost/v1.44, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**taskInspect()**](TaskApi.md#taskInspect) | **GET** /tasks/{id} | Inspect a task |
| [**taskList()**](TaskApi.md#taskList) | **GET** /tasks | List tasks |
| [**taskLogs()**](TaskApi.md#taskLogs) | **GET** /tasks/{id}/logs | Get task logs |


## `taskInspect()`

```php
taskInspect($id): \OpenAPI\Client\Model\Task
```

Inspect a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID of the task

try {
    $result = $apiInstance->taskInspect($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->taskInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the task | |

### Return type

[**\OpenAPI\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taskList()`

```php
taskList($filters): \OpenAPI\Client\Model\Task[]
```

List tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the tasks list.  Available filters:  - `desired-state=(running | shutdown | accepted)` - `id=<task id>` - `label=key` or `label=\"key=value\"` - `name=<task name>` - `node=<node id or name>` - `service=<service name>`

try {
    $result = $apiInstance->taskList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->taskList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the tasks list.  Available filters:  - &#x60;desired-state&#x3D;(running | shutdown | accepted)&#x60; - &#x60;id&#x3D;&lt;task id&gt;&#x60; - &#x60;label&#x3D;key&#x60; or &#x60;label&#x3D;\&quot;key&#x3D;value\&quot;&#x60; - &#x60;name&#x3D;&lt;task name&gt;&#x60; - &#x60;node&#x3D;&lt;node id or name&gt;&#x60; - &#x60;service&#x3D;&lt;service name&gt;&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taskLogs()`

```php
taskLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail): \SplFileObject
```

Get task logs

Get `stdout` and `stderr` logs from a task. See also [`/containers/{id}/logs`](#operation/ContainerLogs).  **Note**: This endpoint works only for services with the `local`, `json-file` or `journald` logging drivers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | ID of the task
$details = false; // bool | Show task context and extra details provided to logs.
$follow = false; // bool | Keep connection after returning logs.
$stdout = false; // bool | Return logs from `stdout`
$stderr = false; // bool | Return logs from `stderr`
$since = 0; // int | Only return logs since this time, as a UNIX timestamp
$timestamps = false; // bool | Add timestamps to every log line
$tail = 'all'; // string | Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.

try {
    $result = $apiInstance->taskLogs($id, $details, $follow, $stdout, $stderr, $since, $timestamps, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->taskLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the task | |
| **details** | **bool**| Show task context and extra details provided to logs. | [optional] [default to false] |
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
