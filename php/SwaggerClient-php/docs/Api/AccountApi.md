# Swagger\Client\AccountApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSsl**](AccountApi.md#createSsl) | **POST** /account/ssl/new | Create
[**sslCertificate**](AccountApi.md#sslCertificate) | **GET** /account/ssl/{sslcertid} | SSL Certificate
[**sslCertificates**](AccountApi.md#sslCertificates) | **GET** /account/ssl | List SSL Certificates
[**updateSslCertificate**](AccountApi.md#updateSslCertificate) | **POST** /account/ssl/{sslcertid} | Update

# **createSsl**
> \Swagger\Client\Model\InlineResponse20053 createSsl($x_api_key, $_method, $name, $crt, $key, $cabundle)

Create

Create new SSL Certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$crt = "crt_example"; // string | 
$key = "key_example"; // string | 
$cabundle = "cabundle_example"; // string | 

try {
    $result = $apiInstance->createSsl($x_api_key, $_method, $name, $crt, $key, $cabundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createSsl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **crt** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **cabundle** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sslCertificate**
> \Swagger\Client\Model\InlineResponse20054 sslCertificate($x_api_key, $sslcertid)

SSL Certificate

Viww a SSL certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$sslcertid = "sslcertid_example"; // string | Id of the SSL certificate

try {
    $result = $apiInstance->sslCertificate($x_api_key, $sslcertid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->sslCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **sslcertid** | **string**| Id of the SSL certificate |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sslCertificates**
> \Swagger\Client\Model\InlineResponse20052 sslCertificates($x_api_key)

List SSL Certificates

List SSL certificates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->sslCertificates($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->sslCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSslCertificate**
> \Swagger\Client\Model\InlineResponse20053 updateSslCertificate($x_api_key, $sslcertid)

Update

Update SSL certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$sslcertid = "sslcertid_example"; // string | Id of the SSL certificate

try {
    $result = $apiInstance->updateSslCertificate($x_api_key, $sslcertid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateSslCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **sslcertid** | **string**| Id of the SSL certificate |

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

