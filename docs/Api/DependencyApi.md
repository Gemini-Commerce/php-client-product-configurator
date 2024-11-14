# OpenAPI\Client\DependencyApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorCreateDependency()**](DependencyApi.md#productConfiguratorCreateDependency) | **POST** /v1/{tenantId}/step/{stepId}/dependency/create | Create Dependency |
| [**productConfiguratorDeleteDependency()**](DependencyApi.md#productConfiguratorDeleteDependency) | **DELETE** /v1/{tenantId}/dependency/{dependencyId} | Delete Dependency |
| [**productConfiguratorListDependencies()**](DependencyApi.md#productConfiguratorListDependencies) | **POST** /v1/{tenantId}/page-size/{pageSize}/dependencies | List Dependencies |
| [**productConfiguratorUpdateDependency()**](DependencyApi.md#productConfiguratorUpdateDependency) | **PUT** /v1/{tenantId}/dependency/{dependencyId} | Update Dependency |


## `productConfiguratorCreateDependency()`

```php
productConfiguratorCreateDependency($tenant_id, $step_id, $body): \OpenAPI\Client\Model\ProductconfiguratordependencyEntity
```

Create Dependency

Establish a new dependency for an existing step by specifying the tenant and step IDs. Utilize a POST request with the required dependency details in the body to seamlessly enhance the configuration logic of your product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DependencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductConfiguratorCreateDependencyRequest(); // \OpenAPI\Client\Model\ProductConfiguratorCreateDependencyRequest

try {
    $result = $apiInstance->productConfiguratorCreateDependency($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DependencyApi->productConfiguratorCreateDependency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductConfiguratorCreateDependencyRequest**](../Model/ProductConfiguratorCreateDependencyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratordependencyEntity**](../Model/ProductconfiguratordependencyEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteDependency()`

```php
productConfiguratorDeleteDependency($tenant_id, $dependency_id): object
```

Delete Dependency

Remove a specific dependency by specifying the tenant and dependency IDs. Ensure precision in dependency management with a straightforward DELETE request, simplifying the elimination of unwanted configuration logic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DependencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$dependency_id = 'dependency_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteDependency($tenant_id, $dependency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DependencyApi->productConfiguratorDeleteDependency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **dependency_id** | **string**|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListDependencies()`

```php
productConfiguratorListDependencies($tenant_id, $page_size, $body): \OpenAPI\Client\Model\DependencyListDependenciesResponse
```

List Dependencies

Retrieve a list of dependencies based on the specified tenant ID. Customize results by specifying page size for efficient pagination. Submit an empty body to get all dependencies associated with the configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DependencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$page_size = 56; // int
$body = new \OpenAPI\Client\Model\ProductConfiguratorListDependenciesRequest(); // \OpenAPI\Client\Model\ProductConfiguratorListDependenciesRequest

try {
    $result = $apiInstance->productConfiguratorListDependencies($tenant_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DependencyApi->productConfiguratorListDependencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductConfiguratorListDependenciesRequest**](../Model/ProductConfiguratorListDependenciesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DependencyListDependenciesResponse**](../Model/DependencyListDependenciesResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateDependency()`

```php
productConfiguratorUpdateDependency($tenant_id, $dependency_id, $body): \OpenAPI\Client\Model\ProductconfiguratordependencyEntity
```

Update Dependency

Modify an existing dependency by specifying the tenant and dependency IDs. Utilize a PUT request with updated dependency details in the body for seamless customization and fine-tuning of your product configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DependencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$dependency_id = 'dependency_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductConfiguratorUpdateDependencyRequest(); // \OpenAPI\Client\Model\ProductConfiguratorUpdateDependencyRequest

try {
    $result = $apiInstance->productConfiguratorUpdateDependency($tenant_id, $dependency_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DependencyApi->productConfiguratorUpdateDependency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **dependency_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductConfiguratorUpdateDependencyRequest**](../Model/ProductConfiguratorUpdateDependencyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratordependencyEntity**](../Model/ProductconfiguratordependencyEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
