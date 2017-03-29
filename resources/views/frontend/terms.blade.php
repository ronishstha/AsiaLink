@extends('frontend.layouts.master')

@section('title')
    Terms | AsiaLink Services
@endsection

@section('content')

    <section id="terms" class="container">
        @if($page->status == "published")
            {!! $page->content !!}
        @endif

        {{--<div class="row">
            <div class="col-sm-12">
                <div class="asialink_documentation">

                    <h3>TERMS & CONDITIONS</h3>

                        <P>
                           
                            1.  The First Party shall issue the Demand letter to the Second Party mentioning the number of workers required , their categories, rate of salary, additional facilities and other conditions for the workers, along with belonging documents of Power of Attorney, Guarantee letter, Manpower Recruitment Agreement and Employment Contract as a Demand Set. This set should be attested by the Chamber of 

Commerce of Employing Country, Foreign Ministry and Nepal Embassy depending upon the laws of the individual Country.</p>

<p>
2.  The First Party appoints the Second Party to recruit and expatriate desired workers from Nepal.  </p>
<p>

3.  The monthly payroll of the worker and other service conditions shall be as per the attached demand letter and contract document against each category. The First Party should clearly inform the Second Party about the in hand salary, inclusive or exclusive of any deductions like TAX, or Levy and make it transparent to the employee from the beginning in order to avoid any conflicts in the future. </p>
<p>

4.  Both Parties herein shall obtain the approval of the respective government to screen, recruit and place the workers as per the rules and regulation of respective countries. </p>
<p>

5.  The Second Party shall be responsible for the short listing of qualified candidates according to their trade qualifications and experience in conformity with the First Party’s requirements. The Second Party should notify the First Party of such short listed qualified candidates who are ready for final interview and selection. </p>
<p>
6.  The First Party has the leverage to send company’s representative or legitimate the Second Party to select the final potential candidates as per the stages of recruitment without any restraints. </p>
<p>
7.  The First Party when approves the selection via any means of communication will advise the desired mobilization date on the respective site. </p>
<p>

8.  The Second Party shall assist the workersrelating to NepalImmigration, labor clearance and other Government formalities,Medical tests and Visa stamping from the respective embassy including all other relevant approvals required. </p>
<p>
9.  The Second Party shall provide Airport assistance to the departing selected workers and inform the First Party on their arrival to the Employer’s country. </p>
<p>

10. Within the first three months of probation period from the commencement of the job, if the employer finds the deployed worker to be unfit, ineligible to continue the employment, or refuse to the assigned duty, failed the medical tests in that time period, or considered

as security threat, the employer may replace the worker. The replacement of the ineligible worker shall be done by the Second Party at the given timeand will be responsible to bear the related expenses as in form of the compensation.</p>
<p>
11. Departure of the selected candidates will be within one month of the visa issued date. For any further delay, the visas will be cancelled and the Second Party will endure all the Governmental expenses. </p>
<p>

12. First Party has to compensate the candidate on their own expenditure if the candidate will not get all facilities proclaimed as per the Employment contract leading the contract to collapse. 
</P>
<p>
13. The First Party will provide free residence permit, bachelor accommodation, life Insurance, and Transportation facility for the deployed workers and other facilities as per the running labor laws of particular country. </P>
<p>
14. The First Party agrees to bear the compensation in case of death or injury of the workers and also agrees to bear the cost of transport of the dead body to Nepal asper the labor law of the respective country. 



                        </P>    
                        
                    


                    

                </div> <!-- end of asialink_documentation -->    
            </div> <!-- end of col-sm12 -->        
    </div>--}} <!-- end of row -->
      
       
    </section><!--/#terms-->
@endsection