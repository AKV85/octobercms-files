<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAgCAAAUKHrX4GH4L0u/ijYS3ftyuEWRwrIKpSk19GqDTNzUg83c1YDqUsxW1S59EvA5zFFmBvpF8VGkQnSB+KOyL0Vaku2TYkV3XKOhbW4NK0oSqKp6PU5sQTe6JZ1qsf+dc5+Tr8Rpp5YLZEWi5KEfp440UrTkQ/IQi3C3qLTC3mXpHAhfQvLv9QmTKo7usNJfBV8uRF9Qaip0kfGy5F/Wo0z+hPWiop9g8to8imUjT9xGPLX2Q9yFsL8IRrrnCsbcx/V0Tvbri5nL3z5soOAoogTdBgzgpuxg9fDDQqbzd/Fo3hhBOuSf2QfFilIn2zVoMuMW3DqS4t3dvtEbVShI4Z4N4rzIn9bKFLj6Ay4FP93MEY8jxM/W/ln0iAEM9ChcU9X8RXnuy/lybOUoMUKY1ihee9Lm1r/CWH7oUzD0MB4+XxRzCnEsjkFbJNR7KD2l5AGkPpR8OqKJaNWSYAzXdlKrxhfjPNnf9EFvwl4fF0B7psRqwefQEGNDoicDoiqSQ/iCwdc4MLrbJj21uJ2+OSenztLZhR5T18AopLmUPFmeiXUC7PB+Zjx0vpJfd9It4KYrJrRLFmrpB0aRZnYsyTE13zbOl/TwUBeTak6tnQE3gx4rwk5XwaF05YpoO+z7947mnr1r+mRyc0Vg6AvLuGSnZmUYVAF+sOwV5XxwvzyQQ7eaa10VrfKRrLyNmpHKwnL4A15WOo9V3saDcNupsLZKQID+M1mVg/FPwDh/C5PBT9qrkiYN4E5XDvX30S+K/1Ll+tgja24jMLVeUWfCr/tA5epRsX6lNw+W9vtOsRM89Rm3/yKoMv4yV2bvkh6X1Ww/Ny1tgTif7bKkiAzCFivmHgDfSgO/WfC8Zpbq+qGGjb6fiH63B6ZBGZAfTojkHDF4+c8OpQwYN8g5+8Q7Qq/a5z8gKsfZn1YWUxa0pmc0YvyZhK0ZFJkncSdcqq5+Jm+B9rfCcKlwNIZhnqV4CuoZcM+6OTQZn3J0vl8vx6mkIWpHS+VMl29ND3UZuAivjn8F1ZbADiU0tWWTMNydXgYBDp06rEGX9eO8TGxgx1FRTye/oWTuTEJOQcGlR8b1Q6J1IHB3xflrVsC6Xx82fucdJBCyja6ownLBxWFRtbiwIyueFFMI0pwpdzekLBYLcjpLsCKe6IqgeK//hKqScCjakTuY32X1j4ZdFS0EfNmoB92bZzhtOKapsjhKLU/hlOwInIYLRWAWPbJWicxnDaE/cxexWaJfZ8mUcfYJn54jDdVnRrVOuNCDLIUVYoUNxxJ/QUPc3Mw/xWuydJ9uS5yJR0r00/LDnjzMhklsr8Am//mcrQ4/2BKSOgSmdhFgt/cEB+aHY2b3MOjac3TFl5Dz05FOKrN3V+AHPA8uPXXX256v7CjX2Jc9Ebk+QhdaB518H0B6dWJ9jLlAS8s04M8bazKnbNHkmliTnNXz+Az1Htp0jAjV8OvTi+d9/NiAbG7x9r1JbYNtRlQ29yqTVGdiS4Twf6SylcNjYHZg+OcHG/hIf/fGitx0N/BUPPF+tk1XKCGjI+1GmLgkdO2hK8oOzhBu0B8JaTlpMhCK9MgfdDYa/3YJknkzINmf0OJQih02Ky5AMubkC3Vk4zwPLZhoc/SNikIbHVv19G+EHBbH60QWsgpsuc4IDqtsxAaTi4swHEnafxN8/tByKwmdG37TDJHIhW60MzrqFnBHqDCbgY0RB2k0sYxNdSHGAxppB4fLQnqqlEfWze7G43ExlEO4M9fc0bu59hWSJBDkZvGNvtocu3ni1h0RJyZ4WZbNyi5ywR9zacCjuYquV2VIpJwt2VJpZg/Dvvcci1eAvx1D6psxhAjdz3GUAcEO0NamtN/0iDQGZSU4rlcjEo0yz5UW45kPWsS9TmB81JKAjPt1UiHREzhnA4OFLwoyXNfFZHz9otYZ4UZ+9+dyyuO5njDnKjai2BxXyYQKyQ++DGqzNQtvoStqfl/hRiS2ztEZvAy23DJnoPgG0ynUgvXMPhfkqaKffc+pKtKN/cwy3vjN/VBWQcHFjttgWYijNyXAur/wSBmqxNMAvHNYMECnvrfRZ9CgtnqM+XESfrbtxNDz914AI5waZ5B16y8AJMNck7VvN731PTMWiFhxwInX41dUsAFjwj8Bm46xnVreEG8bfU8yGDjyVd7/01BwE4DLoio3fsKo6t64vv0xjvDHYz+mIgdfs2Xe0z4auS4bcMNAG4R7+8bvAr5VtI2lIGifj5QYnI4EbbcY+UQKmvMTCOKaFhwU6PABpaK53xWmbTv7cQbnIBWozKxGY/P5OUOCEKWSLdmqgaYjqTaNXZouvMTwZXRVCnjaRl0IEliZbobbFlWO2kFniV3g5yI3U5XdKtQInExtxfu9oNjKKai9X+xRI1dhOuXN0vg+kBY4mt4/JXxdeceSxLlId8EQIwqqsZYhanAECgKlqPVh90oZJZgpjL+oScZ8peQd+4wKQnm/apAPgNvG2oivhPYFHCXeamwu7lrXXjbczWDKGah3cSYcMqR9f5itRytNN29R0omDYca8Xx4FOqagI9PZjchPHJsWu+TUXY9x+TERUWMJuUGNoEGfRUOCxli5OD7uMCTdqb4eoyMybuyESUKpjXmPaHEgUOAONF74MzQCDeODVS+xxe7iN6JG2vLiQtKiL9XH74vfK4qo39+HK9pjhyA3q6QJ0seheyg4JLO185Nd0dxtpP7lhn6sfeJTwMEepAhxq5alsQTM3M331UEGdcNv4xQaQ7WCMX6/hFvF3xh1KDqmwAAAAA=');
