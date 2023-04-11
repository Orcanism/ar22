<?php
    $VotreAdresseMail="cyrilsimonodu67@gmail.com";
// si le bouton "Envoyer" est cliqu�
if(isset($_POST['envoyer'])) {
    //on v�rifie que le champ mail est correctement rempli
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
        //on v�rifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entr�e est incorrecte";
        }else{
            //on v�rifie que le champ sujet est correctement rempli
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                //on v�rifie que le champ message n'est pas vide
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    //tout est correctement renseign�, on envoi le mail
                    //on renseigne les ent�tes de la fonction mail de PHP
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'].">\r\n";//de pr�f�rence une adresse avec le m�me domaine de l� o�, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['mail'].">\r\n";
                    //on pr�pare les champs:
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'�tre manipul�es par les syst�mes qui ne g�rent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caract�res de la chaine)
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entit�s HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entit�s HTML
                    //en fin, on envoi le mail
                    if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo "Le mail � �t� envoy� avec succ�s!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas �t� envoy�";
                    }
                }
            }
        }
    }
}
?>