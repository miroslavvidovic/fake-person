<?php

namespace Fake;
use JsonSerializable;
use Faker;

/**
 * Class Person
 * @author miroslavvidovic
 */
class Person implements JsonSerializable {
    private $first_name;
    private $last_name;
    private $address;
    private $country;
    private $latitude;
    private $longitude;
    private $phone_number;
    private $email;
    private $user_name;
    private $password;
    private $job_title;
    private $company;

    /**
     * constructor function
     *
     * @return void
     */
    public function __construct()
    {
        $faker = Faker\Factory::create();

        $this->first_name   = $faker->firstName;
        $this->last_name    = $faker->lastName;
        $this->address      = $faker->address;
        $this->country      = $faker->country;
        $this->latitude     = $faker->latitude;
        $this->longitude    = $faker->longitude;
        $this->phone_number = $faker->phoneNumber;
        $this->email        = $faker->email;
        $this->user_name    = $faker->userName;
        $this->password     = $faker->password;
        $this->job_title    = $faker->jobTitle;
        $this->company      = $faker->company;
    }

    /**
     * jsonSerialize function
     *
     * @return void
     */
    public function jsonSerialize() {
        return [
            'first_name'   => $this->first_name,
            'last_name'    => $this->last_name,
            'address'      => $this->address,
            'country'      => $this->country,
            'latitude'     => $this->latitude,
            'longitude'    => $this->longitude,
            'phone_number' => $this->phone_number,
            'email'        => $this->email,
            'user_name'    => $this->user_name,
            'password'     => $this->password,
            'job_title'    => $this->job_title,
            'company'      => $this->company
        ];
    }

}
