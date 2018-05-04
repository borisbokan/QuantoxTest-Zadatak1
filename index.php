<!DOCTYPE html>
<! Index za testiranje moleda covek>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   
        
                include_once './model/zivobice.php';
                include_once './model/covek.php';
                //Predstavljen sa konstruktorom)
                $covek1=new covek("Milutinovic","Petar","M", "Plava", "zelena", "Bela", "12.3.1969", "Novi Sad");
                 //Test covek1
                $covek1->getResult();  
                
                
                //Predstavljen get set metodama.
                $covek2=new covek(NULL,NULL,NULL,NULL, NULL, NULL, NULL, NULL);
                $covek2->setPrezime("Megumi");
                $covek2->setIme("Tesima");
                $covek2->setPol("Z");
                $covek2->setBoja_kose("Crvena");
                $covek2->setBoja_ociju("Plava");
                $covek2->setRasa("Zuta");
                $covek2->setDatum_rodjenja("23.4.1986");
                $covek2->setMesto_rodjenja("Tokyo");
                                  
                //Test covek2
                $covek2->getResult();        
                     
                        
        
        ?>
    </body>
</html>
