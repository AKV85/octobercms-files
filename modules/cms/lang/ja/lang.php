<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');