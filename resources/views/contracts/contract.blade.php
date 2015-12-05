@extends('layouts/logged')

@section('title', 'Contract')

@section('content')
    <style>
        .content_accordion{
            margin: 20px;
        }
        p {font-size: 1.2em; line-height: 2em;}
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    General Terms Agreement:
                    <small>Aircraft Disassembly &amp; Engine Solutions</small>
                </h1>
                <input type="text" class="form-control" style="width: 300px;" placeholder="Search Contract ....">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="content_accordion">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#essay">Introduction</a>
                                        </h4>
                                    </div>
                                    <div id="essay" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                This Agreement, dated as of <span class="legal">project_start_date</span> (“Commencement Date”) between ADC (Aircraft Disassembly Consortium), Inc., a Tennessee Corporation having its principal place of business at <span class="legal">ADC_Address</span>, Memphis TN 38119, hereinafter referred to as “ADC”, and <span class="legal">project_company_name</span>, a <span class="legal">companies_company_corp_type</span> Corporation headquartered at <span class="legal">companies_company_address</span>, hereinafter referred to as "Customer".
                                            </p>
                                            <p>
                                                Whereas, ADC provides commercial aerospace end of life services at various locations including but not limited to <span class="legal">disassembly_location</span> or other location as set forth in Appendix A (hereinafter referred to as "Facility") to be utilized in this Agreement; and
                                            </p>
                                            <p>
                                                Whereas, Customer desires to enter into an agreement with ADC for End of Life Services for certain commercial aircraft bearing manufacturer’s serial number and tail number outlined in Appendix A herein referred to as the "Equipment"; and
                                            </p>
                                            <p>
                                                Whereas, ADC is willing to perform such services for Customer pursuant to the rates, terms and conditions as set forth in Appendix B attached hereto:
                                            </p>
                                            <p>
                                                Now, therefore, in consideration of the stated premises and the mutual covenants herein contained, the parties hereto agree as follows:
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#essay">Scope of Work</a>
                                        </h4>
                                    </div>
                                    <div id="essay" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#eng">Terms of Agreement</a>
                                        </h4>
                                    </div>
                                    <div id="eng" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

                                                The candidates should be capable of:

                                                Using English correctly and efficiently as a vehicle of communication.
                                                Reading, comprehending and analyzing advanced texts.
                                                Grammar and Vocabulary
                                                The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
                                                There shall be no prescribed course for this purpose.
                                                Reading Comprehension and Analysis
                                                Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

                                                Precise Writing
                                                The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
                                                <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#isl">Standards of Service</a>
                                        </h4>
                                    </div>
                                    <div id="isl" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#eds">Materials</a>
                                        </h4>
                                    </div>
                                    <div id="eds" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#ca">Completion of Services</a>
                                        </h4>
                                    </div>
                                    <div id="ca" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Customer Furnished Data</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Invoicing &amp; Payment</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Disassembly Services</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Engine Services</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Additional Services</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Insurance &amp; Indemnification</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Notices, Communication &amp; Requests</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Severability</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Termination</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Force Majeure &amp; Excusable Delays</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Entire Agreement &amp; Charges</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Brokers / Finders</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Governing Law &amp; Disputes</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Miscellaneous</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Multiple Counterparts</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#pa">Appendices</a>
                                        </h4>
                                    </div>
                                    <div id="pa" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p> <a href="" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--accordion end-->
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
<script>
    $(function() {
        //alert('jQuery');
    });
</script>
@endpush