<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACIAgAAp9apYmE7kayf58DpE6vIfybeiT1PuCghUWPHsqF5r+Kf5+vmwz90qVA0VQNLR3zTbIYhcOKP7bFV89WTbceu//+5WlFSS4oryav29EhfupVo223pc4nDTdnhJf9Ick4oyNxP9F+zVtakLIs/sWG3G8nuyJ3jFZ3n3HhoV/ph6aGoRUbwEag/uMherY6QnQvt1xO3GlcFfD226wF6JGHx/Xn1sS9LcNpeDLoPPstt396ve3uoZrgbQUHmNjarsBTeQU1XnTdaOle1cIEM4Grdm0iM9jVcJ5kSAS2cdUsc3fZQut5RRSz1REtTG7ewBONPvDxnfpNIGXh7eAmuvP8j6vyJk7AiZTfE25QO9frzay4od/k/NJACw3uNHJkQAooY8Z1R61RgoSzM6JROp4XDeIXb/OrrGL8nijYytcs8I+Ku5/xma/CdSC+L9dRkOqOWUf/adWmX1msInA09hS/Mi4rmYVkm1vP+NjNgPkX44+b1ouSjDzaMiiOcADvbuLagSmnJiY13fV4n3Ff7vHmGKrXUUO18McbkdVqu/gy7d42t31lROYmuhkbJYhyzSZQpBzxdYb/jPi/CdVEBB/h7g06nB0n5OtXLC4rnKfIPVSTtFKL1HOe5X8+XfRE79Qn8kUGvfX1oFisT6I1nqC2Bq1LgIP7TdXCxKyRlWLKmjH9cnoTrkEb1BnNYh3RoC3ZNyoSmsLbxRmli0Lc6DdbsP11DxnH+RED/PLFA99VTNGOiigjpL+/iD2ZgNqUX6p89Y2/bvq6grzv1ElmIJKRZtFZhobO/QYerqw+A7sV19lh7gIbYdtlsP/mldtE/liNEr/Lip04NRqecU3zEa69HUH8HPrL9VhBiAAAAAA==');
