# Swagger\Client\StreamspullApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStreamsPull**](StreamspullApi.md#createStreamsPull) | **POST** /streams/restream/new | Create Restream
[**getDetailsStreamsPull**](StreamspullApi.md#getDetailsStreamsPull) | **GET** /streams/restream/{streamid} | Stream
[**listPullStreams**](StreamspullApi.md#listPullStreams) | **GET** /streams/restream | Stream
[**restartStreamsPull**](StreamspullApi.md#restartStreamsPull) | **GET** /streams/restream/{streamid}/restart | Restart
[**restoreStreamsPull**](StreamspullApi.md#restoreStreamsPull) | **GET** /streams/restream/{streamid}/restore | Restore
[**serversStreamsPull**](StreamspullApi.md#serversStreamsPull) | **GET** /streams/restream/servers | Servers
[**updateDomainlockStreamsPull**](StreamspullApi.md#updateDomainlockStreamsPull) | **POST** /streams/restream/{streamid}/domainlock | Update Domain Lock
[**updateDvrStreamsPull**](StreamspullApi.md#updateDvrStreamsPull) | **POST** /streams/restream/{streamid}/record | Update DVR
[**updateExternalAuthControlStreamsPull**](StreamspullApi.md#updateExternalAuthControlStreamsPull) | **POST** /streams/restream/{streamid}/eac | Update External Auth Control
[**updateGeoblockStreamsPull**](StreamspullApi.md#updateGeoblockStreamsPull) | **POST** /streams/restream/{streamid}/geoblock | Update Geo Block
[**updateSecuretokenStreamsPull**](StreamspullApi.md#updateSecuretokenStreamsPull) | **POST** /streams/restream/{streamid}/securetoken | Update SecureToken
[**updateSourceStreamsPull**](StreamspullApi.md#updateSourceStreamsPull) | **POST** /streams/restream/{streamid}/source | Update Source
[**updatesStreamsPull**](StreamspullApi.md#updatesStreamsPull) | **POST** /streams/restream/{streamid} | Update Info

# **createStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 createStreamsPull($x_api_key, $_method, $name, $restreamtype, $server, $url, $audioonly, $domainlock, $geoblock, $backup, $audiofix, $securetoken, $record, $eac)

Create Restream

Create a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$restreamtype = "restreamtype_example"; // string | 
$server = new \Swagger\Client\Model\StreamsrestreamnewServer(); // \Swagger\Client\Model\StreamsrestreamnewServer | 
$url = new \Swagger\Client\Model\StreamsrestreamnewUrl(); // \Swagger\Client\Model\StreamsrestreamnewUrl | 
$audioonly = "audioonly_example"; // string | 
$domainlock = new \Swagger\Client\Model\StreamstimeshiftnewDomainlock(); // \Swagger\Client\Model\StreamstimeshiftnewDomainlock | 
$geoblock = new \Swagger\Client\Model\StreamsrestreamnewGeoblock(); // \Swagger\Client\Model\StreamsrestreamnewGeoblock | 
$backup = "backup_example"; // string | 
$audiofix = "audiofix_example"; // string | 
$securetoken = new \Swagger\Client\Model\StreamstimeshiftnewSecuretoken(); // \Swagger\Client\Model\StreamstimeshiftnewSecuretoken | 
$record = new \Swagger\Client\Model\StreamsrestreamnewRecord(); // \Swagger\Client\Model\StreamsrestreamnewRecord | 
$eac = new \Swagger\Client\Model\StreamsabrnewEac(); // \Swagger\Client\Model\StreamsabrnewEac | 

try {
    $result = $apiInstance->createStreamsPull($x_api_key, $_method, $name, $restreamtype, $server, $url, $audioonly, $domainlock, $geoblock, $backup, $audiofix, $securetoken, $record, $eac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->createStreamsPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **restreamtype** | **string**|  | [optional]
 **server** | [**\Swagger\Client\Model\StreamsrestreamnewServer**](../Model/.md)|  | [optional]
 **url** | [**\Swagger\Client\Model\StreamsrestreamnewUrl**](../Model/.md)|  | [optional]
 **audioonly** | **string**|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](../Model/.md)|  | [optional]
 **geoblock** | [**\Swagger\Client\Model\StreamsrestreamnewGeoblock**](../Model/.md)|  | [optional]
 **backup** | **string**|  | [optional]
 **audiofix** | **string**|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](../Model/.md)|  | [optional]
 **record** | [**\Swagger\Client\Model\StreamsrestreamnewRecord**](../Model/.md)|  | [optional]
 **eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetailsStreamsPull**
> \Swagger\Client\Model\InlineResponse2008 getDetailsStreamsPull($x_api_key, $streamid)

Stream

Return the details of a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getDetailsStreamsPull($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->getDetailsStreamsPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPullStreams**
> \Swagger\Client\Model\InlineResponse2006 listPullStreams($x_api_key)

Stream

pull streams list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->listPullStreams($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->listPullStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartStreamsPull**
> \Swagger\Client\Model\InlineResponse2005 restartStreamsPull($x_api_key, $streamid)

Restart

Restart a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartStreamsPull($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->restartStreamsPull: ', $e->getMessage(), PHP_EOL;
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

# **restoreStreamsPull**
> \Swagger\Client\Model\InlineResponse2005 restoreStreamsPull($x_api_key, $streamid)

Restore

Restore a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restoreStreamsPull($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->restoreStreamsPull: ', $e->getMessage(), PHP_EOL;
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

# **serversStreamsPull**
> \Swagger\Client\Model\InlineResponse2009 serversStreamsPull($x_api_key)

Servers

Return the list of servers of publish stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->serversStreamsPull($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->serversStreamsPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainlockStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updateDomainlockStreamsPull($x_api_key, $streamid, $policy, $list, $ips, $type)

Update Domain Lock

Update domain lock of a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
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
    $result = $apiInstance->updateDomainlockStreamsPull($x_api_key, $streamid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateDomainlockStreamsPull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDvrStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updateDvrStreamsPull($x_api_key, $streamid, $enabled, $retention)

Update DVR

Update DVR of a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$enabled = "enabled_example"; // string | 
$retention = "retention_example"; // string | 

try {
    $result = $apiInstance->updateDvrStreamsPull($x_api_key, $streamid, $enabled, $retention);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateDvrStreamsPull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updateExternalAuthControlStreamsPull($x_api_key, $streamid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
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
    $result = $apiInstance->updateExternalAuthControlStreamsPull($x_api_key, $streamid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateExternalAuthControlStreamsPull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeoblockStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updateGeoblockStreamsPull($x_api_key, $streamid, $policy, $list, $ips)

Update Geo Block

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
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
    $result = $apiInstance->updateGeoblockStreamsPull($x_api_key, $streamid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateGeoblockStreamsPull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecuretokenStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updateSecuretokenStreamsPull($x_api_key, $streamid, $policy, $list, $ips, $timeout)

Update SecureToken

Update secure token of a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$ips = "ips_example"; // string | 
$timeout = "timeout_example"; // string | 

try {
    $result = $apiInstance->updateSecuretokenStreamsPull($x_api_key, $streamid, $policy, $list, $ips, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateSecuretokenStreamsPull: ', $e->getMessage(), PHP_EOL;
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
 **timeout** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSourceStreamsPull**
> \Swagger\Client\Model\InlineResponse2008 updateSourceStreamsPull($x_api_key, $streamid, $restreamtype, $server, $url, $audiofix)

Update Source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$restreamtype = "restreamtype_example"; // string | 
$server = new \Swagger\Client\Model\StreamsrestreamnewServer(); // \Swagger\Client\Model\StreamsrestreamnewServer | 
$url = new \Swagger\Client\Model\StreamsrestreamstreamidsourceUrl(); // \Swagger\Client\Model\StreamsrestreamstreamidsourceUrl | 
$audiofix = "audiofix_example"; // string | 

try {
    $result = $apiInstance->updateSourceStreamsPull($x_api_key, $streamid, $restreamtype, $server, $url, $audiofix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updateSourceStreamsPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **restreamtype** | **string**|  | [optional]
 **server** | [**\Swagger\Client\Model\StreamsrestreamnewServer**](../Model/.md)|  | [optional]
 **url** | [**\Swagger\Client\Model\StreamsrestreamstreamidsourceUrl**](../Model/.md)|  | [optional]
 **audiofix** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatesStreamsPull**
> \Swagger\Client\Model\InlineResponse2007 updatesStreamsPull($x_api_key, $streamid, $audioonly, $backup)

Update Info

Update information of a restream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StreamspullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$audioonly = "audioonly_example"; // string | 
$backup = "backup_example"; // string | 

try {
    $result = $apiInstance->updatesStreamsPull($x_api_key, $streamid, $audioonly, $backup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamspullApi->updatesStreamsPull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **audioonly** | **string**|  | [optional]
 **backup** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

