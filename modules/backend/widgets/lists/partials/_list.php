<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
