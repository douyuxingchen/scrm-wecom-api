# 单元测试说明

## 常用命令
```bash
# 测试指定文件
./vendor/bin/phpunit --filter testMain ./tests/Unit/TestJuZi.php
```

## 如何读取环境变量
```php
# 读取PHP容器内配置的环境变量
getenv('APP_ENV');

# 读取Laravel框架载入的环境变量
env('APP_ENV');

# 读取类库配置的环境变量
lib_env('APP_ENV');
```

# 接口查找
## 通讯录管理
### 成员管理
````
----------------------------

读取成员：

参数类：StaffDetailParam

请求类：StaffDetailRequest

----------------------------

删除成员：

参数类：StaffDeleteParam

请求类：StaffDeleteRequest

----------------------------

批量删除成员：

参数类：StaffDeleteBatchParam

请求类：StaffDeleteBatchRequest

----------------------------

获取部门成员：

参数类：DepartmentStaffListparam

请求类：DepartmentStaffListRequest

----------------------------

获取成员ID列表：

参数类：StaffIdListParam

请求类：StaffIdListRequest

----------------------------
````
### 部门管理
````
----------------------------

获取部门列表：

参数类：DepartmentListParam

请求类：DepartmentListRequest

----------------------------

获取单个部门详情：

参数类：DepartmentDetailParam

请求类：DepartmentDetailRequest

----------------------------
````
## 客户联系
### 企业服务人员管理
````
----------------------------

获取配置了客户联系功能的成员列表：

参数类：FollowUserListParam

请求类：FollowUserListRequest

----------------------------
````

### 客户管理
````
----------------------------

获取客户列表：

参数类：CustomerListParam

请求类：CustomerListRequest

----------------------------

获取客户详情：

参数类：CustomerDetailParam

请求类：CustomerDetailRequest

----------------------------

批量获取客户详情：

参数类：CustomerBatchGetByStaffParam

请求类：CustomerBatchGetByStaffRequest

----------------------------

修改客户备注信息：

参数类：CustomerRemarkParam

请求类：CustomerRemarkRequest

----------------------------
````