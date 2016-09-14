<?php namespace JobApis\Jobs\Client\Queries;

class UsajobsQuery extends AbstractQuery
{
    /**
     * Keyword
     *
     * Issues search to find hits based on a keyword. Optional. Keyword will search for all of the words specified (or synonyms of the word) throughout the job announcement.
     *
     * @var string
     */
    protected $Keyword;

    /**
     * KeywordExclusion
     *
     * Issues search to find hits NOT matching KeywordExclusion parameter. Position Title is ranked first in the Exclusion.
     *
     * @var string
     */
    protected $KeywordExclusion;

    /**
     * KeywordFilter
     *
     * Corresponds with the Keyword parameter. Defines the type of phrase search to issue. Types include: "All", "Any", "Exact".
     *
     * @var string
     */
    protected $KeywordFilter;

    /**
     * PositionTitle
     *
     * Issues search to find hits in the title of the job. This is the job title - e.g. IT Specialist, Psychologist, etc. The title search will be treated as "contains" and will select all job announcements where the job title contains the value provided.
     *
     * @var string
     */
    protected $PositionTitle;

    /**
     * RemunerationMinimumAmount
     *
     * Issues search to find hits with the minimum salary specified. Jobs are placed in salary buckets: $0-$24,999, $25,000-$49,999, $50,000-$74,999, $75,000-$99,999, $100,000-$124,999, $125,000-$149,999, $150,000-$174,999, $175,000-$199,999 and $200,000 or greater. So a search with a minimum salary of $15,500 will return jobs with a minimum salary in the $0-$24,999 range.
     *
     * @var string
     */
    protected $RemunerationMinimumAmount;

    /**
     * RemunerationMaximumAmount
     *
     * Issues search to find hits with the maximum salary specified. Jobs are placed in salary buckets: $0-$24,999, $25,000-$49,999, $50,000-$74,999, $75,000-$99,999, $100,000-$124,999, $125,000-$149,999, $150,000-$174,999, $175,000-$199,999 and $200,000 or greater. So a search with a maximum salary of $72,000 will return jobs with a maximum salary in the $50,000-$74,999 range.
     *
     * @var string
     */
    protected $RemunerationMaximumAmount;

    /**
     * PayGradeHigh
     *
     * Issues search to find hits with the maximum pay grade specified. Must be 01 through 15. This is the ending grade for the job. (Caution: Fed speak ahead but it cannot be helped.) The grade along with series is used by the Federal government to categorize and define jobs.
     *
     * @var string
     */
    protected $PayGradeHigh;

    /**
     * PayGradeLow
     *
     * Issues search to find hits with the minimum pay grade specified. Must be 01 through 15. This is the beginning grade for the job. See PayGradeHigh for more information.
     *
     * @var string
     */
    protected $PayGradeLow;

    /**
     * JobCategoryCode
     *
     * Issues a search to find hits with the job category series specified.
     *
     * @var string
     */
    protected $JobCategoryCode;

    /**
     * LocationName
     *
     * Issues a search to find hits within the specified location. This is the city or military installation name. LocationName simplifies location based search as the user does not need to know or account for each and every Location Code. LocationName will search for all location codes and ZIP codes that have that specific description.
     * NOTE: Multiple values are semicolon delimited.
     *
     * @var string
     */
    protected $LocationName;

    /**
     * PostingChannel
     *
     * Issues a search to find jobs with a posting channel specified. Posting channels are used to identify different sources for Agency reporting, and categorizing needs.
     *
     * @var string
     */
    protected $PostingChannel;

    /**
     * Organization
     *
     * Issues a search to find jobs for the specified agency using the Agency Subelement Code.
     *
     * @var string
     */
    protected $Organization;

