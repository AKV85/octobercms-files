<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');