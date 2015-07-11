<?php

use App\Experiences;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->delete();

        for($i = 0; $i < 5; $i++){
            Experiences::create([
                'title'=>'Project Title' . $i,
                'company' => 'Personal',
                'start' => Carbon::now(),
                'end' => ($i % 2 === 1)? Carbon::now() : null,
                'type' => 'Projects',
                'description' => 'Una diu morisque, moveri: succincta peregrinis torrentur quid scripsi rapida.
Haec quam flores armatur premeretur Phoebus esse ferre cecidere relinquit
aetheriis vino esset temptatis procul color laesae hoc ignes mercede. In inquit
[partes](http://seenly.com/), dolet animas Alcides currant maturuit hostilia est
nimiis *obsessum muneris* aspicit coeamus haud aut non sinus. Oculos et vides
ille capta quid undas parantis cornibus quaecumque!'
            ]);
        }

        for($i = 0; $i < 5; $i++){
            Experiences::create([
                'title'=>'Education Title ' . $i,
                'company' => 'Generic High, Everywhere, Canada ',
                'start' => Carbon::parse('-'.$i.' year'),
                'end' => ($i % 2 === 1)? Carbon::now() : null,
                'type' => 'Education',
                'description' => 'Una diu morisque, moveri: succincta peregrinis torrentur quid scripsi rapida.
Haec quam flores armatur premeretur Phoebus esse ferre cecidere relinquit
aetheriis vino esset temptatis procul color laesae hoc ignes mercede. In inquit
[partes](http://seenly.com/), dolet animas Alcides currant maturuit hostilia est
nimiis *obsessum muneris* aspicit coeamus haud aut non sinus. Oculos et vides
ille capta quid undas parantis cornibus quaecumque!'
            ]);
        }

        for($i = 0; $i < 5; $i++){
            Experiences::create([
                'title'=>'Open Source Title ' . $i,
                'company' => 'Open source project name ' . $i,
                'start' => Carbon::parse('-'.($i * 3).' year'),
                'end' => ($i % 2 === 1)? Carbon::parse('-'.($i).' year') : null,
                'type' => 'Open-source',
                'description' => 'Una diu morisque, moveri: succincta peregrinis torrentur quid scripsi rapida.
Haec quam flores armatur premeretur Phoebus esse ferre cecidere relinquit
aetheriis vino esset temptatis procul color laesae hoc ignes mercede. In inquit
[partes](http://seenly.com/), dolet animas Alcides currant maturuit hostilia est
nimiis *obsessum muneris* aspicit coeamus haud aut non sinus. Oculos et vides
ille capta quid undas parantis cornibus quaecumque!'
            ]);
        }

        for($i = 0; $i < 5; $i++){
            Experiences::create([
                'title'=>'Work Title ' . $i,
                'company' => 'Work company ' . $i,
                'start' => Carbon::parse('-'.$i.' year'),
                'end' => ($i % 2 === 1)? Carbon::now() : null,
                'type' => 'Work',
                'description' => 'Una diu morisque, moveri: succincta peregrinis torrentur quid scripsi rapida.
Haec quam flores armatur premeretur Phoebus esse ferre cecidere relinquit
aetheriis vino esset temptatis procul color laesae hoc ignes mercede. In inquit
[partes](http://seenly.com/), dolet animas Alcides currant maturuit hostilia est
nimiis *obsessum muneris* aspicit coeamus haud aut non sinus. Oculos et vides
ille capta quid undas parantis cornibus quaecumque!'
            ]);
        }
    }
}
