# OpenAPI\Client\ProductConfiguratorApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorBulkCreateOptions()**](ProductConfiguratorApi.md#productConfiguratorBulkCreateOptions) | **POST** /v1/{tenantId}/step/{stepId}/option/create/bulk |  |
| [**productConfiguratorBulkCreateProperties()**](ProductConfiguratorApi.md#productConfiguratorBulkCreateProperties) | **POST** /v1/{tenantId}/property/create/bulk |  |
| [**productConfiguratorBulkCreateSteps()**](ProductConfiguratorApi.md#productConfiguratorBulkCreateSteps) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create/bulk |  |
| [**productConfiguratorBulkDeleteOptions()**](ProductConfiguratorApi.md#productConfiguratorBulkDeleteOptions) | **POST** /v1/{tenantId}/option/delete/bulk |  |
| [**productConfiguratorBulkDeleteSteps()**](ProductConfiguratorApi.md#productConfiguratorBulkDeleteSteps) | **POST** /v1/{tenantId}/step/delete/bulk |  |
| [**productConfiguratorBulkUpdateOptions()**](ProductConfiguratorApi.md#productConfiguratorBulkUpdateOptions) | **PUT** /v1/{tenantId}/option/bulk |  |
| [**productConfiguratorBulkUpdateProperties()**](ProductConfiguratorApi.md#productConfiguratorBulkUpdateProperties) | **PUT** /v1/{tenantId}/properties/bulk |  |
| [**productConfiguratorCopyConfigurator()**](ProductConfiguratorApi.md#productConfiguratorCopyConfigurator) | **POST** /v1/{tenantId}/product/{sourceConfiguratorId}/copy |  |
| [**productConfiguratorCopyOption()**](ProductConfiguratorApi.md#productConfiguratorCopyOption) | **POST** /v1/{tenantId}/option/{sourceOptionId}/copy |  |
| [**productConfiguratorCopyStep()**](ProductConfiguratorApi.md#productConfiguratorCopyStep) | **POST** /v1/{tenantId}/step/{sourceStepId}/copy |  |
| [**productConfiguratorCreateDependency()**](ProductConfiguratorApi.md#productConfiguratorCreateDependency) | **POST** /v1/{tenantId}/step/{stepId}/dependency/create |  |
| [**productConfiguratorCreateMatrix()**](ProductConfiguratorApi.md#productConfiguratorCreateMatrix) | **POST** /v1/{tenantId}/matrix/create |  |
| [**productConfiguratorCreateOption()**](ProductConfiguratorApi.md#productConfiguratorCreateOption) | **POST** /v1/{tenantId}/step/{stepId}/option/create |  |
| [**productConfiguratorCreateProperty()**](ProductConfiguratorApi.md#productConfiguratorCreateProperty) | **POST** /v1/{tenantId}/property/create |  |
| [**productConfiguratorCreateStep()**](ProductConfiguratorApi.md#productConfiguratorCreateStep) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create |  |
| [**productConfiguratorDeleteConfigurator()**](ProductConfiguratorApi.md#productConfiguratorDeleteConfigurator) | **DELETE** /v1/{tenantId}/configurator/{configuratorId} |  |
| [**productConfiguratorDeleteDependency()**](ProductConfiguratorApi.md#productConfiguratorDeleteDependency) | **DELETE** /v1/{tenantId}/dependency/{dependencyId} |  |
| [**productConfiguratorDeleteMatrix()**](ProductConfiguratorApi.md#productConfiguratorDeleteMatrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId} |  |
| [**productConfiguratorDeleteOption()**](ProductConfiguratorApi.md#productConfiguratorDeleteOption) | **DELETE** /v1/{tenantId}/option/{optionId} |  |
| [**productConfiguratorDeleteStep()**](ProductConfiguratorApi.md#productConfiguratorDeleteStep) | **DELETE** /v1/{tenantId}/step/{stepId} |  |
| [**productConfiguratorGetAvailableConfiguration()**](ProductConfiguratorApi.md#productConfiguratorGetAvailableConfiguration) | **GET** /v1/{tenantId}/product/{productId}/configuration |  |
| [**productConfiguratorGetAvailableConfiguration2()**](ProductConfiguratorApi.md#productConfiguratorGetAvailableConfiguration2) | **POST** /v1/{tenantId}/product/{productId}/configuration |  |
| [**productConfiguratorGetConfigurationFromSelections()**](ProductConfiguratorApi.md#productConfiguratorGetConfigurationFromSelections) | **POST** /v1/{tenantId}/product/{productId}/configuration-from-selections |  |
| [**productConfiguratorGetMatrix()**](ProductConfiguratorApi.md#productConfiguratorGetMatrix) | **GET** /v1/{tenantId}/matrix/{matrixId} |  |
| [**productConfiguratorListDependencies()**](ProductConfiguratorApi.md#productConfiguratorListDependencies) | **POST** /v1/{tenantId}/page-size/{pageSize}/dependencies |  |
| [**productConfiguratorListMatrices()**](ProductConfiguratorApi.md#productConfiguratorListMatrices) | **POST** /v1/{tenantId}/configurator/{configuratorId}/page-size/{pageSize}/matrices |  |
| [**productConfiguratorListOptions()**](ProductConfiguratorApi.md#productConfiguratorListOptions) | **POST** /v1/{tenantId}/step/{stepId}/page-size/{pageSize}/options |  |
| [**productConfiguratorListProperties()**](ProductConfiguratorApi.md#productConfiguratorListProperties) | **POST** /v1/{tenantId}/matrix/{matrixId}/page-size/{pageSize}/properties |  |
| [**productConfiguratorRemovePricelistFromMatrix()**](ProductConfiguratorApi.md#productConfiguratorRemovePricelistFromMatrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId}/pricelist/{pricelistGrn} |  |
| [**productConfiguratorUpdateConfigurator()**](ProductConfiguratorApi.md#productConfiguratorUpdateConfigurator) | **PUT** /v1/{tenantId}/configurator/{configuratorId} |  |
| [**productConfiguratorUpdateDependency()**](ProductConfiguratorApi.md#productConfiguratorUpdateDependency) | **PUT** /v1/{tenantId}/dependency/{dependencyId} |  |
| [**productConfiguratorUpdateMatrix()**](ProductConfiguratorApi.md#productConfiguratorUpdateMatrix) | **PUT** /v1/{tenantId}/matrix/{matrixId} |  |
| [**productConfiguratorUpdateOption()**](ProductConfiguratorApi.md#productConfiguratorUpdateOption) | **PUT** /v1/{tenantId}/option/{optionId} |  |
| [**productConfiguratorUpdateProperty()**](ProductConfiguratorApi.md#productConfiguratorUpdateProperty) | **PUT** /v1/{tenantId}/property/{propertyId} |  |
| [**productConfiguratorUpdateStep()**](ProductConfiguratorApi.md#productConfiguratorUpdateStep) | **PUT** /v1/{tenantId}/step/{stepId} |  |


## `productConfiguratorBulkCreateOptions()`

```php
productConfiguratorBulkCreateOptions($tenant_id, $step_id, $body): \OpenAPI\Client\Model\ProductconfiguratoroptionBulkCreateResponse
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
$step_id = 'step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionBulkCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionBulkCreateRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateOptions($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkCreateOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionBulkCreateRequest**](../Model/ProductconfiguratoroptionBulkCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratoroptionBulkCreateResponse**](../Model/ProductconfiguratoroptionBulkCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkCreateProperties()`

```php
productConfiguratorBulkCreateProperties($tenant_id, $body): \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkCreateResponse
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkCreateRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateProperties($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkCreateProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorpropertyBulkCreateRequest**](../Model/ProductconfiguratorpropertyBulkCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorpropertyBulkCreateResponse**](../Model/ProductconfiguratorpropertyBulkCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkCreateSteps()`

```php
productConfiguratorBulkCreateSteps($tenant_id, $configurator_id, $body): \OpenAPI\Client\Model\ProductconfiguratorstepBulkCreateResponse
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorstepBulkCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorstepBulkCreateRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateSteps($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkCreateSteps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorstepBulkCreateRequest**](../Model/ProductconfiguratorstepBulkCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorstepBulkCreateResponse**](../Model/ProductconfiguratorstepBulkCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkDeleteOptions()`

```php
productConfiguratorBulkDeleteOptions($tenant_id, $body): object
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
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionBulkDeleteRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionBulkDeleteRequest

try {
    $result = $apiInstance->productConfiguratorBulkDeleteOptions($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkDeleteOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionBulkDeleteRequest**](../Model/ProductconfiguratoroptionBulkDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkDeleteSteps()`

```php
productConfiguratorBulkDeleteSteps($tenant_id, $body): object
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorstepBulkDeleteRequest(); // \OpenAPI\Client\Model\ProductconfiguratorstepBulkDeleteRequest

try {
    $result = $apiInstance->productConfiguratorBulkDeleteSteps($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkDeleteSteps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorstepBulkDeleteRequest**](../Model/ProductconfiguratorstepBulkDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkUpdateOptions()`

```php
productConfiguratorBulkUpdateOptions($tenant_id, $body): \OpenAPI\Client\Model\ProductconfiguratoroptionBulkUpdateResponse
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
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionBulkUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionBulkUpdateRequest

try {
    $result = $apiInstance->productConfiguratorBulkUpdateOptions($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkUpdateOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionBulkUpdateRequest**](../Model/ProductconfiguratoroptionBulkUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratoroptionBulkUpdateResponse**](../Model/ProductconfiguratoroptionBulkUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorBulkUpdateProperties()`

```php
productConfiguratorBulkUpdateProperties($tenant_id, $body): \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkUpdateResponse
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorpropertyBulkUpdateRequest

try {
    $result = $apiInstance->productConfiguratorBulkUpdateProperties($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorBulkUpdateProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorpropertyBulkUpdateRequest**](../Model/ProductconfiguratorpropertyBulkUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorpropertyBulkUpdateResponse**](../Model/ProductconfiguratorpropertyBulkUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCopyConfigurator()`

```php
productConfiguratorCopyConfigurator($tenant_id, $source_configurator_id, $body): \OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity
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
$source_configurator_id = 'source_configurator_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratorconfiguratorCopyRequest(); // \OpenAPI\Client\Model\ProductconfiguratorconfiguratorCopyRequest

try {
    $result = $apiInstance->productConfiguratorCopyConfigurator($tenant_id, $source_configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCopyConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_configurator_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorCopyRequest**](../Model/ProductconfiguratorconfiguratorCopyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCopyOption()`

```php
productConfiguratorCopyOption($tenant_id, $source_option_id, $body): \OpenAPI\Client\Model\ProductconfiguratoroptionEntity
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
$source_option_id = 'source_option_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionCopyRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionCopyRequest

try {
    $result = $apiInstance->productConfiguratorCopyOption($tenant_id, $source_option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCopyOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_option_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionCopyRequest**](../Model/ProductconfiguratoroptionCopyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCopyStep()`

```php
productConfiguratorCopyStep($tenant_id, $source_step_id, $body): \OpenAPI\Client\Model\ProductconfiguratorstepEntity
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
$source_step_id = 'source_step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratorstepCopyRequest(); // \OpenAPI\Client\Model\ProductconfiguratorstepCopyRequest

try {
    $result = $apiInstance->productConfiguratorCopyStep($tenant_id, $source_step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCopyStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorstepCopyRequest**](../Model/ProductconfiguratorstepCopyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateDependency()`

```php
productConfiguratorCreateDependency($tenant_id, $step_id, $body): \OpenAPI\Client\Model\ProductconfiguratordependencyEntity
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
$step_id = 'step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratordependencyCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratordependencyCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateDependency($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCreateDependency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratordependencyCreateRequest**](../Model/ProductconfiguratordependencyCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratordependencyEntity**](../Model/ProductconfiguratordependencyEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateMatrix()`

```php
productConfiguratorCreateMatrix($tenant_id, $body): \OpenAPI\Client\Model\ProductconfiguratormatrixEntity
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
$body = new \OpenAPI\Client\Model\ProductconfiguratormatrixCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratormatrixCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateMatrix($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCreateMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratormatrixCreateRequest**](../Model/ProductconfiguratormatrixCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateOption()`

```php
productConfiguratorCreateOption($tenant_id, $step_id, $body): \OpenAPI\Client\Model\ProductconfiguratoroptionEntity
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
$step_id = 'step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateOption($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCreateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionCreateRequest**](../Model/ProductconfiguratoroptionCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateProperty()`

```php
productConfiguratorCreateProperty($tenant_id, $body): \OpenAPI\Client\Model\ProductconfiguratorpropertyEntity
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorpropertyCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorpropertyCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateProperty($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCreateProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorpropertyCreateRequest**](../Model/ProductconfiguratorpropertyCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorpropertyEntity**](../Model/ProductconfiguratorpropertyEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateStep()`

```php
productConfiguratorCreateStep($tenant_id, $configurator_id, $body): \OpenAPI\Client\Model\ProductconfiguratorstepEntity
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorstepCreateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorstepCreateRequest

try {
    $result = $apiInstance->productConfiguratorCreateStep($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorCreateStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorstepCreateRequest**](../Model/ProductconfiguratorstepCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

No authorization required

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

try {
    $result = $apiInstance->productConfiguratorDeleteConfigurator($tenant_id, $configurator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorDeleteConfigurator: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteDependency()`

```php
productConfiguratorDeleteDependency($tenant_id, $dependency_id): object
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
$dependency_id = 'dependency_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteDependency($tenant_id, $dependency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorDeleteDependency: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteMatrix()`

```php
productConfiguratorDeleteMatrix($tenant_id, $matrix_id): object
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
$matrix_id = 'matrix_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteMatrix($tenant_id, $matrix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorDeleteMatrix: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteOption()`

```php
productConfiguratorDeleteOption($tenant_id, $option_id): object
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
$option_id = 'option_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteOption($tenant_id, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorDeleteOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **option_id** | **string**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteStep()`

```php
productConfiguratorDeleteStep($tenant_id, $step_id): object
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
$step_id = 'step_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteStep($tenant_id, $step_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorDeleteStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetAvailableConfiguration()`

```php
productConfiguratorGetAvailableConfiguration($tenant_id, $product_id, $configurator_id): \OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationResponse
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
$product_id = 'product_id_example'; // string
$configurator_id = 'configurator_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorGetAvailableConfiguration($tenant_id, $product_id, $configurator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorGetAvailableConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **configurator_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationResponse**](../Model/ConfigurationGetAvailableConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetAvailableConfiguration2()`

```php
productConfiguratorGetAvailableConfiguration2($tenant_id, $product_id, $body): \OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationResponse
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
$product_id = 'product_id_example'; // string
$body = new \OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationRequest(); // \OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationRequest

try {
    $result = $apiInstance->productConfiguratorGetAvailableConfiguration2($tenant_id, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorGetAvailableConfiguration2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationRequest**](../Model/ConfigurationGetAvailableConfigurationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigurationGetAvailableConfigurationResponse**](../Model/ConfigurationGetAvailableConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetConfigurationFromSelections()`

```php
productConfiguratorGetConfigurationFromSelections($tenant_id, $product_id, $body): \OpenAPI\Client\Model\ConfigurationGetConfigurationFromSelectionsResponse
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
$product_id = 'product_id_example'; // string
$body = new \OpenAPI\Client\Model\ConfigurationGetConfigurationFromSelectionsRequest(); // \OpenAPI\Client\Model\ConfigurationGetConfigurationFromSelectionsRequest

try {
    $result = $apiInstance->productConfiguratorGetConfigurationFromSelections($tenant_id, $product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorGetConfigurationFromSelections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **product_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ConfigurationGetConfigurationFromSelectionsRequest**](../Model/ConfigurationGetConfigurationFromSelectionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigurationGetConfigurationFromSelectionsResponse**](../Model/ConfigurationGetConfigurationFromSelectionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorGetMatrix()`

```php
productConfiguratorGetMatrix($tenant_id, $matrix_id): \OpenAPI\Client\Model\ProductconfiguratormatrixEntity
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
$matrix_id = 'matrix_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorGetMatrix($tenant_id, $matrix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorGetMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

No authorization required

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
$page_size = 56; // int
$body = new \OpenAPI\Client\Model\DependencyListDependenciesRequest(); // \OpenAPI\Client\Model\DependencyListDependenciesRequest

try {
    $result = $apiInstance->productConfiguratorListDependencies($tenant_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorListDependencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\OpenAPI\Client\Model\DependencyListDependenciesRequest**](../Model/DependencyListDependenciesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DependencyListDependenciesResponse**](../Model/DependencyListDependenciesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListMatrices()`

```php
productConfiguratorListMatrices($tenant_id, $configurator_id, $page_size, $body): \OpenAPI\Client\Model\MatrixListMatricesResponse
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
$body = new \OpenAPI\Client\Model\MatrixListMatricesRequest(); // \OpenAPI\Client\Model\MatrixListMatricesRequest

try {
    $result = $apiInstance->productConfiguratorListMatrices($tenant_id, $configurator_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorListMatrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **page_size** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\MatrixListMatricesRequest**](../Model/MatrixListMatricesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MatrixListMatricesResponse**](../Model/MatrixListMatricesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListOptions()`

```php
productConfiguratorListOptions($tenant_id, $step_id, $page_size, $body): \OpenAPI\Client\Model\OptionListOptionsResponse
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
$step_id = 'step_id_example'; // string
$page_size = 56; // int
$body = new \OpenAPI\Client\Model\OptionListOptionsRequest(); // \OpenAPI\Client\Model\OptionListOptionsRequest

try {
    $result = $apiInstance->productConfiguratorListOptions($tenant_id, $step_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorListOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\OpenAPI\Client\Model\OptionListOptionsRequest**](../Model/OptionListOptionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OptionListOptionsResponse**](../Model/OptionListOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListProperties()`

```php
productConfiguratorListProperties($tenant_id, $matrix_id, $page_size, $body): \OpenAPI\Client\Model\PropertyListPropertiesResponse
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
$matrix_id = 'matrix_id_example'; // string
$page_size = 'page_size_example'; // string
$body = new \OpenAPI\Client\Model\PropertyListPropertiesRequest(); // \OpenAPI\Client\Model\PropertyListPropertiesRequest

try {
    $result = $apiInstance->productConfiguratorListProperties($tenant_id, $matrix_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorListProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **page_size** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\PropertyListPropertiesRequest**](../Model/PropertyListPropertiesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PropertyListPropertiesResponse**](../Model/PropertyListPropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorRemovePricelistFromMatrix()`

```php
productConfiguratorRemovePricelistFromMatrix($tenant_id, $matrix_id, $pricelist_grn): \OpenAPI\Client\Model\ProductconfiguratormatrixEntity
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
$matrix_id = 'matrix_id_example'; // string
$pricelist_grn = 'pricelist_grn_example'; // string

try {
    $result = $apiInstance->productConfiguratorRemovePricelistFromMatrix($tenant_id, $matrix_id, $pricelist_grn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorRemovePricelistFromMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **pricelist_grn** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateConfigurator()`

```php
productConfiguratorUpdateConfigurator($tenant_id, $configurator_id, $body): \OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorconfiguratorUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorconfiguratorUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateConfigurator($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateConfigurator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorUpdateRequest**](../Model/ProductconfiguratorconfiguratorUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorconfiguratorEntity**](../Model/ProductconfiguratorconfiguratorEntity.md)

### Authorization

No authorization required

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
$dependency_id = 'dependency_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratordependencyUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratordependencyUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateDependency($tenant_id, $dependency_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateDependency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **dependency_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratordependencyUpdateRequest**](../Model/ProductconfiguratordependencyUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratordependencyEntity**](../Model/ProductconfiguratordependencyEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateMatrix()`

```php
productConfiguratorUpdateMatrix($tenant_id, $matrix_id, $body): \OpenAPI\Client\Model\ProductconfiguratormatrixEntity
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
$matrix_id = 'matrix_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratormatrixUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratormatrixUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateMatrix($tenant_id, $matrix_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **matrix_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratormatrixUpdateRequest**](../Model/ProductconfiguratormatrixUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratormatrixEntity**](../Model/ProductconfiguratormatrixEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateOption()`

```php
productConfiguratorUpdateOption($tenant_id, $option_id, $body): \OpenAPI\Client\Model\ProductconfiguratoroptionEntity
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
$option_id = 'option_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratoroptionUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratoroptionUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateOption($tenant_id, $option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **option_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratoroptionUpdateRequest**](../Model/ProductconfiguratoroptionUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateProperty()`

```php
productConfiguratorUpdateProperty($tenant_id, $property_id, $body): \OpenAPI\Client\Model\ProductconfiguratorpropertyEntity
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
$body = new \OpenAPI\Client\Model\ProductconfiguratorpropertyUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorpropertyUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateProperty($tenant_id, $property_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **property_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorpropertyUpdateRequest**](../Model/ProductconfiguratorpropertyUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorpropertyEntity**](../Model/ProductconfiguratorpropertyEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateStep()`

```php
productConfiguratorUpdateStep($tenant_id, $step_id, $body): \OpenAPI\Client\Model\ProductconfiguratorstepEntity
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
$step_id = 'step_id_example'; // string
$body = new \OpenAPI\Client\Model\ProductconfiguratorstepUpdateRequest(); // \OpenAPI\Client\Model\ProductconfiguratorstepUpdateRequest

try {
    $result = $apiInstance->productConfiguratorUpdateStep($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorApi->productConfiguratorUpdateStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\ProductconfiguratorstepUpdateRequest**](../Model/ProductconfiguratorstepUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
