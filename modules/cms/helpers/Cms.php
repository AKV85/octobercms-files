<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');