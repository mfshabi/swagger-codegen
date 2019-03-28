# Swagger\Client\ZonepullApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createZonePull**](ZonepullApi.md#createZonePull) | **POST** /zones/http/pull/new | Create Zone
[**getZonePull**](ZonepullApi.md#getZonePull) | **GET** /zones/http/pull/{zoneid} | Zone
[**restoreZonePull**](ZonepullApi.md#restoreZonePull) | **GET** /zones/http/pull/{zoneid}/restore | Restore
[**updateCacheZonePull**](ZonepullApi.md#updateCacheZonePull) | **POST** /zones/http/pull/{zoneid}/cache | Update Cache
[**updateDomainLockZonePull**](ZonepullApi.md#updateDomainLockZonePull) | **POST** /zones/http/pull/{zoneid}/domainlock | Update Domain Lock
[**updateEdgeSettingsZonePull**](ZonepullApi.md#updateEdgeSettingsZonePull) | **POST** /zones/http/pull/{zoneid}/edge | Update Edge Settings
[**updateSecureTokenZonePull**](ZonepullApi.md#updateSecureTokenZonePull) | **POST** /zones/http/pull/{zoneid}/securetoken | Update Secure Token
[**updateSslZonePull**](ZonepullApi.md#updateSslZonePull) | **POST** /zones/http/pull/{zoneid}/ssl | Update SSL
[**updateZonePull**](ZonepullApi.md#updateZonePull) | **POST** /zones/http/pull/{zoneid} | Update Info
[**zoneCachePurgeZonePull**](ZonepullApi.md#zoneCachePurgeZonePull) | **POST** /zones/http/pull/{zoneid}/purge | Purge
[**zonePullList**](ZonepullApi.md#zonePullList) | **GET** /zones/http/pull | Zone

# **createZonePull**
> \Swagger\Client\Model\InlineResponse20041 createZonePull($x_api_key, $_method, $origin, $cnames, $cache_cache, $cache_expiry, $live, $edge, $domainlock, $securetoken, $ssl)

Create Zone

Create a new HTTP Pull Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$origin = "origin_example"; // string | 
$cnames = "cnames_example"; // string | 
$cache_cache = "cache_cache_example"; // string | 
$cache_expiry = "cache_expiry_example"; // string | 
$live = "live_example"; // string | 
$edge = new \Swagger\Client\Model\ZoneshttppushnewEdge(); // \Swagger\Client\Model\ZoneshttppushnewEdge | 
$domainlock = new \Swagger\Client\Model\ZoneshttppushnewDomainlock(); // \Swagger\Client\Model\ZoneshttppushnewDomainlock | 
$securetoken = new \Swagger\Client\Model\ZoneshttppullnewSecuretoken(); // \Swagger\Client\Model\ZoneshttppullnewSecuretoken | 
$ssl = new \Swagger\Client\Model\ZoneshttppullnewSsl(); // \Swagger\Client\Model\ZoneshttppullnewSsl | 

try {
    $result = $apiInstance->createZonePull($x_api_key, $_method, $origin, $cnames, $cache_cache, $cache_expiry, $live, $edge, $domainlock, $securetoken, $ssl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->createZonePull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **_method** | **string**|  | [optional]
 **origin** | **string**|  | [optional]
 **cnames** | **string**|  | [optional]
 **cache_cache** | **string**|  | [optional]
 **cache_expiry** | **string**|  | [optional]
 **live** | **string**|  | [optional]
 **edge** | [**\Swagger\Client\Model\ZoneshttppushnewEdge**](../Model/.md)|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\ZoneshttppushnewDomainlock**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\ZoneshttppullnewSecuretoken**](../Model/.md)|  | [optional]
 **ssl** | [**\Swagger\Client\Model\ZoneshttppullnewSsl**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZonePull**
> \Swagger\Client\Model\InlineResponse20042 getZonePull($x_api_key, $zoneid)

Zone

Return  HTTP pull zone details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->getZonePull($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->getZonePull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **zoneid** | **string**| Zone ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreZonePull**
> \Swagger\Client\Model\InlineResponse2005 restoreZonePull($x_api_key, $zoneid)

Restore

Restore HTTP pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID

try {
    $result = $apiInstance->restoreZonePull($x_api_key, $zoneid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->restoreZonePull: ', $e->getMessage(), PHP_EOL;
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

# **updateCacheZonePull**
> \Swagger\Client\Model\InlineResponse20044 updateCacheZonePull($x_api_key, $zoneid, $cache)

Update Cache

Create a new HTTP Push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cache = "cache_example"; // string | 

try {
    $result = $apiInstance->updateCacheZonePull($x_api_key, $zoneid, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateCacheZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainLockZonePull**
> \Swagger\Client\Model\InlineResponse20044 updateDomainLockZonePull($x_api_key, $zoneid, $policy, $list, $ips, $type)

Update Domain Lock

Update Domain lock of HTTP pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
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
    $result = $apiInstance->updateDomainLockZonePull($x_api_key, $zoneid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateDomainLockZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEdgeSettingsZonePull**
> \Swagger\Client\Model\InlineResponse20044 updateEdgeSettingsZonePull($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $stripcookie, $xff, $cors, $webp, $pseudostreaming)

Update Edge Settings

Update Edge settings of HTTP record zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
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
    $result = $apiInstance->updateEdgeSettingsZonePull($x_api_key, $zoneid, $compression, $compressionlevel, $disposition, $stripcookie, $xff, $cors, $webp, $pseudostreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateEdgeSettingsZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecureTokenZonePull**
> \Swagger\Client\Model\InlineResponse20044 updateSecureTokenZonePull($x_api_key, $zoneid, $policy, $list, $timeout)

Update Secure Token

Update SecureToken of HTTP pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
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
    $result = $apiInstance->updateSecureTokenZonePull($x_api_key, $zoneid, $policy, $list, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateSecureTokenZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSslZonePull**
> \Swagger\Client\Model\InlineResponse20043 updateSslZonePull($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle)

Update SSL

Update SSL of HTTP pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
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
    $result = $apiInstance->updateSslZonePull($x_api_key, $zoneid, $http2, $mode, $certid, $name, $crt, $key, $cabundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateSslZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZonePull**
> \Swagger\Client\Model\InlineResponse20043 updateZonePull($x_api_key, $zoneid, $cnames)

Update Info

Create a new HTTP Push Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$cnames = "cnames_example"; // string | 

try {
    $result = $apiInstance->updateZonePull($x_api_key, $zoneid, $cnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->updateZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoneCachePurgeZonePull**
> \Swagger\Client\Model\InlineResponse2005 zoneCachePurgeZonePull($x_api_key, $zoneid, $_method)

Purge

Purge cache of a HTTP pull zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$zoneid = "zoneid_example"; // string | Zone ID
$_method = "_method_example"; // string | 

try {
    $result = $apiInstance->zoneCachePurgeZonePull($x_api_key, $zoneid, $_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->zoneCachePurgeZonePull: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zonePullList**
> \Swagger\Client\Model\InlineResponse20040 zonePullList($x_api_key)

Zone

Zone HTTP Pull list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ZonepullApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->zonePullList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonepullApi->zonePullList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

