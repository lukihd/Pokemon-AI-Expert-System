-- POKEMON DATABASE --
-- CREATE FOR THE POKEMON EXPERT SYSTEM --
-- MADE BY LUKIHD --

CREATE TABLE IF NOT EXISTS pokemon (
    id int(4) NOT NULL AUTO_INCREMENT,
    name varchar(140),
    type_1 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol'),
    type_2 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol'),
    type_3 enum('normal','combat','acier','feu','eau','plante','roche','sol','electrique','insecte','poison','fee','glace','dragon','psy','spectre','tenebre','vol'),
    stage_evolution enum('0','1','2'),
    mega_evolution boolean,
    legendary boolean,
    starter boolean,
    gender enum('male','femelle','asexue'),
    generation enum('1','2','3','4','5','6','7'),
    region enum('kanto','jotho','hoenn','sinnoh','unova','kalos','alola'),
    color enum('rouge','jaune','bleu','violet','vert','orange','noir','blanc','gris','marron','rose','beige'),
    detail enum('griffe','sabot','aile','corne','croc','bec','nageoire','carapace','vegetal'),
    icon varchar(1000),
    sprite varchar(1000),
    PRIMARY KEY (id)
)