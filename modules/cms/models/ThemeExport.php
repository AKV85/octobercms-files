<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');