# OpenAPI\Client\PluginApi

All URIs are relative to http://localhost/v1.44, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPluginPrivileges()**](PluginApi.md#getPluginPrivileges) | **GET** /plugins/privileges | Get plugin privileges |
| [**pluginCreate()**](PluginApi.md#pluginCreate) | **POST** /plugins/create | Create a plugin |
| [**pluginDelete()**](PluginApi.md#pluginDelete) | **DELETE** /plugins/{name} | Remove a plugin |
| [**pluginDisable()**](PluginApi.md#pluginDisable) | **POST** /plugins/{name}/disable | Disable a plugin |
| [**pluginEnable()**](PluginApi.md#pluginEnable) | **POST** /plugins/{name}/enable | Enable a plugin |
| [**pluginInspect()**](PluginApi.md#pluginInspect) | **GET** /plugins/{name}/json | Inspect a plugin |
| [**pluginList()**](PluginApi.md#pluginList) | **GET** /plugins | List plugins |
| [**pluginPull()**](PluginApi.md#pluginPull) | **POST** /plugins/pull | Install a plugin |
| [**pluginPush()**](PluginApi.md#pluginPush) | **POST** /plugins/{name}/push | Push a plugin |
| [**pluginSet()**](PluginApi.md#pluginSet) | **POST** /plugins/{name}/set | Configure a plugin |
| [**pluginUpgrade()**](PluginApi.md#pluginUpgrade) | **POST** /plugins/{name}/upgrade | Upgrade a plugin |


## `getPluginPrivileges()`

```php
getPluginPrivileges($remote): \OpenAPI\Client\Model\PluginPrivilege[]
```

Get plugin privileges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remote = 'remote_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.

try {
    $result = $apiInstance->getPluginPrivileges($remote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->getPluginPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remote** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |

### Return type

[**\OpenAPI\Client\Model\PluginPrivilege[]**](../Model/PluginPrivilege.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginCreate()`

```php
pluginCreate($name, $tar_context)
```

Create a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$tar_context = "/path/to/file.txt"; // \SplFileObject | Path to tar containing plugin rootfs and manifest

try {
    $apiInstance->pluginCreate($name, $tar_context);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **tar_context** | **\SplFileObject****\SplFileObject**| Path to tar containing plugin rootfs and manifest | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-tar`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginDelete()`

```php
pluginDelete($name, $force): \OpenAPI\Client\Model\Plugin
```

Remove a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$force = false; // bool | Disable the plugin before removing. This may result in issues if the plugin is in use by a container.

try {
    $result = $apiInstance->pluginDelete($name, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **force** | **bool**| Disable the plugin before removing. This may result in issues if the plugin is in use by a container. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Plugin**](../Model/Plugin.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginDisable()`

```php
pluginDisable($name, $force)
```

Disable a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$force = True; // bool | Force disable a plugin even if still in use.

try {
    $apiInstance->pluginDisable($name, $force);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **force** | **bool**| Force disable a plugin even if still in use. | [optional] |

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

## `pluginEnable()`

```php
pluginEnable($name, $timeout)
```

Enable a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$timeout = 0; // int | Set the HTTP client timeout (in seconds)

try {
    $apiInstance->pluginEnable($name, $timeout);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **timeout** | **int**| Set the HTTP client timeout (in seconds) | [optional] [default to 0] |

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

## `pluginInspect()`

```php
pluginInspect($name): \OpenAPI\Client\Model\Plugin
```

Inspect a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.

try {
    $result = $apiInstance->pluginInspect($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |

### Return type

[**\OpenAPI\Client\Model\Plugin**](../Model/Plugin.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginList()`

```php
pluginList($filters): \OpenAPI\Client\Model\Plugin[]
```

List plugins

Returns information about installed plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | A JSON encoded value of the filters (a `map[string][]string`) to process on the plugin list.  Available filters:  - `capability=<capability name>` - `enable=<true>|<false>`

try {
    $result = $apiInstance->pluginList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| A JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the plugin list.  Available filters:  - &#x60;capability&#x3D;&lt;capability name&gt;&#x60; - &#x60;enable&#x3D;&lt;true&gt;|&lt;false&gt;&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\Plugin[]**](../Model/Plugin.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginPull()`

```php
pluginPull($remote, $name, $x_registry_auth, $body)
```

Install a plugin

Pulls and installs a plugin. After the plugin is installed, it can be enabled using the [`POST /plugins/{name}/enable` endpoint](#operation/PostPluginsEnable).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remote = 'remote_example'; // string | Remote reference for plugin to install.  The `:latest` tag is optional, and is used as the default if omitted.
$name = 'name_example'; // string | Local name for the pulled plugin.  The `:latest` tag is optional, and is used as the default if omitted.
$x_registry_auth = 'x_registry_auth_example'; // string | A base64url-encoded auth configuration to use when pulling a plugin from a registry.  Refer to the [authentication section](#section/Authentication) for details.
$body = array(new \OpenAPI\Client\Model\PluginPrivilege()); // \OpenAPI\Client\Model\PluginPrivilege[]

try {
    $apiInstance->pluginPull($remote, $name, $x_registry_auth, $body);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginPull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remote** | **string**| Remote reference for plugin to install.  The &#x60;:latest&#x60; tag is optional, and is used as the default if omitted. | |
| **name** | **string**| Local name for the pulled plugin.  The &#x60;:latest&#x60; tag is optional, and is used as the default if omitted. | [optional] |
| **x_registry_auth** | **string**| A base64url-encoded auth configuration to use when pulling a plugin from a registry.  Refer to the [authentication section](#section/Authentication) for details. | [optional] |
| **body** | [**\OpenAPI\Client\Model\PluginPrivilege[]**](../Model/PluginPrivilege.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginPush()`

```php
pluginPush($name)
```

Push a plugin

Push a plugin to the registry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.

try {
    $apiInstance->pluginPush($name);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginPush: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |

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

## `pluginSet()`

```php
pluginSet($name, $body)
```

Configure a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$body = array('body_example'); // string[]

try {
    $apiInstance->pluginSet($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **body** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pluginUpgrade()`

```php
pluginUpgrade($name, $remote, $x_registry_auth, $body)
```

Upgrade a plugin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
$remote = 'remote_example'; // string | Remote reference to upgrade to.  The `:latest` tag is optional, and is used as the default if omitted.
$x_registry_auth = 'x_registry_auth_example'; // string | A base64url-encoded auth configuration to use when pulling a plugin from a registry.  Refer to the [authentication section](#section/Authentication) for details.
$body = array(new \OpenAPI\Client\Model\PluginPrivilege()); // \OpenAPI\Client\Model\PluginPrivilege[]

try {
    $apiInstance->pluginUpgrade($name, $remote, $x_registry_auth, $body);
} catch (Exception $e) {
    echo 'Exception when calling PluginApi->pluginUpgrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the plugin. The &#x60;:latest&#x60; tag is optional, and is the default if omitted. | |
| **remote** | **string**| Remote reference to upgrade to.  The &#x60;:latest&#x60; tag is optional, and is used as the default if omitted. | |
| **x_registry_auth** | **string**| A base64url-encoded auth configuration to use when pulling a plugin from a registry.  Refer to the [authentication section](#section/Authentication) for details. | [optional] |
| **body** | [**\OpenAPI\Client\Model\PluginPrivilege[]**](../Model/PluginPrivilege.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
