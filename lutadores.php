<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lutadores</title>
    </head>
    <body>
        <pre>
        <?php
        
       require_once './classesLut.php'; 
       require_onde './luta.php';
       $l=array();
       $l[0]=new lutadores("Pretty Boy","França",31,1.75,68.9,11,3,1);
       $l[1]=new lutadores("Putscrip","Brasil",29,1.68,57.8,14,2,3);
       $l[2]= new lutadores("Snapshadow","EUA",35,1.65,80.9,12,2,1);
       $l[3]=new lutadores("Dead Code","Australia",28,1.93,81.6,13,0,2);
       $l[4]=new lutadores("UFOCobol","Brasil",37,1.70,119.3,5,4,3);
       $l[5]=new lutadores("Nerdaart", "EUA",30,1.81,105.7,12,2,4);
       
       $uec01= new luta();
       $uec01->marcarluta($l[],$l[]);
       $uec01->lutar();
       $l[0]->status();
       $l[1]->status();
              ?>
        </pre>
    </body>
</html>
    
