<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Traits\TruncateTable;
use Database\Seeders\Traits\DisableForeignKeys;

class UserSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $this->disableForeignKeys();
      $this->truncate('users');
      $users = \App\Models\User::factory(10)->create();
      $this->enableForeignKeys();
    }
}
