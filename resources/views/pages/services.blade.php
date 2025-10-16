@extends('layouts.default')
@section('content')
<div @class(['content-container', 'text-slate-800', 'p-6', 'bg-white', 'rounded-lg', 'shadow-md'])>
    <h2 @class(['text-slate-900'])>Our Services</h2>
    <p>We offer a range of services to help you comply with the Carbon Border Adjustment Mechanism (CBAM) regulations. Our services include:</p>
    <ul>
        <li>CBAM Compliance Assessment</li>
        <li>Data Collection and Reporting</li>
        <li>Training and Workshops</li>
        <li>Consulting Services</li>
    </ul>
    <p>Contact us to learn more about how we can assist you in navigating CBAM requirements.</p>
</div>
<div class="spacer"></div>
<div class="content-container">
    <h2 @class(['text-slate-900'])>Additional Resources</h2>
    <p>For more information on CBAM and related topics, visit our <a href="/knowledgebase" class="text-blue-600 underline">Knowledgebase</a>.</p>
</div>
@endsection