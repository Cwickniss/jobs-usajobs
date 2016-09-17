<?php namespace JobApis\Jobs\Client\Providers;

use JobApis\Jobs\Client\Job;

class UsajobsProvider extends AbstractProvider
{
    /**
     * Returns the standardized job object
     *
     * @param array $payload Raw job payload from the API
     *
     * @return \JobApis\Jobs\Client\Job
     */
    public function createJobObject($payload = [])
    {
        var_dump($payload); exit;
        // return $job;
    }

    /**
     * Job response object default keys that should be set
     *
     * @return  string
     */
    public function getDefaultResponseFields()
    {
        return [

        ];
    }

    /**
     * Get data format
     *
     * @return string
     */
    public function getFormat()
    {
        return 'json';
    }

    /**
     * Get listings path
     *
     * @return string
     */
    public function getListingsPath()
    {
        return 'SearchResult.SearchResultItems';
    }
}
