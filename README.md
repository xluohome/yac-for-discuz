# 前言

Yac is a shared and lockless memory user data cache for PHP.

it can be used to replace APC or local memcached.

# 基本要求
1. php 5.3+ nts
2. Discuz x3 +

# 安装步骤

1. 安装php版本对应的yac扩展并启用（修改php.ini后需重启php-fpm）;  https://pecl.php.net/package/yac
2. 将yac-for-discuz目录下的文件（目录）覆盖到disucz安装目录(记得先备份一下被覆盖的文件);
3. 修改 /source/class/discuz/discuz_memory.php 文件中的 

  - `$this->extension['apc'] = function_exists('apc_cache_info') && @apc_cache_info();`
  - 修改为 
  - `$this->extension['apc'] = extension_loaded('yac') ;`
  
4. 访问Discuz论坛，在页面底部能看到 "Apc On" ,即安装成功;

# License

Apache License Version 2.0 see http://www.apache.org/licenses/LICENSE-2.0.html