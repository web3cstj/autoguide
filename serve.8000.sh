#!/bin/bash

################################################################
## UTILISATION                                                ##
################################################################
## À utiliser sur un poste Macintosh.
## Déposer ce fichier dans le dossier de travail.
##     Au besoin, changer le numéro du fichier pour correspondre au numéro de port désiré.
##     Au besoin, ôter le numéro du nom du fichier pour utiliser numéro de port aléatoire.
## Ouvrir le Terminal en déposant l'icone du dossier de travail sur l'icone du Terminal (dans le dock).
## Si le fichier vient d'être téléchargé, donner l'autorisation d'exécution
##     avec la commande suivante : chmod +x serve.8000.sh
## Démarrer le serveur avec la commande suivante : ./serve.8000.sh
##     Si le port est déjà pris, le script incrémente jusqu'à en trouver un libre. Bien noter le port trouvé.
##     Si le dossier contient un sous-dossier "public", le root du site sera "public".
##     Sinon, on utilisera le dossier courant.
## ATTENTION! On peut avoir besoin de mettre le chemin complet vers l'exécutable "php" à

# On change le dossier courant pour le même que le fichier .sh
chemin=$(dirname "$0")
cd "${chemin}"
if [ -d "public" ]; then
  cd public
fi

# On cherche le numero de port dans le nom du fichier
port=`expr "$0" : '.*[_\.\-]\([0-9]*\)\.sh'`

# On prend un port aleatoire si le nom n'en contient pas
if [ ! $port ]
then
	((port=($RANDOM % 8192)+49152))
fi

# On cherche le premier port non ouvert
while [ -n "`netstat -atn | grep \".$port \"`" ]
do
	echo "Le port '$port' est pris."
	((port=port+1))
done
echo "On utilise le port '$port'."

################################################################
## DÉMARRAGE DU SERVEUR                                       ##
################################################################
# On ouvre le fureteur et on démarre le serveur
php -S 0.0.0.0:$port
