<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
