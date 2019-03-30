# Swagger\Client\ZonerecordreportApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsByZoneRecordBrowsers**](ZonerecordreportApi.md#reportsByZoneRecordBrowsers) | **POST** /zones/reports/http/record/{zoneid}/on/browsers | Reports by zone record browsers
[**reportsByZoneRecordCache**](ZonerecordreportApi.md#reportsByZoneRecordCache) | **POST** /zones/reports/http/record/{zoneid}/on/cache | Reports by zone record cache
[**reportsByZoneRecordCountries**](ZonerecordreportApi.md#reportsByZoneRecordCountries) | **POST** /zones/reports/http/record/{zoneid}/on/countries | Reports by zone record countries
[**reportsByZoneRecordOs**](ZonerecordreportApi.md#reportsByZoneRecordOs) | **POST** /zones/reports/http/record/{zoneid}/on/os | Reports by zone record os
[**reportsByZoneRecordStatuscodes**](ZonerecordreportApi.md#reportsByZoneRecordStatuscodes) | **POST** /zones/reports/http/record/{zoneid}/on/statuscodes | Reports by zone record statuscodes
[**reportsByZoneRecordSummary**](ZonerecordreportApi.md#reportsByZoneRecordSummary) | **POST** /zones/reports/http/record/{zoneid}/on/stats | Reports by zone record summary
[**reportsByZoneRecordTopfiles**](ZonerecordreportApi.md#reportsByZoneRecordTopfiles) | **POST** /zones/reports/http/record/{zoneid}/on/topfiles | Reports by zone record topfiles
[**reportsByZoneRecordTopreferrers**](ZonerecordreportApi.md#reportsByZoneRecordTopreferrers) | **POST** /zones/reports/http/record/{zoneid}/on/topreferrers | Reports by zone record topreferrers
[**reportsByZoneRecordVisitors**](ZonerecordreportApi.md#reportsByZoneRecordVisitors) | **POST** /zones/reports/http/record/{zoneid}/on/visitors | Reports by zone record visitors

# **reportsByZoneRecordBrowsers**
> \Swagger\Client\Model\InlineResponse20050 reportsByZoneRecordBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone record browsers

Get reports of zone browsers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordBrowsers($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordBrowsers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordCache**
> \Swagger\Client\Model\InlineResponse20022 reportsByZoneRecordCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date)

Reports by zone record cache

Get reports of zone cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordCache($x_api_key, $zoneid, $frequency, $filter_type, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordCache: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordCountries**
> \Swagger\Client\Model\InlineResponse20049 reportsByZoneRecordCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone record countries

Get reports of zone countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordCountries($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordCountries: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordOs**
> \Swagger\Client\Model\InlineResponse20029 reportsByZoneRecordOs($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone record os

Get reports of zone os

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordOs($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordOs: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsByZoneRecordStatuscodes**
> \Swagger\Client\Model\InlineResponse20026 reportsByZoneRecordStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone record statuscodes

Get reports of zone statuscodes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordStatuscodes($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordStatuscodes: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordSummary**
> \Swagger\Client\Model\InlineResponse20021 reportsByZoneRecordSummary($x_api_key, $zoneid, $range, $type)

Reports by zone record summary

Get reports of zone summary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$range = "range_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneRecordSummary($x_api_key, $zoneid, $range, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordSummary: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordTopfiles**
> \Swagger\Client\Model\InlineResponse20023 reportsByZoneRecordTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type)

Reports by zone record topfiles

Get reports of zone topfiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordTopfiles($x_api_key, $zoneid, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordTopfiles: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordTopreferrers**
> \Swagger\Client\Model\InlineResponse20025 reportsByZoneRecordTopreferrers($x_api_key, $zoneid, $start_date, $end_date)

Reports by zone record topreferrers

Get reports of zone topreferrers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$start_date = "start_date_example"; // string | 
$end_date = "end_date_example"; // string | 

try {
    $result = $apiInstance->reportsByZoneRecordTopreferrers($x_api_key, $zoneid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordTopreferrers: ', $e->getMessage(), PHP_EOL;
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

# **reportsByZoneRecordVisitors**
> \Swagger\Client\Model\InlineResponse20030 reportsByZoneRecordVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date)

Reports by zone record visitors

Get reports of zone visitors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonerecordreportApi(
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
    $result = $apiInstance->reportsByZoneRecordVisitors($x_api_key, $zoneid, $frequency, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonerecordreportApi->reportsByZoneRecordVisitors: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

