# PostDomainLock

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy** | **string** | Values can be Y or N.&lt;br&gt;Set to Y if domainlock should be enabled.&lt;br&gt; Set to N if domainlock should not to be enabled. | [optional] 
**list** | **string** | List of domains seperated by comma.&lt;br&gt;Eg: www.domain-one.com, www.domain-two.com | [optional] 
**ips** | **string** | List of IPs to whitelist when domain lock is enabled. IPs should be separated by comma. &lt;br&gt;Eg: 192.168.0.1, 192.168.0.2 | [optional] 
**type** | **string** | The values can be whitelist or blacklist | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

