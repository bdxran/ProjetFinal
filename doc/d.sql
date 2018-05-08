DROP  TRIGGER updatevets;

DELIMITER |
CREATE TRIGGER updatevets AFTER UPDATE ON vets FOR EACH ROW
BEGIN
	IF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.Speciality != NEW.Speciality AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.Speciality,"|",New.LastnameVet,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.Speciality != NEW.Speciality AND OLD.LastnameVet != NEW.LastnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.Speciality,"|",New.LastnameVet);
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.Speciality != NEW.Speciality AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.Speciality,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.LastnameVet,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Speciality != NEW.Speciality AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Speciality,"|",New.LastnameVet,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Birthdate != NEW.Birthdate AND OLD.Speciality != NEW.Speciality AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Birthdate,"|",New.Speciality,"|",New.LastnameVet,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.Speciality != NEW.Speciality) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.Speciality));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.Birthdate != NEW.Birthdate AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.Birthdate,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Gsm != NEW.Gsm AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Gsm,"|",New.LastnameVet,"|",New.FirstnameVet));
		
	ELSEIF (OLD.Speciality != NEW.Speciality AND OLD.LastnameVet != NEW.LastnameVet AND OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),CONCAT(New.Speciality,"|",New.LastnameVet,"|",New.FirstnameVet));
	
	ELSEIF (OLD.Gsm != NEW.Gsm) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),New.Gsm);
		
	ELSEIF (OLD.Birthdate != NEW.Birthdate) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),New.Birthdate);
		
	ELSEIF (OLD.Speciality != NEW.Speciality) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),New.Speciality);
		
	ELSEIF (OLD.LastnameVet != NEW.LastnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),New.LastnameVet);
		
	ELSEIF (OLD.FirstnameVet != NEW.FirstnameVet) THEN
		INSERT INTO updatevets (Udate, Element) VALUES (NOW(),New.FirstnameVet);
	END IF;
END|
DELIMITER ;

UPDATE vets SET Gsm = "+32496225566" WHERE NumVet = 2;			-- modification telephone

UPDATE vets SET Birthdate = '1982-03-06' WHERE NumVet = 4;		-- modification birthdate

UPDATE vets SET Speciality = "LITTLE" WHERE NumVet = 1;			-- modification speciality

UPDATE vets SET LastnameVet = "Costa" WHERE NumVet = 1;			-- modification lastname

UPDATE vets SET FirstnameVet = "Francesco" WHERE NumVet = 1;		-- modification firstname