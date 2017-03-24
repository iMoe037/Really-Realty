<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
// use Phaza\LaravelPostgis\Geometries\Point;


class NeighborhoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    // use PostgisTrait;
    
    public function run()
    {
        $neighborhood_file = file_get_contents(realpath(__DIR__ .'/neighborhood.json'));
        $neighborhood_data = json_decode($neighborhood_file, true);

        // function addLatLong ($string)
        // {
        //     return json_decode($string, true);
        // }

        function get_transportation($typeTrans, $data) 
        {
            if (is_null($data)) {
                return null;
            }

            $data_decoded = json_decode($data, true);
            $data_reencoded = json_encode($data_decoded[$typeTrans]);
            return $data_reencoded;

        }

        foreach ( $neighborhood_data as &$neighborhood ) {
            // get_transportation('Rail', $neighborhood["transportation"]);

            // $latLong = addLatLong($neighborhood["center"]);
            // print_r($latLong);

            DB::table('neighborhoods')->insert([
                'name' => $neighborhood["neighborhood"],
                'borough' => $neighborhood["borough"],
                'center' => $neighborhood["center"],
                'boundary' => $neighborhood["polygon"],
                'rails' => get_transportation('Rail', $neighborhood['transportation']),
                'buses' => get_transportation('Bus', $neighborhood['transportation']),
                'tags' => $neighborhood['tags'],
                'summary' => $neighborhood['summary'],
            ]);
        }
    }
}
