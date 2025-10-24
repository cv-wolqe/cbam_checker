@extends('layouts.default')
@section('content')
<section @class(['flex','flex-col','justify-center','items-center','bg-white'])>
    <div @class(['flex','flex-col','text-wolqedark','max-w-[1400px]','pt-[200px]','gap-8'])>
        <h1 @class(['text-4xl','uppercase','pb-4'])><span @class(['font-bold'])>Guide for Importers:</span> Stay Compliant in 2025 and Beyond</h1>
        <h2 @class(['text-2xl','uppercase','pb-4'])><span @class(['font-bold'])>Introduction:</span> What EU Importers Need to Know About CBAM Reporting</h2>

        <p>If your company imports cement, steel, aluminum,
            fertilizers, hydrogen, or electricity into the EU, you are now subject to the <b>Carbon
                Border Adjustment Mechanism (CBAM)</b>. Since 1 October 2023, importers must
            submit <b>quarterly reports</b> detailing the embedded emissions of imported
            goods.</p>

        <p>While the transitional phase (2023-2025) does not yet
            require purchasing CBAM certificates, <b>accurate reporting is mandatory</b>.
            Non-compliance results in penalties of <b>€10 to €50 per tonne of unreported
                goods</b>—and from 2026, financial obligations begin with certificate purchases
            tied directly to the emissions data you report today.</p>

        <p>This guide provides a step-by-step framework for EU
            importers to:</p>

        <ul type=disc>
            <li>Understand quarterly reporting requirements</li>
            <li>Collect verified emissions data from non-EU suppliers</li>
            <li>Navigate the CBAM Transitional Registry</li>
            <li>Prepare for the definitive phase starting in 2026</li>
        </ul>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Understanding Your Role as a CBAM Reporting Declarant</b></p>

        <p><b>Who is the Reporting Declarant?</b></p>

        <p>Under CBAM, the <b>&quot;reporting declarant&quot;</b> is
            the entity responsible for submitting quarterly reports to the European
            Commission. This can be:</p>

        <ol start=1 type=1>
            <li><b>The importer</b> who lodges customs declarations in
                their own name</li>
            <li><b>A person with authorization</b> to lodge customs
                declarations (Article 182(1) of the Union Customs Code)</li>
            <li><b>An indirect customs representative</b> (if the importer
                is outside the EU or has delegated obligations)</li>
        </ol>

        <p><b>Key point:</b> Every tonne of imported goods must be
            reported by exactly one declarant—no double reporting, no omissions.</p>

        <p><b>What Must Be Reported?</b></p>

        <p>For each quarter, you must report:</p>

        <table border=0 cellpadding=0>
            <thead>
                <tr>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Category</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Details Required</b></p>
                    </td>
                </tr>
            </thead>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>Goods Imported</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>CN code, quantity (tonnes or MWh), country of origin,
                        installation details</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>Embedded Emissions</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Direct emissions, indirect emissions (separately), total
                        CO₂e per tonne</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>Production Details</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Production route, relevant parameters (e.g., clinker
                        content for cement)</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p><b>Carbon Price Due</b></p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Any carbon pricing paid in the country of origin, rebates
                        received</p>
                </td>
            </tr>
        </table>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Step-by-Step: How to Complete CBAM Quarterly Reports</b></p>

        <p><b>Step 1: Identify CBAM Goods in Your Imports</b></p>

        <p>Not all products fall under CBAM. Use the <b>Combined
                Nomenclature (CN) codes</b> listed in Annex I of the CBAM Regulation to
            determine if your imports are in scope.</p>

        <p><b>CBAM-covered sectors:</b></p>

        <ul type=disc>
            <li><b>Cement</b> (CN 2523)</li>
            <li><b>Iron &amp; Steel</b> (CN 7201-7229, 7301-7311, 7318,
                7326)</li>
            <li><b>Aluminum</b> (CN 7601-7616)</li>
            <li><b>Fertilizers</b> (CN 2808, 2814, 3102, 3105)</li>
            <li><b>Hydrogen</b> (CN 2804 10 00)</li>
            <li><b>Electricity</b> (separate rules apply)</li>
        </ul>

        <p><b>Tool:</b> Use the <a href="https://ec.europa.eu/taxation_customs/dds2/taric/taric_consultation.jsp?Lang=en">TARIC
                consultation tool</a> (RAMON database) or run the <a><span class=MsoHyperlink>CBAM
                    Checker</span> </a><span class=MsoCommentReference><span style='font-size:8.0pt;