    /**
     * PositionOfferingTypeCode
     *
     * Issues a search to find jobs within the specified type. This field is also known as Work Type.
     *
     * @var string
     */
    protected $PositionOfferingTypeCode;






NOTE: Multiple values are semicolon delimited.

TravelPercentage

Issues a search to find hits for jobs matching the specified travel level.
Acceptable values for travel percentage parameter are:

Value	Definition
0	Not Required
1	Occasional Travel
2	25% or Greater
5	50% or Greater
7	75% or Greater
https://data.usajobs.gov/api/Search?TravelPercentage=0
https://data.usajobs.gov/api/Search?TravelPercentage=7

PositionScheduleTypeCode

Issues a search to find hits for jobs matching the specified job schedule. This field is also known as work schedule.
Acceptable values for Position Schedule Type Code are:

Value	Definition
1	Full-Time
2	Part-Time
3	Shift Work
4	Intermittent
5	Job Sharing
6	Multiple Schedules
https://data.usajobs.gov/api/Search?PositionSchedule=4
NOTE: Multiple values are semicolon delimited.

RelocationIndicator

Issues a search to find hits for jobs matching the relocation filter. Acceptable values for this field are: True or False

SecurityClearanceRequired

Issues a search to find hits for jobs matching the specified security clearance.
Acceptable values for Security Clearance Required parameter are:

Value	Definition
0	Not Applicable
1	Confidential
2	Secret
3	Top Secret
4	Top Secret/SCI
5	Q - Sensitive
6	Q - Nonsensitive
7	L - Atomic Energy
8	Other
9	Public Trust - Background Investigation
https://data.usajobs.gov/api/Search?SecurityClearanceRequired=1
NOTE: Multiple values are semicolon delimited.

SupervisoryStatus

Issues a search to find hits for jobs matching the specified supervisory status.

ExcludeJOAOpenFor30Days

Issues a search that will exclude jobs open longer than 30 days. Acceptable values for this field are: True or False

https://data.usajobs.gov/api/Search?ExcludeJOAOpenFor30Days=False

DatePosted

Issues a search to find hits for jobs that were posted within the number of days specified.

JobGradeCode

Issues a search to find hits for jobs matching the grade code specified. This field is also known as Pay Plan.

NOTE: Multiple values are semicolon delimited.

SortField

Issues a search that will be sorted by the specified field. In this case, the Title.

https://data.usajobs.gov/api/Search?PositionTitle=Electrical&SortField=PositionTitle

SortDirection

Issues a search that will be sorted by the SortField specified, in the direction specified. Asc for ascending, or desc for descending.

https://data.usajobs.gov/api/Search?PositionTitle=Electrical&SortField=PositionTitle&SortDirection=Asc

Page

Issues a search to pull the paged results specified.

ResultsPerPage

Issues a search and returns the page size specified. In this example, 25 jobs will be return for the first page.
Acceptable values for this field are numbers, up to 500.

https://data.usajobs.gov/api/Search?ResultsPerPage=50

WhoMayApply

Issues a search to find hits based on the desired candidate designation. In this case, public will find jobs that U.S. citizens can apply for. Acceptable values for this parameter are: "All","Public", or "Status".

https://data.usajobs.gov/api/Search?WhoMayApply=public

NOTE: All and Status require specific authorization.

Radius

Issues a search when used along with LocationName, will expand the locations, based on the radius specified.

https://data.usajobs.gov/api/Search?LocationName=Norfolk%20Virginia&Radius=75

Fields

Issues a search that will return the minimum fields or maximum number of fields in the job. Min returns only the job summary. Acceptable values for this field are: "Min" and "Full"

https://data.usajobs.gov/api/Search?TravelPercentage=7&Fields=full
https://data.usajobs.gov/api/Search?SecurityClearanceRequired=1&Fields=full

SalaryBucket

Issues a search that will find hits for salaries matching the grouping specified. Buckets are assigned based on salary ranges. For example 25 = $25,000-$49,000.

NOTE: Multiple values are semicolon delimited.

GradeBucket

Issues a search that will find hits for grades that match the grouping specified.

SES

Issues a search that will find hits for jobs matching the Senior executive category. Acceptable values are: True or False – Default is False.

SES stands for Senior Executive Service which is comprised of the men and women charged with leading the continuing transformation of government. When specifying "True" for SES, only those jobs which are considered an SES position will be returned.

For more information on SES, go to:
http://www.opm.gov/policy-data-oversight/senior-executive-service/.

To find all SES positions, use:
https://data.usajobs.gov/api/Search?SES=True

Student

Issues a search that will find hits for jobs matching the Student category. Acceptable values are: True or False – Default is False. When the Student query parameter is used and the value is set to True, only job announcements targeted for students will be included.

The value of "False" (or not providing a query parameter of Student) does not exclude student jobs from the search. "False" tells search to not return student jobs exclusively.

To find all Student positions, use:
https://data.usajobs.gov/api/Search?Student=True

Internship

Issues a search that will find hits for jobs matching the Internship category. Acceptable values are: True or False

https://data.usajobs.gov/api/Search?Internship=True

RecentGrad

Issues a search that will find hits for jobs matching the RecentGrad category. Acceptable values are: True or False

https://data.usajobs.gov/api/Search?RecentGrad=True

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
        return 'http://api.careerbuilder.com/v1/jobsearch';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return $this->Keywords;
    }

    /**
     * Default parameters
     *
     * @var array
     */
    protected function defaultAttributes()
    {
        return [
            'EnableCompanyCollapse' => 'true',
            'HostSite' => 'US',
            'UseFacets' => 'true',
        ];
    }

    /**
     * Required parameters
     *
     * @return array
     */
    protected function requiredAttributes()
    {
        return [
            'DeveloperKey',
        ];
    }
}
