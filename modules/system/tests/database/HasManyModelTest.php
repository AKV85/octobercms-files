<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');