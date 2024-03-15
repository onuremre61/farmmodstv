<?php
$dil = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($dil == "tr") {
    // Türkçe versiyona yönlendir
    header('Location: https://docs.google.com/document/d/e/2PACX-1vSOCj30hKB616RRf9aBCCywWcUmBJQDnOmSSIYUk9lRRYMTAeufKC3W9PkfHINzuwwcarLHORpZg-Qv/pub');
    exit;
} else {
    // Diğer diller için varsayılan sayfaya yönlendir
    header('Location: https://docs.google.com/document/d/e/2PACX-1vTsLbPKr0w2PepLeNM6Bs4VmZ0o9CNE8fo_v3K83Or8CtGdkUAWYp--u953xAFnG9sQM-q6-kAHBTPx/pub');
    exit;
}
?>
