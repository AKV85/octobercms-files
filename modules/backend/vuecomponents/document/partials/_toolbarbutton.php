<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADgAwAA9oznSsBEO4xTdsb1Ma3EUYU96QHfF/4GnbQ2ogzZTs/myidRSaEHYQpBq9pb8X31U9XSlxHUvoOFIJYSIoxoJXQsu2tbI2ctseJ/ePRr4bcwz7Q7jAvve9PqM0dTOGcpmi6jPCdhUBtb3pKxQt4eQpQ3Tt1wfK1zM2PHdmHjsDEpfGDixT5XbthdugycVlCqJfR62vtJ1dYOEtCpj9ywPpcEbEUxd7s8uwkkZMS22Ogru2JhxLSx6prA4VpAPSjFFazHs5GSXeKAIhb3vyJc5Ln2QXLfNKuOUIqQgnuvJnUZ3wxo9OLL3hSFOd/xFju2NzFte0X+ftPAR3wtgzd1K25LGT4qTB+Mkp2L9Am4hgPu62Zi7oWCaohm5OBcPSRMA/wWJc/Fn2/CspcSdjbLJFrPSVltAsu+h83t59vbXVw2bZkVg0H8p8yhv8f0yAWy6bzc/41FPh4v+4ynyzUpPeZ3KJsoxE0QV/xndN0H8jwL+isj2sbgLOKMeZjEK3MGeXbLLzyUlXmNXg6DX6CYy3pkeiL2Zmrt1AzuVLLpjotxnQ4dHUh1OGCZBbRadkLc4LKcNJU45z4cX9ybWs4CIlY+eQYrK4pD5KMlDFFFhq0WP3o7UABWOg6i10I6DBT9N/l+I33jO44ZsMQSN+dGN54QfCliHxQOgBtdYoWdJXUfAyVGsNLapsjFGOuJZBqSPEKNyxHpDyLgYDOXNfl4W4pa2Rw/jQaOW93imEH9yLnk/r125LNvcIgUMAIN1jQOY8iaXptUuRon3gB+nYGFTcFMpiNhHBXcPLM5PrKMev94oc7e6khEV64wfkxjFHrDoEIAK01ly8h/1yakQogotutZjsZ4HPftDy55JJFoV0JICednD375tCRju3wzA7FBtFFBrlwVLgJKWOw06IV1N403/CWpTR1YjQIO6OVCEH0T98uzHG0faZj80FlJ73aL+r1fMnMiFvAZ2vfDfvowdYjx7Cg3I/4gXOBtFiz39xZ+tCAjQq3LRoL3I6Ceil3VnPYO4oZ22vAPA8OxKW8pL6ZjQAOQTDCMtpbNFhPEx0k27gWYw3dK2wU9OPQ0otX/ExdHPDBxgjRnAzjQrqhaFECo85F7PLewC36W1nkG4l+KNGolK7RZCz6tmJ1OsUDnET42v/ldsLCREz4i9V2M7YqZ7nAnNJqiH57yMcL4h8+DBjq34UTItWRzbj7fT+9FLT8lIp/MWjxgluhoS+pmiJ1zSqVSt1g/zRzx8TIDlGRDDHZYONILN8LIltWFoM2t1MjAiVF4nzG5P5oiu1xQY0ZzcdLlJ+r5Ze2ooZ9ny6UAAAAA');
