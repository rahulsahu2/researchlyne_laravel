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

    public function getDisclaimer(){
        return '<div class="row">
                <div class="col">
                    <div class="content-disc">
                        <h2 class=" privacy-head">Terms and Conditions:</h2>
						<p>Please read the following terms and conditions ("Terms of Use") carefully.</p>

<p>By using this website and its services, you agree to the following:</p>

<ol>
	<li>By using, joining, or registering the website or by filling the Contact Us form, you give us permission to add you to our mailing lists and send you regular updates about the latest company products, services, and announcements.</li>
	<li>All reports will be available to clients after secured logins only.</li>
	<li>The minimum subscription period of these services will be one month.</li>
	<li>Full payments for the service needs to be made in advance.</li>
	<li>Researchlyne.com is not responsible for losses incurred by the users while subscribed to our platform. While we will ensure that only the good quality recommendations are shared, we neither guarantee a profit nor specify the amount of any such profits.</li>
	<li>All content posted on Researchlyne.com.in is the property of the firm and must not be copied or reproduced in any form without written permissions and adequate citations to original source.</li>
	<li>Certain sections of the website have ‘restricted access’, available only to paid subscribers. The content of these sections can be changed at will by the company.</li>
	<li>If users get login credentials like user ID and passwords from Researchlyne.com, it is the user’s responsibility to keep it confidential. The company will not be responsible for any hacks or breach of privacy owing to unauthorised access.</li>
	<li>A user cannot mirror or copy content from the website or remove trademarks or logos from images and videos.</li>
	<li>Harvesting data or collecting information about site visitors and users without their express consent is discouraged.</li>
	<li>Researchlyne.com does not own or control content posted on websites linked to it. It will not be responsible for hacks, legal issues or losses arising out of the use of these sites.</li>
	<li>If You are not satisfied with our services, you can cancel the subscription and&nbsp;ask for refund within 30 Days of your subscription. Refunds will be issued on Pro-Rata Basis. Please note&nbsp;refund processing and crediting of the amount can take 5-7 business days.</li>
	<li>The company reserves the right to change the terms and conditions as and when it deems suitable.</li>
</ol>

<h2><strong>Limited liability and indemnification:</strong></h2>

<ol>
	<li>Neither Researchlyne.com nor its affiliates, suppliers, advertisers, agents or sponsors are responsible or liable for any indirect, incidental, consequential, special, exemplary, punitive, or other damages under any contract, for any negligence, or other damage arising out of or relating in any way to the Service or Website and/or content contained, or any product or service purchased through the Site. Your sole remedy for dissatisfaction with the Service / Website and/or content contained within it is to stop using the Service / Website. The only and maximum liability for all damages, losses, and causes of action shall be the total amount paid by you, if any, to access the Service / Website.</li>
	<li>You agree to indemnify, defend, and hold us, our officers, employees, agents, and representatives harmless from and against any and all claims, damages, losses, costs (including reasonable attorneys’ fees), or other expenses that arise directly or indirectly out of or from your breach of this Agreement, including any violation of the Code of Conduct above.</li>
</ol>

<p>By continuing to use this website, you agree to all terms and conditions listed above.</p>
                        <!--<p>Please read the following terms and conditions ("Terms of Use") carefully. </p>
                        <p>By using this website and its services, you agree to the following:</p>

                        <ol>
                            <li>By using, joining, or registering the website or by filling the Contact Us form, you give us permission to add you to our mailing lists and send you regular updates about the latest company products, services, and announcements.</li>
                            <li class="pt-3">All reports will be available to clients after secured logins only.</li>
                            <li class="pt-3"> The minimum subscription period of these services will be one month.</li>
                            <li class="pt-3"> Full payments for the service needs to be made in advance. </li>
                            <li class="pt-3"> Amiteshwar.in is not responsible for losses incurred by the users while subscribed to our platform. While we will ensure that only the good quality recommendations are shared, we neither guarantee a profit nor specify the amount
                                of any such profits. </li>
                            <li class="pt-3">All content posted on Amiteshwar.in is the property of the firm and must not be copied or reproduced in any form without written permissions and adequate citations to original source.</li>
                            <li class="pt-3"> Certain sections of the website have ‘restricted access’, available only to paid subscribers. The content of these sections can be changed at will by the company.</li>
                            <li class="pt-3"> If users get login credentials like user ID and passwords from Amiteshwar.in, it is the user’s responsibility to keep it confidential. The company will not be responsible for any hacks or breach of privacy owing to unauthorised
                                access.
                            </li>
                            <li class="pt-3"> A user cannot mirror or copy content from the website or remove trademarks or logos from images and videos.</li>
                            <li class="pt-3"> Harvesting data or collecting information about site visitors and users without their express consent is discouraged.</li>
                            <li class="pt-3"> Amiteshwar.in does not own or control content posted on websites linked to it. It will not be responsible for hacks, legal issues or losses arising out of the use of these sites. 12. The company reserves the right to change
                                the terms and conditions as and when it deems suitable. </li>
                        </ol>

                        <h5 class="mb-0 pt-3 pb-2">Limited liability and indemnification:</h5>

                        <ol>
                            <li class="">Neither Amiteshwar.in nor its affiliates, suppliers, advertisers, agents or sponsors are responsible or liable for any indirect, incidental, consequential, special, exemplary, punitive, or other damages under any contract,
                                for any negligence, or other damage arising out of or relating in any way to the Service or Website and/or content contained, or any product or service purchased through the Site. Your sole remedy for dissatisfaction with
                                the Service / Website and/or content contained within it is to stop using the Service / Website. The only and maximum liability for all damages, losses, and causes of action shall be the total amount paid by you, if any,
                                to access the Service / Website.</li>
                            <li class="pt-3"> You agree to indemnify, defend, and hold us, our officers, employees, agents, and representatives harmless from and against any and all claims, damages, losses, costs (including reasonable attorneys’ fees), or other expenses
                                that arise directly or indirectly out of or from your breach of this Agreement, including any violation of the Code of Conduct above.</li>
                        </ol>

                        <p>By continuing to use this website, you agree to all terms and conditions listed above.</p>-->
                    </div>

                </div>
            </div>';
    }
}