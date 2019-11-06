接口说明：信息列表
    接口地址：http://127.0.0.1/2017-8-18/00.API/api_JSONP/findUsers.php
请求方式：JSONP
接口参数：pageNum 当前是第几页    pageSize 当前页需要显示多少条

返回数据：pageNum   当前页码
         pageSize  显示条数
         total     总条数
         list      数据列表(数组)
    
            |---id 唯一标识
                username 用户名
                password 密码
                name 姓名
                school 学校
                age 年龄
================================================================================
接口说明：添加信息
接口地址：http://127.0.0.1/2017-8-18/00.API/api_JSONP/saveUser.php
请求方式：JSONP
接口参数：username 用户名
         password 密码
         name 姓名
         school 学校
         age 年龄

返回数据：status (ok表示成功)
=================================================================================
接口说明：删除信息
接口地址：http://127.0.0.1/2017-8-18/00.API/api_JSONP/removeUser.php
请求方式：JSONP
接口参数：id 唯一标识

返回数据：status (ok表示成功)

=================================================================================
接口说明：根据id获取一条
接口地址：http://127.0.0.1/2017-8-18/00.API/api_JSONP/getOneUser.php
请求方式：JSONP
接口参数：id 唯一标识

返回数据：list  数据列表
            |---id 唯一标识
                username 用户名
                password 密码
                name 姓名
                school 学校
                age 年龄
================================================================================
接口说明：根据id修改数据
接口地址：http://127.0.0.1/2017-8-18/00.API/api_JSONP/modifyUser.php
请求方式：JSONP
接口参数：id 唯一标识
         username 用户名
         password 密码
         name 姓名
         school 学校
         age 年龄
返回数据：status (ok表示成功)








