<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAB4AwAAwnN6pEKtIuDy282837gssjDIhGMLE8VEF1BNtk9WCjMVCcnWYtUuGxvjlXI+4THrNJC4zTXF48MHN8ClBreqHvMBzg75RIIU1yaT7BFK02ma+AhM0j+0MecCcNyBLLVuJNVJ2BPUVgh2PeUgv99SMaUtAQ79k0Ze22iab6ZHcMF325N3b1J+tUPJ+IbTbK2S3opuUMTt6ZUXZ8stAM8jCnItM9bJeRqKV0i1Wu96YcTeLdsFjTZYU9CyufsfCdnQXxUEFEuXsKt8bq9N1g+sMIUvqMs6dB/ZacG9IOjbeR/JIPuA97PhZnygIToxF/xdbKCYd+N2QGVqx26F1nGkkOuHwZoRFz8VgF6mniCuOpAR+f4Vf0ekx797ECnJm56qD86JIzeJl4ymfCHB9j28PY001v+wltsyjHzXEdBCBJJdFsDWJ0Y6KVfWN++dbrB1YYp/8fbWbWwpEZlFcgDHm8bq/MOMLqskjl9oh1C06XSA+rKEvwouliuT3c8UUZ0iSUxZLgeuA4pu2OIB7GDVcX4ZtBTlkrCVPbCJ8yxv8D9vxI0ZeIM0lfRZGYUSiycjTODkg57On1pdGTlqAuJuth3B5HA8w30ePKh5PqJ75NEwPR50+XXUDToy9hX85KyfFVUJ4v49h5BRAnPLbwe9lxO3xabfWs78WzPKECtFPdGUC6x2lxgCwcZGd+1COktWtY/iCRYEZBAy+qYwLorgw4zvyP78LQvBBm9j8XFIS9I0Jet1pkH5UMUU1W5DkKiGQVui36tv2ik8BmKnPktLPpzS1Iapd4vGka4PJAz0Fv4wnIXhgCDAAqw+KmLfQF5p12jPjudi8MM3vAvzBuY1tcnwewv9jVO+00ZkQpxgAYWWnJEVleJ8cubPu51P536l3Zl/YCyiR9598N+QIyuqDmZLrzdAuysOHVhMSAlfIZbBLWYbB4sMSE/BaPzqwvzEyxCQHoNdqvB5jkoiTY3gMj+w9MC6zJqCectS6XJMeIGkiVkxtDhQry0RWNS+uf5ssfaKkK7Iy5Zo2v+VhwMu1fFkzwW1MKoZUlCfP+H7J2ASe55uwz/xdbJepIu7MgE/AQlu0pBqgOqR7peJOfghRw6G+Tm57DFPJ1z8a6pjcBtwsVAzhvtbsJrAQRFyuS9If4TDMTTp0u5IE5wSXiFxSn32fSKiCymjAAAAAA==');