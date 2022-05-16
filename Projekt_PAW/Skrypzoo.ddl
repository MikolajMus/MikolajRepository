-- Generated by Oracle SQL Developer Data Modeler 20.4.1.406.0906
--   at:        2022-05-16 15:07:02 CEST
--   site:      Oracle Database 11g
--   type:      Oracle Database 11g



-- predefined type, no DDL - MDSYS.SDO_GEOMETRY

-- predefined type, no DDL - XMLTYPE

CREATE TABLE gatunek (
    id_gatunek  INTEGER NOT NULL,
    rodzaj      VARCHAR2(32 CHAR) NOT NULL,
    gatunek_id  NUMBER NOT NULL
);

ALTER TABLE gatunek ADD CONSTRAINT gatunek_pk PRIMARY KEY ( gatunek_id );


CREATE TABLE Gatunek_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,id_gatunek INTEGER NOT NULL
 ,Rodzaj VARCHAR2 (32 CHAR) NOT NULL
 ,Gatunek_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER Gatunek_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON Gatunek for each row 
 Declare 
  rec Gatunek_JN%ROWTYPE; 
  blank Gatunek_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.id_gatunek := :NEW.id_gatunek; 
      rec.Rodzaj := :NEW.Rodzaj; 
      rec.Gatunek_ID := :NEW.Gatunek_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.id_gatunek := :OLD.id_gatunek; 
      rec.Rodzaj := :OLD.Rodzaj; 
      rec.Gatunek_ID := :OLD.Gatunek_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into Gatunek_JN VALUES rec; 
  END; 
  /CREATE TABLE produkt (
    id_produkt          INTEGER NOT NULL,
    gatunek             VARCHAR2(32 CHAR) NOT NULL,
    nazwa               VARCHAR2(64 CHAR) NOT NULL,
    producent           VARCHAR2(45 CHAR) NOT NULL,
    produkt_id          NUMBER NOT NULL,
    gatunek_gatunek_id  NUMBER NOT NULL
);

ALTER TABLE produkt ADD CONSTRAINT produkt_pk PRIMARY KEY ( produkt_id );


CREATE TABLE Produkt_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,id_Produkt INTEGER NOT NULL
 ,Gatunek VARCHAR2 (32 CHAR) NOT NULL
 ,Nazwa VARCHAR2 (64 CHAR) NOT NULL
 ,Producent VARCHAR2 (45 CHAR) NOT NULL
 ,Produkt_ID NUMBER NOT NULL
 ,Gatunek_Gatunek_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER Produkt_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON Produkt for each row 
 Declare 
  rec Produkt_JN%ROWTYPE; 
  blank Produkt_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.id_Produkt := :NEW.id_Produkt; 
      rec.Gatunek := :NEW.Gatunek; 
      rec.Nazwa := :NEW.Nazwa; 
      rec.Producent := :NEW.Producent; 
      rec.Produkt_ID := :NEW.Produkt_ID; 
      rec.Gatunek_Gatunek_ID := :NEW.Gatunek_Gatunek_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.id_Produkt := :OLD.id_Produkt; 
      rec.Gatunek := :OLD.Gatunek; 
      rec.Nazwa := :OLD.Nazwa; 
      rec.Producent := :OLD.Producent; 
      rec.Produkt_ID := :OLD.Produkt_ID; 
      rec.Gatunek_Gatunek_ID := :OLD.Gatunek_Gatunek_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into Produkt_JN VALUES rec; 
  END; 
  /CREATE TABLE rola (
    id_rola           INTEGER NOT NULL,
    nazwa             VARCHAR2(32 CHAR) NOT NULL,
    data_utworzenia   DATE NOT NULL,
    data_modyfikacji  DATE NOT NULL,
    rola_id           NUMBER NOT NULL
);

ALTER TABLE rola ADD CONSTRAINT rola_pk PRIMARY KEY ( rola_id );


