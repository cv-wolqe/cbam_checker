@extends('layouts.default')
@section('content')
<section @class(['relative','bg-white'])>
    <div @class(['relative','bg-[url(/public/images/truck_full.webp)]','bg-bottom','rounded-b-w51'])>
        <div @class(['relative','w-full','h-full','flex','flex-row','min-h-[100vh]','items-center','justify-center',"text-white",'bg-gradient-to-r','from-transparent','from-25%','to-wolqedarkopacity','rounded-b-w51'])>
            <div @class(['relative','container','mx-auto','p-4','flex','flex-col-reverse','xl:flex-row','justify-between','xl:items-end','items-center','h-full','gap-8','sm:gap-16','pt-[200px]'])>
                <div @class(['text-center','flex','flex-col','justify-center','items-center','p-12','gap-8', 'bg-wolqedark' ,'rounded-w51','shadow-lg'])>
                    <h2 @class(['text-2xl','sm:text-4xl','uppercase','font-light','text-[#bfc4cd]'])>Will your <span @class(['text-white','font-semibold'])>export<br />get stuck</span> from 2026?</h2>
                    <p @class(['text-lg','font-medium','text-white'])>Effortlessly assess and manage your CBAM obligations</p>
                    @if(isset($countries))
                    <form method="POST" action="/" @class(['flex', 'flex-col' , 'gap-3' ])>
                        @csrf
                        <div @class(['flex','gap-3','justify-stretch'])>
                            <label for="cn_code" @class(['text-left','min-w-3xs','hidden'])>CN Code of your goods:</label>
                            <input type="text" id="cn_code" name="cn_code" @class(['text-wolqelight','border-2','border-wolqelight','rounded-w21','bg-wolqedark','pl-5','pr-5','w-full']) placeholder="CN Code of imported goods" required>
                        </div>
                        <div @class(['flex','gap-3','justify-stretch'])>
                            <label for="country" @class(['text-left','min-w-3xs', 'hidden' ])>Country of origin:</label>
                            <select name="country" id="country" @class(['text-wolqelight','border-2','border-wolqelight','rounded-w21','bg-wolqedark','pl-5','pr-5','w-full']) required>
                                <option value="">Choose Country</option>
                                @foreach ($countries as $country)
                                <option value="{{$country['id']}}">{{ $country['country_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div @class(['flex','gap-3','justify-stretch'])>
                            <label for="imported-goods-value" @class(['text-left','min-w-3xs','hidden'])>Amount of goods:</label>
                            <select name="imported-goods-value" id="imported-goods-value" @class(['text-wolqelight','border-2','border-wolqelight','rounded-w21','bg-wolqedark','pl-5','pr-5','w-full']) required>
                                <option value="">Choose Value</option>
                                <option value="0">up to 50 tonnes per year</option>
                                <option value="1">more than 50 tonnes per year</option>
                            </select>
                        </div>
                        <div @class(['flex','gap-3','justify-stretch'])>
                            <label for="imported-goods-purpose" @class(['text-left','min-w-3xs','hidden'])>Purpose of Import:</label>
                            <select name="imported-goods-purpose" id="imported-goods-purpose" @class(['text-wolqelight','border-2','border-wolqelight','rounded-w21','bg-wolqedark','pl-5','pr-5','w-full']) required>
                                <option value="">Choose Purpose</option>
                                <option value="0">released for free circulation</option>
                                <option value="1">released for free circulation as returned goods (Article 203 UCC applies)</option>
                                <option value="2">none of the above</option>
                            </select>
                        </div>
                        <div @class(['flex','justify-center','pt-4'])>
                            <button content="" type="submit" @class(['relative','flex','flex-row','items-right','justify-end','text-wolqelight','hover:text-wolqedark','leading-[4rem]','border-2','border-white','rounded-w42','bg-wolqedark','pl-1','pr-10','w-[80%]','after:content-[attr(content)]','after:absolute','after:bg-[url(/public/images/button.png)]','after:top-0','after:left-0','hover:after:left-[85%]','after:h-full','after:aspect-square','after:bg-contain','after:transition-all','after:duration-700','transition-all','duration-700'])>Search</button>
                        </div>
                    </form>
                    @elseif($result)
                    <form method="POST" action="{{ route('report.submit') }}" @class(['flex','flex-col','gap-6','justify-stretch'])>

                        @csrf
                        <input type="hidden" name="cn_code" value="{{ $result->cn_code }}">
                        <input type="hidden" name="country" value="{{ $result->origin_country }}">
                        <div @class(['flex','flex-col','gap-6','justify-stretch','bg-[#bfc4cd11]','rounded-w21'])>
                            @if($result->cbam_applies)
                            <input type="hidden" name="cbam_applies" value="1">
                            <p @class(['p-10'])>
                                Your result shows that your products are affected by CBAM regulations. Enter your email to receive a detailed PDF report with key deadlines and first steps for your business.
                            </p>
                            <p @class(['font-semibold','text-lg'])>
                                Get your detailed report now!
                            </p>
                            @else
                            <input type="hidden" name="cbam_applies" value="0">
                            <p @class(['p-10'])>
                                Your result shows that your products are NOT affected by CBAM regulations. Enter your email to receive a information PDF about CBAM Regulations.
                            </p>
                            <p @class(['font-semibold','text-lg'])>
                                Get your detailed information now!
                            </p>
                            @endif
                            <div>
                                <label for="email" @class(['text-left','min-w-3xs', 'hidden' ])>E-Mail</label>
                                <input type="email" id="email" name="email" @class(['text-wolqelight','border-2','border-wolqelight','rounded-w21','bg-[#bfc4cd11]','pl-5','pr-5','w-full']) placeholder="Your E-Mail here" required>
                            </div>
                        </div>
                        <div>
                            <div @class(['flex','flex-row','items-center','justify-between','gap-8'])>
                                <button before="" type="submit" @class(['relative','flex','flex-row','items-center','justify-center','text-wolqedark','leading-[4rem]','border-2','border-wolqelight','rounded-w42','bg-wolqelight','w-[48%]','overflow-hidden','before:content-[attr(before)]','before:absolute','before:w-full','before:h-full','before:left-[-100%]','before:bg-wolqedarkopacity','before:rounded-w42','hover:before:left-[0]','transition-all','before:duration-700'])>send my report&nbsp;<span @class(['font-semibold'])>now</span></button>
                                <a href="/" @class(['flex','flex-row','items-center','justify-between','text-wolqelight','leading-[4rem]','border-2','border-wolqelight','rounded-w42','bg-wolqedark','pl-1','pr-10','w-[48%]','hover:pl-[15%]','transition-all','duration-700'])><img src="/images/button.png" alt="Search" @class(['h-[4rem]'])><span>search <span @class(['font-semibold'])>again</span></span></a>
                            </div>
                        </div>


                    </form>
                    @endif
                </div>
                <div @class(['text-left','flex','flex-col','justify-start','sm:justify-end','items-left','p-8','gap-4','sm:gap-8','grow','min-h-full','relative','text-white'])>
                    <h1 @class(['text-2xl','sm:text-6xl', 'font-light' , 'mb-4' , 'leading-[0]' , 'uppercase' ])><span @class(['font-semibold'])>CBAM</span>Compliance:</h1>
                    <h2 @class(['text-lg','sm:text-2xl', 'font-normal' ,'tracking-wide', 'mb-4' , 'sm:leading-[0]' , ])>Secure your Access to the European Market.</h2>
                    <p>Stay ahead of carbon tax rules and supply chain disruptions with verified CBAM guidance and support.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section @class(['flex','flex-col','gap-16','p-4','sm:p:16','bg-white','text-wolqedark','justify-center','items-center'])>
    <div @class(['flex','flex-col','gap-8','p-8','bg-white','text-wolqedark','justify-center','items-center'])>
        <h2 @class(['text-2xl','sm:text-4xl', 'font-normal' ,'tracking-wide', 'mb-4' , '2xl:leading-[0]' , ])><span @class(['font-semibold'])>NEW CBAM REGULATIONS:</span> THE CHALLENGE FOR MANUFACTURERS</h2>
        <p @class(['sm:w-[75%]','text-lg','font-light','text-center'])>
            The EU's Carbon Border Adjustment Mechanism (CBAM) introduces new requirements for your production. As a manufacturer of goods imported into the EU market, you are now responsible for accurate carbon reporting. Without proper CBAM compliance, your goods may face administrative hurdles and penalties, directly impacting your business.
        </p>
    </div>
    <div @class(['flex','flex-col','gap-8','p-8','bg-white','text-wolqedark','justify-center','items-center','w-full'])>
        <h3 @class(['text-xl', 'font-semibold' ,'tracking-wide', 'mb-4' , 'leading-[0]' , ])>Key sectors affected:</h3>
        <div @class(['grid','md:grid-cols-3','sm:grid-cols-2','xl:grid-cols-6','text-lg','font-light','w-full'])>
            <div content="Cement" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/cement.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
            <div content="Iron and Steel" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/steel.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
            <div content="Aluminum" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/aluminum.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
            <div content="Fertilizers" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/fertilizers.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
            <div content="Electricity" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/electricity.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
            <div content="Hydrogen" @class(['relative','mx-3','mt-6','flex','flex-col','items-center', 'aspect-square' , 'justify-center' ,'rounded-w27','bg-[url(/public/images/hydrogen.webp)]','bg-cover','bg-center','after:opacity-0','hover:after:opacity-100','transition-all','after:duration-700','after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:rounded-w27','after:inset-0','after:bg-wolqedark','after:bg-opacity-50','after:flex','after:justify-center','after:items-center','after:text-white','after:font-light','after:text-3xl'])></div>
        </div>
    </div>
    <div @class(['flex','flex-col','gap-16','p-8','bg-white','text-wolqedark','justify-center','items-center','w-full'])>
        <h3 @class(['text-xl','sm:text-2xl', 'font-medium' ,'tracking-wide', 'mb-4' , 'leading-[0]' , ])>Why it matters for your business:</h3>
        <div @class(['grid','grid-cols-1','md:grid-cols-3','text-lg','font-light','w-full','gap-8'])>
            <div @class(['flex','flex-row','gap-4','mb-8'])>
                <div><img src="/images/finance-icon.svg" @class(['w-24','h-24']) /></div>
                <div>
                    <h4 @class(['font-medium'])>Financial Penalties:</h4>
                    <p>Non-compliance with the new <span @class(['font-medium'])>EU import law</span> can lead to significant monetary fines.</p>
                </div>
            </div>
            <div @class(['flex','flex-row','gap-4','mb-8'])>
                <div><img src="/images/risks-icon.svg" @class(['w-24','h-24']) /></div>
                <div>
                    <h4 @class(['font-medium'])>Market Access Risks:</h4>
                    <p>Non-compliance with the new <span @class(['font-medium'])>EU import law</span> can lead to significant monetary fines.</p>
                </div>
            </div>
            <div @class(['flex','flex-row','gap-4','mb-8'])>
                <div><img src="/images/damage-icon.svg" @class(['w-24','h-24']) /></div>
                <div>
                    <h4 @class(['font-medium'])>Reputational Damage:</h4>
                    <p>Non-compliance with the new <span @class(['font-medium'])>EU import law</span> can lead to significant monetary fines.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
    function toggleAccordion(index) {
        const content = document.getElementById(`content-${index}`);
        const icon = document.getElementById(`icon-${index}`);

        // SVG for Minus icon
        const minusSVG = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
        </svg>
        `;

        // SVG for Plus icon
        const plusSVG = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
        `;

        // Toggle the content's max-height for smooth opening and closing
        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0';
            icon.innerHTML = plusSVG;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.innerHTML = minusSVG;
        }
    }

</script>
@endpush
<section id="knowledgebase" @class(['relative','flex','flex-col','gap-16','bg-white','text-wolqedark','justify-center','items-center','min-h-[100vh]'])>
    <div content="" @class(['flex','flex-col','bg-[#bfc4cd]','text-wolqedark','justify-center','items-center', 'rounded-w51' ,'w-full'])>
        <div @class(['relative','flex','flex-col','items-left','justify-center',"text-white",'bg-wolqedark','rounded-w51','sm:pl-[15%]','sm:pr-[15%]','p-4','sm:p:16', 'min-h-full' ,'after:content-[attr(content)]','after:absolute','after:w-full','after:h-full','after:top-0','after:left-[70%]','after:bg-[url(/public/images/corner.svg)]','after:bg-top-right','after:bg-size-[350px]','after:bg-no-repeat','after:overflow-hidden','after:rounded-w51','after:z-1','overflow-hidden'])>
            <h2 @class(['text-2xl','sm:text-4xl', 'font-normal' ,'tracking-wide', 'mb-4' , '2xl:leading-[1]' ,'w-[65%]' ])><span @class(['font-semibold'])>CBAM FOR MANUFACTURERS:</span> WHAT YOU NEED TO KNOW ABOUT EU CARBON EMISSION REGULATIONS</h2>
            <h3 @class(['text-xl', 'font-normal' ,'tracking-wide', 'mb-4' , '2xl:leading-[1]' ,'w-[65%]' ])>A Practical Guide to CBAM Compliance and Emissions Reporting</h3>
            <p>The European Union has introduced the Carbon Border Adjustment Mechanism (CBAM) to regulate the import of CO2-intensive goods. For you as a manufacturer, this means that you must carefully record and report the carbon emissions of your products. This not only secures your access to the EU market, but also your competitive advantage.</p>
            <div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(1)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>How does the verification process work?</span>
                        <span id="icon-1" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-1" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight'])>
                            The verification process starts with careful data collection of your entire production. You must calculate and document the specific emissions per product (both direct and indirect emissions). This data must then be checked and certified by an independent, accredited third party. This certification is the official proof your EU importers need to be able to import your goods without additional costs or delays.
                        </div>
                    </div>
                </div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(2)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>Why is early verification crucial?</span>
                        <span id="icon-2" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-2" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight'])>
                            Early verification is your most important competitive advantage. With a verified certificate, you can immediately offer your EU importers legal certainty and planning security. This makes your products more attractive compared to competitors without certified data and secures you a favoured position in the international supply chain.
                        </div>
                    </div>
                </div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(3)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>Are there options for optimizing emissions?</span>
                        <span id="icon-3" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-3" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight'])>
                            Yes, because CBAM is also an opportunity to make your manufacturing process more sustainable and profitable. A lower carbon footprint of your production not only leads to a lower CBAM tax, but also strengthens the confidence of your customers and investors. We help you to identify and implement these optimization potentials in order to reduce your costs in the long term and position your brand as an environmentally conscious pioneer.
                        </div>
                    </div>
                </div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(4)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>Which products are affected? </span>
                        <span id="icon-4" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-4" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight'])>
                            CBAM currently affects the following sectors, which are known for their CO2 intensity: Steel, aluminum, cement, fertilizers, electricity and hydrogen. If you manufacture products in these categories, you are directly affected by the new regulation.
                        </div>
                    </div>
                </div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(5)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>What is the difference between the transition phase and the final phase?</span>
                        <span id="icon-5" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-5" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight','flex','flex-col','gap-4'])>
                            <h4>The CBAM process is divided into two phases.</h4>
                            <p>
                                Transition phase (until end of 2025): This period is about reporting. As a manufacturer, you must record the emissions of your exported goods and pass them on to your EU importers. No payments are yet due. The aim is to prepare you for the final phase.
                            </p>
                            <p>
                                Final phase (from 2026): This is where it gets serious. From 2026, your EU importers will have to buy CBAM certificates for the emissions of your products. If you as a manufacturer do not provide the data correctly, your customer (the importer) will incur additional costs. This can make your product less attractive and will jeopardize your competitive advantage.
                            </p>
                            <p>
                                Conclusion: The transition phase is free preparation. The final phase is the time of financial consequences. Early, correct reporting will secure your business in the EU.
                            </p>
                        </div>
                    </div>
                </div>
                <div @class(['border-t','border-wolqelight','rounded-t-w27','mt-8','mb-8','pl-8','pr-8','w-full'])>
                    <button onclick="toggleAccordion(6)" @class(['w-full','flex','justify-between','items-center','py-5','text-wolqelight'])>
                        <span>Why should I act now?</span>
                        <span id="icon-6" @class(['text-wolqelight','transition-transform', 'duration-300' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"></path>
                            </svg>
                        </span>
                    </button>
                    <div id="content-6" @class(['max-h-0','overflow-hidden','transition-all','duration-300','ease-in-out'])>
                        <div @class(['pb-5','text-md','text-wolqelight','flex','flex-col','gap-4'])>
                            Early action is your biggest advantage. CBAM regulation is not just an obligation, but a strategic opportunity that will secure your market access to the EU in the long term.
                            <ul @class(['!list-disc','!list-outside','pl-5','mt-2','flex','flex-col','gap-2'])>
                                <li>
                                    Avoid risks: Don't wait until the final phase begins. Without correct reporting from 2026, your EU importers could face financial penalties and delays at customs. This makes your products unattractive compared to the competition and can jeopardize your position in the supply chain.
                                </li>
                                <li>
                                    Seize opportunities: If you adapt early, you will become a favoured partner. With verified emissions data, you can offer your customers in the EU planning security and a trustworthy product. This not only gives you a competitive advantage, but also positions your company as a responsible pioneer in your sector.
                                </li>
                                <li>
                                    Optimize processes: Use the transition phase to analyze and improve your internal processes. Accurately recording your emissions enables you to identify optimization potential and make your production more efficient and sustainable in the long term.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div @class(['flex','flex-col','sm:flex-row','bg-[#bfc4cd]','text-wolqedark','justify-center','items-center','min-h-[50vh]'])>
            <div @class(['pt-8','sm:pt-0'])>
                <img src="/images/wolqe-hand.webp" alt="Solution Image" @class(['w-[80%]'])>
            </div>
            <div @class(['flex','flex-col','gap-8','p-8','bg-[#bfc4cd]','text-wolqedark','sm:justify-left','sm:items-left','sm:w-[50%]'])>
                <h2 @class(['text-2xl','sm:text-4xl'])><span @class(['font-semibold'])>YOU HAVE UNDERSTOOD THE CHALLENGES.</span><br />NOW IT'S TIME FOR THE SOLUTION</h2>
                <p>Verifying your emissions is the key to securing the EU market and gaining a decisive advantage. WOLQE not only supports you with the necessary expertise, but also puts you in touch with our certified partners for professional certification.</p>
            </div>
        </div>
    </div>
</section>
<section content='' @class(['relative','bg-[url(/public/images/telephone-background.webp)]','bg-cover','bg-center'])>
    <div @class(['bg-gradient-to-r','from-wolqedark','from-10%','to-transparent','w-full','h-full','relative','flex','flex-col','gap-0'])>
        <!-- rounded top area -->
        <div @class(['relative','min-h-[51px]','bg-[#bfc4cd]','rounded-b-w51','z-2'])></div>
        <!-- / rounded top area -->
        <!-- content area -->
        <div @class(['relative','min-h-[30vh]','flex','flex-col','justify-center','items-center','p-4','sm:p:16','text-white','z-2','gap-16'])>
            <h2 @class(['sm:text-2xl','text-medium'])>Do you need a customized solution for your company now?</h2>
            <a before="" href="/#contact" @class(['relative','flex','flex-row','items-center','justify-center','text-white','leading-[4rem]','border-2','border-wolqelight','rounded-w42','bg-transparent','w-[90%]','sm:w-[48%]','overflow-hidden','before:content-[attr(before)]','before:absolute','before:w-full','before:h-full','before:left-[-100%]','before:bg-white','before:rounded-w42','hover:before:left-[0]','hover:text-wolqedark','transition-all','before:duration-700','duration-700','before:z-[0]'])>
                <p @class(['z-[1]','text-sm'])>Contact us now and receive non-binding advice (from our CBAM professionals)</p>
            </a>
        </div>
        <!-- / content area -->
        <!-- rounded bottom area -->
        <div @class(['relative','min-h-[51px]','bg-white','rounded-t-w51','z-2'])></div>
        <!-- / rounded bottom area -->
    </div>
</section>
<section id="services" @class(['bg-wolqelight'])>
    <div @class(['relative','flex','flex-col','gap-16','bg-white','text-wolqedark','justify-center','items-center','min-h-[45vh]','p-4','sm:p:16'])>
        <h2 @class(['text-2xl','sm:text-4xl'])><span @class(['font-semibold'])>YOUR COMPETITIVE ADVANTAGE</span> THROUGH SEAMLESS CBAM REPORTING</h2>
        <div>
            The <span @class(['font-semibold'])>EU CBAM</span> isn't a barrier—it's an opportunity. We will support your company to turn compliance into a competitiveadvantage.
            <ul @class(['!list-disc','!list-outside','pl-8','mt-2','flex','flex-col','gap-4'])>
                <li>
                    <span @class(['font-semibold'])>Expert Know-how</span>: We understand the complex CBAM regulation and guide you through every step of the process.<br>Our expertise in supply chain and emissions trading systems ensures a smooth transition.
                </li>
                <li>
                    <span @class(['font-semibold'])>Certified Reliability:</span> Your carbon emissions data is verified and confirmed by our internationally recognized certification partner. We can help with all services related to CBAM reporting, including:
                    <ul list-style="- " @class(['!list-[attr(list-style)]','!list-outside','pl-8','mt-4','flex','flex-col','gap-4'])>
                        <li><span @class(['font-semibold'])>Data Acquisition & Preparation:</span> Collecting and structuring all necessary emissions data.</li>
                        <li><span @class(['font-semibold'])>Technical Pre-Screening:</span> Ensuring your data is accurate and ready for verification.</li>
                        <li><span @class(['font-semibold'])>Onboarding & Training:</span> Preparing your team to manage future compliance.</li>
                        <li><span @class(['font-semibold'])>Documentation & Submission:</span> Guiding you through the final reporting process.</li>
                    </ul>
                </li>
                <li>
                    <span @class(['font-semibold'])>Smooth Process:</span> Avoid customs delays and complications. Our streamlined approach ensures your exports remainuninterrupted. We're also experts in risk monitoring and managing supplier risks within the global supply chain.
                </li>
            </ul>
        </div>
    </div>
    <div @class(['bg-wolqedark77'])>
        <div @class(['relative','min-h-[51px]','bg-white','rounded-b-w51','z-2'])></div>
    </div>
</section>
<section content='' @class(['relative','bg-[url(/public/images/cbam-steps.webp)]','bg-cover','bg-center','min-h-[100vh]','rounded-b-w51'])>
    <div @class(['relative','flex','flex-col','bg-wolqedark77','z-1','min-h-[100vh]','rounded-b-w51'])>
        <div @class(['relative','flex','flex-col','bg-[url(/public/images/cbam-steps.webp)]','bg-cover','bg-center','z-1','min-h-[100vh]','items-center','justify-center','rounded-b-w51','gap-4','sm:gap-0','pt-4','sm:pt-[none]']) style="background-clip: text; -webkit-background-clip: text; color: transparent;">
            <h2 @class(['text-2xl','sm:text-4xl','text-white'])><span @class(['font-semibold'])>YOUR PATH TO CBAM COMPLIANCE</span> IN 3 SIMPLE STEPS</h2>
            <div @class(['flex','flex-row','max-w-[90%]','sm:max-w-[40%]','gap-8'])>
                <div @class(['text-[7vh]','sm:text-[15vh]','font-extrabold'])>01</div>
                <div @class(['text-white','flex','flex-col','justify-end','pb-16'])>
                    <h3 @class(['font-medium'])>Get Your Status with Our CBAM Checker</h3>
                    Use our free tool to instantly determine if your products are affected by the new regulations.
                </div>
            </div>
            <div @class(['flex','flex-row-reverse','max-w-[90%]','sm:max-w-[40%]','gap-8'])>
                <div @class(['text-[7vh]','sm:text-[15vh]','font-extrabold'])>02</div>
                <div @class(['text-white','flex','flex-col','justify-end','pb-16'])>
                    <h3 @class(['font-medium'])>Initial Consultation</h3>
                    Our experts will contact you for a personal consultation to discuss your specific situation and define the right strategy. We are well-versed in the impact assessments of carbon tax and how it affects free trade.
                </div>
            </div>
            <div @class(['flex','flex-row','max-w-[90%]','sm:max-w-[40%]','gap-8'])>
                <div @class(['text-[7vh]','sm:text-[15vh]','font-extrabold'])>03</div>
                <div @class(['text-white','flex','flex-col','justify-end','pb-16'])>
                    <h3 @class(['font-medium'])>Certification & Reporting</h3>
                    We guide you through the data collection and preparation process, connecting you with our accredited partners to ensure your data is certified and ready for submission.
                </div>
            </div>
        </div>
    </div>
</section>
<section @class(['relative','flex','flex-col','justify-center','items-center','min-h-[60vh]','p-2','sm:p-16','text-white','gap-8'])>
    <h2 @class(['text-2xl','sm:text-4xl'])><span @class(['font-semibold'])>WOLQE:</span> YOUR PIONEER IN CBAM SOLUTIONS</h2>
    <p>
        We are committed to providing clarity in a complex regulatory landscape. Through our extensive network, we provide you with the expertise and resources to navigate the changes in environmental compliance and the emissions trading system.
    </p>
    <!-- slider with blog items -->
    <div @class(['relative','w-full','overflow-hidden'])>
        <div @class(['swiper','w-full','sm:w-[80%]','h-full'])>
            <div @class(['swiper-wrapper','!h-full','flex','flex-row','justify-center'])>

                <div @class(['swiper-slide','flex','justify-center','items-center','h-full'])>
                    <div @class(['relative','flex','flex-col','justify-start','items-center','rounded-w27','min-w-[300px]','sm:min-w-[400px]','max-w-[600px]','min-h-[400px]','bg-[#bfc4cd22]'])>
                        <div @class(['relative','w-full','min-h-[200px]','bg-[url(/public/images/cargo-ship.webp)]','bg-cover','bg-center','rounded-t-w27'])>
                        </div>
                        <div @class(['relative','w-full','text-left','max-w-[580px]','p-6'])>
                            <div @class(['flex','flex-col','gap-4'])>
                                <h3 @class(['text-md','font-medium'])>CBAM Guide: The Most Important Deadlines and Steps.</h3>
                                <p @class(['text-md','font-light'])>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laor Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                <a href="{{ route('blog',['post'=> 1])}}" @class(['w-[46px]','rounded-[23px]','border-2','border-white','aspect-square','flex','justify-center','items-center','text-2xl','sm:text-4xl','pb-[3px]'])>&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div @class(['swiper-slide','flex','justify-center','items-center','h-full'])>
                    <div @class(['relative','flex','flex-col','justify-start','items-center','rounded-w27','min-w-[300px]','sm:min-w-[400px]','max-w-[600px]','min-h-[400px]','bg-[#bfc4cd22]'])>
                        <div @class(['relative','w-full','min-h-[200px]','bg-[url(/public/images/certification.webp)]','bg-cover','bg-center','rounded-t-w27'])>
                        </div>
                        <div @class(['relative','w-full','text-left','max-w-[580px]','p-6'])>
                            <div @class(['flex','flex-col','gap-4'])>
                                <h3 @class(['text-md','font-medium'])>CBAM Guide: The Most Important Deadlines and Steps.</h3>
                                <p @class(['text-md','font-light'])>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laor Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                <a href="{{ route('blog',['post'=> 2])}}" @class(['w-[46px]','rounded-[23px]','border-2','border-white','aspect-square','flex','justify-center','items-center','text-2xl','sm:text-4xl','pb-[3px]'])>&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div @class(['swiper-slide','flex','justify-center','items-center','h-full'])>
                    <div @class(['relative','flex','flex-col','justify-start','items-center','rounded-w27','min-w-[300px]','sm:min-w-[400px]','max-w-[600px]','min-h-[400px]','bg-[#bfc4cd22]'])>
                        <div @class(['relative','w-full','min-h-[200px]','bg-[url(/public/images/importers.webp)]','bg-cover','bg-center','rounded-t-w27'])>
                        </div>
                        <div @class(['relative','w-full','text-left','max-w-[580px]','p-6'])>
                            <div @class(['flex','flex-col','gap-4'])>
                                <h3 @class(['text-md','font-medium'])>CBAM Guide: The Most Important Deadlines and Steps.</h3>
                                <p @class(['text-md','font-light'])>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laor Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                <a href="{{ route('blog',['post'=> 3])}}" @class(['w-[46px]','rounded-[23px]','border-2','border-white','aspect-square','flex','justify-center','items-center','text-2xl','sm:text-4xl','pb-[3px]'])>&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div @class(['swiper-pagination','!text-wolqelight'])></div>
            <!-- Add Navigation -->
           
        </div>
         <div @class(['swiper-button-container','w-full','hidden','sm:flex','justify-between','px-8',])>
                <div @class(['swiper-button-prev','!text-wolqelight'])></div>
                <div @class(['swiper-button-next','!text-wolqelight'])></div>
        </div>
    </div>
    <!-- slider with blog items -->
</section>
<section id="contact" @class(['relative','flex','flex-col','justify-center','items-center','min-h-[30vh]','p-4','sm:p:16','text-white','gap-8'])>
    <h2 @class(['text-2xl','sm:text-4xl'])><span @class(['font-semibold'])>ACT NOW</span> - STAY COMPETITIVE</h2>
    <p>
        The transition phase is in full effect. Ensure your business is prepared for the future of CBAM Europe. A timely response to these regulations will secure your market position and build trust with your EU partners. It's the best way to be proactive about the impact climate change will have on your business.
    </p>
    <p>

    </p>
    <div @class(['flex','flex-col','bg-white','text-wolqedark','justify-center','items-center','rounded-w27','p-8','w-full','max-w-[1500px]','gap-8'])>
        <h3 @class(['text-2xl','w-full','items-left'])><span @class(['font-medium'])>CONTACT</span> FORM</h3>
        <form method="POST" action="{{ route('contact.submit') }}" @class(['flex','flex-col','justify-center','items-center','gap-8','w-full'])>
            @csrf
            <input type="hidden" name="action" value="contact_form_submit">
            <div @class(['flex','flex-col','sm:flex-row','gap-8','w-full'])>
                <input type="text" name="firstname" placeholder="Your Name" @class(['text-wolqedark','border-2','border-wolqelight','rounded-w21','bg-white','pl-5','pr-5','w-full']) required />
                <input type="text" name="lastname" placeholder="Your Last Name" @class(['text-wolqedark','border-2','border-wolqelight','focus:border-wolqedark','rounded-w21','bg-white','pl-5','pr-5','w-full']) required />
            </div>
            <div @class(['flex','flex-col','sm:flex-row','gap-8','w-full'])>
                <input type="email" name="email" placeholder="Your Email" @class(['text-wolqedark','border-2','border-wolqelight','rounded-w21','bg-white','pl-5','pr-5','w-full']) required />
                <input type="text" name="company" placeholder="Your Company Name" @class(['text-wolqedark','border-2','border-wolqelight','rounded-w21','bg-white','pl-5','pr-5','w-full']) required />
            </div>
            <div @class(['flex','flex-col','sm:flex-row','gap-8','w-full'])>
                <textarea name="message" placeholder="Your Message" @class(['text-wolqedark','border-2','border-wolqelight','rounded-w21','bg-white','pl-5','pr-5','w-full']) required></textarea>
            </div>
            <div @class(['flex','flex-col','sm:flex-row','gap-8','w-full'])>
                <button content="" type="submit" @class(['relative','flex','flex-row','items-right','justify-end','text-wolqelight','hover:text-wolqedark','leading-[4rem]','border-2','border-white','rounded-w42','bg-wolqedark','pl-1','pr-10','sm:w-[30%]','after:content-[attr(content)]','after:absolute','after:bg-[url(/public/images/button.png)]','after:top-0','after:left-0','hover:after:left-[85%]','after:h-full','after:aspect-square','after:bg-contain','after:transition-all','after:duration-700','transition-all','duration-700'])>send</button>
            </div>
        </form>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
</section>
@endsection
