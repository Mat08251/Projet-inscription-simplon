#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: nationalite
#------------------------------------------------------------

CREATE TABLE nationalite(
        id_nationalite Int  Auto_increment  NOT NULL ,
        nationalite    Varchar (50) NOT NULL
	,CONSTRAINT nationalite_PK PRIMARY KEY (id_nationalite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: pays
#------------------------------------------------------------

CREATE TABLE pays(
        id_pays Int  Auto_increment  NOT NULL ,
        pays    Varchar (50) NOT NULL
	,CONSTRAINT pays_PK PRIMARY KEY (id_pays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: candidat
#------------------------------------------------------------

CREATE TABLE candidat(
        id_candidat       Int  Auto_increment  NOT NULL ,
        nom_candidat      Varchar (50) NOT NULL ,
        prenom_candidat   Varchar (50) NOT NULL ,
        nom_jeune_fille   Varchar (50) NOT NULL ,
        date_naissance    Date NOT NULL ,
        sexe_candidat     Varchar (20) NOT NULL ,
        adresse_candidat  Varchar (50) NOT NULL ,
        adresse1_candidat Varchar (50) NOT NULL ,
        adresse2_candidat Varchar (50) NOT NULL ,
        code_postal       Int NOT NULL ,
        ville_candidat    Varchar (50) NOT NULL ,
        tel_domicile      Int NOT NULL ,
        mobile            Int NOT NULL ,
        email_candidat    Varchar (50) NOT NULL ,
        mdp_candidat      Varchar (50) NOT NULL ,
        id_nationalite    Int NOT NULL ,
        id_pays           Int NOT NULL
	,CONSTRAINT candidat_PK PRIMARY KEY (id_candidat)

	,CONSTRAINT candidat_nationalite_FK FOREIGN KEY (id_nationalite) REFERENCES nationalite(id_nationalite)
	,CONSTRAINT candidat_pays0_FK FOREIGN KEY (id_pays) REFERENCES pays(id_pays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: diplome
#------------------------------------------------------------

CREATE TABLE diplome(
        id_diplome Int  Auto_increment  NOT NULL ,
        diplome    Varchar (50) NOT NULL
	,CONSTRAINT diplome_PK PRIMARY KEY (id_diplome)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: formulaire
#------------------------------------------------------------

CREATE TABLE formulaire(
        id_formulaire Int  Auto_increment  NOT NULL ,
        q1            Varchar (50) NOT NULL ,
        q2            Varchar (50) NOT NULL ,
        q3            Varchar (50) NOT NULL ,
        id_candidat   Int NOT NULL ,
        id_diplome    Int
	,CONSTRAINT formulaire_PK PRIMARY KEY (id_formulaire)

	,CONSTRAINT formulaire_candidat_FK FOREIGN KEY (id_candidat) REFERENCES candidat(id_candidat)
	,CONSTRAINT formulaire_diplome0_FK FOREIGN KEY (id_diplome) REFERENCES diplome(id_diplome)
	,CONSTRAINT formulaire_candidat_AK UNIQUE (id_candidat)
)ENGINE=InnoDB;

