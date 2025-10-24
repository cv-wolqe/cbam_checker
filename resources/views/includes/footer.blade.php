<footer @class(['flex','flex-col','justify-between','w-full','min-h-[35vh]','bg-wolqedark','text-[#808a9b]','mt-12','pt-16','bg-[url(/public/images/q-background-5k-4.webp)]','bg-[auto_1500px]','bg-top'])>
    <div @class(['flex','flex-col','lg:flex-row','justify-center','lg:justify-start','items-center','lg:items-stretch'])>
        <div @class(['w-2/3','2xl:w-2/5','flex','flex-col','pl-8','pr-4','justify-start'])>
            <div @class(['text-4xl','mb-8','uppercase'])>The<span @class(['font-bold'])>Menu.</span></div>
            <div><a href="/">Home</a></div>
            <div><a href="/#services">Services</a></div>
            <div><a href="/#knowledge">Knowledge</a></div>
            <div><a href="/#contact">Contact</a></div>
        </div>
        <div @class(['w-2/3','2xl:w-1/5','flex','flex-col','pl-8','pr-4','items-start'])>
            <div @class(['text-4xl','mb-8','uppercase'])>Contact<span @class(['font-bold'])>Us.</span></div>
            <div><a href="tel:+491733408334">+49 (0) 173 3408334</a></div>
            <div><a href="mailto:info@wolqe.co">info@wolqe.co</a></div>
        </div>
        <div @class(['w-2/3','2xl:w-1/5','flex','flex-col','pl-8','pr-4','items-start'])>
            <div @class(['text-4xl','mb-8','uppercase'])>Our<span @class(['font-bold'])>Location.</span></div>
            <div>WOLQE GmbH</div>
            <div>Heinrich-Lanz-Allee 4</div>
            <div>63437 Frankfurt am Main</div>
        </div>
        <div @class(['w-2/3','2xl:w-1/5','flex','flex-col','pl-8','pr-4','items-start'])>
            <div @class(['text-4xl','mb-8','uppercase'])>Social<span @class(['font-bold'])>Media.</span></div>
            <div><a href="https://www.linkedin.com/company/wolqe/posts/?feedView=all" target="_blank"><img src="/images/linkedin.svg" @class(['w-16','h-16'])></a></div>
        </div>
    </div>
    <!-- Zweite Zeile: Copyright -->
    <div @class(['py-4','text-left','text-sm','pl-8'])>
        <a href="#" @class(['uppercase'])>Legal Notice</a> | <a href="" @class(['uppercase'])>Privacy Protection</a> &copy; {{ date('Y') }} WOLQE GmbH. All rights reserved.
    </div>
</footer>
