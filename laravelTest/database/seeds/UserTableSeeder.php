<?php
 
use Illuminate\Database\Seeder;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'admin', 'email' => 'admin@admin.com', 'password' =>Hash::make('admin'),'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'john', 'email' => 'john@john.com', 'password' =>Hash::make('doe'),'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}

?>