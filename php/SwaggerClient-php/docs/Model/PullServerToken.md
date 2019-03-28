# PullServerToken

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if secure token should be enabled.&lt;br&gt; Set to N if secure token should be disabled. | [optional] 
**list** | **string** | List can be a random alpha numeric string, [A-Za-z0-9] | [optional] 
**ips** | **string** | List of IPs to whitelist when secure token is enabled. IPs should be separated by comma. &lt;br&gt;Eg: 192.168.0.1, 192.168.0.2 | [optional] 
**timeout** | **string** | Secure token link expiration time in seconds  min: 5, max: 25200 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

