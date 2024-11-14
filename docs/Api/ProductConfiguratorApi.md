# OpenAPI\Client\ProductConfiguratorApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorGetProperty()**](ProductConfiguratorApi.md#productConfiguratorGetProperty) | **GET** /v1/{tenantId}/property/{propertyId} |  |
| [**productConfiguratorListPropertiesByConfiguration()**](ProductConfiguratorApi.md#productConfiguratorListPropertiesByConfiguration) | **POST** /v1/{tenantId}/configurator/{configuratorId}/page-size/{pageSize}/properties |  |


## `productConfiguratorGetProperty()`

```php
productConfiguratorGetProperty($tenant_id, $property_id): \OpenAPI\Client\Model\ProductconfiguratorpropertyEntity
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$property_id = 'property_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorGetProperty($tenant_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorGetProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **property_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorpropertyEntity**](../Model/ProductconfiguratorpropertyEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListPropertiesByConfiguration()`

```php
productConfiguratorListPropertiesByConfiguration($tenant_id, $configurator_id, $page_size, $body): \OpenAPI\Client\Model\PropertyListPropertiesByConfigurationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string
$page_size = 'page_size_example'; // string
$body = new \OpenAPI\Client\Model\ProductConfiguratorListPropertiesByConfigurationRequest(); // \OpenAPI\Client\Model\ProductConfiguratorListPropertiesByConfigurationRequest

try {
    $result = $apiInstance->productConfiguratorListPropertiesByConfiguration($tenant_id, $configurator_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorListPropertiesByConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **page_size** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductConfiguratorListPropertiesByConfigurationRequest**](../Model/ProductConfiguratorListPropertiesByConfigurationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PropertyListPropertiesByConfigurationResponse**](../Model/PropertyListPropertiesByConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
