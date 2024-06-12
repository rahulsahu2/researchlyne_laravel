<?php
namespace App\Services;

use stdClass;
class JSONService extends CommonService
{
    public function getAboutUs(){
        $data = new stdClass();
        $data->title = "About Us";
        $data->content1 = new stdClass();
        $data->content1->title = "30 Years";
        $data->content1->content = "Experience";
        $data->content2 = new stdClass();
        $data->content2->title = "10,000+";
        $data->content2->content = "Stocks";
        $data->about = new stdClass();
        $data->about->title = "SEBI Registered Research Analyst (INH100010013)";
        $data->about->content = 'Mr. Amiteshwar Singh is Proprietor of M/s Amiteshwar.in and Researchlyne.com is a unit of Amiteshwar.in.
                     Researchlyne.com is exclusively focused on research of Mutli-Cap Stocks and is backed by skilled research analyst who has more than half
                      a decade of experience in stock market. Through this website the Research Analyst is trying to offer good researched stocks to
                       its subscribers.';
        
        $data->action = new stdClass();
        $data->action->title = "Get Started";
        $data->action->link = "/subscriptions";
        return $data;
    }

    public function getBestChoice(){
        $data = new stdClass();
        $data->title = "Best Choice";
        $data->content = "";
        
        $data->section1 = new stdClass();
        $data->section1->title = "Mutual Funds";
        $data->section1->content = "Mutual Funds";
        $data->section1->index = "P1";
        
        $data->section2 = new stdClass();
        $data->section2->title = "Stocks";
        $data->section2->content = "Stocks";
        $data->section2->index = "P2";  

        return $data;
        
    }

    public function getInvestorsComplaints(){
        $data = [
            'title' => 'Number Of Investors Complaints',
            'content' => 'DATA OF THE MONTH ENDING MAY,2024',
            'columns' => ['RECEIVED FROM','PENDING AT THE END OF LAST MONTH','RECEIVED','	RESOLVED','	TOTAL PENDING','PENDING COMPLAINTS > 3 MONTHS','AVERAGE RESOLUTION TIME ⌃(IN DAYS)'],
            'rows' =>[
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
                ['Directly from investor','Nil','Nil','N.A','Nil','Nill','N.A'],
            ],
            'description' => '*Average Resolution time is the sum total of time taken to resolve each complaint in days, in the current month divided by total number of complaints resolved in the current month.'
            ];
        return $this->objToJsonObject($data);
    }
}