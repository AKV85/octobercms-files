<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
