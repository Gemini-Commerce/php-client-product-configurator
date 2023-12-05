# GeminiCommerce\ProductConfigurator\MatrixApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorCreateMatrix()**](MatrixApi.md#productConfiguratorCreateMatrix) | **POST** /v1/{tenantId}/matrix/create | Create Matrix |
| [**productConfiguratorDeleteMatrix()**](MatrixApi.md#productConfiguratorDeleteMatrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId} | Delete Matrix |
| [**productConfiguratorGetMatrix()**](MatrixApi.md#productConfiguratorGetMatrix) | **GET** /v1/{tenantId}/matrix/{matrixId} | Get Matrix |
| [**productConfiguratorListMatrices()**](MatrixApi.md#productConfiguratorListMatrices) | **POST** /v1/{tenantId}/configurator/{configuratorId}/page-size/{pageSize}/matrices | List Matrices |
| [**productConfiguratorRemovePricelistFromMatrix()**](MatrixApi.md#productConfiguratorRemovePricelistFromMatrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId}/pricelist/{pricelistGrn} | Remove Pricelist from Matrix |
| [**productConfiguratorUpdateMatrix()**](MatrixApi.md#productConfiguratorUpdateMatrix) | **PUT** /v1/{tenantId}/matrix/{matrixId} | Update Matrix |


## `productConfiguratorCreateMatrix()`

```php
productConfiguratorCreateMatrix($tenant_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity
```

Create Matrix

Establish a new matrix by specifying the tenant ID. Utilize a POST request with the required matrix details in the body for seamless customization and expansion of matrix configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixCreateRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateMatrix($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorCreateMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixCreateRequest**](../Model/ProductconfiguratormatrixCreateRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteMatrix()`

```php
productConfiguratorDeleteMatrix($tenant_id, $matrix_id): object
```

Delete Matrix

Remove a specific matrix by specifying the tenant and matrix IDs. Ensure precision in matrix management with a straightforward DELETE request, simplifying the elimination of unwanted matrix configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$matrix_id = 'matrix_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteMatrix($tenant_id, $matrix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorDeleteMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetMatrix()`

```php
productConfiguratorGetMatrix($tenant_id, $matrix_id): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity
```

Get Matrix

Retrieve matrix details by specifying the tenant and matrix IDs. Utilize a GET request for a comprehensive view of matrix configurations within your product configurator service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$matrix_id = 'matrix_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorGetMatrix($tenant_id, $matrix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorGetMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListMatrices()`

```php
productConfiguratorListMatrices($tenant_id, $configurator_id, $page_size, $body): \GeminiCommerce\ProductConfigurator\Model\MatrixListMatricesResponse
```

List Matrices

Retrieve a list of matrices for a specific configurator based on tenant and configurator IDs. Customize results by specifying page size for efficient pagination. Submit an empty body to get all matrices associated with the configurator. Streamline matrix management effortlessly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string
$page_size = 'page_size_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\MatrixListMatricesRequest(); // \GeminiCommerce\ProductConfigurator\Model\MatrixListMatricesRequest

try {
    $result = $apiInstance->productConfiguratorListMatrices($tenant_id, $configurator_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorListMatrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **page_size** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\MatrixListMatricesRequest**](../Model/MatrixListMatricesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\MatrixListMatricesResponse**](../Model/MatrixListMatricesResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorRemovePricelistFromMatrix()`

```php
productConfiguratorRemovePricelistFromMatrix($tenant_id, $matrix_id, $pricelist_grn): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity
```

Remove Pricelist from Matrix

Remove a specific pricelist from a matrix by specifying the tenant, matrix, and pricelist IDs. Use a DELETE request for precise management of pricelist configurations within your product configurator service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$matrix_id = 'matrix_id_example'; // string
$pricelist_grn = 'pricelist_grn_example'; // string

try {
    $result = $apiInstance->productConfiguratorRemovePricelistFromMatrix($tenant_id, $matrix_id, $pricelist_grn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorRemovePricelistFromMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **pricelist_grn** | **string**|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateMatrix()`

```php
productConfiguratorUpdateMatrix($tenant_id, $matrix_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity
```

Update Matrix

Modify an existing matrix by specifying the tenant and matrix IDs. Utilize a PUT request with updated matrix details in the body for seamless customization and fine-tuning of your product configurations. Keep your matrices in sync effortlessly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\ProductConfigurator\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\MatrixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$matrix_id = 'matrix_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixUpdateRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateMatrix($tenant_id, $matrix_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatrixApi->productConfiguratorUpdateMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixUpdateRequest**](../Model/ProductconfiguratormatrixUpdateRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
