<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
