<?php


namespace Meytip\OddsBundle\Services;


class OddsFilter {

    private $doctrine;

    function __construct($doctrine) {
        $this->doctrine = $doctrine; // Note that this was injected using the arguments in the config.yml
    }

    function getFootballLeagueList()
    {
        //sports id soccer = 1

        $leaguelist = $this->doctrine->getRepository('MeytipOddsBundle:Matches')->findBy(array('sportid' => 0));
        return $leaguelist;

    }

    function getMatchesCountry($country)
    {
        //sports id soccer = 1

        $leaguelist = $this->doctrine->getRepository('MeytipOddsBundle:Matches')->findBy(array('country' => $country));
        return $leaguelist;

    }
    function getQuotesFromMatch($country)
    {
        //sports id soccer = 1

        $leaguelist = $this->doctrine->getRepository('MeytipOddsBundle:Matches')->findBy(array('country' => $country));
        return $leaguelist;

    }

}