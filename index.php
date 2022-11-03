<?php
echo "
    <html>
        <head>
        <title>Prezentare</title>
        </head>
        <body style='font-family: Gotham'>
        <p>Tema Proiectului : Aplicatie de gestionare a activitatilor unui spital </p>
        <ul>
            <li>Aplicatia creata presupune diferentierea a trei tipuri de utilizatori: Pacienti, Administratia Spitalului si Vizitatori. Acest lucru va fi realizat cu ajutorul unui Login Form, unde se vor putea loga si primi accesul la diferite functii, sau vor putea crea un cont in caz ca nu au deja.Pe parcursul sesiunii utilizatorul o poate incheia oricand apasand pe butonul de Disconnect, ceea ce ii va restrictiona accesul la anumite parti ale siteului.</li>
            <li>Pacientii spitalului vor putea efectua programari noi, vizualiza programarile facute, modificarea datelor programarilor sau a medicului, si stergerea programarilor. Acest lucru va fi realizat printr-un meniu de tip CRUD.</li>
            <li>Administratorii vor avea acces la un alt meniu de tip CRUD prin care pot modifica sau sterge programarile oricarui pacient.
            <li>Platforma va avea un formular de contact prin email pentru informatii ulterioare in legatura cu programarile pacientilor.
            <li>Aplicatia va avea o interfata efectuata cu un framework special pentru frontend. Baza de date de tip mySQL va contine diferite informatii despre medicii disponibili, orarul spitalului, pretul consultatiilor, s.a.m.d. prin intermediul mai multor entitati ( Medic, Programare, Sectia Spitalului, Pacient, etc.)
        </ul>
        <p> Mai jos se poate vedea arhitectura aplicatiei :  </p>
        <img src='diagrama.jpg'/>
        </body>
    </html>
";

?>