<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAABAAAmFOBBfYOKi/oxGWuiGh3VcWmdln+2ieC7ZIpC4PxPWwsoP+dEQZrwbfaSBv0Cd4kKxBpyH0QcwSPs8uDvv0gcebJ748RYTMPUMsPFjtVP3yA0yX0xLtTsWa9VwbQLdeRvMJ81OlzhS/dgCOyrqkwlQexj+HjUA5d2vOa87ZxS+mRmchfvbgjfuEp7B0+eDChINJ3aWJR8kflz9wfmmvEqiPvn7HI7J+RNq0UBM87iFUylJ4TOpe2h9KMxnob799PrURPCwe2jbEKixkceHnS60q+MsiTx4fEHrAX6MthvOYVjZuxZJU7i1ZXG30v2+sq+Zrzl00fFLpH1DdcXPDPLU5Ej8nxZhIdKjrPKznKU6x0mVs9jdzBQYdvLwNZed1KTaFDcS5IqA9YU7w8GuRHHUeG5pjK48G5JWoZslFNGt23nZbH8B/4CSNDuh1XOhyhu3BmkhAEK8KuHdgAeLRVaJHmDuLRf9abmxGwh4YziwoSVvfWu8kI2nsLc8vNJx5uWqIJEIqaONKNf2G/ZeNZuaM7vtX4z6KC8Tk2tkA7KlX+HzIq4gKmoRCxr3hqTzobBNC982QtaK01pM81SnSeBUfm4gsX9jyL9a+t5rQxZpa5dX22G8ZWiKxLHE2nL5bHqhCufR6rhRojGLp0KaxPXksy61iUWjT2rCiTOog5Zd6bcmf6FlYbql8Ue31zkxCPLmgIFFs14iiHE8YZ4yNs/WUU8sCK8b0Pxeod8ocbOf3rjLHdwrzAbEywwp1dd3Xe6FgO9AwqjG+6fiP4KGJh//+86xNcz4wrXaPfdZK/lJM8kcU5Ad0uXAiGbBDiaoSFaMd+au5Bll4SVitU54CCYAStSDKRwTY5EOD6RGN1g4pee5h0ZzZ0ps6rfJ2BZP6ZZnGOZ93I1zXT6/M4yCk6Xu9ikyb4lbD3qqO5EA2E8kk/Bqw09OfySJGZuYkAhru+M/CACLO1OoRjLcEw4K/iztpCQIu0CQ80O5sl/gMVozFUsyEOa1L0YkEIO5NdEv39qSeLEzshEKZ7JXXAOPCLKJsjkbKYpXvjTbrYr5ngmtzyDrlL0P0VyTPEh4H2Y2z1JH7/dJZr2cchb/3FCfbYtYsHkvxoY3frWGnHOkdLBwBeSx0OlLKpUTUG0iqC4RrBdDNgk9CQrOsD6UmHrRYQIKGltHx2NTsOWw973dszYGz56YmXPDEUBUJZwRAKwLYfPhMaBrpcGrzMZC+u0coCkYODWp+aL0Vof7iTDju3CJrWQoQcBBAjlUJjoYFkKy+dweUpfc6e5+xE4XmmVsEacuexk3qeyqs3svATbvDOLFC8J2uXwHYVCPHud8E9Tje6JMhjcNtQsDeg1L11TKH4IAAAAAA=');