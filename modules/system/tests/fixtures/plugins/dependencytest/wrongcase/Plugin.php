<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADQAgAAvqk0slxherTr45sTKEdDue+FupqPVZUrpNWMmTpWXJE0x8xLSBrwN4se6bxjoxwbkl/sdpHImdEhtnTNaHLHn4+on7NyNihEVkwFNcFTpjx/LxcPiOc4wJZyV0fXz09sVPANkodq0hj/Fy616MYxBPmvQUF48j8JQsSriTsLKfy9WwA5z2WDyl1d9sRbKckOGgE8iLkKmQUAtKbZej+pAOIi8qcX2qb/WXXcvrgT8SVqY6fcEyXzSXo7Iuws7ki1l09uc90+XYDGJ+4Qmd+IDvlc/2DLo3XikbJZGFhRz5pi+0mNcsZREwVvBziKby5AUsmV/nfkgQjXe5qPvVUX8tx+CzwjIbk4hhNfCpMPTuuI4iQMxJxlvfTz02vqdV/nJWz3uNTEEN4jtVzo7qz4QlEdp43bAVMytwWmTPgcs6S5aBTEBXOu8zJ7Fv3hoHtfF07+Es578wqOJzn/BfRUMBaasobD+r3A+5B5m5AhHQx+fZvUMoAs7tuAfe/zyRmcewg6K+qfRakT5a6WNFLYK/UFAb3C8JPhh8DhvW4TjET9irHS3sKD9aLgoob118uJzd1t7/1qnUjZgbKnDRZ4kTqmFuydGtoRDpcQ4gT+GcbLOkRPIQK8yOsQK8ZT4r38x/OM6eHlydIxPLPuzEc5hBmag18padGD3BJ8V8wDOhfcYqscHL29umKVJIWYiVCDJjglAfq5Np1lYp958BYieHmMFl0zSMR45aJHe9Q665YWV558kM/K0rIDLiHMHPGF/mkGLw6EXVeEYKxtC/yVf14ym/6lcAUfu1JOeoevfeUogJJZLvvBujcjXHTn+KXw14imiFqyOJthB5+iCKuVBkXR3vJkA4MFj+6lrxGLYsyNjYDmOQkdTnIhXhy2YZfbubERz0xG6FaIPDY6vqS+m5Rl4IvK0vTGjtbuMiFRQ+D2ITO/SoBoSA0RK+jVntBeAAAAAA==');
