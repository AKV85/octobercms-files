<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABICgAAIN86PlXexbyjbpFZGKjTeaXjCUSN1QWm0Hbvs9gUDB8/nkkiaIz7o58CCFGbfNOy+yVojuAqL4tAcgoTnD5OmJMGlScfZEfm8bq9d6Ffmt9fhI7ld6oUu/7vWOl7PK+/QA3yTZQOtBqusjZ7Cl6/wcxk4lKzIcNjPOSD2dWMt+n9lYbBh1eTUQpW17eSLzT+c91yLwVK+oTBB1aFO5In4LUf+1z2H679KhOhGb1k9bUYJfv7IoRBRLKrF3XgRABVbKGAWYQt3HHDfTKHdZiGlc199YREZyqnYBMogQ2AyGpvqwW8ScCv6jEEM+ajBv1AjAs5lK9L2gwMN+N/mwr77H+5L4VMZ45EUFGAJ+ENd90CAdRvLnLKUsUTzUwhoaR9+Yxtszsfbx/u1HSGZtkyM8cBORaUIg7+z4ivX23o+rpSItpOAsKDPhGNWmTv4YCfLFwmXVACT32VcslfX2wpm3lndVglFUSu6D6+ajQvam77FMilsvYSfLQbnJOZpS1kZ0LG90iIsMzpAiGjqiFF3yDtokNZheRDNI34zSei1uOVF6EX/2A4ejtFHBgA/1uChsVGbcAC0ehED76SigxLBLKi/XludbrnOozuB1uWdpHl+QKzafIL+D2DMm9yHW+XNGt00qiXYXquI+1QkOMPljDHJrBru+dkD+K3zgY5OPO2KN6z/M7+udVOSzDnctGiW0MbahR5HlyySXCBT78LKJTqbiqxESv96RCSWUNfRRHC5JrKNWZnzS+UeI5aACFomzttqMZeEdBQzU8Igc4OxohD4pUjqUG1ZSSdRIy3lKHGtLylJ17dDiKSd77wYJTpRApGwvGyu25qtn4DhO4bousExdOen3uMH59RoPn5VSl0hqnsAdTQaut3H7GIH9XNhApGS8+p0KjiCT39rWHXH0XJ0pBM72VQOQf6CRAMqlUSCkGopdbd5nIbAjQcNSSY8TjrXOs30XpGh/htTXnNyXf7sLYRa0YWvk4mmb7uCSk2DxAOt/yEGAlw3TUwP98KJYpz4yAWtKrVwrmrdBRa4Qx64W/lLDJm6ZhlACfIyHTRP56MKsPAuiy+kzZlutaWxvNBpWY/Y4iQFoxbZEf5ZtOOXcv9VJPOYWSfBNbV68/ekCcLBnLPWp17K2iO4/pZsq+X0zDFtnVCqL8s7w7kkce11q3Yn6rCmGvEcddoAUghjwRO+Btb540gOSub4nRVWKJi3oIz/Hdy8IIIxnoApUg0vOAS4FvJMUzVSnuP+vR63aufMkYiq2iuXLKdiZBnaTeuv7BXF0+rGjR3Hkb9b521w11IfrNOXBwmMWf5joe6E80jP51HtyhSFSjvBa7cUXdBexiWKv+pTByB9SuwEd0+FNWp1VoNkS/1KAKb5B0czGkpXHRaEZPCGF5lwTTJ0rwRWBeYpyPwg1wOZV8j4U2E5x0pC+WReVFiJMa64i1e/GxS0xPUl1q33uiuEFvViVJW8b2MRAJdKSjvMLj7GDd+dvEc4uqUcLUfV7zGHV3FnqBmUzoY3pfKsCfnt4CqCJrlb0UhLFPOps9sGbyDrJtDss9sWTW6R5PAF9QrnsuHOTDdWMxuw+xAGFbM5Ev+tt66lBPy4g4ezyDt04hlWF26moS8IFtFp7108HKftou5sRBOYy78NOOzC+/ma/Gb3jYrGbjSSK7y5Lzw9DSd//eUBRA9EvWPVTgSGWV4F4SELsm3EeNCETHtr5F1W1wrKZsttBJD/oDQLLvm4PWONUNBPyImja+UXuEuqDcN/NepVRsLhBEHVJ0DTRlPoNtnTzcgnSPteMiynP2X8o5uCkuepkcixdNIrvk2zdd67M+DY8zu9CFFdLwFb0zVrTVtDErSTzLp+CNLfUqV0gIVU40/9VADsiqC7fGyDmjnl6HVnrQPEt0LxQbraicim3G65bFq9Se2DFSvEQ+UvkCbxtWuXw0bLu3+Irflac7ZCHuBkcnGVkVmXuxxnqAr6skJHWayYASMOR65i//tkVgCjGQrmecMtHdA0q29kHJt+9uuqP4rsCJCrJBxYjg14UNdjnTPMp+X8Qx3+BYkZBCv6tuJE7D72oquD7N50P34gZZx4w2oLhBJxIN2z+mpW+OOno6XM/g+qgjVDBeAjL2gMzPQouifu2tmBGZNYQMPka97RAvlN/8zRceuhYxPmOi1jvDqNNTNyAiLd4EjwKHeOIjt6kOKa2kpcrigh7+3hERuhsBB3w4BqOscNG1w296QsV1+pA8RHHYIXrfqO0OC9N0VQ0Qga9DGWSLUwFxFxxkQqlK/x248ekwuRFnW13aymFWJXYxU4ATKRpLhrlRbBGfMP6IM1dGs90jQFY1I3VUOsioYkqhnz3457xiQmPoAHkfp6f8KFI0Li9ZWSehRYef9xapaiuKOs01LvTXdeeoFHRISr7TLbdRi1d7BjqqYadlnMd+2cxAMTFEmNvwEzgvx+1lvPKt55HikYBi2ONART4bqAEJ9lkGzw8su14borMT1EmleUN74E2Q1lsMIa1yK2Htb72Ze1JhWknD2ckJ2N3GN7Q3DrKnTGnNMfQ1gOd/VZQ9rhv5HtMUlapShJyTJoGMaznrJ+IvZ6679Yp5T1wQURHg2wbh+IPQ8kwXW1guK4C50b7rpGr0d8LaaMicmPBnXM+0TwNOPk3ZBZiZfOtPKqALvGgKEKJetMCzgDvywyAFxj11QON38C98NANx0yGs1v3u2sj6Cavi+kwp1wrCr8aNdLcvOrYfhvdD8WPnC3jGaxSE2k/dVbcj5nihXbcqETkFVTqq7cjh4ElPRYhQwLvr0ry/QBTP6n9i2QyOOucnis4bU33j+kmMVg6MXcyFcKqjzStjHfIV3/ic2Ia6wiUWFeXv9AbkiUADLLCZ/hd5M7uQmjh7wP0+yHvbvAlr30Ul+3RM9KK+fseXRQDcx6Gs4awTIhK07COTjRGonBn1E4BQhwGGDLVK4k6gzupesMRg739oeN+Q6tjsDUB/PYm36My7JBVsqWmas6jf3lRsjCTdKV3RXpSUI2BKPJSu0S1G85ACQz4YQgQUtDMTId/MD6lfid6vza6m1WfzVYgCZwjb+qwMFhAdbsGIYQPQBGMsMa0tqQt3zewptV405krDG4xZrGRdHPLmF+nWWja+0TDL3E9UG8nSmt0EuQBL7N3GZh9ybByBeBwqvtDXjJ0u702GNrzXKkvxoFEJSCo2hxqQ8GFVVErml9VLzL4u6riILxJqIBVct7ler8mFIOK926bs3AgNT9PEPedwCPnhuSxWiocq53dS/B3y/17PsKiVQt2NL3g3b2Pg5pUw5dCKDrzZqR664+92G63GIYsClZ1JGCqrH0y5kVztlJ2O840FwJbWMc39S/a+luMZgJiV2Gp26SQH5+8Flo7xgt2+SiutROAlSsNwkLeEC2BNv3m7BtCyhxHtWndvPePPN5MIGdB2mjHFIFc0HfNhW+WL1BUICwaBPQR7MZSF3JdhSGNLeuHltg9f/mQcDQ6bc8hJkwQAAAAA=');
