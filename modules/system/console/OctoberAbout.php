<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAB4BAAAyBqoARIb2Wzs2EqWGW2bHqpRjA0i1N9DjFFX7ksVJEvLQNElZ/wxSji20oTw4++0ZcR6CYn8Ga3tUbXKmtHZj7QWWVFsr2Itfg1S8Bvsbv2ETQsvlN9h7KnNymnmHyZExRfjw+06x6uz50uUd0XSnaGSFL9kBxzxEMIlOxUwhq62GPrsMe40jw/ZON8eta0YMpwp/26osenF3n275K0ifBulXN4urpx5Eq5dP9j8RctQ3OQH3/xlO0A7EcyUXrRUN28EfkyI/o9/bWQAjZTJmcBYoBpUXq6gcN7W2CGfhXH2304Cu//vJgelBSOYW2prPyD0B/LMBAiUmSEmdGa9zde2RmxNARgx+ShkyMyH/dNybmQFhEub/OkfzrBjHIDPsTAKsT+Bvlgg0h/mU2+Y29csH8pLIA6pVycbp5seu6MfJMD2IHGEM+3MI07hJ/AT/57Ilhau7245vb4Kz+irT+2nyunAKuiqNK4RYRdWjiTu2DIrBymJrOYarp2Ke8SlWNy3TpDPjKs0HoWibPVNTtPgOwtRtRl+7XGYP9qXJtZ0p9xSPGUfKrPPG1LBQuRxmLV0fUPJrlkgaMwSyt1ymlzNI7X5kVCfD2tz1hBsdA7aRp9/G6l3Qr36C9LjZWtcGrp4lu+X+t+Z/yrtBMlXgct1qM0ZAtB0g1g3Xgd92ZUJ6aILDF/ZEh3HDtUbkSaYfIxEW/YQzKF+QZINmly2D+aAQv7juinCkcRLprnvD+7HxAU0oeI7EUcTADkNtZNyQIBtZlVJjhwJvzXhhnlhHjo/sfJ12zEKY6tndT3ZoWJPh8y+8oIctsnK4dRHnLnDGrBTMbtccNEnrWrbJxQzJI5LWdBUlRpgZduN+DDnGDKi10BFcW4zo63yPU+nU0KqiZ+nOfph/sDl02/EZrkO9ILPDjCK0ZjGXpb6Qt0S94H/vlwbiVhKh5tyZHxtYDKrXJ5VLGVAtKn7U1PkJxsgCucGQaQJH57ryI5/ibNNuhxC8dT5Rc/Utg+Sh4I80iMJ1FqXqfmQ/aolA5iFyYMGNjfEkCiFoaGGJBK4sQFIFs3aMfPNLcP9tARVi0K/GBe26UtbNgesrrc+InEzsTeRblldZCk3T0r7Qs9n12fOo4lMD2ckuEsom4rVufcNpTyxOP6YnuiYYYGevtq4KmPBeZ14AV2QemwP4Bv1HTH8daLMLZM55CQqNEfER/i5Apu84lbQpL2Yi05toP/RIrfKGolYoObexW8gFhS7+SQbsZ+kcPF0c3GiiVjefK1LO3AT4b/A56EcLOfaCBqFShhDxvF4442T4WrbXNeZLKdIomtBXlltP8j81RSt/Nw0lWPqdzQqqDE4k6V0nH1Ofk1tizl3XvSiIUZ5dabWJq7fUYsZTv2/D+KcssoDDsh9NlkacreajJNQMwnlUMfQaNT/iX5reFo6Qgcj7R4X9dKvivVau/iNNdrxToxGBp6bviHJmtoGQsWkLiiWlR6dR+g0YzayEMFDkX782poGwBB+xVxDBlYcVSp94gAAAAA=');
