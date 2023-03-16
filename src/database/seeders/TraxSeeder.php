<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Trax\Auth\Stores\Accesses\Access;
use Trax\Auth\Stores\BasicHttp\BasicHttp;
use Trax\Auth\Stores\Clients\Client;
use Trax\Auth\Stores\Owners\Owner;

class TraxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =
            [
                'username' => 'anton',
                'password' => 'test',
            ];

        BasicHttp::create($data);

        $data =
            [
                'uuid' => '5c15e284-4166-4cbd-a554-dd762ad9856d',
                'name' => 'Default Store',
                'meta' => []
            ];
        $owner = Owner::create($data);


        $data =
            [
                'name' => 'anton-test',
                'active' => 1,
                'meta' => [],
                'permissions' => ['xapi-scope.all' => true],
                'admin' => 0,
                'entity_id' => null,
                'owner_id' => $owner->id,
                'visible' => 1,
                'category' => null
            ];

       $client = Client::create($data);


        $data =
            [
                'uuid' => '243892a4-9212-41cc-aac8-af35113b9f82',
                'name' => $client->name,
                'cors' => '*',
                'active' => 1,
                'meta' => [],
                'permissions' => [],
                'admin' => 0,
                'inherited_permissions' => 1,
                'credentials_id' => 1,
                'credentials_type' => 'Trax\Auth\Stores\BasicHttp\BasicHttp',
                'client_id' => $client->id,
                'visible' => 1,
                'category' => null
            ];

        Access::create($data);

    }
}
