# ǰ��

Yac is a shared and lockless memory user data cache for PHP.

it can be used to replace APC or local memcached.

# ����Ҫ��
1. php 5.3+ nts
2. Discuz x3 +

# ��װ����

1. ��װphp�汾��Ӧ��yac��չ�����ã��޸�php.ini��������php-fpm��;  https://pecl.php.net/package/yac
2. ��yac-for-discuzĿ¼�µ��ļ���Ŀ¼�����ǵ�disucz��װĿ¼(�ǵ��ȱ���һ�±����ǵ��ļ�);
3. �޸� /source/class/discuz/discuz_memory.php �ļ��е� 

  - `$this->extension['apc'] = function_exists('apc_cache_info') && @apc_cache_info();`
  - �޸�Ϊ 
  - `$this->extension['apc'] = extension_loaded('yac') ;`
  
4. ����Discuz��̳����ҳ��ײ��ܿ��� "Apc On" ,����װ�ɹ�;

# License

Apache License Version 2.0 see http://www.apache.org/licenses/LICENSE-2.0.html