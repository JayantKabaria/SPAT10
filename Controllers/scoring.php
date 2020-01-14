<?php
    $view = new stdClass(); //creating the view
    $view->pageTitle = 'Scoring an audit'; //giving tab a name

    require_once('../Models/ScoringInfoGetter.php');

    //session is started
    session_start();


    //grab the auditID
    if(isset($_GET['auditID']))
    {
        $auditID = $_GET['auditID'];
    }


    //initialise auditQuery
    $scoringQuery = new ScoringInfoGetter();
    //query the unscored query and store the results
    $unscoredAudit = $scoringQuery->getScoringInfo($auditID);
    //set view value currentAudit to be the result of the query
    $view->unscoredAudit = $unscoredAudit;



    //if upload button is pressed
        //


    require("../Views/scoring.phtml");
