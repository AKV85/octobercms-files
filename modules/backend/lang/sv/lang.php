<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADAIAAA6EVdC8HYxDG4pmZzGhu/5tid0jTNYbYhhPdnYvUHQ6FsP69C9qT39CaNzTxu/AlKuRC4AlW9tfcDk1vtck4J0qbewjDMQpALP6jEO2gQsS2g56egSIeDmXevOxUjC9HavCJRGLIGYuxyRAXPHXySwrp+o1zoSd+/WejRr41z/XvWXx+kh1U5wBUILk4DTXjxJAjht0GwBBBOnjtE2OmfYbsuqCkqTuqENSz8RbS9LOTncuUS2qBWRgQ23uYxBEHL7glkUqtk0wKAzmj32jiADA3tle2tX891FUE2Z0Khm4KvVu1RKSSXqPYkLxVqOGYG3W1yddsIEh3VaB1FxTPmCF9O1urR97Z0WNRCwDyeNogEdlN80OgiISaGCbBPAcvSmqla7oDG3Dhd2UvUhlnlRv8xqlH1D1XTxT7FPngjB1cB0meiyJW4nxr+QlqMg5oiCFA076KYome4Lgnmaqh9wKnaT7di2H/EJ/rHevZDvI7ASfQ+XMNtUfDtQEmxLUPrIfQYUIk8FEnVpTbqQsqx512jEi6omuvHYlFI7qVNg9awoOuI1UmFnEceTQ+nDSv6CfGWV6bltZE5jxna1DT5N6odJaJL3Cyzbp/rAFFnBce+ve2yOxO2nX0RuJctezx6kZseJnopUvJkhe0CS6BCeZrcxJvwwAAjxsUVC1FXSrlglkxJBbS0EtimmTAEQA3FlFfJIm4BiDch+LDAV2rpIobVfEcHMNIkj2laWY8qsfsXiVe/NZBfzdKOJmHz45lIHaToBzasCsx2gy/R0dm+vcNpS4kmEFPCfCBay0T04ugMJmytBlP4D5PtRJ0hKAAOwToXYIYlKDEHP0C1eA9hq28644pzvvmy/uk9nkglEbpH2GQeeQ8iGoFzUH0qgamKy0DThVjVcvz87Ve/thBMoxfgSPCyn4nagoDdYvDJDyeMxIpWvH9itNii4YmHu1s29yb+cPo+o5O8dv9AsP/Uf082zHv9FVlDTQ+BOdyPRANgD2v97Knlpyp2KIzLAaRdWnhuyGy84qqvx4NVKktP9kGFwpMaC3nbQtTMfRG51d78GIszxLiFeJ7f8lBsTmLj62Jfghj1bUpsr/YYjgmyxtQ0x5K5KzMEvop8J8lhQR/3WWdYab4Swu6HLlJGMZ4RT6FvczHlN8w0TZE548v27DNjo1VXmKPj8cadk/ZThxA8jJR1vDiUw61o7Cc61otHLCSJJBs7iVJehiXqIGBvPPPIXch5NYs1kO9w6CyaT5AX1CMHMscs4KdcHyPEv8qs2BeOJcNR2lBKz9vbBRHp4Uz/xLfQvlINNioWrkXL603eRosJsc928UpXJkkMt+ZE5y9SwNsy4NGeqwMomT34+G2HGuiOCBPzuKzlzHlhOViaSjcT2h068+qdnunPXljL+UfnnUyT7P0lidZ0EilRyJcZob93/Bocvw9dZMm68gEe4Y/yysRDzxD3bFzOy/08oujdwlrhOOpWGwDWdW3vFNvekk6UBvX7GdX/I8zFt3RmzLCDHP5GyobXMgAEnlQzupUfhLw3uNg67pR35P9zL8SLWyafYQKrrxSrHuzclfYXPibwZmn/0alYKGqeTA7OFodWg+A8vXxduOhlFYYbNO8Ujkc5xMrKDhDq4WOoesXwaoCD3KyQSTwQczbcqLqKkmY2Jn5Nn8wGn71jJTsskhN+TSwvev7T1afXvsPdoN/qGAgjMnU1SpY1E7lvjTu2ARX/t2Ex5RB5LjYhyQRGzD4Ng2Xy9EdBF/vzCqIMKf6kK4tV5dsQwbo+RvhiqvNuJ1Tm8XZuQen5aMtu3lf/2gD6wCmW/0d87X3TGFqIE+Z0Jdz4XqDIhRzZ7BEG1IW1I0ztx8x13hepfKaT15D1lGXlI1+VDUp/0/s5cAm6PjrUOBcuOwPFy6YJpLg5FS+LsNC5NZlWYDyfSx5dnYHZu79c6AtqyaPrYntEcvGqlMaQACv2mUgtwhjW+LwPNg/pi7Beb185IyZ23rmPsUeKndTJM9aHWrKWg/fqU5d0OMgqKdthq9CaMFnRD47Lq+OiON33VskhLWha39tpXLZfuTSej83RZaV8+80nmbWC3Xx3WaMT81mIkcXOFX8wE+7aFblperlRlnX/REjmnTa4tLepU5x0CvMlL28ld1aGGh/0fANKUFx6JeR+kBNOM7mG6kvwNRHTSE6Q2DWNymSGLwUZZh4YMw0VpiKBp38Hy8fXqM8US/jipPg1JKgmU2pBQkRBO6vzO56ngaye+js46hAtac4L21abAu+rkkKxNVYmW0IxOwftV0QDLEOHfa+douLAnrXUMAWgsJ2vTXfMSblWA/IOuVCY261npH13jlUPfNxUTdzeaeMpdj+w0JTGzd0kEB6uX8uBqTqcVt9bdiC8SivPIZyDyRyVBVrIsKspQPveMSts4QvTsfboeeAoMoszZJDhzQ3m5JqySU6JYFWUuazuhGBhcIrjkrrsQCdNUEjX2F8WX4J/uRN8/oegvPC/aZW3xcw6Zzr14el2R5nRR4B2HZ5Wrh3LUM8qQjpsppdr6hex5lhUw8BavLMbz4IfrZiMaYFJU4NUOwFjHEgolYxyAuejIoWTJqQl+SADobmIMzL3hGHqA/MXwT2gkg7e/5j2u6xf5yfXvS0kyead9CJvNHIDS2ulVkC9UQ8EUpKU4fIBMrJfs/ceDgQnvXSAgmJXSWEbSbp60rzmQs6tBmQ3Z9H7fLhkmRuE/zNGVPbw3WErlKzFOmiYX6cMrpSUFBK5j4fwJyGrfIgkc7PjhSPWyqbLC8e3YMja9ZAoOZIlW7yInGDokALKjJLBM4yaCmgcn1ufQC5XaXqsmToloAGQuJ9GErDTjACdVzI6pINDuWiUr2LecRq2k83wouU63O50Iod1ZJEwNIscgEdhl9Qo3/qkoWi/HaKaLwaTHHmFfZoE3a+eqE5i0fAYqHgLhc0ypV3N2WGowqE+p6K47T1wEE2jr6lfG8bqquZRJMb2H2QfMEmPmgl9zNQgklGE9+1+Lk70yyCyH1EjAla4SxSztp0He1q9TNfRdYbsMcip7rbhaPIXP0K8RhIaTarhlQ2C5QAAbDhgYaR0w2/gYIXEJFzQlqs+i4NO3jfgBnJXFi43Ued3nOQWIyCtiULKLoiDdhdjW66gbViDc9MRq4wKbeT/cyzKlYjw/2v5NSa+vVRqpNFfUHJESGHszxgQsO2rTmP+6gxu15f6lWKF/FI4expCN4XCFYHjhSDACeXltqCtuZjeto8IsV5+jrSdn2NGy5AQhW5WAJw9aDCJNztM97YOBdqYer+WroHoNTgHSvbftZ65D/bK01EfYyoMJosZkVWv3soswka3cL5RuPaqGy36GOu0zYH6OvBQMsP0dgRSx2p3NB2IJZYH03txLYiWs3+9z4PExRMzy8pHfIkTAPPRGPyXyPVaLia3dTFdZMHbM9Cf01pzJlnMNbNJQI7GJRlJEIIeXNNqM1nau9HL3weM7/itglUTOdKqtb2yD7E7gKEmZSbGynvv9FGeZr2GLCNDU9jad8wPk6G/pvNre0rZMEZUWmSsIdwgSBRmpGlrX2IoJiU0P/78e0X11T6NQT3RHs1QevIKb7Fn+pkIbPGL0i/sXhTp1HjHs8jpiW6koIeevOek10RUjO+CrA2HSDeqPx1gmxxGUG+Z1wJhnwakTCCya9O8cRmuNFeFbXe4ybtq4YEPbrIpw0ZhQmMETzEpUynW/9dTYgpg1jdcktWVmRjoarq8Y3OHpCicEjKB95hsTNIf4EvEktBCp4vXsN4PrrJKQXijeNYy8/XPcT3sSoPlQTPUGm7x7okGYnTWYHqfnRuAFo7sGg6dDB/JSafoe84FlgjmYa74AzDoDggzTXypMxm8GCjMlbBjvrfeMnfG9UwR4460SytnAsgp7diyxoB19TKOeybtSR7B/DIB+1PbLX10YrVPURnXvKGchcark04gL6BZ1m9AsqY7rhleFwDMAR4QjTvGTWsa7zxeI8jagaVAxwfxQuHe2v8/hvZf8e6ve4EifHQ4Py/Zd/jakkuN/V+L7VHXOBFjf4orp7ieP/c2ACsPrHc2MpmPvmVWdMrZF5HdS49VOeS6oiD0a7fD3i75CgxqrojbFSxXD4VOyIquY7lJof21AfaR9vuWia80k0ZBGUPDb9PCdNUt6GnMMFFwFnMESBBguLm4uPPZkK/j/WZbW1E3UeKQvV4eGLIE3VhtJCVL/+Ki8tlq+9gpq7SXSZuSv/DKKMYuYJzsUN4+4RuLVm5Ku2jNTmNRnUJe/9dNyipy/+KAgu1lcoDFcv93REA4bbMO5l+nDueNhn5c6mpqjtMyNpd1W0gXlTHmNoy8ul8dj4hUej0RpgndpbVicHP+JwcDMxY4aYH4Im3+l1YhVzomhz7FAeTBluJ6Fktj4KUNFz823pf6FOe3EJUdZrEig6mEh4NsCtkFlAZ8IOyES1KkvFDfjWOaSTK/Pjrx5KVPio2un+nJopmQ7miY/J0SGlLbNooOpMYR4KF6GqyNbiWa3xTwm1X9QFxp+ASJ1OiKEVigWUqaLmEEx6/hvXtKCHL9Ne66ArjabYLkQf5YbQhUWm5/IbyMarIcC3647Hd1dEtYJciVCx0MiPROvu95kEbnie09ymdTTEzHRdOzCWzk298JdGsveoz3G3qlYo+wqprLDXRtwLfjm3+CrzGb3KoDI3d10LcLdN/Db1xI6Id9L0/SfAXeY4Ej/FyNGbYNGvgEfOYlvIypA8hHpR70HTYb5LpS9UTAqjMSnN7EP0785pyRj/SSK2rNJra7Yw4EdSGvOqWhMFppntzTROZzclo24FV1Cgm/JEWiDB+vMmzJon82yUdG6O5Gyug2bNRWhqC8Acb+Z27/uwSxQdrHz7uJBE6xjpjTGkSjjgeTqDRL3Pxb4avjqyO8khfQb2mf/no4haXDXxp1dwmpWdFqh81+lzk3enKiAPPkGtOWV/LgoMMguX9YydDpoy6NuCmZBYqT/OYdDhbSQbGP7AUDQQEMZqXzjILCMyLzF9skaE/ocKRBPp013gvf52Sp2EeekvT5gJB6zn4Klr3OREqPbHLMxgdCPf5XeC8t0nVrmuHlqVXfZSQkiqdIXePglVMNS0wa1YeU1Onmv7h/isu6FzLngRVycBBw4tsplpByM1AujTvWcOM/zZ6M1M4/tLSD1RFEkzo4QS9k53QqoWKt5Xs6qmtw6Mk1VxYqsTNOaZrMVFYQOmG4CyoxAr7XwEj4eKPMkz2Jqf0QJn7Hx3aK3MY46IPFPlH8Z7N7M9+AZQgcNuBbpNmuD5u25PVxqZAA2VO2X4XeLcyCot+c/Trku3nXhYgUanPS2XFR3J0KseXSvo7VLDv5G4KEFbkGVnun9N6ed9leuCqPN3OCXV5WFBM4Ws7N0l32X9fjCDj68Jxs7lBr1j1AqvAUBYeD3bouDclJtOc1+szHYbCg+y33KMCA2RAZ2Cp7qfSg3OxURaxyb0N7QE11QHAFEzEeJzyvamswuh8a6UdniyuAwD1TagYFQlPxB+YmMcHdK0/iKgERscbl1FuiLR2SSGVPg+flFJXveofYmSj7zPHGIb4A4YGGKqgVocJjL0hP0cFlyfwTAH2BPJQTuuv4dRSM/Gd2qEvM9GX/0P94nA+DLjr9Jg/ewyaBFItdwHpVXzhnuwTWaAkOCnxe6AuHkjEAWIiF2ZKYTAiGg/Kza3dLbaCEwmjPNA7cMqtZlXw4F0ivEqLItPd80CaPXMvuh2RApzPR3IEFCdaIr4wlpCOx0FrcnoIaKTvGBeDI51Cun8HSkXPth/EIBQ2Hgfwp3HXts/VwE4Hov48AOY4GtTEeAL5mjylZVS/c9EOFMC1pNXWS5AD0ZWBJm2S23RzTrY9VwIlbZ9qg04FRHiLNBw1yQ52MMyu5FBHWZo/1csS2dju7MZ/7pcjMaHxkqVrnggNYyUn0pqwymQ7DPoZCOiwFYSA8Hi0tFOhbAoO6nGH0bKhxK13IxBURpcdzbyqzN6XFrIhk189W0C8ctU+jLeJCWtsd0GU2zsGoWN9/oXJ1pk/hTVZLQEdkCaYi5HJeolfBOjWPR9j/Q5L8rfPXCXmGMT3REJmhmx/+bs3dIAIilGX6clrIW+y/2vbZYbQ1mk0gtsaI9aql/U/r8VCqUEJhyq4chxBacsRj1meJ8zye8v728R7sXLW/57cK2eHSKX3Y86J0bAHO/5aS+oQq6LTH9P80gUoceO65oDo6W+O8TV1L2xMEdbusAwdyI6ru8K+bB4Fva20N28XWHOra3tH+ywRTLJ1BXiYv97FRDsEs/Kg4zTstDiR4ifWfp1c0WrlcMLxkABbrZvp+NoCaKpB+Tz0gB5hV4//lttFYswILUFDyZOBjVXCYjXjywttabuHE8hXjSDhBslZPaY8aVspOCoFyJKW5LzF1FYbtNaftm+X7NlJfjfRGTVvVdj9v51E4QW0RU+YMQNcLbCxP9w1F7YN52ZYffHk5fmSIYoH8ROO1+D0F5S6EYd+xdlDGD+F42nUR0FjCdb7A7NUxnYiEfACby09o1n9oEkDIP1xLwK74A8Sx6/jgzDeJ6sW44PttiUS5IKLeKFIEqvCGCZvMCM+CPQ5pvbzY+ehg6I+5mqBm5bTCiRSmRKBRwOuJSoQaHTIDQIDmF/sokLVWPdr2aQyVDBdHSlLxEkyS5hQrlhS0vVLBS3w5VzGY+aUPJQ7nBpBp3s5VGhwaOh6yfnrvP47J+B4SP9/ShQKNng8Fc9akfLqNRYJl0VNUfYZy0c0h4dpKsmJqNizf/GK5JP0ofXeUtqoiIIqzxsEAB7diqzbpVb/dcdfllOaU3tEIFcNqUzSF67/ehaAUDG2OKaDLDs5pmCRFQfFxcO9nmXabo0WOvN8r6wFrLTkhsyW7KOAOmdjoMtToK57o6476SOW0u7TR4abnC5D0hIOHhckTY3PZaRCIqc3v7SbW4Z2SAmo1wipu7dd4DRlQedDJy9L1LqmyrSkRE440INpSd3OxZJYNDG9tsYbFsrWd57rUcBWS4kQYW00I/6T+HzGVpg08/jcHjf9pMnZbzYwunMw+nTz9Mu2A2D3m3J3wtBceZZc3AH9hF2/pu3dEwsHkbUPf95X+IHY3BdBkAyAnvPk3E7YaGz9oZru2FNxzztnhAVRvVW6vezRygVIslKepxUTu7PCVs54WTn9VYcIgeEI0gbg3CcaLfwtrN/UtB4DCjXSe/8laLguktN9kaczWviVgTgOnEMym3fTzALz3+P76OITME0Xz1oCCY6LPRLKrq4MKZKEzHKbi9xSayyX8Dtx+YIwCsnkTimbCX2vNxX/th2kR9GeRQkK3l3vADtQpAxiY8Pc7RSEIxas5MslAerhrm754VruyV0Bk0ayAg4FEHFgJgLM4Jfk7st7z1mPSmM4TKv6mMIIHg1yyVj5wxk9y21PBXlHEadsGg/vMaCNa+0M5o/odxSSAgJ1/RL2o5I+DufSkDdz0jHfXaFTKbTLJrcM92Xtc2HHchnypA0FVddqwtijJOZnlYe7zkU4i9AME6Dod4PWahbLMAsBpjL22wTR9R5BYW9ko09F0dPbAKxw6CizlfOkCbIPIlAfCljD0xShpFIIf8sZH3T2cu2wLH9o2y32LLwCQj1G8z3fGOaSrf3LvXpIz/IMCwRaaqKsHnsWViPDx3A+Hc1/VZTt32wif9tHnuYPWm6yv4R2qsbsZqp9/2cPYKdhyOdVgkTTryxzbVdpkICm0flYofcs+FEqHKvYJyqnPH5QJ50qXgtnFN/WD3irJt9AUTIySsZUpXPYp3JmMB/zIcdMMO1aStszu24s/jwt2Uyhd+DNjc7UHm3ymsC4DqWnGkGUxApnBPSx9AnZHIV8QyMqRewtNGMze3da+RnjmJMx0jPRonwk/OKv8mqXSHjO1RURA1bYmJSi0awKD5i1M8Sgbni4RCs2bTNazlHp7Sv70fF7CLXvhbJ9Nh1LHWZBHcRA4xLSB1yENlwMqYASh3Db5Tvvx4emdTGYBW2fo9kePHUzWwgrddsepsKZNaz6FIkyiGsUDwdDKAl2Rebp0CSBk1pDi28PWVcTuTH59UbAEgulWW/N73VIwzdIImijyPKhVwmXf+Mm89lJby2re/qnTjvJnAMEBgSJqgqJPdub5DcJ6qN/OY4Wh4FX6b6XNDs9wYR+hDAjAEytx623A4rtNt1M8aH4WW6rJFfrzY8S+PlaMtqIQ5Cx6+eyW5nnrKtGlV08RwZp9ya4oNejf6iwPuaJW0+T8ZrhkrNJWEW7oZJ7JCac+Ukxx+kbghSPUEfn0M3w3HUR67VVNrUGEA5j2Y5HhVwqRMyNcWAKFaYMSiu8/n6H3bJ7ASE3biYaTc1ktDHNiFSM/DZoCUCbaMdZnRuZQJUzQDkuBujXqqj53f5y0x9NjTJVIW8TXYfOJSsOrVjYp7HrV87j2wv1uyg+JDalgno5xrY57qTzGZ+STK07ghMoOAYjRpSQnhOdcHaxPBv2CteS0zp6HBT3c90uWaBCgAse9/9pydKVOhKujpTL0HJDBuT/I8gGKNauAeYk/rGapg4fOT1ZWBl028dM3aTgwIVDl7Ph76bWNNee78PlynGG4Q0wMesJgSkAzQ8HNuA9RemAyxa6mmrwy2LhiPtV4b2yICiJdDHCQN58L2thGgc6wJSvEhGFzOWFngodkjic/6cBVh2mGeanhwKhYmTdmvwuNLPTBx0sdBDsdAYG5hEbrOGnaNTLzgc1An6plWU9jbLcNrsgO0lTpiDYjOsqNWW8vpFFwIFy5ek8sYBu1cqeodV6qAjlAK3daZTNB+G4gZECt8qJRNaXwJKLKEwZE33GllnZi7rLRzkMx7FDRS2fc/VwjAd9SHzkSKyMRmW8vAEEPrWbKKGZQ8Dk6pAj17Y89sJ6iQtynio8etY27SiaCF3Fctrawli0vdlrKDdDbELHUQ0ONvrqLdmvnXMxWN7CfSQd8YpiPCZUlDSq7TTAogti2pPb8YzohYuoCTogl9MRVhOf48Fdff/ah/sIvOUA84Oz2KQ/PRMre96yZ/8zTp689pwj8alRhYz1zvnt9P+cj3igBbdkhHKPWR+iREh3lpI+cBwJrPfhl2A6poYysjMEddSzwWaM2Ndcf1+bazWZeaNV9pH+yoMml3c0arBaQCkXO2E4R2TSkpLEWdCdQWkSJLP/IQk4cYcRfV5TltXiBBXCS/Mm+ADj4gNMBPGwimUzDl105GaEBfZB/7G6UrlCZU26reCh8i17nqGaJwkGdGUbCCoHCsQr8Ul+1e02XVONPIjB7Wt+9Oj414HGI5rsKa3cc3krrO31kYcMYelAMoMmeOy5WYRt5sh9mJOF1hXcQHni5lVK3mjYJGfB770DlHYf4xx/22YhTYeSA7dH0dlARfE8Yp8H/9qqeHG/i97X4v2tCIzRYvwfqfXfX9Nu8hGNGo8ZSAGJDLIoTxGTrhUqh5PXhzzDc9Wmqd8joSuQjQACuQrc75yRcnDprPQA4j+nQY+f1f2yqkMMSfW6HoHpn+Pj+iiKaMcdTtTk5DBu1GLbrRcCZJ8hWiIT/EGAVjA0cvwhQNIy72ggEcfF+NF/RCeYSxp1tMIqBaBJL4Pv1HQwf2+Pq3GmmNrRQ/2zGYMHGqILEmv6XhPbQ2pzJ4Dp6IvA9NtvuV6z1sPx76zBvUlkWOqI4f6+u6MW6iE4puntDSmCXEM/10skCzyOjY90BCZnEYI+qY2f+6GoXf/VZCXgi1yYnQVdLo26EMdT6mzmbuJqvC10PFyY6O1wSzZZJLXWzAl57WucrLZ0dgC8W7XGkKQxp5JWWHBySdiFtlLW1aXeDO1P7NoNyf0k6VvGviPP8ohaxrlVJBUD3pAgYGCoJxsVu4OcrllnhxOeMPqj8r8fjni+fjiJwuEtlJ7rHoeNGQwrBmMCOOq7qNALCfv6tO+7oUUCM6OCqmHKn81QWPXTt9YnWk7L8WIDdO/Z88E2qSMvmRmcV0B1TbNMh7yZ6JbFgqvpMivqpt6te/BF/bygSScku2zl60I5KD9H1TnThgy0hrssVC7fRtSv82ts7A0PBwYiYz6exjlfi996Bud1872WAzdkOLK6e2/RcWXGfAK4UCth+Qvin+oHDC+FuHM69fllZrB1BDtg7oeEXyLUJx0fCouhTB9KlfnEG4P+u1T1q8yW68qO8Kf54Z8mS8XAzORRgB1R+8Rt8a30lzWkW6z21dctMY8Iegujsqc4JP7WGJ+sgIdlf625ymQ2zwXV5/EfNRqKgl+1HJQyGQpECTRpdpdq/IxDPbRXae662x8ijlwY+xr5Qv9QlhMgYTKWmfDQmrUqXzyoXG/+9HxQbmz6Md5Ysa+h2j1TkYO5QNs6q/rJGxVyCypRCCoASFFPoNDbvVzxal6LgdN6ho376F8gb+0ki5XpYFolax/QkefRV3xwhAbmxtKPBFF2lo1RsB4OpWViye9i5hOF05ZZF8IvfGuSILflPHJgLCXWciXvtWbGqptQP3o1Kqsanh9Ub+VZP2N17gvbIcHw/wPdI1P09oR923cuJcGL9On7lU3BggVt1QIdE6qEq3ykk9Fs+MsGVpQ2aYs9tZ3TIjaLdgSd1ZXGQ8KIwxfk5JtnzmO5Zz0bHc9rTMyieIeAiDVgr7dTMJJyrtq6OjiF5JuOnFbZGAl9DtysoiJmi5iXWXmkzJCv23VVoHVidUB4HvgoK829kG4D1wsRrWbXSC4X7FfUXrb3EhH2k7AOSCo0+zG26BxwW8tsLRcz9fjRT45xc2zHti93eCoaBpkGM7V7b+wEXdDXagz9d1Xryp3Z5pM3Ul789HWPd8gXOuuCvU44Z43Pc+t4ZeB1ei2xO55darps7Ao1SIYOdaa0eIKC34VmKVzBiN9f1633VJM7L3er5t5q8YExcPqAHHRKz2d2TVDPTNZyvfaYdoL+ydc2S5o6L6Zc1IpO3jXylyetuForKzOlYD4zbqiC1o/cfykXhluooCgtRnX2Qglsm8Cq6TLbxPwYRCnjrsbTp0YtkUIzJJzQDnlQHs8hIIad7c/BT9QCqgngvNsqRBTXe1MjCdVoDZ8puYZZN8XwCGtT0zFb8JQRFkyJ1AySmTTQoKvkTpvE/RlmdO1uHZVWExAHk6qsVSySBm/wh2UPOxN+Ntu+dAZTiHl4AAAAA');
