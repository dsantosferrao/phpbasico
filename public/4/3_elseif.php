<?php

$login="admin";
$senha=124;

if ($login == "admin" and $senha==1234) {
  echo "usuário com senha e login correto";
}
elseif ($login=="admin" and $senha <> 1234) {
  echo "Usuário admin está correto, porem a senha é invalida";
}
else {
  echo "Erro ao efetuar o login";
}
 ?>
