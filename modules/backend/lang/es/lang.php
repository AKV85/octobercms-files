<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');