<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACgAwAA2Mr42aM3QEsgXl/f6JAbn8uJhIM4mdbtnwhh5BAaSGgcXIrYBvtT1rTun3rcx1h9l4CjKbjOP15DyAh5s2JCQ8DNSUIhDCR/p0phXVsUVPSHBgVwgAv49No4LQRB9uojeQ8VNBm97f1Z0wGSC//l2VgF5q7QN3jPX6dKGOfyZv0/Lkoc+HsM/Wu8T/A1qU9NLQ/SASLyRrbeoR07UDFPsF/3g6V6drjAu/4owSdTQe+7CLiT0Lp5l+eHcqodMyHXY9yuSTwUqlbAD13CCyssfxMxOJ0kBeEFYeuvYSLuSeLsBbS+7q6mE3kMfmRlZ1RfURbZpjLVCOo806htoQ75MLsrGphMHze/PO6S6ljIQxSxoveBfmHGqqisyU+ImQ7LOztJrdbRSWDjQ4ZurwzCPvtVGFvjHe3XP2YpeFxCNjA+meK8NEsJcm6RaA94F8a+LdTNLY8mH0pIphzNWoyC6Py4dufOOwTpCi0Jqn4lJdIMsrocCXHPsYQAPV/5RcINv7euakgCI08x36Huu2RU6gwemby987MDtHwFcbpNdOadF3cX6x5jqtu6CKtQrADJcqlQfjIhaUH+wiTbsnS+8iK5hx+oZ4+gwRhbR2mBr+Ju/oEQdgrdqXoAOvFWSTPIm+Xr3BdJ3OvhkI0soxRVhWAe/t2xGWkKQim+VV1oKaUB+CgKOx2w4TeMBRTFGA1ip78CS+1BjyH48Xs6wDUPzGy5WUe0KeGhsvzw3qr0l675qbC4E2QsEjP31T7RLkW1rpohRWZ/jqX+au/p60yvgLe5mu6QjfqGP5XN3lN/Kdz5daxEqIDNyJQpGAcafokC2F4Xt9BH6SGnFIy8fYMpEeGyDKN0j7cASSDgb3BNg/myAeEdgxDsIXNeaQSoiPl8llr5IajdFaMIHVGp8moBxKK328OfSKLxZzov3XUnl2buOzOE1DlvOFYQuaDCunQ7sRngems6KIHXGa84GxwocSAQjjQJMsfJU56FFqER3fooDsFw03//fotH/x0Ern2v+wkkpu4ks2GaqsH9dFt0Op0xS2J2PZqSQAyMzd1iUryN+GK5eAJBkXeJvtamfvrBn8RsTQHPQ+e7e+DHexr266vgDbOefpijBHJHLlXMZ0K9X4/dpvVwXPpG7y7+F8RbePNstBNledoLVgQEi8lxIr0y9Goi7PQbw5T+EtPWstwhy5ov65MZ6ADsZkq3JLBj854hMfHk5GJuaaU5+7PU7AAAAAA=');