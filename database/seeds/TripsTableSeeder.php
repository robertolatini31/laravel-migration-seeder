<?php
use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = config('db.trips');

        foreach($trips as $trip) {
            $new_trip = new Trip();
            $new_trip->price = $trip['price'];
            $new_trip->duration = $trip['duration'];
            $new_trip->place = $trip['place'];
            $new_trip->description = $trip['description'];
            $new_trip->image = $trip['image'];
            $new_trip->save();
        }
    }
}
