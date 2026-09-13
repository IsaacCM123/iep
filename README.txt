Dominio generado por railway:
iep-production-0509.up.railway.app
iep-production-0509.up.railway.app

Devolber este proyecto a escritorio, para subir a la nuve RAILWAY

Eliminar todos los registros de una tabla y reiniciar el contador del AUTO_INCREMENT desde cero, usando el comando TRUNCATE TABLE
SIEMPRE Y CUANDO NO TENGA ON DELETE CASCADE, ON UPDATE CASCADE:

DELETE FROM nombre_de_tu_tabla;
ALTER TABLE nombre_de_tu_tabla AUTO_INCREMENT = 1;


Para XAMPP enumerar cuantos pastores son:
SELECT ROW_NUMBER() OVER (ORDER BY tbl_pastor.dniPastor) AS numero,tbl_pastor.nombreCompleto FROM tbl_pastor;

SELECT ROW_NUMBER() OVER (ORDER BY tbl_iglesia.idIglesia) AS numero,tbl_iglesia.nombreIglesia FROM tbl_iglesia;




Para MYSQL WORKBENCH:
SELECT ROW_NUMBER() OVER (ORDER BY Ministerio_BD.tbl_pastor.dniPastor) AS numero,Ministerio_BD.tbl_pastor.nombreCompleto FROM Ministerio_BD.tbl_pastor;

SELECT ROW_NUMBER() OVER (ORDER BY Ministerio_BD.tbl_iglesia.idIglesia) AS numero,Ministerio_BD.tbl_iglesia.nombreIglesia FROM Ministerio_BD.tbl_iglesia;


DATOS IMPORTANTES:
TOTAL PASTORES:		96
TOTAL IGLESIAS:		119
TOTAL MESAS:		30






MariaDB:XAMPP

SELECT 
    p.nombreCompleto,
    e.nombreEsposa,
    d.nombreDelegado,
    h.nombreHijo
FROM tbl_pastor p
LEFT JOIN tbl_esposa   e ON e.FK_dniPastor = p.dniPastor
LEFT JOIN tbl_delegado d ON d.FK_dniPastor = p.dniPastor
LEFT JOIN tbl_hijo     h ON h.FK_dniPastor = p.dniPastor;






MySql WORKBENCH:

SELECT 
    Ministerio_BD.tbl_pastor.nombreCompleto,
    Ministerio_BD.tbl_esposa.nombreEsposa,
    Ministerio_BD.tbl_delegado.nombreDelegado,
    Ministerio_BD.tbl_hijo.nombreHijo
FROM Ministerio_BD.tbl_pastor
LEFT JOIN Ministerio_BD.tbl_esposa     ON Ministerio_BD.tbl_esposa.FK_dniPastor = Ministerio_BD.tbl_pastor.dniPastor
LEFT JOIN Ministerio_BD.tbl_delegado   ON Ministerio_BD.tbl_delegado.FK_dniPastor = Ministerio_BD.tbl_pastor.dniPastor
LEFT JOIN Ministerio_BD.tbl_hijo       ON Ministerio_BD.tbl_hijo.FK_dniPastor = Ministerio_BD.tbl_pastor.dniPastor;






EVITAMOS LA REDUNDACIA DE FILAS Y ORDENAMOS LOS NOMBRES DE LOS HIJOS EN UNA SOLA CELDA...

SELECT 
    p.nombreCompleto,
    e.nombreEsposa,
    d.nombreDelegado,
    GROUP_CONCAT(h.nombreHijo SEPARATOR ', ') AS hijos
FROM Ministerio_BD.tbl_pastor p
LEFT JOIN Ministerio_BD.tbl_esposa   e ON e.FK_dniPastor = p.dniPastor
LEFT JOIN Ministerio_BD.tbl_delegado d ON d.FK_dniPastor = p.dniPastor
LEFT JOIN Ministerio_BD.tbl_hijo     h ON h.FK_dniPastor = p.dniPastor
GROUP BY 
    p.dniPastor, 
    p.nombreCompleto, 
    e.nombreEsposa, 
    d.nombreDelegado;


SELECT 
    p.nombreCompleto,
    e.nombreEsposa,
    GROUP_CONCAT(DISTINCT d.nombreDelegado SEPARATOR ', ') AS delegados,
    GROUP_CONCAT(DISTINCT h.nombreHijo SEPARATOR ', ') AS hijos
FROM Ministerio_BD.tbl_pastor p
LEFT JOIN Ministerio_BD.tbl_esposa   e ON e.FK_dniPastor = p.dniPastor
LEFT JOIN Ministerio_BD.tbl_delegado d ON d.FK_dniPastor = p.dniPastor
LEFT JOIN Ministerio_BD.tbl_hijo     h ON h.FK_dniPastor = p.dniPastor
GROUP BY 
    p.dniPastor, 
    p.nombreCompleto, 
    e.nombreEsposa;





















