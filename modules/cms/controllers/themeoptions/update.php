<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
