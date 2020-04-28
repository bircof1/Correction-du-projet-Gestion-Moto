drop table if exists administrateur;

drop table if exists client;

drop table if exists moto;

drop table if exists vente;

/*==============================================================*/
/* Table : administrateur                                       */
/*==============================================================*/
create table administrateur
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   login                varchar(254),
   password             varchar(254),
   primary key (id),
   key AK_Identifiant_1 (id)
);

/*==============================================================*/
/* Table : client                                               */
/*==============================================================*/
create table client
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   cnib                 varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table : moto                                                 */
/*==============================================================*/
create table moto
(
   id                   int not null AUTO_INCREMENT,
   cathegorie           varchar(254),
   nom                  varchar(254),
   marque               varchar(254),
   model                varchar(254),
   cylindre             varchar(254),
   numero_seri          varchar(254),
   prix                 int,
   primary key (id),
   key AK_Identifiant_1 (numero_seri)
);

/*==============================================================*/
/* Table : vente                                                */
/*==============================================================*/
create table vente
(
   mot_id               int not null AUTO_INCREMENT,
   id                   int not null,
   cli_id               int not null,
   date_vente           int,
   prix_vente           int,
   primary key (mot_id, id)
);

alter table vente add constraint FK_Association_2 foreign key (cli_id)
      references client (id) on delete restrict on update restrict;

alter table vente add constraint FK_Generalisation_1 foreign key (mot_id)
      references moto (id) on delete restrict on update restrict;
