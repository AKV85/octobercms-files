<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
