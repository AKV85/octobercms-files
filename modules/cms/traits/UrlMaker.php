<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
