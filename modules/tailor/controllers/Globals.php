<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');