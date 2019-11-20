select f.nome_filme, f.data, g.genero, c.classificacao, d.diretor, e.estudip, a.ator FROM filmes f
JOIN genero g
ON g.id_genero = f.generofk
JOIN classificacao c
ON c.id_classificacao = f.classificacaofk
JOIN diretor d
ON d.id_diretor = f.diretorfk
JOIN estudio e
ON e.id_estudio = f.estudiofk
JOIN ator a
ON a.id_ator = f.atorfk



