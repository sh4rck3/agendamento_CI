<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-14 13:17:49 --> Query error: Unknown column 'descricao' in 'field list' - Invalid query: INSERT INTO `usuarios_comissao` (`descricao`, `valor`, `clientes_id`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `observacoes`, `usuarios_id`) VALUES ('Fatura de AG Nº: 8', 160, '3', '2022-02-15', '2022-02-15', '1', 'teste f', 'Dinheiro', 'receita', '', '2')
ERROR - 2022-03-14 15:19:44 --> 404 Page Not Found: Mapos/minhaComissao
ERROR - 2022-03-14 16:18:29 --> Query error: Unknown column 'permissoes.nome' in 'field list' - Invalid query: SELECT `usuarios`.*, `permissoes`.`nome` as `permissao`
FROM `usuarios`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:19:21 --> Query error: Unknown column 'permissoes.nome' in 'field list' - Invalid query: SELECT `usuarios`.*, `permissoes`.`nome` as `permissao`
FROM `usuarios`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:20:08 --> Query error: Unknown column 'permissoes.nome' in 'field list' - Invalid query: SELECT `usuarios`.*, `usuarios_comissao`.*, `permissoes`.`nome` as `permissao`
FROM `usuarios`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:20:10 --> Query error: Unknown column 'permissoes.nome' in 'field list' - Invalid query: SELECT `usuarios`.*, `usuarios_comissao`.*, `permissoes`.`nome` as `permissao`
FROM `usuarios`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:20:53 --> Query error: Not unique table/alias: 'usuarios_comissao' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.*
FROM `usuarios_comissao`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:20:56 --> Query error: Not unique table/alias: 'usuarios_comissao' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.*
FROM `usuarios_comissao`
JOIN `usuarios_comissao` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
WHERE `idUsuarios` = '2'
ERROR - 2022-03-14 16:33:25 --> Query error: Unknown column 'os.responsavel' in 'field list' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.`nome`, `usuarios`.`idUsuarios`, `os`.`clientes_id`, `os`.`responsavel`, `os`.`horario`, `os`.`profissional`
FROM `usuarios_comissao`
JOIN `usuarios` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
JOIN `clientes` ON `clientes`.`idClientes` = `os`.`clientes_id`
WHERE `usuarios`.`idUsuarios` = '2'
ERROR - 2022-03-14 16:33:32 --> Query error: Unknown column 'os.responsavel' in 'field list' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.`nome`, `usuarios`.`idUsuarios`, `os`.`clientes_id`, `os`.`responsavel`, `os`.`horario`, `os`.`profissional`
FROM `usuarios_comissao`
JOIN `usuarios` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
WHERE `usuarios`.`idUsuarios` = '2'
ERROR - 2022-03-14 16:34:48 --> Query error: Not unique table/alias: 'os' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.`nome`, `usuarios`.`idUsuarios`, `os`.`clientes_id`, `os`.`responsavel`, `os`.`horario`, `os`.`funcionario`
FROM `usuarios_comissao`
JOIN `usuarios` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
WHERE `usuarios`.`idUsuarios` = '2'
ERROR - 2022-03-14 16:35:05 --> Query error: Unknown column 'os.responsavel' in 'field list' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.`nome`, `usuarios`.`idUsuarios`, `os`.`clientes_id`, `os`.`responsavel`, `os`.`horario`, `os`.`funcionario`
FROM `usuarios_comissao`
JOIN `usuarios` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
WHERE `usuarios`.`idUsuarios` = '2'
ERROR - 2022-03-14 16:37:30 --> Query error: Unknown column 'os.responsavel' in 'field list' - Invalid query: SELECT `usuarios_comissao`.*, `usuarios`.`nome`, `usuarios`.`idUsuarios`, `os`.`clientes_id`, `os`.`horario`, `os`.`funcionario`, `os`.`responsavel`
FROM `usuarios_comissao`
JOIN `usuarios` ON `usuarios`.`nome` = `usuarios_comissao`.`nomeUsuario`
JOIN `os` ON `os`.`idOs` = `usuarios_comissao`.`idAgendamento`
WHERE `usuarios`.`idUsuarios` = '2'
