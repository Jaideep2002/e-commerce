<?php


use App\User;
use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name'   => 'Jaideep Sharma',
            'email'  => 'jaideep12@gmail.com',
            'password' => Hash::make('jaideep12'),
            ],[
            'name'   => 'Nihal Agarwal',
            'email'  => 'nihal13@gmail.com',
            'password' => Hash::make('nihal13'),
        ],
        [
            'name'   => ' Sai Sathvik ',
            'email'  => 'sathvik29@gmail.com',
            'password' => Hash::make('sathvik29'),
        ],
    [
        'name'   => 'Shaik Abdul Shaan',
            'email'  => 'shaan07@gmail.com',
            'password' => Hash::make('shaan07'),
]];

    User::insert($users);
    }
}
