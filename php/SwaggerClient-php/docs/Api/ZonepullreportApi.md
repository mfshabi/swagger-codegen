# Swagger\Client\ZonepullreportApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsByZonePullBrowsers**](ZonepullreportApi.md#reportsByZonePullBrowsers) | **POST** /zones/reports/http/pull/{zoneid}/on/browsers | Reports by zone pull browsers
[**reportsByZonePullCache**](ZonepullreportApi.md#reportsByZonePullCache) | **POST** /zones/reports/http/pull/{zoneid}/on/cache | Reports by zone pull cache
[**reportsByZonePullCountry**](ZonepullreportApi.md#reportsByZonePullCountry) | **POST** /zones/reports/http/pull/{zoneid}/on/countries | Reports by zone pull country
[**reportsByZonePullOs**](ZonepullreportApi.md#reportsByZonePullOs) | **POST** /zones/reports/http/pull/{zoneid}/on/os | Reports by zone pull os
[**reportsByZonePullStatuscodes**](ZonepullreportApi.md#reportsByZonePullStatuscodes) | **POST** /zones/reports/http/pull/{zoneid}/on/statuscodes | Reports by zone pull statuscodes
[**reportsByZonePullSummary**](ZonepullreportApi.md#reportsByZonePullSummary) | **POST** /zones/reports/http/pull/{zoneid}/on/stats | Reports by zone pull Summary
[**reportsByZonePullTopfiles**](ZonepullreportApi.md#reportsByZonePullTopfiles) | **POST** /zones/reports/http/pull/{zoneid}/on/topfiles | Reports by zone pull topfiles
[**reportsByZonePullTopreferrers**](ZonepullreportApi.md#reportsByZonePullTopreferrers) | **POST** /zones/reports/http/pull/{zoneid}/on/topreferrers | Reports by zone pull topreferrers
[**reportsByZonePullVisitors**](ZonepullreportApi.md#reportsByZonePullVisitors) | **POST** /zones/reports/http/pull/{zoneid}/on/visitors | Reports by zone pull visitors

# **reportsByZonePullBrowsers**
> \Swagger\Client\Model\InlineResponse20051 reportsByZonePullBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone pull browsers

Get reports of zone browsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullBrowsers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullCache**
> \Swagger\Client\Model\InlineResponse20022 reportsByZonePullCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date)

Reports by zone pull cache

Get reports of zone pull cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullCache: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullCountry**
> \Swagger\Client\Model\InlineResponse20050 reportsByZonePullCountry($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone pull country

Get reports of zone pull country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullCountry($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullCountry: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullOs**
> \Swagger\Client\Model\InlineResponse20052 reportsByZonePullOs($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone pull os

Get reports of zone os

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullOs($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullOs: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullStatuscodes**
> \Swagger\Client\Model\InlineResponse20049 reportsByZonePullStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone pull statuscodes

Get reports of zone pull statuscodes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullStatuscodes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePullSummary**
> \Swagger\Client\Model\InlineResponse20021 reportsByZonePullSummary($x_api_key, $zoneid, $range, $type)

Reports by zone pull Summary

Get reports of zone pull Summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$range = "range_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePullSummary($x_api_key, $zoneid, $range, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullSummary: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullTopfiles**
> \Swagger\Client\Model\InlineResponse20023 reportsByZonePullTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type)

Reports by zone pull topfiles

Get reports of zone pull topfiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullTopfiles: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZonePullTopreferrers**
> \Swagger\Client\Model\InlineResponse20025 reportsByZonePullTopreferrers($x_api_key, $zoneid, $start_date, $end_date)

Reports by zone pull topreferrers

Get reports of zone pull topreferrers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZonePullTopreferrers($x_api_key, $zoneid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullTopreferrers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZonePullVisitors**
> \Swagger\Client\Model\InlineResponse20053 reportsByZonePullVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone pull visitors

Get reports of zone visitors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullreportApi(
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
    $result = $apiInstance->reportsByZonePullVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullreportApi->reportsByZonePullVisitors: ', $e->getMessage(), PHP_EOL;
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

