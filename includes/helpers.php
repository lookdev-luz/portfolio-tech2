<?php
declare(strict_types=1);
function e(?string $v):string{return htmlspecialchars($v??'',ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8');}
function safe_url(string $v):string{return in_array(strtolower((string)parse_url($v,PHP_URL_SCHEME)),['http','https'],true)?$v:'';}
