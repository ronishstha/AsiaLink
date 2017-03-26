@extends('frontend.layouts.master')

@section('title')
    Documentation | AsiaLink Services
@endsection

@section('content')

    <section id="terms" class="container">

        @if($page->status == "published")
            {!! $page->content !!}
        @endif

        {{--<div class="row">
            <div class="col-sm-12">
                <div class="asialink_documentation">

                    <h3> Documents Required For Recruitment</h3>

                    <p>
                    Requirement of documents vary from country to country. Requirement of documents also depend on whether the embassy of manpower importing country has a diplomatic mission in Nepal or not. Basically, we demand two types of documents before making a final deal for sending workers in overseas. We follow the in-detail government provisions to avoid unnecessary hassles to the workers.    
                    </p>

                        
                    
                     <h3>DEMAND LETTER</h3> 
                        <p>
                        The principle will formally permit to issue demand letter in favor of the Asia Link Services Pvt Ltd in which following should clearly be stated; the job categories, number of workers required i. e. category wise, monthly salaries stating name of currency, period of contract and other amenities for workers at site such as food, medical treatment and accommodation. In most of cases, which are provided free of cost or alternative allowance payable in lieu thereof. This demand letter must be duly endorsed by the Ministry of Foreign Affairs and Chamber of
                        Commerce  &  Industry  and  finally  attested  by  the  Nepalese  Embassy  existing  in  the  country  of  employment. </p>

                        <h3>POWER OF ATTORNEY</h3>
                        <p>
                        The principle will license Asia Link Services Pvt ltd with a power of attorney duty authorizing it to carry on the supply of Nepalese manpower, including meeting up the necessary formalities as regards to passports, visa from respective embassies, Medical checkup etc. which are directly connected with the trade. The Power of Attorney must be attested by the Nepalese Embassy existing in the country of the employment and endorsed by its Chamber of Commerce & Industry and Ministry of Foreign Affairs.</p>

                        <h3>EMPLOYMENT CONTRACT </h3>
                        <p>
                        The principle will furnish the employee with an employment contract in which following should clearly be stated: working hour, overtime, leaves, probation period, provision of living accommodation, medical treatment and catering etc. The Employment contract must be duly endorsed by the Ministry of Foreign Affairs and Chamber of Commerce & Industry and finally attested by the Nepalese Embassy existing in the country of employment.</P>

                        <h3>INTER PARTY AGREEMENT </h3>
                        <p>
                        This Agreement is made between Asia link Services Pvt Ltd and the Employer Company, on the Employer Company’s letter head stating clearly and precisely about all the terms and conditions regarding recruitment of manpower from Nepal. </p>

                        <h3> GUARANTEE LETTER </h3>
                        <p>
                        This Guarantee letter is to be issued for the recruitment of workers required by employer stating that the workers recruited through Asia Link Services Pvt Ltd Kathmandu, Nepal will only be employed in the country which is mentioned in the Demand letter and we guarantee that they will not be employed/ or sent to any other countries or places.</P>

                        <h3>CONSULAR LETTER (REQUIRED FOR KSA ONLY) </h3>
                        <p>
                        This letter is issued by the Employer addressing the Consulate General of the respective Embassy intimating/declaring appointment of Asia Link Services Pvt Ltd as the lawful agent and their authorization to act on behalf of the employers and carry out all Visa formalities with the Embassy with particular Visa. The Consular letter is applicable in case of issue of original visa by the employer and in most cases it is applicable for recruitment of Royal Kingdom of Saudi Arabia. </P>


                    

                </div> <!-- end of asialink_documentation -->    
            </div> <!-- end of col-sm12 -->        
    </div> --}}<!-- end of row -->
      
       
    </section><!--/#terms-->

@endsection