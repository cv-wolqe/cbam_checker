<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body @class(['bg-wolqedark'])>
    <header @class(['fixed','w-[100%]','z-[10]','min-h-[120px]','flex','flex-row','items-center','justify-between','text-[#ffffff]', 'bg-[#001437]','flex-nowrap','rounded-b-[51px]'])>
        <div @class(['min-w-[50%]','flex','flex-row','items-center','justify-start','gap-4'])>
            <a href="/">
            <img src="{{ asset('images/wolqe-cbam.svg') }}" alt="CBAM Logo" @class(['h-[75px]','ml-8'])>
            </a>
        </div>
        
        <nav @class(['text-[#ffffff]','flex','flex-col','md:flex-row','justify-end','items-end','gap-8'])>
            <button id="mobile-open" @class(['flex','md:hidden','mr-8'])>&#x2630;</button>
            <div @class(['relative','hidden','w-[20%]','md:w-[100%]','md:flex','flex-col','flex-wrap','md:flex-nowrap','md:flex-row','gap-8','md:pr-8'])>
                <a href="/">Home</a>
                <a href="/#services">Services</a>
                <a href="/#knowledgebase">Knowledgebase</a>
                <a href="/#contact">Contact</a>
            </div>
            <div id='mobile-menu' @class(['fixed','hidden','w-[200px]','top-0','bottom-0','right-0','flex','bg-wolqedark','flex-col','flex-wrap','gap-8','p-8','rounded-l-w27','transition-all','duration-700','ease-in-out'])>
                <button id="mobile-close" @class(['flex','w-full','justify-end','mr-8','pt-4'])>&#x2630;</button>
                <a href="/">Home</a>
                <a href="/#services">Services</a>
                <a href="/#knowledgebase">Knowledgebase</a>
                <a href="/#contact">Contact</a>
            </div>
        </nav>
    </header>
    @yield('content')
    @include('includes.footer')
</body>
</html>
