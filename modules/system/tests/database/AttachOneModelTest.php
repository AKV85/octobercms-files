<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');