<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');