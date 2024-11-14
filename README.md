# productconfigurator

## Introduction

This comprehensive guide will equip you with the knowledge to integrate and leverage our Product Configurator Service in your applications.

## Quick Start

Get up and running in no time! Follow these steps to kickstart your integration:

1. **Authentication:** Obtain your integration JWT to authenticate your requests.
2. **Client Libraries:** Explore our GitHub repositories to grab client libraries in your preferred programming language.
3. **API Overview:** Familiarize yourself with our RESTful API using the OpenAPI specification.

## Integration

### API Overview

Our RESTful API is the gateway to unlocking the full potential of Product Configurator. Check out the detailed [API Reference](/docs/category/configurator) for a granular understanding of each endpoint and request/response format.

### Client Libraries

To expedite your integration process, we provide client libraries for various programming languages. Find the one that suits your stack in our [GitHub repositories](https://github.com/Gemini-Commerce).

### Authentication

Security is paramount. Learn how to authenticate your requests using JWT. This ensures a secure and reliable connection between your application and Product Configurator.

## Configuration Management

### Configurator Lifecycle

Understand the lifecycle of configurators, from draft to active and deleted. This flexibility allows you to manage configurations at your own pace.

### Steps and Options

Configure product steps with ease and define options effortlessly. Explore the power of dependencies to create dynamic and intuitive configurations.

### Matrices

Delve into matrices—your secret weapon. Explore price and weight matrices, and learn how configured steps influence properties and pricing.

### Price Management

Unleash dynamic pricing with our versatile price matrices. From fixed prices to incremental structures, adapt to diverse pricing models effortlessly.

## Security

Your data is in safe hands. Discover how Product Configurator ensures security through JWT authentication, safeguarding your sensitive information.

## Backward Compatibility

Stay ahead of the curve. Learn about our versioning strategy, providing backward compatibility while allowing our service to evolve seamlessly.

## Developer Support

Have questions? Need assistance? Write to us at [info@gemini-commerce.com](mailto:info@gemini-commerce.com) and we will get back to you.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-product-configurator.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-product-configurator": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/productconfigurator/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: standardAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIAuthorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
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

## API Endpoints

All URIs are relative to *https://product-configurator.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfigurationApi* | [**productConfiguratorGetAvailableConfiguration**](docs/Api/ConfigurationApi.md#productconfiguratorgetavailableconfiguration) | **GET** /v1/{tenantId}/product/{productId}/configuration | Get Available Configuration
*ConfigurationApi* | [**productConfiguratorGetAvailableConfiguration2**](docs/Api/ConfigurationApi.md#productconfiguratorgetavailableconfiguration2) | **POST** /v1/{tenantId}/product/{productId}/configuration | Get Available Configuration
*ConfigurationApi* | [**productConfiguratorGetConfigurationFromSelections**](docs/Api/ConfigurationApi.md#productconfiguratorgetconfigurationfromselections) | **POST** /v1/{tenantId}/product/{productId}/configuration-from-selections | Get Configuration from Selections
*ConfiguratorApi* | [**productConfiguratorCopyConfigurator**](docs/Api/ConfiguratorApi.md#productconfiguratorcopyconfigurator) | **POST** /v1/{tenantId}/product/{sourceConfiguratorId}/copy | Copy Configurator
*ConfiguratorApi* | [**productConfiguratorCreateConfigurator**](docs/Api/ConfiguratorApi.md#productconfiguratorcreateconfigurator) | **POST** /v1/{tenantId}/product/{productId}/create | Create Configurator
*ConfiguratorApi* | [**productConfiguratorDeleteConfigurator**](docs/Api/ConfiguratorApi.md#productconfiguratordeleteconfigurator) | **DELETE** /v1/{tenantId}/configurator/{configuratorId} | Delete Configurator
*ConfiguratorApi* | [**productConfiguratorGetConfiguratorByProductId**](docs/Api/ConfiguratorApi.md#productconfiguratorgetconfiguratorbyproductid) | **GET** /v1/{tenantId}/product/{productId} | Get Configurator by Product ID
*ConfiguratorApi* | [**productConfiguratorGetConfiguratorByProductId2**](docs/Api/ConfiguratorApi.md#productconfiguratorgetconfiguratorbyproductid2) | **GET** /v1/{tenantId}/product/{productId}/status/{status} | Get Configurator by Product ID
*ConfiguratorApi* | [**productConfiguratorListConfigurators**](docs/Api/ConfiguratorApi.md#productconfiguratorlistconfigurators) | **POST** /v1/{tenantId}/product/{productId}/page-size/{pageSize}/configurators | List Product Configurators
*ConfiguratorApi* | [**productConfiguratorUpdateConfigurator**](docs/Api/ConfiguratorApi.md#productconfiguratorupdateconfigurator) | **PUT** /v1/{tenantId}/configurator/{configuratorId} | Update Configurator
*DependencyApi* | [**productConfiguratorCreateDependency**](docs/Api/DependencyApi.md#productconfiguratorcreatedependency) | **POST** /v1/{tenantId}/step/{stepId}/dependency/create | Create Dependency
*DependencyApi* | [**productConfiguratorDeleteDependency**](docs/Api/DependencyApi.md#productconfiguratordeletedependency) | **DELETE** /v1/{tenantId}/dependency/{dependencyId} | Delete Dependency
*DependencyApi* | [**productConfiguratorListDependencies**](docs/Api/DependencyApi.md#productconfiguratorlistdependencies) | **POST** /v1/{tenantId}/page-size/{pageSize}/dependencies | List Dependencies
*DependencyApi* | [**productConfiguratorUpdateDependency**](docs/Api/DependencyApi.md#productconfiguratorupdatedependency) | **PUT** /v1/{tenantId}/dependency/{dependencyId} | Update Dependency
*MatrixApi* | [**productConfiguratorCreateMatrix**](docs/Api/MatrixApi.md#productconfiguratorcreatematrix) | **POST** /v1/{tenantId}/matrix/create | Create Matrix
*MatrixApi* | [**productConfiguratorDeleteMatrix**](docs/Api/MatrixApi.md#productconfiguratordeletematrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId} | Delete Matrix
*MatrixApi* | [**productConfiguratorGetMatrix**](docs/Api/MatrixApi.md#productconfiguratorgetmatrix) | **GET** /v1/{tenantId}/matrix/{matrixId} | Get Matrix
*MatrixApi* | [**productConfiguratorListMatrices**](docs/Api/MatrixApi.md#productconfiguratorlistmatrices) | **POST** /v1/{tenantId}/configurator/{configuratorId}/page-size/{pageSize}/matrices | List Matrices
*MatrixApi* | [**productConfiguratorRemovePricelistFromMatrix**](docs/Api/MatrixApi.md#productconfiguratorremovepricelistfrommatrix) | **DELETE** /v1/{tenantId}/matrix/{matrixId}/pricelist/{pricelistGrn} | Remove Pricelist from Matrix
*MatrixApi* | [**productConfiguratorUpdateMatrix**](docs/Api/MatrixApi.md#productconfiguratorupdatematrix) | **PUT** /v1/{tenantId}/matrix/{matrixId} | Update Matrix
*OptionApi* | [**productConfiguratorBulkCreateOptions**](docs/Api/OptionApi.md#productconfiguratorbulkcreateoptions) | **POST** /v1/{tenantId}/step/{stepId}/option/create/bulk | Bulk Create Options
*OptionApi* | [**productConfiguratorBulkDeleteOptions**](docs/Api/OptionApi.md#productconfiguratorbulkdeleteoptions) | **POST** /v1/{tenantId}/option/delete/bulk | Bulk Delete Options
*OptionApi* | [**productConfiguratorBulkUpdateOptions**](docs/Api/OptionApi.md#productconfiguratorbulkupdateoptions) | **PUT** /v1/{tenantId}/option/bulk | Bulk Update Options
*OptionApi* | [**productConfiguratorCopyOption**](docs/Api/OptionApi.md#productconfiguratorcopyoption) | **POST** /v1/{tenantId}/option/{sourceOptionId}/copy | Copy Option
*OptionApi* | [**productConfiguratorCreateOption**](docs/Api/OptionApi.md#productconfiguratorcreateoption) | **POST** /v1/{tenantId}/step/{stepId}/option/create | Create Option
*OptionApi* | [**productConfiguratorDeleteOption**](docs/Api/OptionApi.md#productconfiguratordeleteoption) | **DELETE** /v1/{tenantId}/option/{optionId} | Delete Option
*OptionApi* | [**productConfiguratorListOptions**](docs/Api/OptionApi.md#productconfiguratorlistoptions) | **POST** /v1/{tenantId}/step/{stepId}/page-size/{pageSize}/options | List Options
*OptionApi* | [**productConfiguratorUpdateOption**](docs/Api/OptionApi.md#productconfiguratorupdateoption) | **PUT** /v1/{tenantId}/option/{optionId} | Update Option
*ProductConfiguratorApi* | [**productConfiguratorGetProperty**](docs/Api/ProductConfiguratorApi.md#productconfiguratorgetproperty) | **GET** /v1/{tenantId}/property/{propertyId} | 
*ProductConfiguratorApi* | [**productConfiguratorListPropertiesByConfiguration**](docs/Api/ProductConfiguratorApi.md#productconfiguratorlistpropertiesbyconfiguration) | **POST** /v1/{tenantId}/configurator/{configuratorId}/page-size/{pageSize}/properties | 
*PropertyApi* | [**productConfiguratorBulkCreateProperties**](docs/Api/PropertyApi.md#productconfiguratorbulkcreateproperties) | **POST** /v1/{tenantId}/property/create/bulk | Bulk Create Properties
*PropertyApi* | [**productConfiguratorBulkUpdateProperties**](docs/Api/PropertyApi.md#productconfiguratorbulkupdateproperties) | **PUT** /v1/{tenantId}/properties/bulk | Bulk Update Properties
*PropertyApi* | [**productConfiguratorCreateProperty**](docs/Api/PropertyApi.md#productconfiguratorcreateproperty) | **POST** /v1/{tenantId}/property/create | Create Property
*PropertyApi* | [**productConfiguratorListProperties**](docs/Api/PropertyApi.md#productconfiguratorlistproperties) | **POST** /v1/{tenantId}/matrix/{matrixId}/page-size/{pageSize}/properties | List Properties
*PropertyApi* | [**productConfiguratorUpdateProperty**](docs/Api/PropertyApi.md#productconfiguratorupdateproperty) | **PUT** /v1/{tenantId}/property/{propertyId} | Update Property
*StepApi* | [**productConfiguratorBulkCreateSteps**](docs/Api/StepApi.md#productconfiguratorbulkcreatesteps) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create/bulk | Bulk Create Steps
*StepApi* | [**productConfiguratorBulkDeleteSteps**](docs/Api/StepApi.md#productconfiguratorbulkdeletesteps) | **POST** /v1/{tenantId}/step/delete/bulk | Bulk Delete Steps
*StepApi* | [**productConfiguratorCopyStep**](docs/Api/StepApi.md#productconfiguratorcopystep) | **POST** /v1/{tenantId}/step/{sourceStepId}/copy | Copy Step
*StepApi* | [**productConfiguratorCreateStep**](docs/Api/StepApi.md#productconfiguratorcreatestep) | **POST** /v1/{tenantId}/configurator/{configuratorId}/step/create | Create Step
*StepApi* | [**productConfiguratorDeleteStep**](docs/Api/StepApi.md#productconfiguratordeletestep) | **DELETE** /v1/{tenantId}/step/{stepId} | Delete Step
*StepApi* | [**productConfiguratorUpdateStep**](docs/Api/StepApi.md#productconfiguratorupdatestep) | **PUT** /v1/{tenantId}/step/{stepId} | Update Step

## Models

- [ConfigurationConfigurationStep](docs/Model/ConfigurationConfigurationStep.md)
- [ConfigurationConfigurator](docs/Model/ConfigurationConfigurator.md)
- [ConfigurationGetAvailableConfigurationResponse](docs/Model/ConfigurationGetAvailableConfigurationResponse.md)
- [ConfigurationGetConfigurationFromSelectionsResponse](docs/Model/ConfigurationGetConfigurationFromSelectionsResponse.md)
- [ConfigurationOptionProperty](docs/Model/ConfigurationOptionProperty.md)
- [ConfigurationProperty](docs/Model/ConfigurationProperty.md)
- [ConfigurationPropertyFilter](docs/Model/ConfigurationPropertyFilter.md)
- [ConfigurationPropertyFilterGenericProperty](docs/Model/ConfigurationPropertyFilterGenericProperty.md)
- [ConfigurationStepOption](docs/Model/ConfigurationStepOption.md)
- [ConfiguratorListResponse](docs/Model/ConfiguratorListResponse.md)
- [DependencyCondition](docs/Model/DependencyCondition.md)
- [DependencyListDependenciesResponse](docs/Model/DependencyListDependenciesResponse.md)
- [GooglerpcStatus](docs/Model/GooglerpcStatus.md)
- [ListMatricesRequestFilter](docs/Model/ListMatricesRequestFilter.md)
- [LocalisationLocalizedText](docs/Model/LocalisationLocalizedText.md)
- [MatrixGenericType](docs/Model/MatrixGenericType.md)
- [MatrixListMatricesResponse](docs/Model/MatrixListMatricesResponse.md)
- [MatrixPriceType](docs/Model/MatrixPriceType.md)
- [MatrixWeightType](docs/Model/MatrixWeightType.md)
- [OptionListOptionsResponse](docs/Model/OptionListOptionsResponse.md)
- [OptionSwatch](docs/Model/OptionSwatch.md)
- [ProductConfiguratorBulkCreateOptionsRequest](docs/Model/ProductConfiguratorBulkCreateOptionsRequest.md)
- [ProductConfiguratorBulkCreatePropertiesRequest](docs/Model/ProductConfiguratorBulkCreatePropertiesRequest.md)
- [ProductConfiguratorBulkCreateStepsRequest](docs/Model/ProductConfiguratorBulkCreateStepsRequest.md)
- [ProductConfiguratorBulkDeleteOptionsRequest](docs/Model/ProductConfiguratorBulkDeleteOptionsRequest.md)
- [ProductConfiguratorBulkDeleteStepsRequest](docs/Model/ProductConfiguratorBulkDeleteStepsRequest.md)
- [ProductConfiguratorBulkUpdateOptionsRequest](docs/Model/ProductConfiguratorBulkUpdateOptionsRequest.md)
- [ProductConfiguratorBulkUpdatePropertiesRequest](docs/Model/ProductConfiguratorBulkUpdatePropertiesRequest.md)
- [ProductConfiguratorCopyConfiguratorRequest](docs/Model/ProductConfiguratorCopyConfiguratorRequest.md)
- [ProductConfiguratorCopyOptionRequest](docs/Model/ProductConfiguratorCopyOptionRequest.md)
- [ProductConfiguratorCopyStepRequest](docs/Model/ProductConfiguratorCopyStepRequest.md)
- [ProductConfiguratorCreateConfiguratorRequest](docs/Model/ProductConfiguratorCreateConfiguratorRequest.md)
- [ProductConfiguratorCreateDependencyRequest](docs/Model/ProductConfiguratorCreateDependencyRequest.md)
- [ProductConfiguratorCreateMatrixRequest](docs/Model/ProductConfiguratorCreateMatrixRequest.md)
- [ProductConfiguratorCreateOptionRequest](docs/Model/ProductConfiguratorCreateOptionRequest.md)
- [ProductConfiguratorCreatePropertyRequest](docs/Model/ProductConfiguratorCreatePropertyRequest.md)
- [ProductConfiguratorCreateStepRequest](docs/Model/ProductConfiguratorCreateStepRequest.md)
- [ProductConfiguratorGetAvailableConfiguration2Request](docs/Model/ProductConfiguratorGetAvailableConfiguration2Request.md)
- [ProductConfiguratorGetConfigurationFromSelectionsRequest](docs/Model/ProductConfiguratorGetConfigurationFromSelectionsRequest.md)
- [ProductConfiguratorListDependenciesRequest](docs/Model/ProductConfiguratorListDependenciesRequest.md)
- [ProductConfiguratorListMatricesRequest](docs/Model/ProductConfiguratorListMatricesRequest.md)
- [ProductConfiguratorListPropertiesByConfigurationRequest](docs/Model/ProductConfiguratorListPropertiesByConfigurationRequest.md)
- [ProductConfiguratorListPropertiesRequest](docs/Model/ProductConfiguratorListPropertiesRequest.md)
- [ProductConfiguratorUpdateConfiguratorRequest](docs/Model/ProductConfiguratorUpdateConfiguratorRequest.md)
- [ProductConfiguratorUpdateDependencyRequest](docs/Model/ProductConfiguratorUpdateDependencyRequest.md)
- [ProductConfiguratorUpdateMatrixRequest](docs/Model/ProductConfiguratorUpdateMatrixRequest.md)
- [ProductConfiguratorUpdateOptionRequest](docs/Model/ProductConfiguratorUpdateOptionRequest.md)
- [ProductConfiguratorUpdatePropertyRequest](docs/Model/ProductConfiguratorUpdatePropertyRequest.md)
- [ProductConfiguratorUpdateStepRequest](docs/Model/ProductConfiguratorUpdateStepRequest.md)
- [ProductconfiguratorMoney](docs/Model/ProductconfiguratorMoney.md)
- [ProductconfiguratorPropertyMode](docs/Model/ProductconfiguratorPropertyMode.md)
- [ProductconfiguratorPropertyType](docs/Model/ProductconfiguratorPropertyType.md)
- [ProductconfiguratorWeightUnit](docs/Model/ProductconfiguratorWeightUnit.md)
- [ProductconfiguratorconfigurationOption](docs/Model/ProductconfiguratorconfigurationOption.md)
- [ProductconfiguratorconfigurationSelection](docs/Model/ProductconfiguratorconfigurationSelection.md)
- [ProductconfiguratorconfigurationStep](docs/Model/ProductconfiguratorconfigurationStep.md)
- [ProductconfiguratorconfiguratorEntity](docs/Model/ProductconfiguratorconfiguratorEntity.md)
- [ProductconfiguratorconfiguratorStatus](docs/Model/ProductconfiguratorconfiguratorStatus.md)
- [ProductconfiguratorconfiguratorUpdatePayload](docs/Model/ProductconfiguratorconfiguratorUpdatePayload.md)
- [ProductconfiguratordependencyEntity](docs/Model/ProductconfiguratordependencyEntity.md)
- [ProductconfiguratordependencyType](docs/Model/ProductconfiguratordependencyType.md)
- [ProductconfiguratordependencyUpdatePayload](docs/Model/ProductconfiguratordependencyUpdatePayload.md)
- [ProductconfiguratormatrixEntity](docs/Model/ProductconfiguratormatrixEntity.md)
- [ProductconfiguratormatrixStep](docs/Model/ProductconfiguratormatrixStep.md)
- [ProductconfiguratormatrixUpdatePayload](docs/Model/ProductconfiguratormatrixUpdatePayload.md)
- [ProductconfiguratoroptionBulkCreateRequestCreateEntity](docs/Model/ProductconfiguratoroptionBulkCreateRequestCreateEntity.md)
- [ProductconfiguratoroptionBulkCreateResponse](docs/Model/ProductconfiguratoroptionBulkCreateResponse.md)
- [ProductconfiguratoroptionBulkUpdateRequestUpdateEntity](docs/Model/ProductconfiguratoroptionBulkUpdateRequestUpdateEntity.md)
- [ProductconfiguratoroptionBulkUpdateResponse](docs/Model/ProductconfiguratoroptionBulkUpdateResponse.md)
- [ProductconfiguratoroptionEntity](docs/Model/ProductconfiguratoroptionEntity.md)
- [ProductconfiguratoroptionUpdatePayload](docs/Model/ProductconfiguratoroptionUpdatePayload.md)
- [ProductconfiguratorpropertyBulkCreateRequestCreateEntity](docs/Model/ProductconfiguratorpropertyBulkCreateRequestCreateEntity.md)
- [ProductconfiguratorpropertyBulkCreateResponse](docs/Model/ProductconfiguratorpropertyBulkCreateResponse.md)
- [ProductconfiguratorpropertyBulkUpdateRequestUpdateEntity](docs/Model/ProductconfiguratorpropertyBulkUpdateRequestUpdateEntity.md)
- [ProductconfiguratorpropertyBulkUpdateResponse](docs/Model/ProductconfiguratorpropertyBulkUpdateResponse.md)
- [ProductconfiguratorpropertyEntity](docs/Model/ProductconfiguratorpropertyEntity.md)
- [ProductconfiguratorpropertyGenericProperty](docs/Model/ProductconfiguratorpropertyGenericProperty.md)
- [ProductconfiguratorpropertyPriceProperty](docs/Model/ProductconfiguratorpropertyPriceProperty.md)
- [ProductconfiguratorpropertyUpdatePayload](docs/Model/ProductconfiguratorpropertyUpdatePayload.md)
- [ProductconfiguratorpropertyWeightProperty](docs/Model/ProductconfiguratorpropertyWeightProperty.md)
- [ProductconfiguratorstepBulkCreateRequestCreateEntity](docs/Model/ProductconfiguratorstepBulkCreateRequestCreateEntity.md)
- [ProductconfiguratorstepBulkCreateResponse](docs/Model/ProductconfiguratorstepBulkCreateResponse.md)
- [ProductconfiguratorstepEntity](docs/Model/ProductconfiguratorstepEntity.md)
- [ProductconfiguratorstepUpdatePayload](docs/Model/ProductconfiguratorstepUpdatePayload.md)
- [PropertyListPropertiesByConfigurationRequestSelection](docs/Model/PropertyListPropertiesByConfigurationRequestSelection.md)
- [PropertyListPropertiesByConfigurationResponse](docs/Model/PropertyListPropertiesByConfigurationResponse.md)
- [PropertyListPropertiesResponse](docs/Model/PropertyListPropertiesResponse.md)
- [PropertyUpdatePayloadGenericProperty](docs/Model/PropertyUpdatePayloadGenericProperty.md)
- [PropertyUpdatePayloadPriceProperty](docs/Model/PropertyUpdatePayloadPriceProperty.md)
- [PropertyUpdatePayloadWeightProperty](docs/Model/PropertyUpdatePayloadWeightProperty.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)

## Authorization

Authentication schemes defined for the API:
### APIAuthorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### standardAuthorization

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://iambackoffice.gogemini.io/iambackoffice.IamBackoffice/Login`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
