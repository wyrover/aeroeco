<div class="company__block">
    <h3 class="text-center">{{$company->company}}</h3>
    <p class="text-center">
        {!! HTML::image("vault/{$company->folder_name}/logo.png", 'Logo', ['style' => 'width:120px; height: auto;']) !!}
    </p>
</div>