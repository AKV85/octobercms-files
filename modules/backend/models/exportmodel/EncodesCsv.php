<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');