line-height:107%'><a class=msocomanchor id="_anchor_1" onmouseover="msoCommentShow('_anchor_1','_com_1')" onmouseout="msoCommentHide('_com_1')" href="#_msocom_1" language=JavaScript name="_msoanchor_1">[MW1]</a>&nbsp;</span></span>to confirm if your goods are
            covered.</p>

        <p><b>Step 2: Request Emissions Data from Suppliers</b></p>

        <p>Your non-EU suppliers (manufacturers/operators) must provide
            you with <b>specific embedded emissions</b> for each shipment or reporting
            period.</p>

        <p><b>What to request from suppliers:</b></p>

        <p><span>✅</span>
            <b>Direct emissions</b> (tonnes CO₂e per tonne of product)<br>
            <span>✅</span> <b>Indirect
                emissions</b> (from electricity consumption)<br>
            <span>✅</span> <b>Production
                route</b> (e.g., blast furnace vs. electric arc furnace for steel)<br>
            <span>✅</span> <b>Sector-specific
                parameters</b> (e.g., alloy content, scrap usage %)<br>
            <span>✅</span> <b>Carbon price
                paid</b> in the country of origin (if applicable)<br>
            <span>✅</span> <b>Reporting
                period</b> used by the supplier (calendar year, fiscal year, etc.)</p>

        <p><b>Recommended approach:</b> Share the <b>European
                Commission's voluntary communication template</b> (Excel-based) with your
            suppliers. This standardizes data exchange and reduces errors.</p>

        <p><b>Challenge:</b> Many suppliers outside the EU may not yet
            have monitoring systems in place. Early engagement is critical.</p>

        <p><b>Step 3: Access the CBAM Transitional Registry</b></p>

        <p>All quarterly reports must be submitted via the <b>CBAM
                Transitional Registry</b>, managed by the European Commission.</p>

        <p><b>How to register:</b></p>

        <ol start=1 type=1>
            <li><span lang=FR>Visit </span><a href="https://cbam.ec.europa.eu/declarant"><span lang=FR>cbam.ec.europa.eu/declarant</span></a></li>
            <li>Contact your <b>National Competent Authority (NCA)</b> in
                your EU Member State (see <a href="https://taxation-customs.ec.europa.eu/carbon-border-adjustment-mechanism_en">list
                    of NCAs</a>)</li>
            <li>Obtain access credentials to the Registry</li>
            <li>Complete your company profile and installation details</li>
        </ol>

        <p><b>Registry access:</b> Your NCA grants access. Processing
            times vary by Member State, so <b>apply early</b>.</p>

        <p><b>Step 4: Complete the Quarterly CBAM Report</b></p>

        <p>The CBAM report consists of three main sections:</p>

        <p><b>Section 1: Header Information</b></p>

        <ul type=disc>
            <li>Report ID, reporting period, total quantity of goods
                imported</li>
            <li>Identity and contact details of reporting declarant,
                importer, and NCA</li>
        </ul>

        <p><b>Section 2: CBAM Goods Imported</b></p>

        <ul type=disc>
            <li>CN code, description, country of origin</li>
            <li>Quantity imported (tonnes or MWh)</li>
            <li>Customs procedure (standard import or inward processing)</li>
            <li>Total embedded emissions for the quarter</li>
        </ul>

        <p><b>Section 3: Emissions Data</b></p>

        <ul type=disc>
            <li>Installation name, location, contact details</li>
            <li>Direct embedded emissions (tonnes CO₂e per tonne)</li>
            <li>Indirect embedded emissions (electricity consumption,
                emission factor source)</li>
            <li>Production route and qualifying parameters</li>
            <li>Carbon price due (if applicable)</li>
        </ul>

        <p><b>Data quality matters:</b> The European Commission
            performs <b>spot checks</b> against customs data. Inconsistencies trigger
            reviews by your NCA, which may result in penalties.</p>

        <p><b>Step 5: Submit Before the Deadline</b></p>

        <p>Reports are due <b>by the end of the month following each
                quarter</b>:</p>

        <table Table border=0 cellpadding=0>
            <thead>
                <tr>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Reporting Period</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Deadline</b></p>
                    </td>
                </tr>
            </thead>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q1 (Jan-Mar)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>30 April</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q2 (Apr-Jun)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>31 July</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q3 (Jul-Sep)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>31 October</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q4 (Oct-Dec)</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>31 January (following year)</p>
                </td>
            </tr>
        </table>

        <p><b>Correction window:</b> You can correct submitted reports
            for up to <b>two months</b> after the deadline. For Q1 and Q2 2024 reports,
            corrections were allowed until 31 July 2024.</p>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Managing Data Gaps: What If Suppliers Don't Provide
                Emissions Data?</b></p>

        <p><b>Option 1: Use Default Values (Transitional Phase)</b></p>

        <p>Until 31 July 2024, importers could use <b>estimation
                methods</b> without penalty. From August 2024 onwards, default values can still
            be used, but with limitations:indirect </p>

        <ul type=disc>
            <li><b>For complex goods:</b> Default values may only account
                for up to <b>20% of total embedded emissions</b></li>
            <li><b>For electricity:</b> Default values based on IEA data
                must be used unless specific conditions are met</li>
            <li><b>Consequence:</b> Default values are typically set at
                the <b>90th percentile</b> of global emissions intensity—higher than most
                actual emissions</li>
        </ul>

        <p><b>Option 2: Engage Suppliers Early</b></p>

        <p>Non-compliance from suppliers is a <b>supply chain risk</b>.
            Importers should:</p>

        <p><span>✅</span>
            Include CBAM data requirements in <b>purchase contracts</b><br>
            <span>✅</span> Offer training
            or resources to suppliers on emissions monitoring<br>
            <span>✅</span> Prioritize
            suppliers who provide verified emissions data (competitive advantage from 2026)<br>
            <span>✅</span> Consider
            alternative suppliers in jurisdictions with established carbon pricing or
            monitoring systems</p>

        <p><b>Option 3: Leverage the CBAM Operator Portal (From 2025)</b></p>

        <p>Starting January 2025, non-EU manufacturers can register on
            the <b>CBAM Operator Portal</b> to report emissions directly to the European
            Commission. Importers can then reference this centralized data, reducing
            administrative burden.</p>

        <p><b>Benefit:</b> One supplier report can serve multiple
            importers, improving data consistency.</p>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Preparing for the Definitive Phase (2026+)</b></p>

        <p><b>What Changes in 2026?</b></p>

        <p>From 1 January 2026, the CBAM transitions to a <b>financial
                obligation model</b>:</p>

        <ol start=1 type=1>
            <li><b>CBAM Certificates Required:</b> Importers must purchase
                certificates corresponding to embedded emissions</li>
            <li><b>Verified Data Mandatory:</b> Emissions data must be
                verified by accredited third parties</li>
            <li><b>Default Values = Higher Costs:</b> Unverified data
                results in default values, increasing certificate costs</li>
            <li><b>Gradual Phase-In:</b> 2.5% of emissions covered in
                2026, scaling to 100% by 2034</li>
        </ol>

        <p><b>Action Items for Importers (2025)</b></p>

        <table Table border=0 cellpadding=0>
            <thead>
                <tr>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Action</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Deadline</b></p>
                    </td>
                    <td style='padding:.75pt .75pt .75pt .75pt'>
                        <p><b>Purpose</b></p>
                    </td>
                </tr>
            </thead>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Finalize supplier agreements with emissions reporting
                        clauses</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q1 2025</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Ensure data availability</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Conduct supplier audits for emissions monitoring
                        capabilities</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q2 2025</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Identify gaps early</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Engage accredited verifiers for supplier verification</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q3 2025</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Prepare for 2026 requirements</p>
                </td>
            </tr>
            <tr>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Estimate CBAM certificate costs based on 2024/2025 data</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Q4 2025</p>
                </td>
                <td style='padding:.75pt .75pt .75pt .75pt'>
                    <p>Budget for 2026 obligations</p>
                </td>
            </tr>
        </table>

        <div align=center style='text-align:center'><span style='color:white'>

                <hr size=2 width="100%" align=center>

            </span></div>

        <p><b>Common Pitfalls and How to Avoid Them</b></p>

        <p><b>Pitfall 1: Incomplete Supplier Data</b></p>

        <p><b>Risk:</b> Missing production route details or carbon
            price information triggers NCA reviews.</p>

        <p><b>Solution:</b> Use the European Commission's communication
            template and conduct quarterly data reviews with suppliers.</p>

        <p><b>Pitfall 2: Inconsistent Reporting Periods</b></p>

        <p><b>Risk:</b> Supplier uses fiscal year (April-March), but
            you report by calendar quarters—misalignment leads to errors.</p>

        <p><b>Solution:</b> Agree on a standardized reporting period
            with suppliers. If different periods are unavoidable, document the methodology
            clearly in your CBAM report.</p>

        <p><b>Pitfall 3: Ignoring Indirect Emissions</b></p>

        <p><b>Risk:</b> During the transitional phase, indirect
            emissions must be reported separately for all CBAM goods*. Omitting them is
            non-compliance.* <span style='color:#EE0000'>Fußnote: </span><i>Note: From
                2026, indirect emissions reporting will be limited to goods listed in Annex II
                of the CBAM Regulation.</i></p>

        <p><b>Solution:</b> Always request both direct and indirect
            emissions from suppliers. Use default electricity emission factors if
            supplier-specific data is unavailable.</p>

        <p><b>Pitfall 4: Late Submissions</b></p>

        <p><b>Risk:</b> Each late report incurs penalties
            (€10-€50/tonne). Repeated violations can escalate to higher fines.</p>

        <p><b>Solution:</b> Set internal deadlines 1-2 weeks before
            official deadlines. Automate data collection processes where possible.</p>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Actionable Checklist: CBAM Reporting for Importers</b></p>

        <p><b>Quarterly Tasks:</b></p>

        <ul type=disc>
            <li>Identify all CBAM goods imported in the quarter (by CN
                code)</li>
            <li>Request emissions data from each supplier</li>
            <li>Verify data completeness (direct, indirect, production
                route, carbon price)</li>
            <li>Log into CBAM Transitional Registry</li>
            <li>Complete Sections 1-3 of the CBAM report</li>
            <li>Submit report by the end of the month following the
                quarter</li>
            <li>Archive supplier communications and data sources (audit
                trail)</li>
        </ul>

        <p><b>Annual Tasks (2025):</b></p>

        <ul type=disc>
            <li>Review supplier performance on data quality</li>
            <li>Update purchase contracts with CBAM data clauses</li>
            <li>Estimate 2026 CBAM certificate costs</li>
            <li>Engage accredited verifiers for supplier verification</li>
            <li>Train internal teams on CBAM Transitional Registry updates</li>
        </ul>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>How WOLQE CBAM Can Help</b></p>

        <p>Managing CBAM reporting across multiple suppliers and
            product categories is complex. WOLQE CBAM offers:</p>

        <p><span>✅</span>
            <b>Supplier Data Management</b> – Centralized platform to collect and validate
            emissions data<br>
            <span>✅</span> <b>Quarterly
                Reporting Support</b> – Ensure timely and accurate submissions to the CBAM
            Registry<br>
            <span>✅</span> <b>Cost
                Forecasting Tools</b> – Estimate CBAM certificate liabilities for 2026+<br>
            <span>✅</span> <b>NCA Liaison
                Services</b> – Handle communications with your National Competent Authority</p>

        <p><b>Ready to streamline your CBAM reporting?</b> <span class=MsoHyperlink>Run the CBAM Checker</span> to assess your compliance status
            or <span class=MsoHyperlink>Request a Free Consultation</span> with our
            experts.</p>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Related Articles</b></p>

        <p><b>For Importers:</b></p>

        <ul type=disc>
            <li><span class=MsoHyperlink>CBAM Cost Management for
                    Importers: Optimize Your Supply Chain</span></li>
            <li><span class=MsoHyperlink>Default Values vs. Verified Data:
                    The Hidden Cost of Incomplete CBAM Reporting</span></li>
        </ul>

        <p><b>For Manufacturers:</b></p>

        <ul type=disc>
            <li><span class=MsoHyperlink>CBAM Compliance for Manufacturers:
                    Calculate and Verify Embedded Emissions</span></li>
        </ul>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>

        <p><b>Legal Disclaimer</b></p>

        <p><i>This article is for informational purposes only and does
                not constitute legal, tax, or regulatory advice. CBAM regulations are subject
                to updates by the European Commission. Importers should consult the official </i><a href="http://data.europa.eu/eli/reg/2023/956/oj"><i>EU CBAM Regulation (EU)
                    2023/956</i></a><i>, </i><a href="http://data.europa.eu/eli/reg_impl/2023/1773/oj"><i>Implementing
                    Regulation (EU) 2023/1773</i></a><i>, and seek guidance from qualified legal
                and compliance advisors.</i></p>

        <div align=center style='text-align:center'>

            <hr size=2 width="100%" align=center>

        </div>
    </div>
</section>
@endsection
