<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
