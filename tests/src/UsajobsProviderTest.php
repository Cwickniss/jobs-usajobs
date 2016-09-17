<?php namespace JobApis\Jobs\Client\Test;

use JobApis\Jobs\Client\Collection;
use JobApis\Jobs\Client\Job;
use JobApis\Jobs\Client\Providers\UsajobsProvider;
use JobApis\Jobs\Client\Queries\UsajobsQuery;
use Mockery as m;

class UsajobsProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Integration test with actual API call to the provider.
     */
    public function testItCanGetJobsFromApi()
    {
        if (!getenv('AUTHORIZATION_KEY')) {
            $this->markTestSkipped('AUTHORIZATION_KEY not set. Real API call will not be made.');
        }

        $keyword = 'engineering';

        $query = new UsajobsQuery([
            'Keyword' => $keyword,
            'AuthorizationKey' => getenv('AUTHORIZATION_KEY'),
        ]);

        $client = new UsajobsProvider($query);

        $results = $client->getJobs();
        var_dump($results); exit;

        $this->assertInstanceOf('JobApis\Jobs\Client\Collection', $results);

        foreach($results as $job) {
            $this->assertEquals($keyword, $job->query);
        }
    }

}
