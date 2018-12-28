/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xedike`
--

-- --------------------------------------------------------
-- Table structure for table `CHUYEN_DI`
--
CREATE TABLE CHUYENDI (

  dia_diem_di varchar(250) NOT NULL,
  dia_diem_den varchar(250) NOT NULL,
  gio_di date,
  ngay_di datetime  NOT NULL,
  gia int NOT NULL,
);


-- Table structure for table `BOOKER`
--

CREATE TABLE BOOKER (
  idBooker int NOT NULL PRIMARY KEY,
  ten varchar(250) NOT NULL,
  truong varchar(250) NOT NULL,
  mssvBooker int NOT NULL,

);


-- Table structure for table `BIKER`
--

CREATE TABLE BIKER (
  idBiker int NOT NULL PRIMARY KEY,
  ten int NOT NULL,
  truong int NOT NULL,
  mssvBiker int NOT NULL ,
  cmnd int NOT NULL,
  que_quan varchar(50) NOT NULL,

);

-- Table structure for table `HOPDONG`
--

CREATE TABLE HOPDONG (
  MaHD int NOT NULL primary key,
  ma_chuyen_di int not null,
  idBooker int not null,
  ngay_tao int NOT NULL,
);



ALTER TABLE CHUYENDI
  ADD CONSTRAINT fk_idBiker FOREIGN KEY (idBiker) REFERENCES BIKER (idBiker) ;
ALTER TABLE HOPDONG
  ADD CONSTRAINT fk_chuyen_di FOREIGN KEY (ma_chuyen_di) REFERENCES CHUYENDI(ma_chuyen_di) ;
ALTER TABLE HOPDONG
  ADD CONSTRAINT fk_idBooker FOREIGN KEY (idBooker) REFERENCES BOOKER(idBooker) ;