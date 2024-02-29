# GeminiCommerce\ProductConfigurator\PropertyApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorBulkCreateProperties()**](PropertyApi.md#productConfiguratorBulkCreateProperties) | **POST** /v1/{tenantId}/property/create/bulk | Bulk Create Properties |
| [**productConfiguratorBulkUpdateProperties()**](PropertyApi.md#productConfiguratorBulkUpdateProperties) | **PUT** /v1/{tenantId}/properties/bulk | Bulk Update Properties |
| [**productConfiguratorCreateProperty()**](PropertyApi.md#productConfiguratorCreateProperty) | **POST** /v1/{tenantId}/property/create | Create Property |
| [**productConfiguratorListProperties()**](PropertyApi.md#productConfiguratorListProperties) | **POST** /v1/{tenantId}/matrix/{matrixId}/page-size/{pageSize}/properties | List Properties |
| [**productConfiguratorUpdateProperty()**](PropertyApi.md#productConfiguratorUpdateProperty) | **PUT** /v1/{tenantId}/property/{propertyId} | Update Property |


## `productConfiguratorBulkCreateProperties()`

```php
productConfiguratorBulkCreateProperties($tenant_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyBulkCreateResponse
```

Bulk Create Properties

Efficiently add multiple properties to configurations with a bulk create operation. Specify the tenant ID and submit a POST request with the necessary property details in the body for streamlined property management.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreatePropertiesRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreatePropertiesRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateProperties($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->productConfiguratorBulkCreateProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreatePropertiesRequest**](../Model/ProductConfiguratorBulkCreatePropertiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyBulkCreateResponse**](../Model/ProductconfiguratorpropertyBulkCreateResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkUpdateProperties()`

```php
productConfiguratorBulkUpdateProperties($tenant_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyBulkUpdateResponse
```

Bulk Update Properties

Effortlessly update multiple properties. Specify the tenant ID and submit a PUT request with the updated property details in the body. Streamline the customization of a multitude of properties in one go.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdatePropertiesRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdatePropertiesRequest

try {
    $result = $apiInstance->productConfiguratorBulkUpdateProperties($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->productConfiguratorBulkUpdateProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdatePropertiesRequest**](../Model/ProductConfiguratorBulkUpdatePropertiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyBulkUpdateResponse**](../Model/ProductconfiguratorpropertyBulkUpdateResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateProperty()`

```php
productConfiguratorCreateProperty($tenant_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyEntity
```

Create Property

Integrate a new property into configurations by specifying the tenant ID. Use a POST request with the required property details in the body for seamless customization and expansion of product configurations.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreatePropertyRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreatePropertyRequest

try {
    $result = $apiInstance->productConfiguratorCreateProperty($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->productConfiguratorCreateProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreatePropertyRequest**](../Model/ProductConfiguratorCreatePropertyRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyEntity**](../Model/ProductconfiguratorpropertyEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListProperties()`

```php
productConfiguratorListProperties($tenant_id, $matrix_id, $page_size, $body): \GeminiCommerce\ProductConfigurator\Model\PropertyListPropertiesResponse
```

List Properties

Retrieve a list of properties for a specific matrix based on tenant and matrix IDs. Customize results by specifying page size for efficient pagination. Submit an empty body to get all properties associated with the matrix.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$matrix_id = 'matrix_id_example'; // string
$page_size = 'page_size_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest

try {
    $result = $apiInstance->productConfiguratorListProperties($tenant_id, $matrix_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->productConfiguratorListProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **page_size** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest**](../Model/ProductConfiguratorListPropertiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\PropertyListPropertiesResponse**](../Model/PropertyListPropertiesResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateProperty()`

```php
productConfiguratorUpdateProperty($tenant_id, $property_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyEntity
```

Update Property

Modify an existing property by specifying the tenant and property IDs. Utilize a PUT request with updated property details in the body for seamless customization and fine-tuning of your product configurations.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$property_id = 'property_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdatePropertyRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdatePropertyRequest

try {
    $result = $apiInstance->productConfiguratorUpdateProperty($tenant_id, $property_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->productConfiguratorUpdateProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **property_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdatePropertyRequest**](../Model/ProductConfiguratorUpdatePropertyRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorpropertyEntity**](../Model/ProductconfiguratorpropertyEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
