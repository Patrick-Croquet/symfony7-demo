-- Lister les bières selon le type. (id, nom de la bière, volume et titrage) // exmple de type : ‘Trappiste'

CREATE PROCEDURE `liste_biere_type`(IN `type` VARCHAR(255)) 
NOT DETERMINISTIC CONTAINS SQL SQL SECURITY 
DEFINER SELECT ID_ARTICLE,NOM_ARTICLE,VOLUME,TITRAGE FROM article JOIN typebiere as T ON T.ID_TYPE = article.ID_TYPE WHERE NOM_TYPE = type;



CALL liste_biere_type ('Trappiste');