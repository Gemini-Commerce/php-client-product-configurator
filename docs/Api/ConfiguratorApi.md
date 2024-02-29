# GeminiCommerce\ProductConfigurator\ConfiguratorApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorCopyConfigurator()**](ConfiguratorApi.md#productConfiguratorCopyConfigurator) | **POST** /v1/{tenantId}/product/{sourceConfiguratorId}/copy | Copy Configurator |
| [**productConfiguratorCreateConfigurator()**](ConfiguratorApi.md#productConfiguratorCreateConfigurator) | **POST** /v1/{tenantId}/product/{productId}/create | Create Configurator |
| [**productConfiguratorDeleteConfigurator()**](ConfiguratorApi.md#productConfiguratorDeleteConfigurator) | **DELETE** /v1/{tenantId}/configurator/{configuratorId} | Delete Configurator |
| [**productConfiguratorGetConfiguratorByProductId()**](ConfiguratorApi.md#productConfiguratorGetConfiguratorByProductId) | **GET** /v1/{tenantId}/product/{productId} | Get Configurator by Product ID |
| [**productConfiguratorGetConfiguratorByProductId2()**](ConfiguratorApi.md#productConfiguratorGetConfiguratorByProductId2) | **GET** /v1/{tenantId}/product/{productId}/status/{status} | Get Configurator by Product ID |
| [**productConfiguratorListConfigurators()**](ConfiguratorApi.md#productConfiguratorListConfigurators) | **POST** /v1/{tenantId}/product/{productId}/page-size/{pageSize}/configurators | List Product Configurators |
| [**productConfiguratorUpdateConfigurator()**](ConfiguratorApi.md#productConfiguratorUpdateConfigurator) | **PUT** /v1/{tenantId}/configurator/{configuratorId} | Update Configurator |


## `productConfiguratorCopyConfigurator()`

```php
productConfiguratorCopyConfigurator($tenant_id, $source_configurator_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity
```

Copy Configurator

Duplicate an existing product configurator from the source to the specified tenant and product. Submit an empty body to initiate the copy process, creating a new configuration based on the source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$source_configurator_id = 'source_configurator_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyConfiguratorRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyConfiguratorRequest

try {
    $result = $apiInstance->productConfiguratorCopyConfigurator($tenant_id, $source_configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorCopyConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_configurator_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyConfiguratorRequest**](../Model/ProductConfiguratorCopyConfiguratorRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateConfigurator()`

```php
productConfiguratorCreateConfigurator($tenant_id, $product_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity
```

Create Configurator

Create a new product configurator for a specified tenant and product. Submit the desired configuration details in the request body to initiate the creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateConfiguratorRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateConfiguratorRequest

try {
    $result = $apiInstance->productConfiguratorCreateConfigurator($tenant_id, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorCreateConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateConfiguratorRequest**](../Model/ProductConfiguratorCreateConfiguratorRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteConfigurator()`

```php
productConfiguratorDeleteConfigurator($tenant_id, $configurator_id): object
```

Delete Configurator

Delete a product configurator by specifying the tenant and configurator IDs. Ensure precise removal of unwanted configurations with a straightforward DELETE request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteConfigurator($tenant_id, $configurator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorDeleteConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |

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

## `productConfiguratorGetConfiguratorByProductId()`

```php
productConfiguratorGetConfiguratorByProductId($tenant_id, $product_id, $status): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity
```

Get Configurator by Product ID

Retrieve product configurations with status details, filtered by product and tenant IDs. Flexible options for specifying additional status parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$status = 'UNKNOWN'; // string

try {
    $result = $apiInstance->productConfiguratorGetConfiguratorByProductId($tenant_id, $product_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorGetConfiguratorByProductId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **status** | **string**|  | [optional] [default to &#39;UNKNOWN&#39;] |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetConfiguratorByProductId2()`

```php
productConfiguratorGetConfiguratorByProductId2($tenant_id, $product_id, $status): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity
```

Get Configurator by Product ID

Retrieve product configurations with status details, filtered by product and tenant IDs. Flexible options for specifying additional status parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$status = 'status_example'; // string

try {
    $result = $apiInstance->productConfiguratorGetConfiguratorByProductId2($tenant_id, $product_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorGetConfiguratorByProductId2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **status** | **string**|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListConfigurators()`

```php
productConfiguratorListConfigurators($tenant_id, $product_id, $page_size, $body): \GeminiCommerce\ProductConfigurator\Model\ConfiguratorListResponse
```

List Product Configurators

List all product configurators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$page_size = 56; // int
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest

try {
    $result = $apiInstance->productConfiguratorListConfigurators($tenant_id, $product_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorListConfigurators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest**](../Model/ProductConfiguratorListPropertiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ConfiguratorListResponse**](../Model/ConfiguratorListResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateConfigurator()`

```php
productConfiguratorUpdateConfigurator($tenant_id, $configurator_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity
```

Update Configurator

Modify an existing product configurator by specifying the tenant and configurator IDs. Use a PUT request with the updated configuration details in the body to seamlessly update and manage product configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateConfiguratorRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateConfiguratorRequest

try {
    $result = $apiInstance->productConfiguratorUpdateConfigurator($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfiguratorApi->productConfiguratorUpdateConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateConfiguratorRequest**](../Model/ProductConfiguratorUpdateConfiguratorRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
