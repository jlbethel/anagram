<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagram_oneLetter()
        {
          //Arrange
          $test_Anagram = new Anagram;
          $word = "a";
          $test = "a";

          //Act
          $result = $test_Anagram->findAnagram($word, $test);

          //Assert
          $this->assertEquals("a", $result);
        }

        function test_findAnagram_ucLetter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "A";
            $test = "a";

            //Act
            $result = $test_Anagram->findAnagram($word, $test);

            //Assert
            $this->assertEquals("a", $result);
        }

        function test_findAnagram_matchWordWithList()
        {
          //Arrage
          $test_Anagram = new Anagram;
          $word = "sat";
          $test = "sat, sta, tas";

          //act
          $result = $test_Anagram->findAnagram($word, $test);

          //Assert
          $this->assertEquals("sat, sta, tas", $result);
        }

        function test_findAnagram_nonMatchWord()
        {
          //Arrange
          $test_Anagram = new Anagram;
          $word = "sat";
          $test = "sat, sta, tas, abc, fun, sit";

          //Act
          $result = $test_Anagram->findAnagram($word, $test);

          //Assert
          $this->assertEquals("sat, sta, tas", $result);

          }

          function test_findAnagram_partialWordMatch()
          {
            //Arrage
            $test_Anagram = new Anagram;
            $word = "sa";
            $test = "sag, sta, tas, abc, fun, sit";

            //Act
            $result = $test_Anagram->findAnagram($word, $test);

            //Assert
            $this->assertEquals("sag, sta, tas", $result);
          }


    }
 ?>
