# Swagger\Client\ZonevodpullreportApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsByZoneVodPullBrowsers**](ZonevodpullreportApi.md#reportsByZoneVodPullBrowsers) | **POST** /zones/reports/vod/pull/{zoneid}/on/browsers | Reports by zone vod pull browsers
[**reportsByZoneVodPullCache**](ZonevodpullreportApi.md#reportsByZoneVodPullCache) | **POST** /zones/reports/vod/pull/{zoneid}/on/cache | Reports by zone vod pull cache
[**reportsByZoneVodPullCountries**](ZonevodpullreportApi.md#reportsByZoneVodPullCountries) | **POST** /zones/reports/vod/pull/{zoneid}/on/countries | Reports by zone vod pull countries
[**reportsByZoneVodPullOs**](ZonevodpullreportApi.md#reportsByZoneVodPullOs) | **POST** /zones/reports/vod/pull/{zoneid}/on/os | Reports by zone vod pull os
[**reportsByZoneVodPullStatuscodes**](ZonevodpullreportApi.md#reportsByZoneVodPullStatuscodes) | **POST** /zones/reports/vod/pull/{zoneid}/on/statuscodes | Reports by zone vod push statuscodes
[**reportsByZoneVodPullSummary**](ZonevodpullreportApi.md#reportsByZoneVodPullSummary) | **POST** /zones/reports/vod/pull/{zoneid}/on/stats | Reports by zone vod pull summary
[**reportsByZoneVodPullTopfiles**](ZonevodpullreportApi.md#reportsByZoneVodPullTopfiles) | **POST** /zones/reports/vod/pull/{zoneid}/on/topfiles | Reports by zone vod pull topfiles
[**reportsByZoneVodPullTopreferrers**](ZonevodpullreportApi.md#reportsByZoneVodPullTopreferrers) | **POST** /zones/reports/vod/pull/{zoneid}/on/topreferrers | Reports by zone vod pull topreferrers
[**reportsByZoneVodPullVisitors**](ZonevodpullreportApi.md#reportsByZoneVodPullVisitors) | **POST** /zones/reports/vod/pull/{zoneid}/on/visitors | Reports by zone vod pull visitors

# **reportsByZoneVodPullBrowsers**
> \Swagger\Client\Model\InlineResponse20050 reportsByZoneVodPullBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod pull browsers

Get reports of zone vod pull browsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullBrowsers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPullCache**
> \Swagger\Client\Model\InlineResponse20053 reportsByZoneVodPullCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date)

Reports by zone vod pull cache

Get reports of zone vod pull cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullCache: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPullCountries**
> \Swagger\Client\Model\InlineResponse20056 reportsByZoneVodPullCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod pull countries

Get reports of zone vod pull countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullCountries: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPullOs**
> \Swagger\Client\Model\InlineResponse20051 reportsByZoneVodPullOs($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod pull os

Get reports of zone vod pull os

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullOs($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullOs: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPullStatuscodes**
> \Swagger\Client\Model\InlineResponse20055 reportsByZoneVodPullStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod push statuscodes

Get reports of zone vod push statuscodes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullStatuscodes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPullSummary**
> \Swagger\Client\Model\InlineResponse20021 reportsByZoneVodPullSummary($x_api_key, $zoneid, $range, $type)

Reports by zone vod pull summary

Get reports of zone vod pull summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$range = "range_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneVodPullSummary($x_api_key, $zoneid, $range, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullSummary: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneVodPullTopfiles**
> \Swagger\Client\Model\InlineResponse20057 reportsByZoneVodPullTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type)

Reports by zone vod pull topfiles

Get reports of zone vod pull topfiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullTopfiles: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPullTopreferrers**
> \Swagger\Client\Model\InlineResponse20054 reportsByZoneVodPullTopreferrers($x_api_key, $zoneid, $start_date, $end_date)

Reports by zone vod pull topreferrers

Get reports of zone vod pull topreferrers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneVodPullTopreferrers($x_api_key, $zoneid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullTopreferrers: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneVodPullVisitors**
> \Swagger\Client\Model\InlineResponse20052 reportsByZoneVodPullVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone vod pull visitors

Get reports of zone vod pull visitors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonevodpullreportApi(
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
    $result = $apiInstance->reportsByZoneVodPullVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonevodpullreportApi->reportsByZoneVodPullVisitors: ', $e->getMessage(), PHP_EOL;
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

