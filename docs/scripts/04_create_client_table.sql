CREATE TABLE `nw202003`.`clients` (
  `idclient` BIGINT(15) NOT NULL AUTO_INCREMENT,
  `clientname` VARCHAR(128) NULL,
  `clientgender` CHAR(3) NULL,
  `clientphone1` VARCHAR(225) NULL,
  `clientphone2` VARCHAR(225) NULL,
  `clientmail` VARCHAR(225) NULL,
  `clientidnumber` VARCHAR(45) NULL,
  `clientbio` VARCHAR(500) NULL,
  `clientdatecrt` DATETIME NULL,
  `clientusercreate` BIGINT(10) NULL,
  PRIMARY KEY (`idclient`));
INSERT INTO `nw202003`.`clients` (`clientname`, `clientgender`, `clientphone1`, `clientphone2`, `clientmail`, `clientidnumber`, `clientbio`, `clientstatus`, `clientdatecrt`, `clientusercreate`) VALUES ('Elieth', 'F', '99999999', '99999999', 'elieth@gmail.com', '0801200008918', 'Estudiante', 'ACT', '2020-10-17', '1');