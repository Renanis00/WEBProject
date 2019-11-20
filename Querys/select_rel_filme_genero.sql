select f.nome_filme, g.genero FROM filmes f
JOIN genero g
ON g.id_genero = f.generofk
