#La fonction « Magic Inc »

function magic_inc(arguments) {
//code
}


L’objectif de cette fonction est d’incrémenter ou décrémenter une valeur en appliquant la suite logique suivante :

- inc : 0.5 > 0.6 > 0.7 > 0.8 > 0.9 > 1 > 2 > 3 > 4 > 5 > 6 > 7 > 8 > 9 > 10 > 20 > 30 > 40 > 50 > 60 > 70 > 80 > 90 > 100 >
200 > 300 > 400 > etc.

- dec : 0.5 > 0.4 > 0.3 > 0.2 > 0.1 > 0.09 > 0.08 > 0.07 > 0.06 > 0.05 > 0.04 > 0.03 > 0.02 > 0.01 > 0.009 > 0.008 > 0.007 >
0.006 > 0.005 > etc.


Applicable sur des valeurs négatives. Exemple :
- inc : -0.3 > -0.2 > -0.1 > -0.09 > -0.08 > -0.07 > etc.
- dec : -0.7 > -0.8 > -0.9 > -1 > -2 > -3 > -4 > -5 > etc.


Toute valeur entrée « mal formatée » doit retourner le résultat converti suivant, selon la logique des exemples ci-dessous :
- inc : 22 > 30 > 40 > etc.
- inc : 0.76 > 0.8 > 0.9 > etc.
- inc : -0.5264523 > -0.4 > -0.3 > etc.
- inc : 1568.548 > 2000 > 3000 > etc.

-dec : 17 > 9 > 8 > etc.
-dec : 0.27 > 0.1 > 0.09 > etc.
-dec : -18 > -20 > -30 > etc.
-dec : 2.3257 > 1 > 0.9 > etc.


Pour des valeurs « non numériques » ou « 0 », la fonction devra retourner « 0 ».


Facultatif (bonus) : le code doit pouvoir fonctionner sans aucune limite de taille de nombre, aussi bien avec de très grandes
valeurs que de très petites.


Exercice: rédiger les lignes de code pour réaliser cette fonction dans les 2 langages purs : PHP et Javascript.

Ex:

magic_inc(valeur, [inc|dec]) => résultat
(ex : (0.5, inc) => 0.6 )