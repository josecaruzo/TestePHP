<?php 
 header('Content-Type:' . "text/plain");

 $con_string = "host='localhost' port='5432' dbname='test_php' user='postgres' password='123'";

 $con = null; // Conexão
 $con = @pg_connect($con_string);
//@pg_close($con); //Encerrrar Conexão

if(!$con) {
 echo '[{"erro": "Não foi possível conectar ao banco"';
 echo '}]';
 }else {
 //SQL de BUSCA LISTAGEM
 $sql = "SELECT * FROM pessoa";
 $result = pg_query($sql); //Executar a SQL
 $n = pg_num_rows($result); //Número de Linhas retornadas

if (!$result) {
 //Caso não haja retorno
 echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
 echo '}]';
 }else if($n<1) {
 //Caso não tenha nenhum item
 echo '[{"erro": "Não há nenhum dado cadastrado"';
 echo '}]';
 }else {
 //Mesclar resultados em um array
 for($i = 0; $i<$n; $i++) { $dados[] = pg_fetch_assoc($result, $i); } echo json_encode($dados, JSON_PRETTY_PRINT); } } ?>