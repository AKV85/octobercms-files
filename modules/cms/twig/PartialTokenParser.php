<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');