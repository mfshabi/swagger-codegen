# StreamsabrnewGeoblock

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if geoblock countries list should be allowed. &lt;br&gt;Set to N if geoblock countries list should be blocked | [optional] 
**list** | [**\Swagger\Client\Model\StreamsabrnewGeoblockList**](StreamsabrnewGeoblockList.md) |  | [optional] 
**ips** | **string** | List of IPs to whitelist when geoblock is enabled.IPs should be seperated by comma. &lt;br&gt;Eg: 192.168.0.1, 192.168.0.2 .&lt;br&gt;Note: to remove geoblock, set the geoblock[list] to an empty array | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