CREATE TABLE Rola_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,id_Rola INTEGER NOT NULL
 ,Nazwa VARCHAR2 (32 CHAR) NOT NULL
 ,Data_utworzenia DATE NOT NULL
 ,Data_modyfikacji DATE NOT NULL
 ,Rola_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER Rola_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON Rola for each row 
 Declare 
  rec Rola_JN%ROWTYPE; 
  blank Rola_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.id_Rola := :NEW.id_Rola; 
      rec.Nazwa := :NEW.Nazwa; 
      rec.Data_utworzenia := :NEW.Data_utworzenia; 
      rec.Data_modyfikacji := :NEW.Data_modyfikacji; 
      rec.Rola_ID := :NEW.Rola_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.id_Rola := :OLD.id_Rola; 
      rec.Nazwa := :OLD.Nazwa; 
      rec.Data_utworzenia := :OLD.Data_utworzenia; 
      rec.Data_modyfikacji := :OLD.Data_modyfikacji; 
      rec.Rola_ID := :OLD.Rola_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into Rola_JN VALUES rec; 
  END; 
  /CREATE TABLE u�ytkownik (
    id_u�ytkownik    INTEGER NOT NULL,
    nazwa            VARCHAR2(32 CHAR) NOT NULL,
    has�o            VARCHAR2(32 CHAR) NOT NULL,
    data_utworzenia  DATE NOT NULL,
    u�ytkownik_id    NUMBER NOT NULL
);

ALTER TABLE u�ytkownik ADD CONSTRAINT u�ytkownik_pk PRIMARY KEY ( u�ytkownik_id );


CREATE TABLE U�ytkownik_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,id_U�ytkownik INTEGER NOT NULL
 ,Nazwa VARCHAR2 (32 CHAR) NOT NULL
 ,Has�o VARCHAR2 (32 CHAR) NOT NULL
 ,Data_utworzenia DATE NOT NULL
 ,U�ytkownik_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER U�ytkownik_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON U�ytkownik for each row 
 Declare 
  rec U�ytkownik_JN%ROWTYPE; 
  blank U�ytkownik_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.id_U�ytkownik := :NEW.id_U�ytkownik; 
      rec.Nazwa := :NEW.Nazwa; 
      rec.Has�o := :NEW.Has�o; 
      rec.Data_utworzenia := :NEW.Data_utworzenia; 
      rec.U�ytkownik_ID := :NEW.U�ytkownik_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.id_U�ytkownik := :OLD.id_U�ytkownik; 
      rec.Nazwa := :OLD.Nazwa; 
      rec.Has�o := :OLD.Has�o; 
      rec.Data_utworzenia := :OLD.Data_utworzenia; 
      rec.U�ytkownik_ID := :OLD.U�ytkownik_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into U�ytkownik_JN VALUES rec; 
  END; 
  /CREATE TABLE u�ytkownikrola (
    u�ytkownik_u�ytkownik_id  NUMBER NOT NULL,
    rola_rola_id              NUMBER NOT NULL
);

ALTER TABLE u�ytkownikrola ADD CONSTRAINT relation_13_pk PRIMARY KEY ( u�ytkownik_u�ytkownik_id,
                                                                       rola_rola_id );


CREATE TABLE U�ytkownikRola_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,U�ytkownik_U�ytkownik_ID NUMBER NOT NULL
 ,Rola_Rola_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER U�ytkownikRola_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON U�ytkownikRola for each row 
 Declare 
  rec U�ytkownikRola_JN%ROWTYPE; 
  blank U�ytkownikRola_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.U�ytkownik_U�ytkownik_ID := :NEW.U�ytkownik_U�ytkownik_ID; 
      rec.Rola_Rola_ID := :NEW.Rola_Rola_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.U�ytkownik_U�ytkownik_ID := :OLD.U�ytkownik_U�ytkownik_ID; 
      rec.Rola_Rola_ID := :OLD.Rola_Rola_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into U�ytkownikRola_JN VALUES rec; 
  END; 
  /CREATE TABLE zam�wienie (
    id_zam�wienie             INTEGER NOT NULL,
    data_zam�wienia           DATE NOT NULL,
    cena_zakupu               NUMBER NOT NULL,
    cena_sprzedazy            NUMBER NOT NULL,
    u�ytkownik_u�ytkownik_id  NUMBER NOT NULL
);

