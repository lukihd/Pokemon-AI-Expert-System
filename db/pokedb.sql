-- POKEMON DATABASE --
-- CREATE FOR THE POKEMON EXPERT SYSTEM --
-- MADE BY LUKIHD --

CREATE DATABASE IF NOT EXISTS pokedb

CREATE TABLE IF NOT EXISTS pokemon (
    id int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
    name varchar(140) NOT NULL,
    type_1 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol') NOT NULL,
    type_2 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol'),
    type_3 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol'),
    stage_evolution enum(0,1,2) NOT NULL;
    mega_evolution enum(0,1) NOT NULL,
    gender enum('male','femelle','asexue') NOT NULL,
    generation enum(1,2,3,4,5,6,7) NOT NULL,
    color enum('rouge','jaune','bleu','violet','vert','orange','noir','blanc','gris','marron','rose','beige') NOT NULL,
    icon varchar(1000),
    sprite varchar(1000),
)