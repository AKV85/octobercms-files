<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
