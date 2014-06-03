SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema public_service
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `public_service` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `public_service` ;

-- -----------------------------------------------------
-- Table `public_service`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`users` (
  `Id_user` INT NOT NULL AUTO_INCREMENT,
  `Firstname` VARCHAR(50) NOT NULL,
  `Lastname` VARCHAR(50) NOT NULL,
  `Username` VARCHAR(50) NOT NULL,
  `Password` VARCHAR(50) NOT NULL,
  `User_type` INT NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`Id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`don_vi_quan_ly`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`don_vi_quan_ly` (
  `Id_don_vi_quan_ly` INT NOT NULL AUTO_INCREMENT,
  `ten_don_vi_quan_ly` VARCHAR(255) NOT NULL,
  `diachi_don_vi_quan` VARCHAR(255) NULL,
  PRIMARY KEY (`Id_don_vi_quan_ly`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`hoi_dap`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`hoi_dap` (
  `Id_hoi_dap` INT NOT NULL AUTO_INCREMENT,
  `tieu_de` TEXT NOT NULL,
  `cau_hoi` TEXT NOT NULL,
  `trang_thai` INT NOT NULL,
  `ngay_gui` DATETIME NOT NULL,
  `Id_don_vi_quan_ly` INT NOT NULL,
  `cau_tra_loi` MEDIUMTEXT NULL,
  PRIMARY KEY (`Id_hoi_dap`, `Id_don_vi_quan_ly`),
  INDEX `fk_hoi_dap_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly` ASC),
  CONSTRAINT `fk_hoi_dap_don_vi_quan_ly1`
    FOREIGN KEY (`Id_don_vi_quan_ly`)
    REFERENCES `public_service`.`don_vi_quan_ly` (`Id_don_vi_quan_ly`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`can_bo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`can_bo` (
  `id_can_bo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_can_bo` VARCHAR(45) NULL,
  `dien_thoai` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `Id_don_vi_quan_ly` INT NOT NULL,
  PRIMARY KEY (`id_can_bo`, `Id_don_vi_quan_ly`),
  INDEX `fk_can_bo_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly` ASC),
  CONSTRAINT `fk_can_bo_don_vi_quan_ly1`
    FOREIGN KEY (`Id_don_vi_quan_ly`)
    REFERENCES `public_service`.`don_vi_quan_ly` (`Id_don_vi_quan_ly`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`faq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`faq` (
  `Id_faq` INT NOT NULL AUTO_INCREMENT,
  `cau_hoi` TEXT NOT NULL,
  `cau_tra_loi` TEXT NOT NULL,
  `can_bo_id_can_bo` INT UNSIGNED NOT NULL,
  `Id_don_vi_quan_ly` INT NOT NULL,
  PRIMARY KEY (`Id_faq`, `can_bo_id_can_bo`, `Id_don_vi_quan_ly`),
  INDEX `fk_faq_can_bo1_idx` (`can_bo_id_can_bo` ASC, `Id_don_vi_quan_ly` ASC),
  CONSTRAINT `fk_faq_can_bo1`
    FOREIGN KEY (`can_bo_id_can_bo` , `Id_don_vi_quan_ly`)
    REFERENCES `public_service`.`can_bo` (`id_can_bo` , `Id_don_vi_quan_ly`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`y_kien_dong_gop`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`y_kien_dong_gop` (
  `id_y_kien_dong_gop` INT NOT NULL AUTO_INCREMENT,
  `tieu_de` TEXT NOT NULL,
  `noi_dung` TEXT NOT NULL,
  `Id_don_vi_quan_ly` INT NOT NULL,
  `ngay_gui` DATE NULL,
  PRIMARY KEY (`id_y_kien_dong_gop`),
  INDEX `fk_y_kien_phan_hoi_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly` ASC),
  CONSTRAINT `fk_y_kien_phan_hoi_don_vi_quan_ly1`
    FOREIGN KEY (`Id_don_vi_quan_ly`)
    REFERENCES `public_service`.`don_vi_quan_ly` (`Id_don_vi_quan_ly`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`dich_vu_cong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`dich_vu_cong` (
  `Id_dich_vu` INT NOT NULL AUTO_INCREMENT,
  `ten_dich_vu` VARCHAR(255) NOT NULL,
  `mo_ta` TEXT NOT NULL,
  `muc_do_cung_cap` INT NOT NULL,
  `trang_thai_cong_bo` INT NOT NULL,
  `Id_don_vi_quan_ly` INT NOT NULL,
  PRIMARY KEY (`Id_dich_vu`),
  INDEX `fk_dich_vu_cong_don_vi_quan_ly1_idx` (`Id_don_vi_quan_ly` ASC),
  CONSTRAINT `fk_dich_vu_cong_don_vi_quan_ly1`
    FOREIGN KEY (`Id_don_vi_quan_ly`)
    REFERENCES `public_service`.`don_vi_quan_ly` (`Id_don_vi_quan_ly`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `public_service`.`tai_lieu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `public_service`.`tai_lieu` (
  `Id_tai_lieu` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Id_dich_vu` INT NOT NULL,
  `ten_tai_lieu` VARCHAR(255) NOT NULL,
  `kieu` VARCHAR(45) NOT NULL,
  `kich_thuoc` INT NOT NULL,
  `data` MEDIUMBLOB NOT NULL,
  PRIMARY KEY (`Id_tai_lieu`),
  INDEX `fk_id_dich_vu_idx` (`Id_dich_vu` ASC),
  CONSTRAINT `fk_id_dich_vu`
    FOREIGN KEY (`Id_dich_vu`)
    REFERENCES `public_service`.`dich_vu_cong` (`Id_dich_vu`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
