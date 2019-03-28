# Swagger\Client\DelayedStreamApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDelayedStream**](DelayedStreamApi.md#createDelayedStream) | **POST** /streams/timeshift/new | Create Delayed Stream
[**delayedstreamsList**](DelayedStreamApi.md#delayedstreamsList) | **GET** /streams/timeshift | Delayedstreams
[**getDetailsDelayedStream**](DelayedStreamApi.md#getDetailsDelayedStream) | **GET** /streams/timeshift/{streamid} | Stream
[**getParentsDelayedStream**](DelayedStreamApi.md#getParentsDelayedStream) | **GET** /streams/timeshift/parents | Source Streams
[**restartDelayedStream**](DelayedStreamApi.md#restartDelayedStream) | **GET** /streams/timeshift/{streamid}/restart | Restart
[**restoreDelayedStream**](DelayedStreamApi.md#restoreDelayedStream) | **GET** /streams/timeshift/{streamid}/restore | Restore
[**updateDelayedStream**](DelayedStreamApi.md#updateDelayedStream) | **POST** /streams/timeshift/{streamid} | Update Info
[**updateDomainlockDelayedStream**](DelayedStreamApi.md#updateDomainlockDelayedStream) | **POST** /streams/timeshift/{streamid}/domainlock | Update Domain Lock
[**updateExternalAuthControlDelayedStream**](DelayedStreamApi.md#updateExternalAuthControlDelayedStream) | **POST** /streams/timeshift/{streamid}/eac | Update External Auth Control
[**updateGeoblockDelayedStream**](DelayedStreamApi.md#updateGeoblockDelayedStream) | **POST** /streams/timeshift/{streamid}/geoblock | Update Geo Block
[**updateSecureDelayedStream**](DelayedStreamApi.md#updateSecureDelayedStream) | **POST** /streams/timeshift/{streamid}/securetoken | Update Secure Token

# **createDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 createDelayedStream($x_api_key, $_method, $name, $parent, $timeshift, $audioonly, $domainlock, $geoblock, $securetoken, $eac)

Create Delayed Stream

Create new delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$parent = "parent_example"; // string | 
$timeshift = 56; // int | 
$audioonly = "audioonly_example"; // string | 
$domainlock = new \Swagger\Client\Model\StreamstimeshiftnewDomainlock(); // \Swagger\Client\Model\StreamstimeshiftnewDomainlock | 
$geoblock = new \Swagger\Client\Model\StreamstimeshiftnewGeoblock(); // \Swagger\Client\Model\StreamstimeshiftnewGeoblock | 
$securetoken = new \Swagger\Client\Model\StreamstimeshiftnewSecuretoken(); // \Swagger\Client\Model\StreamstimeshiftnewSecuretoken | 
$eac = new \Swagger\Client\Model\StreamsabrnewEac(); // \Swagger\Client\Model\StreamsabrnewEac | 

try {
    $result = $apiInstance->createDelayedStream($x_api_key, $_method, $name, $parent, $timeshift, $audioonly, $domainlock, $geoblock, $securetoken, $eac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->createDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **parent** | **string**|  | [optional]
 **timeshift** | **int**|  | [optional]
 **audioonly** | **string**|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](../Model/.md)|  | [optional]
 **geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](../Model/.md)|  | [optional]
 **eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delayedstreamsList**
> \Swagger\Client\Model\InlineResponse20016 delayedstreamsList($x_api_key)

Delayedstreams

List Delayed  streams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->delayedstreamsList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->delayedstreamsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetailsDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 getDetailsDelayedStream($x_api_key, $streamid)

Stream

Return Delayed streams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getDetailsDelayedStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->getDetailsDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParentsDelayedStream**
> \Swagger\Client\Model\InlineResponse20019 getParentsDelayedStream($x_api_key, $streamid)

Source Streams

Return the parents of a Delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getParentsDelayedStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->getParentsDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartDelayedStream**
> \Swagger\Client\Model\InlineResponse2005 restartDelayedStream($x_api_key, $streamid)

Restart

Restart Delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartDelayedStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->restartDelayedStream: ', $e->getMessage(), PHP_EOL;
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

# **restoreDelayedStream**
> \Swagger\Client\Model\InlineResponse2005 restoreDelayedStream($x_api_key, $streamid)

Restore

Restore Delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restoreDelayedStream($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->restoreDelayedStream: ', $e->getMessage(), PHP_EOL;
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

# **updateDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 updateDelayedStream($x_api_key, $streamid, $timeshift, $audioonly)

Update Info

Update informations of a delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$timeshift = 56; // int | 
$audioonly = "audioonly_example"; // string | 

try {
    $result = $apiInstance->updateDelayedStream($x_api_key, $streamid, $timeshift, $audioonly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->updateDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **timeshift** | **int**|  | [optional]
 **audioonly** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainlockDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 updateDomainlockDelayedStream($x_api_key, $streamid, $policy, $list, $ips, $type)

Update Domain Lock

Update domainlock of a delayed stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$ips = "ips_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->updateDomainlockDelayedStream($x_api_key, $streamid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->updateDomainlockDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **policy** | **string**|  | [optional]
 **list** | **string**|  | [optional]
 **ips** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlDelayedStream**
> \Swagger\Client\Model\InlineResponse20018 updateExternalAuthControlDelayedStream($x_api_key, $streamid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for Delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$authurl = "authurl_example"; // string | 
$ips = "ips_example"; // string | 

try {
    $result = $apiInstance->updateExternalAuthControlDelayedStream($x_api_key, $streamid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->updateExternalAuthControlDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **policy** | **string**|  | [optional]
 **authurl** | **string**|  | [optional]
 **ips** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeoblockDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 updateGeoblockDelayedStream($x_api_key, $streamid, $policy, $list, $ips)

Update Geo Block

Update Geo block of a delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$list = new \Swagger\Client\Model\StreamsabrstreamidgeoblockList(); // \Swagger\Client\Model\StreamsabrstreamidgeoblockList | 
$ips = "ips_example"; // string | 

try {
    $result = $apiInstance->updateGeoblockDelayedStream($x_api_key, $streamid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->updateGeoblockDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **policy** | **string**|  | [optional]
 **list** | [**\Swagger\Client\Model\StreamsabrstreamidgeoblockList**](../Model/.md)|  | [optional]
 **ips** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecureDelayedStream**
> \Swagger\Client\Model\InlineResponse20017 updateSecureDelayedStream($x_api_key, $streamid, $policy, $list, $ips, $timeout)

Update Secure Token

Update secure token of a delayed stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DelayedStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$ips = "ips_example"; // string | 
$timeout = 56; // int | 

try {
    $result = $apiInstance->updateSecureDelayedStream($x_api_key, $streamid, $policy, $list, $ips, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelayedStreamApi->updateSecureDelayedStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **policy** | **string**|  | [optional]
 **list** | **string**|  | [optional]
 **ips** | **string**|  | [optional]
 **timeout** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