ALTER TABLE zam�wienie ADD CONSTRAINT zam�wienie_pk PRIMARY KEY ( id_zam�wienie );


CREATE TABLE zam�wienie_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,id_zam�wienie INTEGER NOT NULL
 ,Data_zam�wienia DATE NOT NULL
 ,Cena_zakupu NUMBER NOT NULL
 ,Cena_sprzedazy NUMBER NOT NULL
 ,U�ytkownik_U�ytkownik_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER zam�wienie_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON zam�wienie for each row 
 Declare 
  rec zam�wienie_JN%ROWTYPE; 
  blank zam�wienie_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.id_zam�wienie := :NEW.id_zam�wienie; 
      rec.Data_zam�wienia := :NEW.Data_zam�wienia; 
      rec.Cena_zakupu := :NEW.Cena_zakupu; 
      rec.Cena_sprzedazy := :NEW.Cena_sprzedazy; 
      rec.U�ytkownik_U�ytkownik_ID := :NEW.U�ytkownik_U�ytkownik_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.id_zam�wienie := :OLD.id_zam�wienie; 
      rec.Data_zam�wienia := :OLD.Data_zam�wienia; 
      rec.Cena_zakupu := :OLD.Cena_zakupu; 
      rec.Cena_sprzedazy := :OLD.Cena_sprzedazy; 
      rec.U�ytkownik_U�ytkownik_ID := :OLD.U�ytkownik_U�ytkownik_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into zam�wienie_JN VALUES rec; 
  END; 
  /CREATE TABLE zam�wienieprodukt (
    zam�wienie_id_zam�wienie  INTEGER NOT NULL,
    produkt_produkt_id        NUMBER NOT NULL
);

ALTER TABLE zam�wienieprodukt ADD CONSTRAINT relation_3_pk PRIMARY KEY ( zam�wienie_id_zam�wienie,
                                                                         produkt_produkt_id );


CREATE TABLE zam�wienieProdukt_JN
 (JN_OPERATION CHAR(3) NOT NULL
 ,JN_ORACLE_USER VARCHAR2(30) NOT NULL
 ,JN_DATETIME DATE NOT NULL
 ,JN_NOTES VARCHAR2(240)
 ,JN_APPLN VARCHAR2(35)
 ,JN_SESSION NUMBER(38)
 ,zam�wienie_id_zam�wienie INTEGER NOT NULL
 ,Produkt_Produkt_ID NUMBER NOT NULL
 );

CREATE OR REPLACE TRIGGER zam�wienieProdukt_JNtrg
  AFTER 
  INSERT OR 
  UPDATE OR 
  DELETE ON zam�wienieProdukt for each row 
 Declare 
  rec zam�wienieProdukt_JN%ROWTYPE; 
  blank zam�wienieProdukt_JN%ROWTYPE; 
  BEGIN 
    rec := blank; 
    IF INSERTING OR UPDATING THEN 
      rec.zam�wienie_id_zam�wienie := :NEW.zam�wienie_id_zam�wienie; 
      rec.Produkt_Produkt_ID := :NEW.Produkt_Produkt_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      IF INSERTING THEN 
        rec.JN_OPERATION := 'INS'; 
      ELSIF UPDATING THEN 
        rec.JN_OPERATION := 'UPD'; 
      END IF; 
    ELSIF DELETING THEN 
      rec.zam�wienie_id_zam�wienie := :OLD.zam�wienie_id_zam�wienie; 
      rec.Produkt_Produkt_ID := :OLD.Produkt_Produkt_ID; 
      rec.JN_DATETIME := SYSDATE; 
      rec.JN_ORACLE_USER := SYS_CONTEXT ('USERENV', 'SESSION_USER'); 
      rec.JN_APPLN := SYS_CONTEXT ('USERENV', 'MODULE'); 
      rec.JN_SESSION := SYS_CONTEXT ('USERENV', 'SESSIONID'); 
      rec.JN_OPERATION := 'DEL'; 
    END IF; 
    INSERT into zam�wienieProdukt_JN VALUES rec; 
  END; 
  /ALTER TABLE produkt
    ADD CONSTRAINT produkt_gatunek_fk FOREIGN KEY ( gatunek_gatunek_id )
        REFERENCES gatunek ( gatunek_id );

