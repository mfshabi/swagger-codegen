# PostZonessl

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**http2** | **string** | Values can be Y or N.&lt;br&gt; Set to Y for enabling HTTP/2.&lt;br&gt;Set to N for disabling HTTP/2. | [optional] 
**mode** | **string** | Select SSL type. &lt;br&gt; The value can be N,S or C.&lt;br&gt; Set to N for None&lt;br&gt; Set to S for Shared.&lt;br&gt;Set to C for Custom. | [optional] 
**certid** | **int** | SSL Certificate ID. It can be set if  ssl[mode] is C &lt;br&gt; The value will be already uploaded SSL Certificate ID | [optional] 
**name** | **string** | SSL name . It can be set if  ssl mode is other than C. | [optional] 
**crt** | **string** | SSL certificate ID . It can be set if  ssl mode is other than C. | [optional] 
**key** | **string** | SSL certificate Key. It can be set if  ssl mode  is other than C. | [optional] 
**cabundle** | **string** | SSL  CA bundle . It can be set if  ssl[mode] is other than C | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

