<?php 
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=zibu;charset=utf8','root','') ;
/*$bdd = new PDO ('mysql:host=localhost;dbname=id12074881_zibu;charset=utf8','id12074881_localhost','=AKaQZ8OlA1HmIya') ;*/
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    if(isset($_POST)AND(!empty($_POST)))
  {
              $errors = array();
             if(!empty($_POST['email']) || (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])))
                {
                  $mail = stripcslashes($_POST['email']); 
                  $mail = htmlspecialchars($mail);
                  
                    if((isset($_POST['nom']) AND (!preg_match('#^[ ]#', $_POST['nom'])))AND (preg_match('#^[a-zA-Z]*$#', $_POST['nom'])))
                    {
                  $nom = stripcslashes($_POST['nom']); 
                  $nom = htmlspecialchars($nom);
                      }
                      else
                      {
                        $errors['email'] = "erreur1";
                      $_SESSION['flash']['danger'] = "veuillez remplir le champs 2  Nom verifier que vous avez bien ecrit votre nom : obligatoire";
                      /*header('Location: https://zibu.000webhostapp.com/index.php');*/
                      header('Location:index.php');

                    exit();
                      }
                    if((isset($_POST['message'])AND(!preg_match('#^[ ]#', $_POST['message'])))AND(preg_match('#^[a-zA-Zéàçùîôöïèâ0-9._+:;, /\()?!%@$£-]*$#', $_POST['nom'])))
                    {
                  $message = stripcslashes($_POST['message']); 
                  $message = htmlspecialchars($message);
                      }
                      else
                      {
                      $_SESSION['flash']['danger'] = "veuillez remplir le champs 3 Message verifier que ce champs ne comporte pas des epaces au debut de la page ou des emojis : obligatoire";
                      /*header('Location: https://zibu.000webhostapp.com/index.php');*/
                      header('Location:index.php');

                    exit();
                      }
             

          }   else{
                  $errors ="erreur";
               }
                              if (empty($errors))
                   {
               $req = $bdd->prepare('INSERT INTO contact(email, nom, message, date_) VALUES(?, ?, ?, NOW())');
              $req->execute([$mail, $nom, $message]);
                $email_subject = "zibu_design contacter par:  $nom";
                mail("kabuyajunior082@gmail.com","zibu_design contacter par: $mail","$message\n\nNom:$nom");
               $_SESSION['flash']['success'] = "Message envoyé, merci nous vous recontacterons dans un bref delai";
                  /*header('location: https://zibu.000webhostapp.com/contact/index.php');*/
                header('Location:index.php');

                 exit();
               }        else{

              $_SESSION['flash']['danger'] = "remplissez tout les champs";
              /*header('Location: https://zibu.000webhostapp.com/contact/index.php');*/
              header('Location:contact/index.php');
              exit();
          }
          }
          else{

              $_SESSION['flash']['danger'] = "remplissez tout les champs";
             /*header('Location: https://zibu.000webhostapp.com/index.php');*/
              header('Location:index.php');

              exit();
          }

 ?>