<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABgBgAAj5YaqQOhmFKVU28hs3qgMFARF9cZqMATkP2o9JMnh1IEa99XhV94YlZYi3CXNQEymrkEoOaEDUdHM4AjuRW6AVZfXigWvGrEVkNAqKTOSMfG+522qDVuRsUxf7j1LZB/gYlAdv+yxArjgM8JH5tpSRdDx9rHRFiPHHZOJI0en/SXR1a86WA20jSWZCUz9WT+2inaOaI7a0BWa5mBO1d0Bospmc3SKtPN49JS3YGRNZu8bGK6Cii3VJd6qGA+C2rsnS9dprLqe4sHNbt4OEP/toGghAhBcB+ed7pVO+XxogDWq+9fa6vEG2UXBuwi4mHVM9JbQR4gPQFy/Zd901QfQw/9EYFfZMZ1BgqR6gbMoQYzi9GQFB9mT/Aod3V39JMidoMvQZdKLwIkzLLFJemQYemsHPz9sg4Hx1pogF8JDwzOrRrqvJoxsA3kkR5jZtxG70i8Fo3+UdRSv18a+bzkKOWcHUHOyki+zi4yKXMb6Y9vbbcQYyiK2/bj3+FsH8MkSEqHj+dc7e3PHp5nGWKgHJ/Tj75NvBWu1WOYOUG5mTHSGaOgjbGLWse0hTKWctuT1HXxqUC5B5ViaYycwIC04ckG+P8kqmP3SojJQjkTLZXrck5GAFkk76vTuIJMgtbCF4apQ75Iyz7r2JnPVoOSDs6OJXGG9RaxzvW1AazrOvgTkoWutMjj31tuKChq/6Y+xwX9NYJfefUafKWED2VVTmXjbaqDEvsulx1DSKCom6xqRuEoKjdX+7KlFpZd2XiwWuVUVYMzgj8bTMhrwqx7TXCbmPM/eHGrMLqv8vjUDmLvdsJyWE1dog4fQrypMpYdXFUtLBPBiBeC57d/qbgnTnwPuZyZV4dePqz2vskmJr3jHyuImnJ7O58BPU/Jy3Bu4kjIxJGiIiJ1JlTp4+4/Dgmo83qxWdUYODAdKLv6K4SQ7U6aOKrdLgx5bQXtoZ/x85Z0KoyI3ffKaXJKfPDai0OXXP0b+fCex6wyUcKMrGW/Ez5IKToQYSPIvdLZnNiAoisLrtscgqJ+ptF3fXb7ySC2kY9LzOTYjocIjNg9IwLnOBUVnxXIE1u1oh+PIMROM6mIwOrzXuDExeJgv7FmoVfClIPn2UUA7iXwsyseBs/+1jC1et+VyizmEFz5OsckwQzyarrMsgqTImTlwEPR87JWu+Jik1NArv6FAuociuiGa02PPDok6kFr+w36GmMQJlGuNPlduOUEnVGb5t+V7sDGGQiC8lPOObI8ST+2FgL+3Kic3cW8Xm1HQST5TWW8lLKQNaE/qWkok8PSsTCNftxxGPOJsCqBsd0OMTTYh2n+bgjDSiANiweu+Q9h3cbztcQ2FpQPzBBlQzSqdmA7/BD3+tQ3DQk+lTkvSfpctWuT2I1MkeZn4Qz6l4HDidseqTy777TmKt7ju38bDx0dHEB4cG9VX1cC97JjScuxYRiZq/K29QBMUhPouhd5uwb75hhP28BOPwyO3DoD/qaito7pEbXlxEZD6Z06+iwk5Ciltk5XVVNHHHY+Yy4uOEKDoAFAkc/BU5xKUfQE//FJU0YyFL4tR6mJzsmxcLbwAkNmgDil6Avxw2+PcmZ1DiKALNxUoxWQlx6f18StSodioiYFb/W0oARWO3is/8yiEZ6qljMmusJvCzHHe0WfPAovg4kMBv11oelz/I+jQneDw0+oIk8amTseGN8E3m+7amFPcsnofjxxqhYkLPB884aaxuzGt2WDNDs2RlTHKz/eXCy04NRjzG3GoyrhPxQa8Rm7MnoRTD/WMg2n1DZskIA0CA1pXvmUjuIcXhmnplPbqUJUOuEuDv67Ms+JpwjQHjUEdqfyRQB3cjWJ+PeViR9zT4iNcmaXJ25/1gkNYSd4QWacIVC7+TZNTiIYDURl1IeVcfpvVnSoppO05ntmCuuwbDFBAgODQoPAicuUR00Rp6L7O8QgIeQfoOOytXszSNeq/+mYiZSpjYMoY7YNeq1oDXPzSyklkFvUYot/5u2+KmbSTRpNxMhli5ACKa85wguCRjEkMlwBoJaQqmIDYiFCswepJnbbGVoXvZmj1JwInRmATdm0ip3+pkYIHe8dXc2c0iLx5Y/id7R+VnkHKkWy2+OVyzLf2sCPVjq9kci1arcwjdTs1tS8tZa5+nUBCQSNG1dps1dRFi+PjwdXhITWAAAAAA==');