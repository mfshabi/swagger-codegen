# Swagger\Client\ZonepushreportApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsByZonePushBrowsers**](ZonepushreportApi.md#reportsByZonePushBrowsers) | **POST** /zones/reports/http/push/{zoneid}/on/browsers | Reports by zone push browsers
[**reportsByZonePushCache**](ZonepushreportApi.md#reportsByZonePushCache) | **POST** /zones/reports/http/push/{zoneid}/on/cache | Reports by zone push  Cache Statistics
[**reportsByZonePushCountries**](ZonepushreportApi.md#reportsByZonePushCountries) | **POST** /zones/reports/http/push/{zoneid}/on/countries | Reports by zone push countries
[**reportsByZonePushOs**](ZonepushreportApi.md#reportsByZonePushOs) | **POST** /zones/reports/http/push/{zoneid}/on/os | Reports by zone push os
[**reportsByZonePushStatusCode**](ZonepushreportApi.md#reportsByZonePushStatusCode) | **POST** /zones/reports/http/push/{zoneid}/on/statuscodes | Reports by zone push Status Codes
[**reportsByZonePushSummary**](ZonepushreportApi.md#reportsByZonePushSummary) | **POST** /zones/reports/http/push/{zoneid}/on/stats | Reports by zone push Summary
[**reportsByZonePushTopFiles**](ZonepushreportApi.md#reportsByZonePushTopFiles) | **POST** /zones/reports/http/push/{zoneid}/on/topfiles | Reports by zone push Top Files
[**reportsByZonePushTopReferrers**](ZonepushreportApi.md#reportsByZonePushTopReferrers) | **POST** /zones/reports/http/push/{zoneid}/on/topreferrers | Reports by zone push Top Referrers
[**reportsByZonePushVisitors**](ZonepushreportApi.md#reportsByZonePushVisitors) | **POST** /zones/reports/http/push/{zoneid}/on/visitors | Reports by zone push visitors

# **reportsByZonePushBrowsers**
> \Swagger\Client\Model\InlineResponse20052 reportsByZonePushBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone push browsers

Get reports of zone push browsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushBrowsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushCache**
> \Swagger\Client\Model\InlineResponse20022 reportsByZonePushCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date)

Reports by zone push  Cache Statistics

Get reports of zone push Summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$filter_type = "filter_type_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **filter_type** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushCountries**
> \Swagger\Client\Model\InlineResponse20051 reportsByZonePushCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone push countries

Get reports of zone push countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushOs**
> \Swagger\Client\Model\InlineResponse20053 reportsByZonePushOs($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone push os

Get reports of zone push os

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushOs($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushOs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushStatusCode**
> \Swagger\Client\Model\InlineResponse20050 reportsByZonePushStatusCode($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone push Status Codes

Get reports of zone push Status Codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushStatusCode($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushStatusCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushSummary**
> \Swagger\Client\Model\InlineResponse20021 reportsByZonePushSummary($x_api_key, $zoneid, $range, $type)

Reports by zone push Summary

Get reports of zone push Summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$range = "range_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushSummary($x_api_key, $zoneid, $range, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **range** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushTopFiles**
> \Swagger\Client\Model\InlineResponse20049 reportsByZonePushTopFiles($x_api_key, $zoneid, $start_date, $end_date, $type)

Reports by zone push Top Files

Get reports of zone top files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushTopFiles($x_api_key, $zoneid, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushTopFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushTopReferrers**
> \Swagger\Client\Model\InlineResponse20025 reportsByZonePushTopReferrers($x_api_key, $zoneid, $start_date, $end_date)

Reports by zone push Top Referrers

Get reports of zone top referrers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushTopReferrers($x_api_key, $zoneid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushTopReferrers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePushVisitors**
> \Swagger\Client\Model\InlineResponse20054 reportsByZonePushVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone push visitors

Get reports of zone push visitors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$frequency = "frequency_example"; // string | 
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePushVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushreportApi->reportsByZonePushVisitors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **frequency** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

