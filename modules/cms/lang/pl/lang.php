<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');