<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
