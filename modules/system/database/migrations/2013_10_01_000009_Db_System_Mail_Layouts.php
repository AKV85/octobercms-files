<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
