<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');