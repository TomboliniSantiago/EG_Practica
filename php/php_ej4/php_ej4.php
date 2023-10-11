<?php
session_start();

if (isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas']++;
} else {
    $_SESSION['paginas_visitadas'] = 1;
}

echo "Páginas visitadas durante esta sesión: " . $_SESSION['paginas_visitadas'];
?>