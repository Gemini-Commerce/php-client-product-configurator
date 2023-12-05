# OpenAPI\Client\ConfiguratorApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorCreateConfigurator()**](ConfiguratorApi.md#productConfiguratorCreateConfigurator) | **POST** /v1/{tenantId}/product/{productId}/create | Create Product Configurator |
| [**productConfiguratorGetConfiguratorByProductId()**](ConfiguratorApi.md#productConfiguratorGetConfiguratorByProductId) | **GET** /v1/{tenantId}/product/{productId} | Get Product Configurator by Product ID |
| [**productConfiguratorGetConfiguratorByProductId2()**](ConfiguratorApi.md#productConfiguratorGetConfiguratorByProductId2) | **GET** /v1/{tenantId}/product/{productId}/status/{status} | Get Product Configurator by Product ID |
| [**productConfiguratorListConfigurators()**](ConfiguratorApi.md#productConfiguratorListConfigurators) | **POST** /v1/{tenantId}/product/{productId}/page-size/{pageSize}/configurators | List Product Configurators |


## `productConfiguratorCreateConfigurator()`

```php
productConfiguratorCreateConfigurator($tenant_id, $product_id, $body): \OpenAPI\Client\Model\ProductconfiguratorconfiguratorCreateRequest
```

Create Product Configurator

Create a new product configurator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratorconfiguratorCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorconfiguratorCreateRequest

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
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorCreateRequest**](../Model/ProductconfiguratorconfiguratorCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorCreateRequest**](../Model/ProductconfiguratorconfiguratorCreateRequest.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetConfiguratorByProductId()`

```php
productConfiguratorGetConfiguratorByProductId($tenant_id, $product_id, $status): \OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity
```

Get Product Configurator by Product ID

Get a product configurator by product ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorApi(
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

[**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetConfiguratorByProductId2()`

```php
productConfiguratorGetConfiguratorByProductId2($tenant_id, $product_id, $status): \OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity
```

Get Product Configurator by Product ID

Get a product configurator by product ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorApi(
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

[**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListConfigurators()`

```php
productConfiguratorListConfigurators($tenant_id, $product_id, $page_size, $body): \OpenAPI\Client\Model\ConfiguratorListResponse
```

List Product Configurators

List all product configurators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConfiguratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$product_id = 'product_id_example'; // string
$page_size = 56; // int
$body = new \OpenAPI\Client\Model\ConfiguratorListRequest(); // \OpenAPI\Client\Model\ConfiguratorListRequest

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
| **body** | [**\OpenAPI\Client\Model\ConfiguratorListRequest**](../Model/ConfiguratorListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfiguratorListResponse**](../Model/ConfiguratorListResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
