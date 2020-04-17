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
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: formation
#------------------------------------------------------------

CREATE TABLE formation(
        id_formation         Int  Auto_increment  NOT NULL ,
        titre_formation      Varchar (50) NOT NULL ,
        date_debut           Date NOT NULL ,
        date_fin             Date NOT NULL ,
        date_finaux          Date NOT NULL ,
        validation_condition Bool NOT NULL
	,CONSTRAINT formation_PK PRIMARY KEY (id_formation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: competence
#------------------------------------------------------------

CREATE TABLE competence(
        id_competence  Int  Auto_increment  NOT NULL ,
        nom_competence Varchar (50) NOT NULL
	,CONSTRAINT competence_PK PRIMARY KEY (id_competence)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: phase
#------------------------------------------------------------

CREATE TABLE phase(
        id_phase  Int  Auto_increment  NOT NULL ,
        nom_phase Varchar (50) NOT NULL
	,CONSTRAINT phase_PK PRIMARY KEY (id_phase)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acquisition
#------------------------------------------------------------

CREATE TABLE acquisition(
        id_acquisition  Int  Auto_increment  NOT NULL ,
        nom_acquisition Varchar (50) NOT NULL
	,CONSTRAINT acquisition_PK PRIMARY KEY (id_acquisition)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liaison_competence_formation
#------------------------------------------------------------

CREATE TABLE liaison_competence_formation(
        id_competence Int NOT NULL ,
        id_formation  Int NOT NULL
	,CONSTRAINT liaison_competence_formation_PK PRIMARY KEY (id_competence,id_formation)

	,CONSTRAINT liaison_competence_formation_competence_FK FOREIGN KEY (id_competence) REFERENCES competence(id_competence)
	,CONSTRAINT liaison_competence_formation_formation0_FK FOREIGN KEY (id_formation) REFERENCES formation(id_formation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liaison_phase_formation
#------------------------------------------------------------

CREATE TABLE liaison_phase_formation(
        id_phase     Int NOT NULL ,
        id_formation Int NOT NULL
	,CONSTRAINT liaison_phase_formation_PK PRIMARY KEY (id_phase,id_formation)

	,CONSTRAINT liaison_phase_formation_phase_FK FOREIGN KEY (id_phase) REFERENCES phase(id_phase)
	,CONSTRAINT liaison_phase_formation_formation0_FK FOREIGN KEY (id_formation) REFERENCES formation(id_formation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liaison_acquisation_formation
#------------------------------------------------------------

CREATE TABLE liaison_acquisation_formation(
        id_acquisition Int NOT NULL ,
        id_formation   Int NOT NULL
	,CONSTRAINT liaison_acquisation_formation_PK PRIMARY KEY (id_acquisition,id_formation)

	,CONSTRAINT liaison_acquisation_formation_acquisition_FK FOREIGN KEY (id_acquisition) REFERENCES acquisition(id_acquisition)
	,CONSTRAINT liaison_acquisation_formation_formation0_FK FOREIGN KEY (id_formation) REFERENCES formation(id_formation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liaison_formation_formulaire
#------------------------------------------------------------

CREATE TABLE liaison_formation_formulaire(
        id_formulaire Int NOT NULL ,
        id_formation  Int NOT NULL
	,CONSTRAINT liaison_formation_formulaire_PK PRIMARY KEY (id_formulaire,id_formation)

	,CONSTRAINT liaison_formation_formulaire_formulaire_FK FOREIGN KEY (id_formulaire) REFERENCES formulaire(id_formulaire)
	,CONSTRAINT liaison_formation_formulaire_formation0_FK FOREIGN KEY (id_formation) REFERENCES formation(id_formation)
)ENGINE=InnoDB;

