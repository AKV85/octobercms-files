<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABQBAAAX7+bg4/sWSoTXs5YfoLaob2b3x4BpB4MX91j4DPvR0bgPmaPcxlybqSRax9cgFQWUIrRwMdGtYnDrtWuPGbNI8wowjU8e++yr8YTyPfnOpKnU7SXF5hVAbp+v7aJNAhmhin+KPrh8ORqtpi+1WsqMEUXxcT+QCBtdCo2sTuSmh4AkIToygK4DFQAAfcJlFRBqE9xNrH5Iy4gNdJ31BVLWpsW6wCNEPVyl4NDQ5erYxXjs1iIFjQ1szXUCoYk5qd9XOwkP/osNBGZHPEUtEVEjaomo37ZDsWUUlITIEyFAQFCmBh3jxQXF0NtvVdPcOXOm2+D4Ovw/HxnnuL5AvsjagJf36J5KpMx23wxuEWK6rMGiVSUMXV81EESx6NB3wYGeYXH4krZEp9L99qFQ1iqFs3wq3wnuc1dQL/OYZmhJhcAX/fv3rl48sw9hsQTXnD0c623HDDQbxZ5/lMo5fQG7VM7V1hmSQCplELeBdcLD8ftx4spREJDlyqqm3RW07gRwc16OYudtz6KLfzgthh27sX6V6hO3JY7iQcJjRaQ6Uq76L4MVhIoTAikc+oRgM+Pm1SmapADkEc6hCKw8MVQzaEJwSDYBrjZtd/Yep3d2PNW8aOiE1rcDowztHfsamElAW368k2tchju821FIp5743xambqrB5WNjOh0DuCDNieWc/SxPQejWamK0SZYKere6g946E3gek/aaXqmQ/1WMd2htN7BgQIjKH8wv2eka5gQl1wjDAEv9teScNt1DD7WYuCq2d8QNsr5ZDcFzMs76c46k5NLw0QZrD/OqNVJ/mg+jhInFrQGr7PETpiVsjGIQyoCaMZvp7IGa9Dj/NE8m/jjYI19GFWXxnCSyYGfADVYJyzux0kkrdsCsg15YHkdDNJwhnxlQQrFBRRBuUCm2kgYcsaEUnV2iGyN7rwLbpzwGiEL5Zsl8Drlz42I+984I++LB078o1ltwGK6lWlYgeAz9Qo7fXSWbqL4xpupE3XNlToB9BYdWPyR3rBsFja+2QbB/OmY4mJgO4zpH8yISaLGI1qsNw4EG7t02bu2Tja19VNTFNFIBIPGJL47nwrOFFvVWE+nxgO0uQGjuznHtzUsX00d9rQfYleHoKIRPM4m0UPXFrHcyNiRdxKBtF5YHv5AFv2lCtZHMReKvo6kC4O44LnMp6QwLS3MxZjC5+Xy1Ol0NnIDN5bV7HsSRwohPCFCvrztTx72mx1cQSyQ5HnSQftA9PW/0JFzyXorLDZcMhFe6qmNSamShyzVDa7Yhpmy7pHS4MYZzcYk6fmnM5b/1ub26LRIDhaAKRpND4P0HFl5Fa6SGAzNMF6Iek/P5F5neA5yGjtm4ru0cBa339wFEIBQTmGjS7jwUCxD+++Eye5Z+8zQp3LDIkt27R7tj8Ba4r3Aib6VbQRkKSgRkv495ylCjlsvbezcTXAdiGyikApuRPcChNlY+xGMWz7vAAAAAA==');
