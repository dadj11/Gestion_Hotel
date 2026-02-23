
---- creation des tables et leurs diferents contrainte
CREATE table categorie ( id integer primary key AUTOINCREMENT,nom varchar not null, descriptions text not null , tarif integer not null  );
CREATE table client (id_cl integer primary key  AUTOINCREMENT, nom varchar(15) not null,prenom varchar(15) not null , numero_tel integer not null, adresse varchar(15) , email text  );
CREATE table chambre (id integer primary key AUTOINCREMENT, numero integer not null, etat varchar(15) not null , tarif_par_nuit integer not null,id_categorie integer references categorie (id ));
CREATE table reservation (id_res integer primary key AUTOINCREMENT, date_reservation timestamp default CURRENT_TIMESTAMP , date_arriver date default CURRENT_DATE not null , date_depart date default CURRENT_DATE not null , etat varchar(15) not null , id_client integer references client (id_cl) default 1 );
CREATE table paiemant (id integer primary key AUTOINCREMENT,montan integer not null, date_paiement timestamp not null , mode_paiement varchar(15) not null,id_reservation integer references reservation (id_res) );
CREATE table ligne_reservation (id integer primary key AUTOINCREMENT,nombre_personne integer not null, tarif_appliqué integer default 1 not null ,id_chambre integer references chambre (id ) , id_reservation integer references reservation (id_res )default 1 );




    