<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');