<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAQCgAAo0aRlFYR+gqukisATEhKKEA1HTX/S3wOXUa8orVXFD8tDTNGcraqpIRMyumLNtUXWG3YWSC6UcJW2cwYtkww/x+YqUwVUW2iEh4+hD4yRopbnPwNMnQFJTSbLTlnel1S6U3W+X47VvoMhefrqhFiwljDJHuWwbappJ7wVeLcaOEHybQMjwCIiq3MS11rWakNjQemlYOdTDQkaCf9ze/Qd0DGEpMrATzL1MmkFq7D1D/qINmZhYNeY55QMacXaYElouEh1mxMHv8vSwRCoVZDRimMB4qYZjn9TUZZ0zQOiRhTCX/atc2iCM9Ts6tI2mADba4jflyeXkhpmGUOoey36yuNNBrNpjLSq2TKZqMI15S3atBp3mxCdVraT/0rBKzDCZrCLaAU8DHCRAiZ69HmIBit1S9P2XTFda5RmzLovAc02lCOfhKSIZJnXOzCpacnFfbzlDsAh3ZsSpkAOEIUhEqDSQBSKy7JJ807tgpwrZ4v3bcrty8Ape4cRcky5zAJ6bDCPMY8UAD0sd3jKPvPkIW5Z0lwGpiD1K5VHC6XfX3oa6qaOR1QPtYDzgijynLfg8yRgHFD85mVb/Bw215ss1zO3e199bAaHF8a9Em8/9D53LYgi85qfyZACIch5ZnABVMLdnAVKyiS8G+1Fkai0WuJer7QHR74HxxBXZi5Gl+4UnFfChFdsTfwCGPXr413pPmMOJ6xwnO3RsXJR9FRud/yIUSVEzIcF6GBlwXjbsHiYLM2ezlhxHOodWfYvpwjthaNCoBl1KnZLhS0Vy3XNvO3vVMvmoMDxi0fIGHCxepbZCypb9VSTduUmN8eZalLL4c7y97j2qnffsSbkJPoO3YpitzGywATLbsRjxFGCyePcuXEh83JFxEW3pVvsh1zvnJ3CZ7rXMHK+FcgJdu6hg7gyNaEMRUdX/UFq7gMQjYMz4gQIHJwehgzmmJ6xSjbK/V6TfqfG+sRyTpHAbvZKSiCff0wMmiKC/tOoPCBESDmQztfXKeu1bd0T2Vpa0ZGyADLgezwM9FikrFTzejrBJdULsYSzjje/T3ExnDUN2k5O2yzyXk9r4J1PL+qtQZ/X8OEJIhJogpks9ifbpa6P3kqFUc83pIjWM5Smr70oKzwClBzbb94e8AuxHsnkdjaqm6E+tCXBLxq0FPJdwQBTGHm9A0uBm11kJ6UetR1us5zfYadpfjCeen1uysHvmVhDck3jhbhXvBUnmPVa2NVgrvwCcD3ToDbms7kjgAe/FNozY9/AwEiKcvRDD8eYY3IcPtuzqJQ06LH0TlHH82lVNsSm3++0hljCf6CXi/pVN51tfbnZGZqResqatx60t2O2/1sXXJ41K0k0oOCir+2nmp4a8dzCwgkKx56hvzLeG50t2BJGvPIqYMg2riUICgut864/deAz/5dakg55gB4gBZJUCYGy5mb69RNa8cz+Zdo4HbzMb/mvTNPTDhu1ltvEp+ixrZv4yWfUaESBaGiME5ctsovAHyIvIN4lInRHV55HwVDfXONGk76XgGIq3yRPP/RjWZKBJMcM16C3qOInHGHOqh0KuBgrOS19d0bCG1TrA8r9Vd7ok4NnZrkZSeyy01DZ5xM3KCK6ADDxDS+fe9KVYoUIRJG/o1lSNcLt+3c8MbuWrdAKMPTtueWLiCsNpDPJ+BifJs7YdfsNlBT9IWSyuD5rsSLvjUwyCY/DwZhKnMAE6QvHxKQ2xh4sjlV8RbUBrKKPJm6N2061hg21VtoC+fMxGQmYS9eoMvErOS8u3jo/DKBEFf/hmm04UJCkRwZImJbJ4uJT+z7jF4dJDJgFbGcuE+n3K49/O1MVpI++rwePlUFl8Zam2jPE/X37pOM5K7Z68sIYnm++tebCKbWHCmF05zJR97QgJ76KjvgLNch2g8l9748vBFaEYWBDPWu9h5RAADxF7pn3Zu48s+RbPXBtufqkhoNp1wcA1Kiy5UkBJbmgltZj31NHJjWor2xUUJe5SpM5woSU91kv273UuPHMt7ZXSVqAGiTi8J9BIe0SgCjBbTg6415Q48bKyCvCC635vUL6hMPxpq+4ICLf+mp8M0RlJO9S+v6C1YgCdOBrOHmgF2S8FSuhY27MJkGNCzhqeoXd1a/4iOBMXURfGHEJX4Yq3PYLWjY37JV0pZ5aSzowZEI1nae9q6cqLOy4gYO04t8xdGogAyBL5tY1f4CFjyqj1Viw0zUyJFN5+tLWmd0VhmjJgAO2ovXrWZOMWZut347MbMFHbER8WmKuI5uFFolNinDSVgoSprTrg/QauTUzzy4F6VZmUKpsQXoG0xWYbS6MI5XmhrEKtn4bdJ0etXBX4RVrC66h6gsBcNzd6dZtKqFFw5gICe82R4SgbtTNXdg0jJ3iUVw1KbChS5tMWeGt80Djz7px/a0tBMBZblx4LPpNbf4HK//PV8Y/uctqlAeI43M5Mx0FA1CFmQnKDmXdMWFvzheSQ8f2ThYnHkL+Hs4Gtm9N2Iwa6EduNkNRLjxyom+X6fYwdjnFF78vUI9S8wY91Oi/Vn+YVJW/qXb/ChX69Vdjvv/kxXfZ2qSQC6RyQsQr85rj6C0PujDFuPQMjGuPI+fFTgB+hmkejDTcq5xn/BNr80nMJzOFbd8fHBg0zv2WCbF6nifMNedEvIW0IerhhX6B1jY+e2qQrmUSsGPv6MT/5T3t0+e5U74XsRue4LBctOXU1v0BZ4MCQrjg75cg+VvherQ43mWbo0nHoJKUf7EhAzD2QEGTHrGgee7rXUJvGJaGAF3AkCf/X2ybfPJpoxeoIEbz11nYef7NmCpZVatUDGHB+0Vn/vE/I99oPDzxvNwNFdCpuHoAif+D7CD6rRAF9+lt4ZM9izh+huIX8lGpn4pu5Zv4uhsPbMdlQ91C3uNFpLLr39E62bjjR8dOo3GxbCCawnGt10FGCF4jFw4n1MKP52+ctzm8zICvUj4rVgRnLGDaS+iGpijOHPV4LQ8Op7flqJ1VK4EJIxUbWMZwgfP0jLbFEMolqvD+JkkS3oebYFe53oVLg/AS8yim/tWzf/ISSDyJvJDrUsDAWXAPu5gt6s+YT2mvTuwhn1J+0X1Md8yx2yA9qipY68gKRUDl7XSihv+X90g4m+0v4N7QZh0zpTLlrwBLa3FJJ8dLufq00shh5Ey2gnBCSZ4htPBK8kKYWbin/TyiaaoZxCmnC8PEZo7T0bFReYFx9h2iW88p6ZMvlX5XnV3JTwN2Jy1TgLZ7jWio4iVhd+Gwtu9h8iBChmp569mu1T9WzCF4yZODe39vN6ZKAcL17M+rHcHt+dPSKq0l9ZLkceSJ8OpXMyX0CGWFH8n/FpqcabPztAgcgyzb8+e1nKXtof6PRnRrJ6mqxFzll/EWqavdFlhVZe+mDzDePl010CXpaSubDJA9k60jzmuJY8/zCIlicyffToAAAAA');