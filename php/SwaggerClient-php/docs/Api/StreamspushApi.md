# Swagger\Client\StreamspushApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPushStreams**](StreamspushApi.md#createPushStreams) | **POST** /streams/push/new | Create Publish
[**getServersStreamsPush**](StreamspushApi.md#getServersStreamsPush) | **GET** /streams/push/servers | Servers
[**getStreamsPush**](StreamspushApi.md#getStreamsPush) | **GET** /streams/push/{streamid} | Stream
[**restartStreamsPush**](StreamspushApi.md#restartStreamsPush) | **GET** /streams/push/{streamid}/restart | Restart
[**restoreStreamsPush**](StreamspushApi.md#restoreStreamsPush) | **GET** /streams/push/{streamid}/restore | Restore
[**streamsPushList**](StreamspushApi.md#streamsPushList) | **GET** /streams/push | Stream
[**updateDvrStreamsPush**](StreamspushApi.md#updateDvrStreamsPush) | **POST** /streams/push/{streamid}/record | Update DVR
[**updateExternalAuthControlStreamsPush**](StreamspushApi.md#updateExternalAuthControlStreamsPush) | **POST** /streams/push/{streamid}/eac | Update External Auth Control
[**updateRtmpauthStreamsPush**](StreamspushApi.md#updateRtmpauthStreamsPush) | **POST** /streams/push/{streamid}/rtmpauth | Update RTMPAuth
[**updateSecureTokenStreamsPush**](StreamspushApi.md#updateSecureTokenStreamsPush) | **POST** /streams/push/{streamid}/securetoken | Update Secure Token
[**updateStreamspush**](StreamspushApi.md#updateStreamspush) | **POST** /streams/push/{streamid} | Update Info
[**updatedomainlockStreamsPush**](StreamspushApi.md#updatedomainlockStreamsPush) | **POST** /streams/push/{streamid}/domainlock | Update Domain Lock
[**updategeoblockStreamsPush**](StreamspushApi.md#updategeoblockStreamsPush) | **POST** /streams/push/{streamid}/geoblock | Update Geo Block
[**updatesourceStreamsPush**](StreamspushApi.md#updatesourceStreamsPush) | **POST** /streams/push/{streamid}/source | Update Source

# **createPushStreams**
> \Swagger\Client\Model\InlineResponse2002 createPushStreams($x_api_key, $_method, $name, $server, $audioonly, $domainlock, $geoblock, $rtmpauth, $record, $securetoken, $eac)

Create Publish

Create a Publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$server = "server_example"; // string | 
$audioonly = "audioonly_example"; // string | 
$domainlock = new \Swagger\Client\Model\StreamstimeshiftnewDomainlock(); // \Swagger\Client\Model\StreamstimeshiftnewDomainlock | 
$geoblock = new \Swagger\Client\Model\StreamstimeshiftnewGeoblock(); // \Swagger\Client\Model\StreamstimeshiftnewGeoblock | 
$rtmpauth = new \Swagger\Client\Model\StreamsabrnewRtmpauth(); // \Swagger\Client\Model\StreamsabrnewRtmpauth | 
$record = new \Swagger\Client\Model\StreamspushnewRecord(); // \Swagger\Client\Model\StreamspushnewRecord | 
$securetoken = new \Swagger\Client\Model\StreamstimeshiftnewSecuretoken(); // \Swagger\Client\Model\StreamstimeshiftnewSecuretoken | 
$eac = new \Swagger\Client\Model\StreamsabrnewEac(); // \Swagger\Client\Model\StreamsabrnewEac | 

try {
    $result = $apiInstance->createPushStreams($x_api_key, $_method, $name, $server, $audioonly, $domainlock, $geoblock, $rtmpauth, $record, $securetoken, $eac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->createPushStreams: ', $e->getMessage(), PHP_EOL;
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
 **domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](../Model/.md)|  | [optional]
 **geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](../Model/.md)|  | [optional]
 **rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](../Model/.md)|  | [optional]
 **record** | [**\Swagger\Client\Model\StreamspushnewRecord**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](../Model/.md)|  | [optional]
 **eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServersStreamsPush**
> \Swagger\Client\Model\InlineResponse2004 getServersStreamsPush($x_api_key)

Servers

Return the list of servers of publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->getServersStreamsPush($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->getServersStreamsPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamsPush**
> \Swagger\Client\Model\InlineResponse2003 getStreamsPush($x_api_key, $streamid)

Stream

Returns the details of a publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getStreamsPush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->getStreamsPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartStreamsPush**
> \Swagger\Client\Model\InlineResponse2005 restartStreamsPush($x_api_key, $streamid)

Restart

Restart a Publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartStreamsPush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->restartStreamsPush: ', $e->getMessage(), PHP_EOL;
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

# **restoreStreamsPush**
> \Swagger\Client\Model\InlineResponse2005 restoreStreamsPush($x_api_key, $streamid)

Restore

Restore a Publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restoreStreamsPush($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->restoreStreamsPush: ', $e->getMessage(), PHP_EOL;
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

# **streamsPushList**
> \Swagger\Client\Model\InlineResponse2001 streamsPushList($x_api_key)

Stream

push list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->streamsPushList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->streamsPushList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDvrStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updateDvrStreamsPush($x_api_key, $streamid, $enabled, $retention)

Update DVR

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$enabled = "enabled_example"; // string | 
$retention = "retention_example"; // string | 

try {
    $result = $apiInstance->updateDvrStreamsPush($x_api_key, $streamid, $enabled, $retention);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updateDvrStreamsPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **enabled** | **string**|  | [optional]
 **retention** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updateExternalAuthControlStreamsPush($x_api_key, $streamid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
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
    $result = $apiInstance->updateExternalAuthControlStreamsPush($x_api_key, $streamid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updateExternalAuthControlStreamsPush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRtmpauthStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updateRtmpauthStreamsPush($x_api_key, $streamid, $policy, $username, $password)

Update RTMPAuth

Update RTMPAuth of publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
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
    $result = $apiInstance->updateRtmpauthStreamsPush($x_api_key, $streamid, $policy, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updateRtmpauthStreamsPush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecureTokenStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updateSecureTokenStreamsPush($x_api_key, $streamid, $policy, $list, $ips, $timeout)

Update Secure Token

Update secure token of a publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
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
    $result = $apiInstance->updateSecureTokenStreamsPush($x_api_key, $streamid, $policy, $list, $ips, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updateSecureTokenStreamsPush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStreamspush**
> \Swagger\Client\Model\InlineResponse2002 updateStreamspush($x_api_key, $streamid, $server, $audioonly, $backup)

Update Info

Update the information of publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$server = "server_example"; // string | 
$audioonly = "audioonly_example"; // string | 
$backup = "backup_example"; // string | 

try {
    $result = $apiInstance->updateStreamspush($x_api_key, $streamid, $server, $audioonly, $backup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updateStreamspush: ', $e->getMessage(), PHP_EOL;
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
 **backup** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatedomainlockStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updatedomainlockStreamsPush($x_api_key, $streamid, $policy, $list, $ips, $type)

Update Domain Lock

Update the domainlock of a publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
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
    $result = $apiInstance->updatedomainlockStreamsPush($x_api_key, $streamid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updatedomainlockStreamsPush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updategeoblockStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updategeoblockStreamsPush($x_api_key, $streamid, $policy, $list, $ips)

Update Geo Block

Update the geoblock of a publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
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
    $result = $apiInstance->updategeoblockStreamsPush($x_api_key, $streamid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updategeoblockStreamsPush: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatesourceStreamsPush**
> \Swagger\Client\Model\InlineResponse2002 updatesourceStreamsPush($x_api_key, $streamid, $server)

Update Source

Update the source of a publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$server = "server_example"; // string | 

try {
    $result = $apiInstance->updatesourceStreamsPush($x_api_key, $streamid, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspushApi->updatesourceStreamsPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **server** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

