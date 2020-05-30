SELECT b.id_hecho,a.archivo_denuncia,a.observaciones 
FROM `hecho_denuncia_anexo` a INNER JOIN `hecho_denuncia` b 
on a.id_denuncia = b.id_denuncia 
where b.id_hecho = 53

SELECT * FROM `hecho_transito` a INNER JOIN `usuario` b
on a.rpe_captura = b.rpe_usuario 
where b.id_zona = DP090
