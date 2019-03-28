# Swagger\Client\MultiBitratePushApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDetailsMultiBitratePush**](MultiBitratePushApi.md#getDetailsMultiBitratePush) | **GET** /streams/abr/{streamid} | Stream
[**multiBitratePushCreate**](MultiBitratePushApi.md#multiBitratePushCreate) | **POST** /streams/abr/new | Create ABR
[**multiBitratePushlist**](MultiBitratePushApi.md#multiBitratePushlist) | **GET** /streams/abr | ABR
[**restartMultiBitratePush**](MultiBitratePushApi.md#restartMultiBitratePush) | **GET** /streams/abr/{streamid}/restart | Restart
[**restoreMultiBitratePush**](MultiBitratePushApi.md#restoreMultiBitratePush) | **GET** /streams/abr/{streamid}/restore | Restore
[**updateDomainlockMultiBitratePush**](MultiBitratePushApi.md#updateDomainlockMultiBitratePush) | **POST** /streams/abr/{streamid}/domainlock | Update Domain Lock
[**updateExternalAuthControlMultiBitratePush**](MultiBitratePushApi.md#updateExternalAuthControlMultiBitratePush) | **POST** /streams/abr/{streamid}/eac | Update External Auth Control
[**updateGeoblockMultiBitratePush**](MultiBitratePushApi.md#updateGeoblockMultiBitratePush) | **POST** /streams/abr/{streamid}/geoblock | Update Geo Block
[**updateMultiBitratePush**](MultiBitratePushApi.md#updateMultiBitratePush) | **POST** /streams/abr/{streamid} | Update Info
[**updateRtmpauthMultiBitratePush**](MultiBitratePushApi.md#updateRtmpauthMultiBitratePush) | **POST** /streams/abr/{streamid}/rtmpauth | Update RTMP Auth
[**updateSourceMultiBitratePush**](MultiBitratePushApi.md#updateSourceMultiBitratePush) | **POST** /streams/abr/{streamid}/source | Update Source

# **getDetailsMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20011 getDetailsMultiBitratePush($x_api_key, $streamid)

Stream

Returns the details of an abr stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getDetailsMultiBitratePush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->getDetailsMultiBitratePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multiBitratePushCreate**
> \Swagger\Client\Model\InlineResponse20010 multiBitratePushCreate($x_api_key, $_method, $name, $server, $audioonly, $profile, $parentid, $ssl, $abr, $domainlock, $geoblock, $rtmpauth, $eac)

Create ABR

Create a new ABR stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$server = "server_example"; // string | 
$audioonly = "audioonly_example"; // string | 
$profile = "profile_example"; // string | 
$parentid = "parentid_example"; // string | 
$ssl = "ssl_example"; // string | 
$abr = new \Swagger\Client\Model\StreamsabrnewAbr(); // \Swagger\Client\Model\StreamsabrnewAbr | 
$domainlock = new \Swagger\Client\Model\StreamsabrnewDomainlock(); // \Swagger\Client\Model\StreamsabrnewDomainlock | 
$geoblock = new \Swagger\Client\Model\StreamsabrnewGeoblock(); // \Swagger\Client\Model\StreamsabrnewGeoblock | 
$rtmpauth = new \Swagger\Client\Model\StreamsabrnewRtmpauth(); // \Swagger\Client\Model\StreamsabrnewRtmpauth | 
$eac = new \Swagger\Client\Model\StreamsabrnewEac(); // \Swagger\Client\Model\StreamsabrnewEac | 

try {
    $result = $apiInstance->multiBitratePushCreate($x_api_key, $_method, $name, $server, $audioonly, $profile, $parentid, $ssl, $abr, $domainlock, $geoblock, $rtmpauth, $eac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->multiBitratePushCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **server** | **string**|  | [optional]
 **audioonly** | **string**|  | [optional]
 **profile** | **string**|  | [optional]
 **parentid** | **string**|  | [optional]
 **ssl** | **string**|  | [optional]
 **abr** | [**\Swagger\Client\Model\StreamsabrnewAbr**](../Model/.md)|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\StreamsabrnewDomainlock**](../Model/.md)|  | [optional]
 **geoblock** | [**\Swagger\Client\Model\StreamsabrnewGeoblock**](../Model/.md)|  | [optional]
 **rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](../Model/.md)|  | [optional]
 **eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multiBitratePushlist**
> \Swagger\Client\Model\InlineResponse20010 multiBitratePushlist($x_api_key)

ABR

List Multi Bitrate Push streams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->multiBitratePushlist($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->multiBitratePushlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartMultiBitratePush**
> \Swagger\Client\Model\InlineResponse2005 restartMultiBitratePush($x_api_key, $streamid)

Restart

Restart ABR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartMultiBitratePush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->restartMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

# **restoreMultiBitratePush**
> \Swagger\Client\Model\InlineResponse2005 restoreMultiBitratePush($x_api_key, $streamid)

Restore

Restore ABR Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restoreMultiBitratePush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->restoreMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

# **updateDomainlockMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateDomainlockMultiBitratePush($x_api_key, $streamid, $policy, $list, $ips, $type)

Update Domain Lock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
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
    $result = $apiInstance->updateDomainlockMultiBitratePush($x_api_key, $streamid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateDomainlockMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateExternalAuthControlMultiBitratePush($x_api_key, $streamid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for abr

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
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
    $result = $apiInstance->updateExternalAuthControlMultiBitratePush($x_api_key, $streamid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateExternalAuthControlMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeoblockMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateGeoblockMultiBitratePush($x_api_key, $streamid, $policy, $list, $ips)

Update Geo Block

Update Geoblock of ABR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
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
    $result = $apiInstance->updateGeoblockMultiBitratePush($x_api_key, $streamid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateGeoblockMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateMultiBitratePush($x_api_key, $streamid, $server, $audioonly, $ssl, $profile, $parentid)

Update Info

Update information of ABR stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$server = "server_example"; // string | 
$audioonly = "audioonly_example"; // string | 
$ssl = "ssl_example"; // string | 
$profile = "profile_example"; // string | 
$parentid = "parentid_example"; // string | 

try {
    $result = $apiInstance->updateMultiBitratePush($x_api_key, $streamid, $server, $audioonly, $ssl, $profile, $parentid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateMultiBitratePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **server** | **string**|  | [optional]
 **audioonly** | **string**|  | [optional]
 **ssl** | **string**|  | [optional]
 **profile** | **string**|  | [optional]
 **parentid** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRtmpauthMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateRtmpauthMultiBitratePush($x_api_key, $streamid, $policy, $username, $password)

Update RTMP Auth

Update RTMP auth of ABR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
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
    $result = $apiInstance->updateRtmpauthMultiBitratePush($x_api_key, $streamid, $policy, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateRtmpauthMultiBitratePush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSourceMultiBitratePush**
> \Swagger\Client\Model\InlineResponse20012 updateSourceMultiBitratePush($x_api_key, $streamid, $abr)

Update Source

Update source of ABR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MultiBitratePushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$abr = new \Swagger\Client\Model\StreamsabrstreamidsourceAbr(); // \Swagger\Client\Model\StreamsabrstreamidsourceAbr | 

try {
    $result = $apiInstance->updateSourceMultiBitratePush($x_api_key, $streamid, $abr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiBitratePushApi->updateSourceMultiBitratePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **abr** | [**\Swagger\Client\Model\StreamsabrstreamidsourceAbr**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

