# Swagger\Client\ZonevodpushreportApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsByZoneVodPushBrowsers**](ZonevodpushreportApi.md#reportsByZoneVodPushBrowsers) | **POST** /zones/reports/vod/push/{zoneid}/on/browsers | Reports by zone vod push browsers
[**reportsByZoneVodPushCache**](ZonevodpushreportApi.md#reportsByZoneVodPushCache) | **POST** /zones/reports/vod/push/{zoneid}/on/cache | Reports by zone vod push cache
[**reportsByZoneVodPushCountries**](ZonevodpushreportApi.md#reportsByZoneVodPushCountries) | **POST** /zones/reports/vod/push/{zoneid}/on/countries | Reports by zone vod push countries
[**reportsByZoneVodPushOs**](ZonevodpushreportApi.md#reportsByZoneVodPushOs) | **POST** /zones/reports/vod/push/{zoneid}/on/os | Reports by zone vod push os
[**reportsByZoneVodPushStatuscodes**](ZonevodpushreportApi.md#reportsByZoneVodPushStatuscodes) | **POST** /zones/reports/vod/push/{zoneid}/on/statuscodes | Reports by zone vod push statuscodes
[**reportsByZoneVodPushSummary**](ZonevodpushreportApi.md#reportsByZoneVodPushSummary) | **POST** /zones/reports/vod/push/{zoneid}/on/stats | Reports by zone vod push summary
[**reportsByZoneVodPushTopfiles**](ZonevodpushreportApi.md#reportsByZoneVodPushTopfiles) | **POST** /zones/reports/vod/push/{zoneid}/on/topfiles | Reports by zone vod push topfiles
[**reportsByZoneVodPushTopreferrers**](ZonevodpushreportApi.md#reportsByZoneVodPushTopreferrers) | **POST** /zones/reports/vod/push/{zoneid}/on/topreferrers | Reports by zone vod push topreferrers
[**reportsByZoneVodPushVisitors**](ZonevodpushreportApi.md#reportsByZoneVodPushVisitors) | **POST** /zones/reports/vod/push/{zoneid}/on/visitors | Reports by zone vod push visitors

# **reportsByZoneVodPushBrowsers**
> \Swagger\Client\Model\InlineResponse20050 reportsByZoneVodPushBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push browsers

Get reports of zone vod push browsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushBrowsers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushCache**
> \Swagger\Client\Model\InlineResponse20022 reportsByZoneVodPushCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date)

Reports by zone vod push cache

Get reports of zone vod push cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushCache: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushCountries**
> \Swagger\Client\Model\InlineResponse20049 reportsByZoneVodPushCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push countries

Get reports of zone vod push countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushCountries: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushOs**
> \Swagger\Client\Model\InlineResponse20051 reportsByZoneVodPushOs($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push os

Get reports of zone vod push os

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushOs($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushOs: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushStatuscodes**
> \Swagger\Client\Model\InlineResponse20026 reportsByZoneVodPushStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push statuscodes

Get reports of zone vod push statuscodes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushStatuscodes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPushSummary**
> \Swagger\Client\Model\InlineResponse20021 reportsByZoneVodPushSummary($x_api_key, $zoneid, $range, $type)

Reports by zone vod push summary

Get reports of zone vod push summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$range = "range_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneVodPushSummary($x_api_key, $zoneid, $range, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushSummary: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushTopfiles**
> \Swagger\Client\Model\InlineResponse20053 reportsByZoneVodPushTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type)

Reports by zone vod push topfiles

Get reports of zone vod push topfiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushTopfiles: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPushTopreferrers**
> \Swagger\Client\Model\InlineResponse20025 reportsByZoneVodPushTopreferrers($x_api_key, $zoneid, $start_date, $end_date)

Reports by zone vod push topreferrers

Get reports of zone vod push topreferrers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneVodPushTopreferrers($x_api_key, $zoneid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushTopreferrers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPushVisitors**
> \Swagger\Client\Model\InlineResponse20052 reportsByZoneVodPushVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push visitors

Get reports of zone vod push visitors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpushreportApi(
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
    $result = $apiInstance->reportsByZoneVodPushVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpushreportApi->reportsByZoneVodPushVisitors: ', $e->getMessage(), PHP_EOL;
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

