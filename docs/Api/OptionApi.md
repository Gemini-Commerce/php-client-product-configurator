# GeminiCommerce\ProductConfigurator\OptionApi

All URIs are relative to https://product-configurator.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productConfiguratorBulkCreateOptions()**](OptionApi.md#productConfiguratorBulkCreateOptions) | **POST** /v1/{tenantId}/step/{stepId}/option/create/bulk | Bulk Create Options |
| [**productConfiguratorBulkDeleteOptions()**](OptionApi.md#productConfiguratorBulkDeleteOptions) | **POST** /v1/{tenantId}/option/delete/bulk | Bulk Delete Options |
| [**productConfiguratorBulkUpdateOptions()**](OptionApi.md#productConfiguratorBulkUpdateOptions) | **PUT** /v1/{tenantId}/option/bulk | Bulk Update Options |
| [**productConfiguratorCopyOption()**](OptionApi.md#productConfiguratorCopyOption) | **POST** /v1/{tenantId}/option/{sourceOptionId}/copy | Copy Option |
| [**productConfiguratorCreateOption()**](OptionApi.md#productConfiguratorCreateOption) | **POST** /v1/{tenantId}/step/{stepId}/option/create | Create Option |
| [**productConfiguratorDeleteOption()**](OptionApi.md#productConfiguratorDeleteOption) | **DELETE** /v1/{tenantId}/option/{optionId} | Delete Option |
| [**productConfiguratorListOptions()**](OptionApi.md#productConfiguratorListOptions) | **POST** /v1/{tenantId}/step/{stepId}/page-size/{pageSize}/options | List Options |
| [**productConfiguratorUpdateOption()**](OptionApi.md#productConfiguratorUpdateOption) | **PUT** /v1/{tenantId}/option/{optionId} | Update Option |


## `productConfiguratorBulkCreateOptions()`

```php
productConfiguratorBulkCreateOptions($tenant_id, $step_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionBulkCreateResponse
```

Bulk Create Options

Add multiple options to an existing step simultaneously. Submit a POST request with the necessary option details in the body to efficiently expand the configuration possibilities in bulk. Streamline large-scale option management effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateOptionsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateOptionsRequest

try {
    $result = $apiInstance->productConfiguratorBulkCreateOptions($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorBulkCreateOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkCreateOptionsRequest**](../Model/ProductConfiguratorBulkCreateOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionBulkCreateResponse**](../Model/ProductconfiguratoroptionBulkCreateResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

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

Bulk Delete Options

Efficiently remove multiple options from configurations using a bulk delete operation. Specify the tenant ID and submit a POST request with the list of option IDs in the body for streamlined option management.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteOptionsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteOptionsRequest

try {
    $result = $apiInstance->productConfiguratorBulkDeleteOptions($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorBulkDeleteOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkDeleteOptionsRequest**](../Model/ProductConfiguratorBulkDeleteOptionsRequest.md)|  | |

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

## `productConfiguratorBulkUpdateOptions()`

```php
productConfiguratorBulkUpdateOptions($tenant_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionBulkUpdateResponse
```

Bulk Update Options

Effortlessly update multiple options. Specify the tenant ID and submit a PUT request with the updated option details in the body. Streamline the customization of a multitude of options in one go.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdateOptionsRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdateOptionsRequest

try {
    $result = $apiInstance->productConfiguratorBulkUpdateOptions($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorBulkUpdateOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorBulkUpdateOptionsRequest**](../Model/ProductConfiguratorBulkUpdateOptionsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionBulkUpdateResponse**](../Model/ProductconfiguratoroptionBulkUpdateResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCopyOption()`

```php
productConfiguratorCopyOption($tenant_id, $source_option_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity
```

Copy Option

Duplicate an existing option from the source to a specified tenant. Utilize a POST request with an empty body to initiate the copy process, creating a new option based on the source configuration. Streamline option replication effortlessly.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$source_option_id = 'source_option_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyOptionRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyOptionRequest

try {
    $result = $apiInstance->productConfiguratorCopyOption($tenant_id, $source_option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorCopyOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **source_option_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCopyOptionRequest**](../Model/ProductConfiguratorCopyOptionRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorCreateOption()`

```php
productConfiguratorCreateOption($tenant_id, $step_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity
```

Create Option

Integrate a new option into an existing step by specifying the tenant and step IDs. Use a POST request with the required option details in the body for seamless customization and expansion of product configurations.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateOptionRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateOptionRequest

try {
    $result = $apiInstance->productConfiguratorCreateOption($tenant_id, $step_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorCreateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorCreateOptionRequest**](../Model/ProductConfiguratorCreateOptionRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorDeleteOption()`

```php
productConfiguratorDeleteOption($tenant_id, $option_id): object
```

Delete Option

Remove a specific option by specifying the tenant and option IDs. Ensure precision in option management with a straightforward DELETE request, simplifying the elimination of unwanted configuration choices.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$option_id = 'option_id_example'; // string

try {
    $result = $apiInstance->productConfiguratorDeleteOption($tenant_id, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorDeleteOption: ', $e->getMessage(), PHP_EOL;
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

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorListOptions()`

```php
productConfiguratorListOptions($tenant_id, $step_id, $page_size, $body): \GeminiCommerce\ProductConfigurator\Model\OptionListOptionsResponse
```

List Options

Retrieve a list of options for a specific step based on tenant and step IDs. Customize results by specifying page size for efficient pagination. Submit an empty body to get all options associated with the step.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$step_id = 'step_id_example'; // string
$page_size = 56; // int
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest

try {
    $result = $apiInstance->productConfiguratorListOptions($tenant_id, $step_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorListOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **step_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorListPropertiesRequest**](../Model/ProductConfiguratorListPropertiesRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\OptionListOptionsResponse**](../Model/OptionListOptionsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productConfiguratorUpdateOption()`

```php
productConfiguratorUpdateOption($tenant_id, $option_id, $body): \GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity
```

Update Option

Modify an existing option by specifying the tenant and option IDs. Utilize a PUT request with updated option details in the body for seamless customization and fine-tuning of your product configurations.

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


$apiInstance = new GeminiCommerce\ProductConfigurator\Api\OptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$option_id = 'option_id_example'; // string
$body = new \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateOptionRequest(); // \GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateOptionRequest

try {
    $result = $apiInstance->productConfiguratorUpdateOption($tenant_id, $option_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionApi->productConfiguratorUpdateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **option_id** | **string**|  | |
| **body** | [**\GeminiCommerce\ProductConfigurator\Model\ProductConfiguratorUpdateOptionRequest**](../Model/ProductConfiguratorUpdateOptionRequest.md)|  | |

### Return type

[**\GeminiCommerce\ProductConfigurator\Model\ProductconfiguratoroptionEntity**](../Model/ProductconfiguratoroptionEntity.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization), [APIAuthorization](../../README.md#APIAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
