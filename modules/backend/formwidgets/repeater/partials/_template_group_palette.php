<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');