<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Manger du lait', 'start_date'=>'2020-03-02', 'end_date'=>'2020-03-03'],
            ['title' => 'Aller au camp', 'start_date'=>'2020-04-09', 'end_date'=>'2020-04-13'],
            ['title' => 'Répétition chorale', 'start_date'=>'2020-02-12', 'end_date'=>'2020-02-13'],
            ['title' => 'Jérusalem 2020', 'start_date'=>'2020-05-31', 'end_date'=>'2020-06-03'],
            ['title' => 'Soutenance de thèse', 'start_date'=>'2020-03-12', 'end_date'=>'2020-03-14'],
        ];

          foreach($data as $key => $value){
              Event::create($value);
          }
        

    }
}
