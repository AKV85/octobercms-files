<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');