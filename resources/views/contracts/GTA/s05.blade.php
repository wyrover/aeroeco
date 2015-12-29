<p>(a)	ADC will provide all material necessary to accomplish the Work Scope unless otherwise specified by the Customer in writing and incorporated in this Agreement.  All materials will be invoiced at the rates in Appendix B.</p>

<p>(b)	Customer is responsible for all taxes, duties, fees, and/or penalties related to international shipments of materials or Equipment by ADC under this Agreement.</p>

<p>(c)	Shipping labels, Airway Bills, and/or Bills of Lading for any materials, tooling, stands or equipment delivered to ADC should be sent to the following address:</p>

<address style="font-size: 1.2em;margin-left: 70px;">
    <span class="legal">{{$company->company}}</span><br>
    <span class="legal">{{$project->aircraft->msn}}</span> or <span class="legal">{{$project->aircraft->tail}}</span><br>
    C/O: ADC, INC<br>
    <span class="legal">{{$project->disassembler->address}}</span><br>
    @if($project->disassembler->address2)
    <span class="legal">{{$project->disassembler->address2}}</span><br>
    @endif
    <span class="legal">{{$project->disassembler->city}}</span>, <span class="legal">{{$project->disassembler->state}}</span> <span class="legal"> {{$project->disassembler->postal_code}}</span><br>
    <span class="legal">{{$project->disassembler->country->country}}</span>
</address>

<p>(d) In the event that such Components are not removed from the facility within thirty (30) days of notification to Customer of the completion of the Work Scope, the components will be moved to a storage location. Customer will hereinafter be charged a monthly storage fee as set forth in Exhibit "B".
</p>