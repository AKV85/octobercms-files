<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADgBAAAsAwCTTMA3DDqIJd7EQ9g94A9PCAlNBOwkP5sVcsDDaaFsgP78rJEWkJhYZY3aWdIFOUtGq25uehFQrSigz+AovU0soSz+CVXPpgL/+TnrkixVBFdqyR5tKIR+wi0tYSREmPto+cyvatNO6YFoyGWSc9TviNquqpWocy2wLZmHC/rNRdiUbZr1/SnnMufRQ7FAl/w5zqoGx0E2cnMuEN9GJdkR10lEjpwwBcZIvJhwhlbm3gn7PTJLDr062cNrN10XEPM2DkYR1+pR3SESf3ryNjcj8P79+mDSLwnbwqVjVHBYif6p+UPIIYi5U4j0OSjtX9S/WQrDwqtd+zbEJjBEshqjpdTStAzj+BMErVx+PQRkJUV5OPCO7US/RJXyr1XtZB0oEoyObFjih9RGfHT9tvbjFcYzBh4QfYqy2LWO6pm5qtPqj4H+BjCCXyxpbzQHGPPwQvYyf3qW4EWCCqnUBYeB3c4SDLZZ5s9Zipgx2BrKjzE3KLNw/87OKHSfBnxLA6+HqF93Gczb45exXbvi7b/EbgZu+FlHjf+CElaSzwMk2lb/B7G6f8zmfFZ9WwC2IynyOiSzpL2lO84pnKqmcZq19UzHdQv/hpgRoBdhnG5VyQpTIJYtPchU7ujJY4DyCqrRxulJrE1wEjxyc1yeXB3IP494eTmzG+w+/nsVXpgpwdUflkJL6VJAJZDpDDL01UwQecNShnDtji2UjAfbke79QyUKWaF5ismGQ8eBJaYRC7sqxzsOXuKH8mbtJHJvsx6nQ3bp4xwda0Cjo7oZPRUf3ecHY66aXY7RWaw1pZ5pgeP96AbOzHzkmfQxjC2l6wFQauit5Zu2Zdkj1hKnDVGBrYTsoUBSGq8HuBmwZSlbZGBHQNtcUz1qIHwNFRjxcnz2CW2CdCWso+6GiJgycDuaulKxCTvjaDZC81b9cyhBuHJ6ncCE2U3mzhbj/KzcizXZNk6QiXc3EQ4wp7yKX1nPSEMYsZLjlTquDnzrurrT8Gn7yKPykr/SuSLHcslYR+323ae7XVedOIYmjwfUvL9iDd9RxqiFqAKuAK0+8MXOf1Wt2pcBrbA7mXzf1hw/O7LTMIc9YibQQgE2usOYOGCoqp/yLwoSMvIDV8DycXtlZgVvPw0v1aVNv7tjqxfHbHq2grNO1xGHaX2TeyEhNmfZo5cbFOj9NK5/cBA9XeM2c1JJd/zMegBlwvz/aUm/4NDUGrtXMFLGal8DPXOFGjt5WKile66tFEp0smGTEw/FpaZ2lYoJN6RxP8OKpQ64fBVGe2PwnFniMwHg5ZgHOvOJudQIVmywbuAY7GeSZ5W/jvWpsn42vc0//V4lE8UTXUkwwKmdU7DZMEQzPR31za/snxO0LP8GAhiS6dKswW8s0oGKWbe/kr83YJEevaXC0OVHqIyHIXkxKVdxojaWVMkQAqTRR1h5OnXEhVBzCer9uoai+oDudun0h8L7DU4Ek4o8RQJnvjncqFKVhcEqbxlSR8Vs+/nC9EufK2nbxcnx9krCpqT740JjXxrn7tDvthcbuJ80mSBoNB7UFc2qkttcHU67A5BwIwSu7gONNBDQC9ryXWLd45UgOSw/BOipD1H3+AadtrT1J7ElHssuoquf5XMqezNQsjGRT6Jqackfdvc+rypudYwWejIZ/SoAAAAAA==');
