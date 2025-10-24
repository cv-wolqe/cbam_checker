@extends('layouts.default')
@section('content')
<section @class(['flex','flex-col','justify-center','items-center','bg-white'])>
    <div @class(['flex','flex-col','text-wolqedark','max-w-[1400px]','pt-[200px]','gap-8'])>
        <h1 @class(['text-4xl','uppercase','pb-4'])><span @class(['font-bold'])>Key Deadlines</span> Manufacturers Outside the EU Must Know</h1>
        <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Introduction:</span> Why CBAM Deadlines Matter for Your Business</h2>
        <div>
            <p><span>The EU Carbon Border Adjustment Mechanism(CBAM) is no longer a future regulation—it's active, and non-compliance carries financial consequences. If you manufacture cement, steel, aluminum, fertilizers, hydrogen, or electricity outside the EU and export these goods to European markets, <b>understanding CBAM deadlines is critical to maintaining market access</b>.</span></p>
            <p><span>From January 2026 onwards, the CBAM
                    transitions from its transitional reporting phase to the definitive phase,
                    where <b>financial obligations</b> begin. Missing deadlines can result in
                    penalties ranging from <b>€10 to €50 per tonne of unreported emissions</b>—costs
                    that quickly add up for high-volume exporters.</span></p>

            <p><span>This guide outlines the key deadlines manufacturers must know, the reporting requirements at each stage, and actionable steps to ensure compliance.</span></p>
        </div>
        <div>
            <hr size=1 width="100%" align=center>
        </div>

        <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Understanding the CBAM Timeline:</span> Transitional vs.Definitive Phase</h2>

        <h3><span>Transitional Phase (1 October 2023 – 31 December 2025)</span></h3>

        <p><span>During this phase, EU importers of CBAM goods must submit <b>quarterly reports</b> on embedded emissions. As a
                manufacturer, you are responsible for providing accurate emissions data to your
                EU importers.</span></p>

        <p><b>Key characteristics:</b></p>

        <ul>
            <li><b><span>No financial obligation</span></b><span> for certificates yet</span></li>
            <li><span>Focus on <b>data collection andmethodology alignment</b></span></li>
            <li><span>Flexibility to use <b>alternative monitoring methods</b> until 31 December 2024</span></li>
            <li><span>Penalties apply for <b>non-reporting or incorrect reporting</b></span></li>
        </ul>

        <h3><span>Definitive Phase (Starting 1 January 2026)</span></h3>

        <p><span>From 2026, EU importers must <b>purchase
                    and surrender CBAM certificates</b> corresponding to the embedded emissions of
                imported goods. Manufacturers who fail to provide verified emissions data will
                be subject to <b>default emission values</b>—typically higher than actual
                emissions, resulting in higher costs for your EU customers.</span></p>

        <p><b>Key changes:</b></p>

        <ul style='margin-top:0cm' type=disc>
            <li><b><span>Financial obligation</span></b><span> begins (CBAM certificates must be purchased)</span></li>
            <li><b><span>Verification by accredited third
                        parties</span></b><span> becomes mandatory</span></li>
            <li><b><span>Default values</span></b><span> apply if verified data is unavailable</span></li>
            <li><span>Gradual phase-in: 2.5% of emissions
                    covered in 2026, increasing to 100% by 2034</span></li>
        </ul>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Critical Deadlines</span> for Manufacturers (2025-2026)</h2>

        <table border=0 cellpadding=0>
            <thead>
                <tr>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Deadline</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Action Required</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Who is Responsible</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Consequence of Missing</b></p>
                    </td>
                </tr>
            </thead>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>31 January 2025</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q4 2024 Report (Oct-Dec)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>EU Importer (requires your data)</span></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Penalty: €10-€50/tonne</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>30 April 2025</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q1 2025 Report (Jan-Mar)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>EU Importer (requires your data)</span></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Penalty: €10-€50/tonne</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>31 July 2025</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q2 2025 Report (Apr-Jun)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>EU Importer (requires your data)</span></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Penalty: €10-€50/tonne</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>31 October 2025</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q3 2025 Report (Jul-Sep)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>EU Importer (requires your data)</span></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Penalty: €10-€50/tonne</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>31 December 2025</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>End of Transitional Phase</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>All Parties</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Transition to financial obligations</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>31 May 2026</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>First CBAM Declaration (2025 imports)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>EU Importer (requires verified data)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Certificate purchase required</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>Ongoing from 2026</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>Annual Verification of Emissions Data</span></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Manufacturer (via accredited verifier)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><span>Default values applied if unverified</span></p>
                </td>
            </tr>
            </table>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>What Manufacturers Must Do</span> Before Each Deadline</h2>

            <p><b><span>1. Monitor Embedded Emissions (Direct +
                        Indirect)</span></b></p>

            <p>You must track:</p>

            <ul style='margin-top:0cm' type=disc>
                <li><b><span>Direct emissions:</span></b><span> CO&#8322; released during production processes</span></li>
                <li><b><span>Indirect emissions:</span></b><span> Emissions from electricity consumed during production</span></li>
                <li><b><span>Precursor emissions:</span></b><span> If your product uses CBAM-relevant materials (e.g., steel using pig iron)</span></li>
            </ul>

            <p><b>Accepted methodologies:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><b><span>Calculation-based:</span></b><span> Using fuel consumption data and emission factors</span></li>
                <li><b><span>Measurement-based:</span></b><span> Using continuous emissions monitoring systems (CEMS)</span></li>
                <li><b><span>Alternative methods</span></b><span> (until 31 Dec 2024): Carbon pricing schemes, mandatory emission monitoring systems, or installation-level monitoring with verification</span></li>
            </ul>

            <p><b><span>2. Communicate Data to EU Importers Quarterly</span></b></p>

            <p><span>Your EU customers (importers) must submit quarterly reports. You should provide them with:</span></p>

            <ul style='margin-top:0cm' type=disc>
                <li><b><span>Total quantity</span></b><span> of goods produced and exported (in tonnes or MWh for electricity)</span></li>
                <li><b><span>Specific embedded emissions</span></b><span> (tonnes CO&#8322;e per tonne of product)</span></li>
                <li><b><span>Production route</span></b><span> and relevant parameters (e.g., reducing agent used, alloy content)</span></li>
                <li><b><span>Carbon price paid</span></b><span> in your country of origin (if applicable)</span></li>
            </ul>

            <p><b><span>Recommended tool:</span></b><span> Use the European Commission's <b>voluntary communication template</b>(Excel-based) to standardize data exchange.</span></p>

            <p><b><span>3. Prepare for Verification (Starting 2026)</span></b></p>

            <p><span>From 2026, <b>third-party verification</b>becomes mandatory. Accredited verifiers will assess your emissions monitoring methodology and validate your reported data.</span></p>

            <p><b>Steps to prepare:</b></p>

            <ol style='margin-top:0cm' start=1 type=1>
                <li><b><span>Align your monitoring methodology</span></b><span> with EU MRV rules (Implementing Regulation EU 2023/1773)</span></li>
                <li><b><span>Document your processes:</span></b><span> Maintain records of fuel consumption, electricity use, and
                        calculation factors</span></li>
                <li><b><span>Identify an accredited verifier</span></b><span> in your jurisdiction or the EU</span></li>
                <li><b><span>Conduct internal audits</span></b><span> to ensure data accuracy before external verification</span></li>
            </ol>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Penalty Structure:</span> What Happens If You Miss a Deadline?</h2>

            <h3><span>Transitional Phase (2023-2025): Reporting Penalties</span></h3>

            <p><span>If your EU importer fails to submit a
                    quarterly report due to missing data from you, they face penalties of <b>€10 to
                        €50 per tonne of unreported goods</b>. While the penalty is levied on the
                    importer, <b>repeated non-compliance can damage your business relationship</b>
                    and may result in importers seeking alternative suppliers.</span></p>

            <h3><span>Definitive Phase (2026+): Financial Consequences</span></h3>

            <p><span>From 2026, if you do not provide <b>verified
                        emissions data</b>, your EU customers will be assigned <b>default emission
                        values</b>. These are set at the <b>90th percentile of global emissions
                        intensity</b> for each product category—meaning they are significantly higher
                    than the actual emissions of most installations.</span></p>

            <p><b>Example:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span>Your actual emissions: <b>1.5 tonnes
                            CO&#8322;e per tonne of steel</b></span></li>
                <li><span>Default value: <b>2.5 tonnes CO&#8322;e
                            per tonne of steel</b></span></li>
                <li>CBAM certificate price: <b>€80 per tonne CO&#8322;e</b>
                    (hypothetical)</li>
                <li><b><span>Additional cost per tonne of steel:</span></b><span> (2.5 - 1.5) × €80 = <b>€80 extra</b></span></li>
            </ul>

            <p><span>For a manufacturer exporting 10,000 tonnes
                    annually, this results in <b>€800,000 in avoidable costs</b>.</span></p>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>How to Use</span> the CBAM Operator Portal (Available from January 2025)</h2>

            <p><span>Starting in January 2025, manufacturers can
                    register on the <b>CBAM Operator Portal</b> to:</span></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span>Report installation and production
                        process details directly to the European Commission</span></li>
                <li><span>Share verified emissions data with
                        multiple EU importers simultaneously</span></li>
                <li><span>Reduce administrative burden by reporting
                        once instead of to each importer individually</span></li>
            </ul>

            <p><b><span>Benefits:</span></b><span> </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> Centralized data management<br>
                </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> Restricted access to sensitive information (only authorities see
                    full details)<br>
                </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> Streamlined communication with EU importers</span></p>

            <p><b><span>How to register:</span></b><span> Visit the </span><a href="https://cbam.ec.europa.eu"><span>European Commission CBAM Portal</span></a><span> and
                    follow the operator registration process.</span></p>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Actionable Checklist:</span> Stay Compliant in 2026</h2>

            <p><b>By 31 January 2025:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span>Provide Q4 2024 emissions data to all EU
                        importers</span></li>
                <li><span>Confirm your monitoring methodology
                        aligns with EU requirements</span></li>
                <li><span>Document any carbon pricing paid in your
                        jurisdiction</span></li>
            </ul>

            <p><b>By 31 July 2025:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li>Complete Q1 and Q2 2025 reporting</li>
                <li><span>Begin internal audit of emissions data
                        quality</span></li>
                <li><span>Identify and contact accredited verifiers
                        for 2026</span></li>
            </ul>

            <p><b>By 31 December 2025:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li>Submit Q3 2025 report</li>
                <li>Finalize verification arrangements for 2026</li>
                <li><span>Register on the CBAM Operator Portal (if
                        not already done)</span></li>
            </ul>

            <p><b>By 31 May 2026:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span>Provide verified emissions data for 2025
                        imports</span></li>
                <li><span>Ensure verification report is submitted
                        to EU importers</span></li>
                <li><span>Review CBAM certificate costs with your
                        customers</span></li>
            </ul>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>How WOLQE CBAM</span> Can Help</span></h2>

            <p><span>Navigating CBAM deadlines and compliance
                    requirements can be complex, especially for manufacturers managing multiple
                    export markets. WOLQE CBAM offers:</span></p>

            <p><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> <b>CBAM Readiness Assessment</b> – Evaluate your current emissions
                    monitoring and identify gaps<br>
                </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> <b>Verification Support</b> – Connect with accredited verifiers and
                    prepare documentation<br>
                </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> <b>Data Management Solutions</b> – Implement systems to track and
                    report emissions efficiently<br>
                </span><span style='font-family:"Segoe UI Emoji",sans-serif'>&#9989;</span><span> <b>Quarterly Reporting Assistance</b> – Ensure timely and accurate
                    data delivery to EU importers</span></p>

            <p><b><span>Ready to ensure compliance?</span></b><span> </span><span><span>Run the CBAM Checker</span></span><span> to assess your obligations or </span><span><span>Request a Free Consultation</span></span><span> with our CBAM experts.</span></p>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Related</span> Articles</h2>

            <p><b>For Manufacturers:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span><span>CBAM Compliance
                            for Manufacturers: Calculate and Verify Embedded Emissions Before 2026</span></span></li>
                <li><span><span>CBAM
                            Verification Cost &amp; ROI for Manufacturers</span></span></li>
                <li><span><span>How to Use the
                            CBAM Operator Portal: Step-by-Step Guide for Manufacturers</span></span></li>
            </ul>

            <p><b>For Importers:</b></p>

            <ul style='margin-top:0cm' type=disc>
                <li><span><span>CBAM Reporting
                            Guide for Importers: Stay Compliant in 2025 and Beyond</span></span></li>
            </ul>

            <div align=center style='text-align:center'>

                <hr size=2 width="100%" align=center>

            </div>

            <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Legal</span> Disclaimer</h2>

            <p><i><span>This article is for informational
                        purposes only and does not constitute legal, tax, or regulatory advice. CBAM
                        regulations are subject to updates and amendments by the European Commission.
                        Manufacturers should consult the official </span></i><a href="http://data.europa.eu/eli/reg/2023/956/oj"><i><span>EU CBAM
                            Regulation (EU) 2023/956</span></i></a><i><span> and </span></i><a href="http://data.europa.eu/eli/reg_impl/2023/1773/oj"><i><span>Implementing
                            Regulation (EU) 2023/1773</span></i></a><i><span>, as well as seek
                        guidance from qualified legal and compliance advisors</span></i></p>
    </div>
</section>
@endsection
