<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class APIController extends Controller
{
    /***
     * Retrive a record from API and Post to Table
     *
     */
    public function generatePerson()
    {

        try {
            $client = new Client();
            $url = "https://pipl.ir/v1/getPerson";

            $request = $client->request('GET', $url, ['verify' => false]);
            $response = $request->getBody();

            $data = json_decode($response, true);
            $personData = $data['person']['personal'];

            /**
             * Create a person record with required fields
             * Also take into account that 3rd Party APIs can be missing some data. Set empty data points to null
             */
            Person::create([
                'age' => $personData['age'] ? $personData['age'] : '',
                'blood' => $personData['blood'] ? $personData['blood'] : '',
                'born' => $personData['born'] ? $personData['born'] : '',
                'born_place' => $personData['born_place'] ? $personData['born_place'] : '',
                'cellphone' => $personData['cellphone'] ? $personData['cellphone'] : '',
                'city' => $personData['city'] ? $personData['city'] : '',
                'country' => $personData['country'] ? $personData['country'] : '',
                'eye_color' => $personData['eye_color'] ? $personData['eye_color'] : '',
                'father_name' => $personData['father_name'] ? $personData['father_name'] : '',
                'gender' => $personData['gender'] ? $personData['gender'] : '',
                'height' => $personData['height'] ? $personData['height'] : '',
                'last_name' => $personData['last_name'] ? $personData['last_name'] : '',
                'name' => $personData['name'] ? $personData['name'] : '',
                'national_code' => $personData['national_code']  ? $personData['national_code'] : '',
                'religion' => $personData['religion'] ? $personData['religion'] : '',
                'system_id' => $personData['system_id'] ? $personData['system_id'] : '',
                'weight' => $personData['weight'] ? $personData['weight'] : '',
                'meta' => $personData
            ]);

            // return json response
            return response()->json(['message' => 'Person Data Generated Successfully', 'data' => $personData]);
        } catch (\Throwable $th) {
            // return json response
            return response()->json(['message' => 'Something went wrong!'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['message' => 'Person not found!'], 404);
        }

        // return json response
        return response()->json(['message' => 'Person data retrieved!', 'data' => $person]);
    }
}
