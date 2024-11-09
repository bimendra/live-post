<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{
  /**
   * This function will get a random model id from the database.
   * @param string | HasFActory $model
   */
  public static function getRandomModelId(string $model)
  {
    $count = $model::query()->count();
    
    if($count > 0) {
      return rand(1, $count);
    }
    else {
      return $model::factory->create()->id;
    }
  }
}