<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');