ALTER TABLE u�ytkownikrola
    ADD CONSTRAINT relation_13_rola_fk FOREIGN KEY ( rola_rola_id )
        REFERENCES rola ( rola_id );

ALTER TABLE u�ytkownikrola
    ADD CONSTRAINT relation_13_u�ytkownik_fk FOREIGN KEY ( u�ytkownik_u�ytkownik_id )
        REFERENCES u�ytkownik ( u�ytkownik_id );

ALTER TABLE zam�wienieprodukt
    ADD CONSTRAINT relation_3_produkt_fk FOREIGN KEY ( produkt_produkt_id )
        REFERENCES produkt ( produkt_id );

ALTER TABLE zam�wienieprodukt
    ADD CONSTRAINT relation_3_zam�wienie_fk FOREIGN KEY ( zam�wienie_id_zam�wienie )
        REFERENCES zam�wienie ( id_zam�wienie );

ALTER TABLE zam�wienie
    ADD CONSTRAINT zam�wienie_u�ytkownik_fk FOREIGN KEY ( u�ytkownik_u�ytkownik_id )
        REFERENCES u�ytkownik ( u�ytkownik_id );

CREATE SEQUENCE gatunek_gatunek_id_seq START WITH 1 NOCACHE ORDER;

CREATE OR REPLACE TRIGGER gatunek_gatunek_id_trg BEFORE
    INSERT ON gatunek
    FOR EACH ROW
    WHEN ( new.gatunek_id IS NULL )
BEGIN
    :new.gatunek_id := gatunek_gatunek_id_seq.nextval;
END;
/

CREATE SEQUENCE produkt_produkt_id_seq START WITH 1 NOCACHE ORDER;

CREATE OR REPLACE TRIGGER produkt_produkt_id_trg BEFORE
    INSERT ON produkt
    FOR EACH ROW
    WHEN ( new.produkt_id IS NULL )
BEGIN
    :new.produkt_id := produkt_produkt_id_seq.nextval;
END;
/

CREATE SEQUENCE rola_rola_id_seq START WITH 1 NOCACHE ORDER;

CREATE OR REPLACE TRIGGER rola_rola_id_trg BEFORE
    INSERT ON rola
    FOR EACH ROW
    WHEN ( new.rola_id IS NULL )
BEGIN
    :new.rola_id := rola_rola_id_seq.nextval;
END;
/

CREATE SEQUENCE u�ytkownik_u�ytkownik_id_seq START WITH 1 NOCACHE ORDER;

CREATE OR REPLACE TRIGGER u�ytkownik_u�ytkownik_id_trg BEFORE
    INSERT ON u�ytkownik
    FOR EACH ROW
    WHEN ( new.u�ytkownik_id IS NULL )
BEGIN
    :new.u�ytkownik_id := u�ytkownik_u�ytkownik_id_seq.nextval;
END;
/



-- Oracle SQL Developer Data Modeler Summary Report: 
-- 
-- CREATE TABLE                             7
-- CREATE INDEX                             0
-- ALTER TABLE                             13
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           4
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          4
-- CREATE MATERIALIZED VIEW                 0
-- CREATE MATERIALIZED VIEW LOG             0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0