<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
