# GeminiCommerce\ProductConfigurator\StepApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorBulkCreateSteps()**](StepApi.md#productConfiguratorBulkCreateSteps) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create/bulk | Bulk Create Steps |
| [**productConfiguratorBulkDeleteSteps()**](StepApi.md#productConfiguratorBulkDeleteSteps) | **POST** /v1/{tenantId}/step/delete/bulk | Bulk Delete Steps |
| [**productConfiguratorCopyStep()**](StepApi.md#productConfiguratorCopyStep) | **POST** /v1/{tenantId}/step/{sourceStepId}/copy | Copy Step |
| [**productConfiguratorCreateStep()**](StepApi.md#productConfiguratorCreateStep) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create | Create Step |
| [**productConfiguratorDeleteStep()**](StepApi.md#productConfiguratorDeleteStep) | **DELETE** /v1/{tenantId}/step/{stepId} | Delete Step |
| [**productConfiguratorUpdateStep()**](StepApi.md#productConfiguratorUpdateStep) | **PUT** /v1/{tenantId}/step/{stepId} | Update Step |


## `productConfiguratorBulkCreateSteps()`

```php
productConfiguratorBulkCreateSteps($tenant_id, $configurator_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepBulkCreateResponse
```

Bulk Create Steps

Add multiple steps to an existing product configurator simultaneously. Submit a POST request with the necessary step details in the body to efficiently extend the configuration process in bulk. Simplify large-scale configuration management effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateStepsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateStepsRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateSteps($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorBulkCreateSteps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateStepsRequest**](../Model/ProductConfiguratorBulkCreateStepsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepBulkCreateResponse**](../Model/ProductconfiguratorstepBulkCreateResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

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

Bulk Delete Steps

Efficiently remove multiple steps from a product configurator using a bulk delete operation. Specify the tenant ID and submit a POST request with the list of step IDs in the body for streamlined configuration management.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteStepsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteStepsRequest

try {
    $result = $apiInstance->productConfiguratorBulkDeleteSteps($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorBulkDeleteSteps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteStepsRequest**](../Model/ProductConfiguratorBulkDeleteStepsRequest.md)|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCopyStep()`

```php
productConfiguratorCopyStep($tenant_id, $source_step_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity
```

Copy Step

Duplicate an existing step from the source to a specified tenant. Utilize a POST request with an empty body to initiate the copy process, creating a new step based on the source configuration. Streamline step replication effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$source_step_id = 'source_step_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyStepRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyStepRequest

try {
    $result = $apiInstance->productConfiguratorCopyStep($tenant_id, $source_step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorCopyStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_step_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyStepRequest**](../Model/ProductConfiguratorCopyStepRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateStep()`

```php
productConfiguratorCreateStep($tenant_id, $configurator_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity
```

Create Step

Add a new step to an existing product configurator by specifying the tenant and configurator IDs. Utilize a POST request with the required step details in the body to seamlessly extend the configuration process.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$configurator_id = 'configurator_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateStepRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateStepRequest

try {
    $result = $apiInstance->productConfiguratorCreateStep($tenant_id, $configurator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorCreateStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **configurator_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateStepRequest**](../Model/ProductConfiguratorCreateStepRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteStep()`

```php
productConfiguratorDeleteStep($tenant_id, $step_id): \GeminiCommerce\ProductConfigurator\Model\GooglerpcStatus
```

Delete Step

Remove a step from a product configurator by specifying the tenant and step IDs. Ensure precision in configuration management with a straightforward DELETE request, simplifying the elimination of unwanted steps.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteStep($tenant_id, $step_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorDeleteStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\GooglerpcStatus**](../Model/GooglerpcStatus.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateStep()`

```php
productConfiguratorUpdateStep($tenant_id, $step_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity
```

Update Step

Modify an existing step within a product configurator by specifying the tenant and step IDs. Utilize a PUT request with updated step details in the body for seamless customization and fine-tuning of your product configurations.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\StepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateStepRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateStepRequest

try {
    $result = $apiInstance->productConfiguratorUpdateStep($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepApi->productConfiguratorUpdateStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateStepRequest**](../Model/ProductConfiguratorUpdateStepRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratorstepEntity**](../Model/ProductconfiguratorstepEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
