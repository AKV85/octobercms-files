<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');