# GeminiCommerce\ProductConfigurator\ConfigurationApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorGetAvailableConfiguration()**](ConfigurationApi.md#productConfiguratorGetAvailableConfiguration) | **GET** /v1/{tenantId}/product/{productId}/configuration | Get Available Configuration |
| [**productConfiguratorGetAvailableConfiguration2()**](ConfigurationApi.md#productConfiguratorGetAvailableConfiguration2) | **POST** /v1/{tenantId}/product/{productId}/configuration | Get Available Configuration |
| [**productConfiguratorGetConfigurationFromSelections()**](ConfigurationApi.md#productConfiguratorGetConfigurationFromSelections) | **POST** /v1/{tenantId}/product/{productId}/configuration-from-selections | Get Configuration from Selections |


## `productConfiguratorGetAvailableConfiguration()`

```php
productConfiguratorGetAvailableConfiguration($tenant_id, $product_id, $configurator_id): \GeminiCommerce\ProductConfigurator\Model\ConfigurationGetAvailableConfigurationResponse
```

Get Available Configuration

Retrieve available configurations for a specific product and tenant. Use a GET request for read-only access or submit additional criteria in the body of a POST request for tailored configuration results. Streamline the retrieval of configurations effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$configurator_id = 'configurator_id_example'; // string | If not set, the service returns the active configurator

try {
    $result = $apiInstance->productConfiguratorGetAvailableConfiguration($tenant_id, $product_id, $configurator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->productConfiguratorGetAvailableConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **configurator_id** | **string**| If not set, the service returns the active configurator | [optional] |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ConfigurationGetAvailableConfigurationResponse**](../Model/ConfigurationGetAvailableConfigurationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetAvailableConfiguration2()`

```php
productConfiguratorGetAvailableConfiguration2($tenant_id, $product_id, $body): \GeminiCommerce\ProductConfigurator\Model\ConfigurationGetAvailableConfigurationResponse
```

Get Available Configuration

Retrieve available configurations for a specific product and tenant. Use a GET request for read-only access or submit additional criteria in the body of a POST request for tailored configuration results. Streamline the retrieval of configurations effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetAvailableConfiguration2Request(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetAvailableConfiguration2Request

try {
    $result = $apiInstance->productConfiguratorGetAvailableConfiguration2($tenant_id, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->productConfiguratorGetAvailableConfiguration2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetAvailableConfiguration2Request**](../Model/ProductConfiguratorGetAvailableConfiguration2Request.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ConfigurationGetAvailableConfigurationResponse**](../Model/ConfigurationGetAvailableConfigurationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetConfigurationFromSelections()`

```php
productConfiguratorGetConfigurationFromSelections($tenant_id, $product_id, $body): \GeminiCommerce\ProductConfigurator\Model\ConfigurationGetConfigurationFromSelectionsResponse
```

Get Configuration from Selections

Retrieve a configuration based on user selections for a specific product and tenant. Submit a POST request with user selections in the body to receive a tailored configuration. Enhance the user experience by dynamically generating configurations based on user input.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetConfigurationFromSelectionsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetConfigurationFromSelectionsRequest

try {
    $result = $apiInstance->productConfiguratorGetConfigurationFromSelections($tenant_id, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->productConfiguratorGetConfigurationFromSelections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorGetConfigurationFromSelectionsRequest**](../Model/ProductConfiguratorGetConfigurationFromSelectionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ConfigurationGetConfigurationFromSelectionsResponse**](../Model/ConfigurationGetConfigurationFromSelectionsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
