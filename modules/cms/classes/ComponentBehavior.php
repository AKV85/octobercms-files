<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAIBAAAhfvrRyWQ48U3ldbDd03mw1BJh7LDp0+O+k7vlTs1kSRLD02n9Y5N0A1q3wqfaCSNIekOS5e5Bz7UdM1LgJttdARUcNN8XgIZmT1vUFOUMaZKDe6v5FOBDfG1uolraq3wQsXt9uHq+w6kum4FcrtumwJrXOxgjE9UBt4gXGBuDR0NVrDCWj0iCH364GVu/VwgRJPAt19wc9kKM8iBjmztr1sdDX0Lh8yyIHcme2/iemiIm3K1IbIgVYAfUKB5JSxoJ9cNVD0yxbLEkITFFMWmM7wkXPXesiC/7l3EGYZBvCufKm/rTsD8s/shoSP3GkHjaZTSXqz/deUmVz6GGsaH+PooRkQiLiKdpttgi8C+cBiWhf+eA8JaEesvxDN7isW9/Oo/je/0FxEMiZcGBODzMG+Y5We2CYbAO2nB6QuWJHbAKqPVXSj5u2bVHwpWuQoR+t2vinyzumum9LdfMpgRczCoIQYVXcqXMZiqtpemclH3oUiKzphZmG4s0CtqI6eUV26Nmh52Vn/ipdNbu2h18xkdGmxi6uEyxMmMfn6Q67DGXLhjfn3qh3iw6kBUU3j8xpG+meJ2aoPNrZi+QMckoP3/BOE3WUYNFxgNDYIjLuJ60yL/yBsNnWLFTpE10P2ZfRJCgY2pHoI8qph0Z3Dk5h2JvEUkKUf/o0aUg585lNOB0Kf5qBF8K8vMeXFfdGsGCyXIYO1Jwom1KdL1I9DEXxoagzPHGOTt1kxi9FDm1IpsNYJC+qo+y5MNsYEQ+e6+6T3gAbPzgOrZTxKCyAXISzd8SrSJTq8cFjKaMNQ9OviQlaWcudWz20tSYDjQClSEIht+5Q825Tvjgcl2TgDET/WjFfFD21BbvJ9CVaDk4Iy+h7z+8/Nc7yLJrbVWd5yyzRHecXMeAHpj11rx5pSnGSNqqqDZAnZFiCzlZ6qJqicSG960V/Nnj7o36acit2A8NEfgbrk5KabJ63azSNcPGU49Iv2DJ5s1iBoBkv5Ee6JEPkITDJAAwGgcm3Qm9xuKRasLVXWW4aiVeMwvTSuTGsrvUgApP87e6snZX7NpanaRvFZwrgShUHN/KyaUm3v1L3/m7JemcCxumNG8UihJ9mdcS6jyyDZhfCEB0rs1yGiJ9HtevmtVpjeDKn44ZuWO096BE96wZi/SHSbUebLjRo/agQ8kaEmFwobu3ckJXD2TxKAu6rkYzl9EbM8IaAmYo3X3w3MkPsftIY4d9ZbVweF2RjipeEnELFZU3LAze45DOqDJr6ic86mZol7SayXxOrU3WeDB/vvDY+ATUg8UJvP/IFua5CsCy/T0FqHiengarMrP1WbjEx++GNT+VksBdoP+EcBKPs8fqGTkW8fT8OvP4fGAOAAiAAAAAA==');
