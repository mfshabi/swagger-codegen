# Swagger\Client\ZonepushApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createZonePush**](ZonepushApi.md#createZonePush) | **POST** /zones/http/push/new | Create Zone
[**getDetailsZonePush**](ZonepushApi.md#getDetailsZonePush) | **GET** /zones/http/push/{zoneid} | Zone
[**reloadZonePush**](ZonepushApi.md#reloadZonePush) | **POST** /zones/http/push/{zoneid}/reload | Reload
[**restoreZonePush**](ZonepushApi.md#restoreZonePush) | **GET** /zones/http/push/{zoneid}/restore | Restore
[**updateCacheZonePush**](ZonepushApi.md#updateCacheZonePush) | **POST** /zones/http/push/{zoneid}/cache | Update Cache
[**updateDomainLockZonePush**](ZonepushApi.md#updateDomainLockZonePush) | **POST** /zones/http/push/{zoneid}/domainlock | Update Domain Lock
[**updateEdgeSettingsZonePush**](ZonepushApi.md#updateEdgeSettingsZonePush) | **POST** /zones/http/push/{zoneid}/edge | Update Edge Settings
[**updateSecureTokenZonePush**](ZonepushApi.md#updateSecureTokenZonePush) | **POST** /zones/http/push/{zoneid}/securetoken | Update Secure Token
[**updateSslZonePush**](ZonepushApi.md#updateSslZonePush) | **POST** /zones/http/push/{zoneid}/ssl | Update SSL
[**updateZonePush**](ZonepushApi.md#updateZonePush) | **POST** /zones/http/push/{zoneid} | Update Info
[**zonePushCachePurge**](ZonepushApi.md#zonePushCachePurge) | **POST** /zones/http/push/{zoneid}/purge | Zone Cache Purge
[**zonePushList**](ZonepushApi.md#zonePushList) | **GET** /zones/http/push | Zone

# **createZonePush**
> \Swagger\Client\Model\InlineResponse20037 createZonePush($x_api_key, $_method, $server, $cnames, $cache_cache, $edge, $domainlock, $securetoken, $ssl)

Create Zone

Create a new HTTP Push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$server = "server_example"; // string | 
$cnames = "cnames_example"; // string | 
$cache_cache = "cache_cache_example"; // string | 
$edge = new \Swagger\Client\Model\ZoneshttppushnewEdge(); // \Swagger\Client\Model\ZoneshttppushnewEdge | 
$domainlock = new \Swagger\Client\Model\ZoneshttppushnewDomainlock(); // \Swagger\Client\Model\ZoneshttppushnewDomainlock | 
$securetoken = new \Swagger\Client\Model\ZoneshttppushnewSecuretoken(); // \Swagger\Client\Model\ZoneshttppushnewSecuretoken | 
$ssl = new \Swagger\Client\Model\ZoneshttppushnewSsl(); // \Swagger\Client\Model\ZoneshttppushnewSsl | 

try {
    $result = $apiInstance->createZonePush($x_api_key, $_method, $server, $cnames, $cache_cache, $edge, $domainlock, $securetoken, $ssl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->createZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **server** | **string**|  | [optional]
 **cnames** | **string**|  | [optional]
 **cache_cache** | **string**|  | [optional]
 **edge** | [**\Swagger\Client\Model\ZoneshttppushnewEdge**](../Model/.md)|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\ZoneshttppushnewDomainlock**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\ZoneshttppushnewSecuretoken**](../Model/.md)|  | [optional]
 **ssl** | [**\Swagger\Client\Model\ZoneshttppushnewSsl**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetailsZonePush**
> \Swagger\Client\Model\InlineResponse20038 getDetailsZonePush($x_api_key, $zoneid)

Zone

Return  HTTP push zone details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->getDetailsZonePush($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->getDetailsZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reloadZonePush**
> \Swagger\Client\Model\InlineResponse2005 reloadZonePush($x_api_key, $zoneid)

Reload

Reload HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->reloadZonePush($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->reloadZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreZonePush**
> \Swagger\Client\Model\InlineResponse2005 restoreZonePush($x_api_key, $zoneid)

Restore

Restore HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->restoreZonePush($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->restoreZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCacheZonePush**
> \Swagger\Client\Model\InlineResponse20037 updateCacheZonePush($x_api_key, $zoneid, $cache)

Update Cache

Create a new HTTP Push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cache = "cache_example"; // string | 

try {
    $result = $apiInstance->updateCacheZonePush($x_api_key, $zoneid, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateCacheZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **cache** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainLockZonePush**
> \Swagger\Client\Model\InlineResponse20039 updateDomainLockZonePush($x_api_key, $zoneid, $policy, $list, $ips, $type)

Update Domain Lock

Update Edge settings of HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$ips = "ips_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->updateDomainLockZonePush($x_api_key, $zoneid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateDomainLockZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **policy** | **string**|  | [optional]
 **list** | **string**|  | [optional]
 **ips** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEdgeSettingsZonePush**
> \Swagger\Client\Model\InlineResponse20037 updateEdgeSettingsZonePush($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $stripcookie, $xff, $cors, $webp, $pseudostreaming)

Update Edge Settings

Update Edge settings of HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$compression = "compression_example"; // string | 
$compressionlevel = "compressionlevel_example"; // string | 
$disposition = "disposition_example"; // string | 
$stripcookie = "stripcookie_example"; // string | 
$xff = "xff_example"; // string | 
$cors = "cors_example"; // string | 
$webp = "webp_example"; // string | 
$pseudostreaming = "pseudostreaming_example"; // string | 

try {
    $result = $apiInstance->updateEdgeSettingsZonePush($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $stripcookie, $xff, $cors, $webp, $pseudostreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateEdgeSettingsZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **compression** | **string**|  | [optional]
 **compressionlevel** | **string**|  | [optional]
 **disposition** | **string**|  | [optional]
 **stripcookie** | **string**|  | [optional]
 **xff** | **string**|  | [optional]
 **cors** | **string**|  | [optional]
 **webp** | **string**|  | [optional]
 **pseudostreaming** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecureTokenZonePush**
> \Swagger\Client\Model\InlineResponse20037 updateSecureTokenZonePush($x_api_key, $zoneid, $policy, $list, $timeout)

Update Secure Token

Update SecureToken of HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$policy = "policy_example"; // string | 
$list = "list_example"; // string | 
$timeout = 56; // int | 

try {
    $result = $apiInstance->updateSecureTokenZonePush($x_api_key, $zoneid, $policy, $list, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateSecureTokenZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **policy** | **string**|  | [optional]
 **list** | **string**|  | [optional]
 **timeout** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSslZonePush**
> \Swagger\Client\Model\InlineResponse20037 updateSslZonePush($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle)

Update SSL

Update SSL of HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$http2 = "http2_example"; // string | 
$mode = "mode_example"; // string | 
$certid = 56; // int | 
$name = "name_example"; // string | 
$crt = "crt_example"; // string | 
$key = "key_example"; // string | 
$cabundle = "cabundle_example"; // string | 

try {
    $result = $apiInstance->updateSslZonePush($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateSslZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **http2** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **certid** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **crt** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **cabundle** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZonePush**
> \Swagger\Client\Model\InlineResponse20037 updateZonePush($x_api_key, $zoneid, $cnames)

Update Info

Create a new HTTP Push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cnames = "cnames_example"; // string | 

try {
    $result = $apiInstance->updateZonePush($x_api_key, $zoneid, $cnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->updateZonePush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **cnames** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zonePushCachePurge**
> \Swagger\Client\Model\InlineResponse20037 zonePushCachePurge($x_api_key, $zoneid, $_method)

Zone Cache Purge

Purge cache of a HTTP push zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$_method = "_method_example"; // string | 

try {
    $result = $apiInstance->zonePushCachePurge($x_api_key, $zoneid, $_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->zonePushCachePurge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |
 **_method** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zonePushList**
> \Swagger\Client\Model\InlineResponse20036 zonePushList($x_api_key)

Zone

Return  HTTP push zone details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->zonePushList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepushApi->zonePushList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

