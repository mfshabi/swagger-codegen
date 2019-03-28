# Swagger\Client\ScheduledplaylistApi

All URIs are relative to *https://api.5centscdn.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlaylistScheduledPlaylist**](ScheduledplaylistApi.md#createPlaylistScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/playlist/new | Create Playlist
[**createScheduledPlaylist**](ScheduledplaylistApi.md#createScheduledPlaylist) | **POST** /streams/scheduledplaylist/new | Create Scheduled Playlist
[**getDetailsScheduledPlaylist**](ScheduledplaylistApi.md#getDetailsScheduledPlaylist) | **GET** /streams/scheduledplaylist/{streamid} | Stream
[**restartScheduledPlaylist**](ScheduledplaylistApi.md#restartScheduledPlaylist) | **GET** /streams/scheduledplaylist/{streamid}/restart | Restart
[**restoreScheduledPlaylist**](ScheduledplaylistApi.md#restoreScheduledPlaylist) | **GET** /streams/scheduledplaylist/{streamid}/restore | Restore
[**scheduledPlayList**](ScheduledplaylistApi.md#scheduledPlayList) | **GET** /streams/scheduledplaylist | Stream
[**updateDomainlockScheduledPlaylist**](ScheduledplaylistApi.md#updateDomainlockScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/domainlock | Update Domain Lock
[**updateExternalAuthControlScheduledPlaylist**](ScheduledplaylistApi.md#updateExternalAuthControlScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/eac | Update External Auth Control
[**updateGeoblockScheduledPlaylist**](ScheduledplaylistApi.md#updateGeoblockScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/geoblock | Update Geo Block
[**updateInfoScheduledPlaylist**](ScheduledplaylistApi.md#updateInfoScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid} | Update Info
[**updatePlaylistScheduledPlaylist**](ScheduledplaylistApi.md#updatePlaylistScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/playlist/{playlistid} | Update Playlist
[**updateRtmpauthScheduledPlaylist**](ScheduledplaylistApi.md#updateRtmpauthScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/rtmpauth | Update RTMPAuth
[**updateSecureTokenScheduledPlaylist**](ScheduledplaylistApi.md#updateSecureTokenScheduledPlaylist) | **POST** /streams/scheduledplaylist/{streamid}/securetoken | Update Secure Token

# **createPlaylistScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20032 createPlaylistScheduledPlaylist($x_api_key, $streamid, $_method, $name, $type, $length, $schedule, $scheduleontime, $scheduleondatetime, $files)

Create Playlist

Create new playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$type = "type_example"; // string | 
$length = "length_example"; // string | 
$schedule = "schedule_example"; // string | 
$scheduleontime = "scheduleontime_example"; // string | 
$scheduleondatetime = "scheduleondatetime_example"; // string | 
$files = new \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles(); // \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles | 

try {
    $result = $apiInstance->createPlaylistScheduledPlaylist($x_api_key, $streamid, $_method, $name, $type, $length, $schedule, $scheduleontime, $scheduleondatetime, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->createPlaylistScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **_method** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **length** | **string**|  | [optional]
 **schedule** | **string**|  | [optional]
 **scheduleontime** | **string**|  | [optional]
 **scheduleondatetime** | **string**|  | [optional]
 **files** | [**\Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 createScheduledPlaylist($x_api_key, $_method, $name, $parent, $audioonly, $preroll, $loop, $domainlock, $geoblock, $securetoken, $rtmpauth, $eac)

Create Scheduled Playlist

Create new scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$_method = "_method_example"; // string | 
$name = "name_example"; // string | 
$parent = "parent_example"; // string | 
$audioonly = "audioonly_example"; // string | 
$preroll = "preroll_example"; // string | 
$loop = "loop_example"; // string | 
$domainlock = new \Swagger\Client\Model\StreamstimeshiftnewDomainlock(); // \Swagger\Client\Model\StreamstimeshiftnewDomainlock | 
$geoblock = new \Swagger\Client\Model\StreamstimeshiftnewGeoblock(); // \Swagger\Client\Model\StreamstimeshiftnewGeoblock | 
$securetoken = new \Swagger\Client\Model\StreamstimeshiftnewSecuretoken(); // \Swagger\Client\Model\StreamstimeshiftnewSecuretoken | 
$rtmpauth = new \Swagger\Client\Model\StreamsabrnewRtmpauth(); // \Swagger\Client\Model\StreamsabrnewRtmpauth | 
$eac = new \Swagger\Client\Model\StreamsabrnewEac(); // \Swagger\Client\Model\StreamsabrnewEac | 

try {
    $result = $apiInstance->createScheduledPlaylist($x_api_key, $_method, $name, $parent, $audioonly, $preroll, $loop, $domainlock, $geoblock, $securetoken, $rtmpauth, $eac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->createScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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
 **audioonly** | **string**|  | [optional]
 **preroll** | **string**|  | [optional]
 **loop** | **string**|  | [optional]
 **domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](../Model/.md)|  | [optional]
 **geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](../Model/.md)|  | [optional]
 **securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](../Model/.md)|  | [optional]
 **rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](../Model/.md)|  | [optional]
 **eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetailsScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20031 getDetailsScheduledPlaylist($x_api_key, $streamid)

Stream

Return details of the stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->getDetailsScheduledPlaylist($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->getDetailsScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse2005 restartScheduledPlaylist($x_api_key, $streamid)

Restart

Restart scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restartScheduledPlaylist($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->restartScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

# **restoreScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse2005 restoreScheduledPlaylist($x_api_key, $streamid)

Restore

Restore a scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID

try {
    $result = $apiInstance->restoreScheduledPlaylist($x_api_key, $streamid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->restoreScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

# **scheduledPlayList**
> \Swagger\Client\Model\InlineResponse20020 scheduledPlayList($x_api_key)

Stream

scheduledplaylist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key

try {
    $result = $apiInstance->scheduledPlayList($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->scheduledPlayList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomainlockScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateDomainlockScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips, $type)

Update Domain Lock

Update domain lock of scheduled playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
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
    $result = $apiInstance->updateDomainlockScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateDomainlockScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalAuthControlScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateExternalAuthControlScheduledPlaylist($x_api_key, $streamid, $policy, $authurl, $ips)

Update External Auth Control

Update External auth control for scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
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
    $result = $apiInstance->updateExternalAuthControlScheduledPlaylist($x_api_key, $streamid, $policy, $authurl, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateExternalAuthControlScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeoblockScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateGeoblockScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips)

Update Geo Block

Update geoblock of scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
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
    $result = $apiInstance->updateGeoblockScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateGeoblockScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInfoScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateInfoScheduledPlaylist($x_api_key, $streamid, $audioonly, $preroll, $loop)

Update Info

Update information of scheduled playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$audioonly = 56; // int | 
$preroll = "preroll_example"; // string | 
$loop = "loop_example"; // string | 

try {
    $result = $apiInstance->updateInfoScheduledPlaylist($x_api_key, $streamid, $audioonly, $preroll, $loop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateInfoScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **audioonly** | **int**|  | [optional]
 **preroll** | **string**|  | [optional]
 **loop** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlaylistScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse2005 updatePlaylistScheduledPlaylist($x_api_key, $streamid, $playlistid, $name, $type, $length, $schedule, $scheduleontime, $scheduleondatetime, $files)

Update Playlist

Update the playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = "x_api_key_example"; // string | Your API Key
$streamid = "streamid_example"; // string | Stream ID
$playlistid = "playlistid_example"; // string | Playlist ID
$name = "name_example"; // string | 
$type = "type_example"; // string | 
$length = "length_example"; // string | 
$schedule = "schedule_example"; // string | 
$scheduleontime = "scheduleontime_example"; // string | 
$scheduleondatetime = "scheduleondatetime_example"; // string | 
$files = new \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles(); // \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles | 

try {
    $result = $apiInstance->updatePlaylistScheduledPlaylist($x_api_key, $streamid, $playlistid, $name, $type, $length, $schedule, $scheduleontime, $scheduleondatetime, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updatePlaylistScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| Your API Key |
 **streamid** | **string**| Stream ID |
 **playlistid** | **string**| Playlist ID |
 **name** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **length** | **string**|  | [optional]
 **schedule** | **string**|  | [optional]
 **scheduleontime** | **string**|  | [optional]
 **scheduleondatetime** | **string**|  | [optional]
 **files** | [**\Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRtmpauthScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateRtmpauthScheduledPlaylist($x_api_key, $streamid, $policy, $username, $password)

Update RTMPAuth

Update RTMP auth of a scheduled playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
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
    $result = $apiInstance->updateRtmpauthScheduledPlaylist($x_api_key, $streamid, $policy, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateRtmpauthScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecureTokenScheduledPlaylist**
> \Swagger\Client\Model\InlineResponse20024 updateSecureTokenScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips, $timeout)

Update Secure Token

Update secure token of a scheduled playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledplaylistApi(
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
    $result = $apiInstance->updateSecureTokenScheduledPlaylist($x_api_key, $streamid, $policy, $list, $ips, $timeout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledplaylistApi->updateSecureTokenScheduledPlaylist: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

