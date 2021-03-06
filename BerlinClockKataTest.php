<?php
require "vendor/autoload.php";
require "BerlinClockKata.php";

use BerlinClockKata\BerlinClockKata;
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function test_display_given00m_shouldReturnOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "00";
        //Act
        $actual = $test->afficher_par_minute($minute);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test_display_given01m_shouldReturnYOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "01";
        //Act
        $actual = $test->afficher_par_minute($minute);
        //Assert
        $this->assertEquals("YOOO",$actual);
    }

    public function test_display_given02_shouldReturnYYOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "02";
        //Act
        $actual = $test->afficher_par_minute($minute);
        //Assert
        $this->assertEquals("YYOO",$actual);
    }

    public function test_display_given03_shouldReturnYYYO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "03";
        //Act
        $actual = $test->afficher_par_minute($minute);
        //Assert
        $this->assertEquals("YYYO",$actual);
    }

    public function test_display_given04_shouldReturnYYYY(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "04";
        //Act
        $actual = $test->afficher_par_minute($minute);
        //Assert
        $this->assertEquals("YYYY",$actual);
    }

    public function test_display_given00_shouldReturnOOOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "00";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("OOOOOOOOOOO",$actual);
    }

    public function test_display_given05_shouldReturnYOOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "05";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

    public function test_display_given10_shouldReturnYYOOOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "10";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYOOOOOOOOO",$actual);
    }

    public function test_display_given15_shouldReturnYYROOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "15";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYROOOOOOOO",$actual);
    }

    public function test_display_given20_shouldReturnYYRYOOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "20";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYOOOOOOO",$actual);
    }

    public function test_display_given25_shouldReturnYYRYYOOOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "25";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYOOOOOO",$actual);
    }

    public function test_display_given30_shouldReturnYYRYYROOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "30";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYROOOOO",$actual);
    }

    public function test_display_given35_shouldReturnYYRYYRYOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "35";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYRYOOOO",$actual);
    }

    public function test_display_given40_shouldReturnYYRYYRYYOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "40";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYRYYOOO",$actual);
    }

    public function test_display_given45_shouldReturnYYRYYRYYROO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "45";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYRYYROO",$actual);
    }

    public function test_display_given50_shouldReturnYYRYYRYYRYO(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "50";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYRYYRYO",$actual);
    }

    public function test_display_given55_shouldReturnYYRYYRYYRYY(){
        //Arrange
        $test = new BerlinClockKata();
        $minute = "55";
        //Act
        $actual = $test->afficher_par_5_minutes($minute);
        //Assert
        $this->assertEquals("YYRYYRYYRYY",$actual);
    }

    public function test_display_given00h_shouldReturnOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "00";
        //Act
        $actual = $test->afficher_par_heure($heure);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test_display_given01h_shouldReturnROOO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "01";
        //Act
        $actual = $test->afficher_par_heure($heure);
        //Assert
        $this->assertEquals("ROOO",$actual);
    }

    public function test_display_given02h_shouldReturnRROO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "02";
        //Act
        $actual = $test->afficher_par_heure($heure);
        //Assert
        $this->assertEquals("RROO",$actual);
    }

    public function test_display_given03h_shouldReturnRRRO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "03";
        //Act
        $actual = $test->afficher_par_heure($heure);
        //Assert
        $this->assertEquals("RRRO",$actual);
    }

    public function test_display_given04h_shouldReturnRRRR(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "04";
        //Act
        $actual = $test->afficher_par_heure($heure);
        //Assert
        $this->assertEquals("RRRR",$actual);
    }

    public function test_display_given00h_for5HoursBlocs_shouldReturnOOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "00";
        //Act
        $actual = $test->afficher_par_5_heures($heure);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }

    public function test_display_given05h_for5HoursBlocs_shouldReturnROOO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "05";
        //Act
        $actual = $test->afficher_par_5_heures($heure);
        //Assert
        $this->assertEquals("ROOO",$actual);
    }

    public function test_display_given10h_for5HoursBlocs_shouldReturnRROO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "10";
        //Act
        $actual = $test->afficher_par_5_heures($heure);
        //Assert
        $this->assertEquals("RROO",$actual);
    }

    public function test_display_given15h_for5HoursBlocs_shouldReturnRRRO(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "15";
        //Act
        $actual = $test->afficher_par_5_heures($heure);
        //Assert
        $this->assertEquals("RRRO",$actual);
    }

    public function test_display_given20h_for5HoursBlocs_shouldReturnRRRR(){
        //Arrange
        $test = new BerlinClockKata();
        $heure = "20";
        //Act
        $actual = $test->afficher_par_5_heures($heure);
        //Assert
        $this->assertEquals("RRRR",$actual);
    }

    public function test_display_given00s_shouldReturnR(){
        //Arrange
        $test = new BerlinClockKata();
        $seconde = "00";
        //Act
        $actual = $test->afficher_par_seconde($seconde);
        //Assert
        $this->assertEquals("R",$actual);
    }

    public function test_display_given01s_shouldReturnO(){
        //Arrange
        $test = new BerlinClockKata();
        $seconde = "01";
        //Act
        $actual = $test->afficher_par_seconde($seconde);
        //Assert
        $this->assertEquals("O",$actual);
    }

    public function test_display_given00h00m00s_shouldReturn_R_OOOO_OOOO_OOOOOOOOOOO_OOOO(){
        //Arrange
        $test = new BerlinClockKata();
        $time = "00:00:00";
        $expected = "R" . "\n" . "OOOO" . "\n" . "OOOO" . "\n" . "OOOOOOOOOOO" . "\n" . "OOOO";
        //Act
        $actual = $test->afficher_horloge_entiere($time);
        //Assert
        $this->assertEquals($expected,$actual);
    }

    public function test_display_given23h59m59s_shouldReturn_O_RRRR_RRRO_YYRYYRYYRYY_YYYY(){
        //Arrange
        $test = new BerlinClockKata();
        $time = "23:59:59";
        $expected = "O" . "\n" . "RRRR" . "\n" . "RRRO" . "\n" . "YYRYYRYYRYY" . "\n" . "YYYY";
        //Act
        $actual = $test->afficher_horloge_entiere($time);
        //Assert
        $this->assertEquals($expected,$actual);
    }

    public function test_display_given16h43m08s_shouldReturn_R_RRRO_ROOO_YYRYYRYYOOO_YYYO(){
        //Arrange
        $test = new BerlinClockKata();
        $time = "16:43:08";
        $expected = "R" . "\n" . "RRRO" . "\n" . "ROOO" . "\n" . "YYRYYRYYOOO" . "\n" . "YYYO";
        //Act
        $actual = $test->afficher_horloge_entiere($time);
        //Assert
        $this->assertEquals($expected,$actual);
    }

}
