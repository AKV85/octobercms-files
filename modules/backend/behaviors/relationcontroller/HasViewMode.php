<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
