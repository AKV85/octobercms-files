<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');