<?php
// faz a leitura do .ini
$auth = parse_ini_file('auth.ini');
$usuario = $_GET['usuario'] ?? '';
$senha   = $_GET['senha']   ?? '';

echo 'aqui está livre';

if ($usuario == 'admin' && $senha == '123') {
    // inicio o ciclo de uma sessão
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha']   = $senha;

} else {
    if (!session_status()) {
        die('Usuario Não Logado!');
    }
}

echo '<br>';
echo 'usuario logado com sucesso';
