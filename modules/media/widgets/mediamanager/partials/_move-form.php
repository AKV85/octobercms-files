<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
