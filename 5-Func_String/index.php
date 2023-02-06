<?php 

// PHP String Functions

# Exemplo 1
// strlen() - Retorna o comprimento de uma String

echo strlen("Hello world!"); // outputs 12


# Exemplo 2
// str_word_count() - Conta palavras em uma string

echo str_word_count("Hello world!"); // outputs 2

# Exemplo 3
// strrev() - Inverte uma String

echo strrev("Hello world!"); // outputs !dlrow olleH

# Exemplo 4
/* 
strpos() - Procura um texto dentro de uma string
A função PHP strpos()procura por um texto específico dentro de uma string. 
Se for encontrada uma correspondência, a função retorna a posição do caractere da primeira correspondência. 
Se nenhuma correspondência for encontrada, ele retornará FALSE.
*/
echo strpos("Hello world!", "world"); // outputs 6

# Exemplo 5
// str_replace() - Substitui o texto dentro de uma string

//Substitua o texto "world" por "Dolly":
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

?>