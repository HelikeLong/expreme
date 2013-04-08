<?php

function Expremedor($tamanho=5)
{
   $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXWYZ0123456789';
   return str_shuffle(
      substr(str_shuffle($caracteres),0,$tamanho)
  );
}

function AntiInjection($sql, $formUse = true)
 {
 // remove palavras que contenham sintaxe sql
 $sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|\*|--|'|\\\\)/i","",$sql);
 $sql = trim($sql);//limpa espaços vazio
 $sql = strip_tags($sql);//tira tags html e php
 if(!$formUse || !get_magic_quotes_gpc())
 $sql = addslashes($sql);//Adiciona barras invertidas a uma string
 return $sql;
}

?>