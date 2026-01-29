\c modele
drop database hotelsss;
CREATE database hotelsss;
\c hotelsss
---cration des sequences pour les identifients
create sequence sec_id_cl
INCREMENT 1
MINVALUE 1
start 1;
create sequence sec_id_res
INCREMENT 1
MINVALUE 1
start 1;
create sequence sec_id_cat
INCREMENT 1
MINVALUE 1
start 1;
create sequence sec_id_chbr
INCREMENT 1
MINVALUE 1
start 1;
create sequence sec_id_lgn_re
INCREMENT 1
MINVALUE 1
start 1;
create sequence sec_id_pm
INCREMENT 1
MINVALUE 1
start 1;
---- creation des tables et leurs diferents contrainte
CREATE table categorie ( id integer primary key default nextval ('sec_id_cl'),nom varchar not null, descriptions text not null , tarif integer not null  );
CREATE table client (id_cl integer primary key  default nextval ('sec_id_cat'), nom varchar(15) not null,prenom varchar(15) not null , numero_tel integer not null, adresse varchar(15) , email text  );
CREATE table chambre (id integer primary key default nextval ('sec_id_chbr'), numero integer not null, etat varchar(15) not null , tarif_par_nuit integer not null,id_categorie integer references categorie (id ));
CREATE table reservation (id_res integer primary key default nextval ('sec_id_res'), date_reservation timestamp default now() , date_arriver date default CURRENT_DATE not null , date_depart date default CURRENT_DATE not null , etat varchar(15) not null , id_client integer references client (id_cl) default 1 );
CREATE table paiemant (id integer primary key default nextval ('sec_id_pm'),montan integer not null, date_paiement timestamp not null , mode_paiement varchar(15) not null,id_reservation integer references reservation (id_res) );
CREATE table ligne_reservation (id integer primary key default nextval ('sec_id_lgn_re'),nombre_personne integer not null, tarif_appliqué integer default 1 not null ,id_chambre integer references chambre (id ) , id_reservation integer references reservation (id_res )default 1 );
----- premier insertion de teste
 insert into client (nom,prenom,numero_tel,adresse,email)values('dadja','godwin',71084270,'sokode','dadjagodwin@gmail.com');

 ---- un trigger permetent d'atribuer l'id du client automatiquement a la reservation 
 
 CREATE or REPLACE FUNCTION id_cl_aj()RETURNS trigger 
 AS $reservation$
 DECLARE
     nouv_id_res integer;
 BEGIN
    select count(id_res)
    into nouv_id_res
    from reservation;
    update reservation  SET id_client=new.id_cl where id_res=nouv_id_res ;
    RETURN old;
 END;
 $reservation$
 LANGUAGE plpgsql;
 create trigger reservation after insert on client
 for each row execute procedure id_cl_aj();
 --- un petit programe de teste sur le trigger et quel que insertion sur d'autre table 
 insert into categorie(nom,descriptions,tarif)values('luxe','climatisée lit 2 place et television integre',15000);
insert into chambre (numero,etat,tarif_par_nuit,id_categorie)values(11,'libre',1200,1);
insert into reservation (date_reservation, date_arriver ,date_depart, etat,id_client)
values( now(),'2001-02-02','2001-02-02','confirmée',1);
/*
CREATE or REPLACE FUNCTION tarif_app()RETURNS trigger
AS $ligne_reservation$
 DECLARE
     nouv_id integer;
BEGIN
    select count(id)
    into nouv_id
    from ligne_reservation;
    update ligne_reservation set tarif_appliqué=tarif_par_nuit where id_chambre=id;
    update ligne_reservation set id_reservation=new.id_res where id=nouv_id;
    RETURN new;
END;
$ligne_reservation$
LANGUAGE plpgsql;


CREATE trigger ligne_reservation after insert on ligne_reservation for each row execute procedure tarif_app();
*/
create or replace function id_res_lgn_res()returns trigger 
AS $$
DECLARE 
    id_r integer;
     id_l integer;
begin
    select count(id_res)
    into id_r
    from reservation;
    select count(id)
    into id_l
    from ligne_reservation;
   update ligne_reservation set id_reservation=id_r where id = id_l;
   RETURN new;
END ;
$$
LANGUAGE plpgsql;
create trigger lgn after insert on ligne_reservation for each row execute procedure id_res_lgn_res();
create table reservation_lient( id serial primary key ,nom_cl varchar(15),prenom varchar(15),id_reservation integer , nombre_chambre integer , dateArriver date default timestamp , montant integer , montan_paye integer ,montan_restant integer );
create function ligne reserv
CREATE OR REPLACE FUNCTION maj_etat_chambre()
RETURNS trigger AS $$
BEGIN
  UPDATE chambre SET etat = 'occupée'
  WHERE id = NEW.id_chambre;
  RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trg_maj_etat_chambre
AFTER INSERT ON ligne_reservation
FOR EACH ROW
EXECUTE FUNCTION maj_etat_chambre();
create or replace function tarif_chbre()returns trigger
As $$
begin
   update chambre set tarif_par_nuit =24*tarif where id_categorie=categorie.id;
   return new;
END;
$$
LANGUAGE plpgsql;
create trigger tarif_chbres on insert on chambre for each row execute procedure tarif_chbre();


CREATE OR REPLACE FUNCTION liberer_chambres()
RETURNS trigger AS $$
BEGIN
    UPDATE chambre
    SET etat = 'libre'
    WHERE id IN (
        SELECT ligne_reservation.id_chambre
        FROM ligne_reservation lr
        , reservation r 
        WHERE
        lr.id_reservation = r.id_res and r.date_depart < CURRENT_DATE );
        return new;
END;
$$ LANGUAGE plpgsql;
create trigger lib_chambre after insert on reservation for each row execute procedure liberer_chambres(); 



    