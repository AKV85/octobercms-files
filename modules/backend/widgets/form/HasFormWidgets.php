<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');