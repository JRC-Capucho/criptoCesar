<?php

class Crypt
{
  const ALPHABET = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

  function __construct(
    private readonly string $msg,
    private readonly int $key,
    private readonly string $button
  ) {
  }

  private function eraseWhiteSpace(): void
  {
    if(strchr(" ",$this->msg)){
      $aux = explode(" ",$this->msg);
      foreach ($aux as $value) {
      $this->msg .= $value;
    }
    }
  }

  public function choose()
  {
    if (strlen($this->msg) > 0 && strlen($this->msg) <= 100 &&  $this->key >= 0) {
      switch ($this->button) {
        case 'crypt':
          $this->eraseWhiteSpace();
          return $this->encrypt();
          break;
        case "decrypt":
          return $this->decrypt();
          break;
      }
    }
    return null;
  }


  private function encrypt(): string
  {
    $aux = '';
    for ($i = 0; $i < strlen($this->msg); $i++) {
      for ($j = 0; $j < sizeof(self::ALPHABET); $j++) {
        if ($this->msg[$i] === self::ALPHABET[$j]) {
          $aux .= self::ALPHABET[($j + $this->key) % 26];
        }
      }
    }
    return $aux;
  }

  private function decrypt(): string
  {
    $aux = '';
    for ($i = 0; $i < strlen($this->msg); $i++) {
      for ($j = 0; $j < sizeof(self::ALPHABET); $j++) {
        if ($this->msg[$i] === self::ALPHABET[$j]) {
          $aux .= self::ALPHABET[($j + (26 - $this->key)) % 26];
        }
      }
    }
    return $aux;
  }


  function __destruct()
  {
  }
}
