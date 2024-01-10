# 接口查找
## 通讯录管理
### 成员管理
````
----------------------------------------------

读取成员：

参数类：StaffDetailParam

请求类：StaffDetailRequest

----------------------------------------------

删除成员：

参数类：StaffDeleteParam

请求类：StaffDeleteRequest

----------------------------------------------

批量删除成员：

参数类：StaffDeleteBatchParam

请求类：StaffDeleteBatchRequest

----------------------------------------------

获取部门成员：

参数类：DepartmentStaffListparam

请求类：DepartmentStaffListRequest

----------------------------------------------

获取成员ID列表：

参数类：StaffIdListParam

请求类：StaffIdListRequest

----------------------------------------------
````
### 部门管理
````
----------------------------------------------

获取部门列表：

参数类：DepartmentListParam

请求类：DepartmentListRequest

----------------------------------------------

获取单个部门详情：

参数类：DepartmentDetailParam

请求类：DepartmentDetailRequest

----------------------------------------------
````
## 消息推送
### 应用消息
````
----------------------------------------------

发送应用消息：

参数类：
    1.文本消息：AppMsgSendTextParam

请求类：AppMsgSendRequest

----------------------------------------------

撤回应用消息：

参数类：AppMsgRecallParam

请求类：AppMsgRecallRequest

----------------------------------------------
````
## 客户联系
### 企业服务人员管理
````
----------------------------------------------

获取配置了客户联系功能的成员列表：

参数类：FollowUserListParam

请求类：FollowUserListRequest

----------------------------------------------
````

### 客户管理
````
----------------------------------------------

获取客户列表：

参数类：CustomerListParam

请求类：CustomerListRequest

----------------------------------------------

获取客户详情：

参数类：CustomerDetailParam

请求类：CustomerDetailRequest

----------------------------------------------

批量获取客户详情：

参数类：CustomerBatchGetByStaffParam

请求类：CustomerBatchGetByStaffRequest

----------------------------------------------

修改客户备注信息：

参数类：CustomerRemarkParam

请求类：CustomerRemarkRequest

----------------------------------------------
````
### 客户标签管理
````
----------------------------------------------

获取企业标签库：

参数类：CustomerCorpTagListParam

请求类：CustomerCorpTagListRequest

----------------------------------------------

添加企业客户标签：

参数类：CustomerCorpTagAddParam

请求类：CustomerCorpTagAddRequest

----------------------------------------------

编辑企业客户标签：

参数类：CustomerCorpTagUpdateParam

请求类：CustomerCorpTagUpdateRequest

----------------------------------------------

删除企业客户标签：

参数类：CustomerCorpTagDeleteParam

请求类：CustomerCorpTagDeleteRequest

----------------------------------------------

编辑客户企业标签：

参数类：CustomerCorpTagMarkParam

请求类：CustomerCorpTagMarkRequest

----------------------------------------------
````
### 客户群管理
````
----------------------------------------------

获取客户群列表：

参数类：ChatGroupListParam

请求类：ChatGroupListRequest

----------------------------------------------

获取客户群详情：

参数类：ChatGroupDetailParam

请求类：ChatGroupDetailRequest

----------------------------------------------

客户群opengid转换：

参数类：ChatGroupOpengidToChatIdParam

请求类：ChatGroupOpengidToChatIdRequest

----------------------------------------------
````
### 联系我与客户入群方式
````
----------------------------------------------

配置客户联系「联系我」方式：

参数类：ContactWayAddParam

请求类：ContactWayAddRequest

----------------------------------------------

获取企业已配置的「联系我」方式：

参数类：ContactWayDeleteParam

请求类：ContactWayDeleteRequest

----------------------------------------------

获取企业已配置的「联系我」列表：

参数类：ContactWayListParam

请求类：ContactWayListRequest

----------------------------------------------

更新企业已配置的「联系我」方式：

参数类：ContactWayUpdateParam

请求类：ContactWayUpdateRequest

----------------------------------------------

删除企业已配置的「联系我」方式：

参数类：ContactWayDeleteParam

请求类：ContactWayDeleteRequest

----------------------------------------------

结束临时会话：

参数类：ContactWayCloseTempChatParam

请求类：ContactWayCloseTempChatRequest

----------------------------------------------

配置客户群进群方式：

参数类：JoinChatWayAddParam

请求类：JoinChatWayAddRequest

----------------------------------------------

获取客户群进群方式配置：

参数类：JoinChatWayDetailParam

请求类：JoinChatWayDetailRequest

----------------------------------------------

更新客户群进群方式配置：

参数类：JoinChatWayUpdateParam

请求类：JoinChatWayUpdateRequest

----------------------------------------------

删除客户群进群方式配置：

参数类：JoinChatWayDeleteParam

请求类：JoinChatWayDeleteRequest

----------------------------------------------
````
### 获客助手
````
----------------------------------------------

获取获客链接列表：

参数类：CustomerAcquisitionListParam

请求类：CustomerAcquisitionListRequest

----------------------------------------------

获取获客链接详情：

参数类：CustomerAcquisitionDetailParam

请求类：CustomerAcquisitionDetailRequest

----------------------------------------------

创建获客链接：

参数类：CustomerAcquisitionCreateParam

请求类：CustomerAcquisitionCreateRequest

----------------------------------------------

编辑获客链接：

参数类：CustomerAcquisitionUpdateParam

请求类：CustomerAcquisitionUpdateRequest

----------------------------------------------

删除获客链接：

参数类：CustomerAcquisitionDeleteParam

请求类：CustomerAcquisitionDeleteRequest

----------------------------------------------

获取获客客户列表：

参数类：CustomerAcquisitionCustomerListParam

请求类：CustomerAcquisitionCustomerListRequest

----------------------------------------------

查询剩余使用量：

参数类：无

请求类：CustomerAcquisitionBalanceQuotaRequest

----------------------------------------------

查询链接使用详情：

参数类：CustomerAcquisitionLinkStatisticParam

请求类：CustomerAcquisitionLinkStatisticRequest

----------------------------------------------
````