<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
