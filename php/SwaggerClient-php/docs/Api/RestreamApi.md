# Swagger\Client\RestreamApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestream**](RestreamApi.md#createRestream) | **POST** /streams/publish/new | Create Restream
[**getDetailsOfAStreamRestream**](RestreamApi.md#getDetailsOfAStreamRestream) | **GET** /streams/publish/{streamid} | Return the details of restream.
[**restartPublishStream**](RestreamApi.md#restartPublishStream) | **GET** /streams/publish/{streamid}/restart | Restart
[**restorePublishStream**](RestreamApi.md#restorePublishStream) | **GET** /streams/publish/{streamid}/restore | Restore
[**restreamList**](RestreamApi.md#restreamList) | **GET** /streams/publish | Restream List.
[**updateInfoRestream**](RestreamApi.md#updateInfoRestream) | **POST** /streams/publish/{streamid} | Update Info of Restream
[**updatePlatformsRestream**](RestreamApi.md#updatePlatformsRestream) | **POST** /streams/publish/{streamid}/channels | Update Platforms Restream
[**updateRtmpauthRestream**](RestreamApi.md#updateRtmpauthRestream) | **POST** /streams/publish/{streamid}/rtmpauth | Update RTMP Auth Restream

# **createRestream**
> \Swagger\Client\Model\InlineResponse20034 createRestream($x_api_key)

Create Restream

Create new Restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->createRestream($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->createRestream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetailsOfAStreamRestream**
> \Swagger\Client\Model\InlineResponse20033 getDetailsOfAStreamRestream($x_api_key, $streamid)

Return the details of restream.

Return the details of restream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getDetailsOfAStreamRestream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->getDetailsOfAStreamRestream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartPublishStream**
> \Swagger\Client\Model\InlineResponse2005 restartPublishStream($x_api_key, $streamid)

Restart

Restart publish stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartPublishStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->restartPublishStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restorePublishStream**
> \Swagger\Client\Model\InlineResponse2005 restorePublishStream($x_api_key, $streamid)

Restore

Restore  publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restorePublishStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->restorePublishStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restreamList**
> \Swagger\Client\Model\InlineResponse20033 restreamList($x_api_key)

Restream List.

Restream list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->restreamList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->restreamList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInfoRestream**
> \Swagger\Client\Model\InlineResponse20034 updateInfoRestream($x_api_key, $streamid, $server, $type, $url)

Update Info of Restream

Update information of Restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$server = "server_example"; // string | 
$type = "type_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->updateInfoRestream($x_api_key, $streamid, $server, $type, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->updateInfoRestream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **server** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **url** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlatformsRestream**
> \Swagger\Client\Model\InlineResponse20034 updatePlatformsRestream($x_api_key, $streamid, $channel_name, $channel_rtmp, $channel_key)

Update Platforms Restream

Update Platforms of Restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$channel_name = "channel_name_example"; // string | 
$channel_rtmp = "channel_rtmp_example"; // string | 
$channel_key = "channel_key_example"; // string | 

try {
    $result = $apiInstance->updatePlatformsRestream($x_api_key, $streamid, $channel_name, $channel_rtmp, $channel_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->updatePlatformsRestream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **channel_name** | **string**|  | [optional]
 **channel_rtmp** | **string**|  | [optional]
 **channel_key** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRtmpauthRestream**
> \Swagger\Client\Model\InlineResponse20034 updateRtmpauthRestream($x_api_key, $streamid, $policy, $username, $password)

Update RTMP Auth Restream

Update RTMP auth of Restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$username = "username_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->updateRtmpauthRestream($x_api_key, $streamid, $policy, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestreamApi->updateRtmpauthRestream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **policy** | **string**|  | [optional]
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

