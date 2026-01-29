<?php
namespace App\Models;
class Reservation {
  static function all() {
    return [
      ['id' => 1, 'name' => 'John Doe', 'room' => '101', 'date' => '2024-07-01'],
      ['id' => 2, 'name' => 'Jane Smith', 'room' => '102', 'date' => '2024-07-02'],
    ];
  }
}