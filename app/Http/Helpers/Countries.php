<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

if (!function_exists('countries')) {
    function countries()
    {
        try {
            // Create a new Guzzle HTTP client instance
            $client = new Client();

            // Make a GET request to the API endpoint
            $response = $client->get('https://countriesnow.space/api/v0.1/countries');

            // Get the response body as a string
            $body = $response->getBody()->getContents();

            // Decode the JSON response
            $data = json_decode($body, true);

            // Check if 'error' is true in the response
            if (isset($data['error']) && $data['error']) {
                throw new Exception("Error retrieving country data");
            }

            // Extract country names from the response data
            $countryNames = collect($data['data'])->pluck('country')->unique()->values();

            return $countryNames;
        } catch (RequestException $e) {
            // Handle Guzzle HTTP request exceptions
            throw new Exception("Failed to retrieve country data: " . $e->getMessage());
        } catch (Exception $e) {
            // Handle other exceptions
            throw $e;
        }
    }
}

