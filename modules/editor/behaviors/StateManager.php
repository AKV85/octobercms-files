<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
