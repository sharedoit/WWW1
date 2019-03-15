<?php
return array(
	//'配置项'=>'配置值'
//    'URL_PATHINFO_DEPR'=>'/',//修改URL的分隔
    'TMPL_L_DELIM'=>'<{',     //设置左定界符
    'TMPL_R_DELIM'=>'}>',     //设置右定界符
    'SHOW_PAGE_TRACE'=>true,



    /*
     * 配置数据库链接
     * new Model（表名）;设置读取的表
     *
     * */
//    'DB_TYPE'=>'mysql',        //设置数据库类型
//    'DB_HOST'=>'localhost',     //设置数据库地址
//    'DB_NAME'=>'thinkphp',      //设置数据库名称
//    'DB_USER'=>'root',          //设置数据库用户名
//    'DB_PWD'=>'root',           //设置数控密码
//    'DB_PORT'=>'3306',          //设置数据库端口
    'DB_PREFIX'=>'tp_',        //设置数据库前缀
    /*
     * 使用DB_DSN 配置数据库
     * */
    'DB_DSN'=>'mysql://root:root@localhost:3306/thinkphp',

);
?>