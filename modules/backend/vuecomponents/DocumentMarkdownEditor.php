<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
