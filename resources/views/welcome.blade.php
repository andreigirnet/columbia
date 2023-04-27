<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinfonia Global Exchange</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/banner.css')}}">
    <link rel="stylesheet" href="{{asset('css/join.css')}}">
    <link rel="stylesheet" href="{{asset('css/revolution.css')}}">
    <link rel="stylesheet" href="{{asset('css/problems.css')}}">
    <link rel="stylesheet" href="{{asset('css/solution.css')}}">
    <link rel="stylesheet" href="{{asset('css/finansieraLogo.css')}}">
    <link rel="stylesheet" href="{{asset('css/market.css')}}">
    <link rel="stylesheet" href="{{asset('css/opportunity.css')}}">
    <link rel="stylesheet" href="{{asset('css/competitors.css')}}">
    <link rel="stylesheet" href="{{asset('css/model.css')}}">
    <link rel="stylesheet" href="{{asset('css/valuation.css')}}">
    <link rel="stylesheet" href="{{asset('css/one.css')}}">
    <link rel="stylesheet" href="{{asset('css/early.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/reasons.css')}}">
    <link rel="stylesheet" href="{{asset('css/ready.css')}}">
    <link rel="stylesheet" href="{{asset('css/how.css')}}">
    <link rel="stylesheet" href="{{asset('css/faqs.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    @if(session()->has('success'))
        <div class="alert-success" id="success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div id="hamButton">
        <img src="{{asset("images/logo/hamMenu.png")}}" alt="">
    </div>
    @include('includes/responsiveNav')
    <div class="mainBannerNav">
        <div class="navContainer">
            <div class="nav">
                <div class="logo"><img src="{{asset('images/logo/logo.png')}}" alt=""></div>
                <div class="navigationBar">
                    <a class="navLink" href="#">Home</a>
                    <a class="navLink" href="#">Company</a>
                    <a class="navLink" href="#">Valuation</a>
                    <a class="navLink" href="#">Documents</a>
                    <a class="navLink" href="#faq">Faq's</a>
                    <a class="navLink" href="#">Support</a>
                    <a href="#contact"><div class="buttonNav">
                        Start Investing
                    </div></a>
                </div>
            </div>
        </div>
        <div class="mainBannerContainer" id="particles-js">
            <div class="mainBannerContent">
                <div class="textBannerLight" data-aos="fade-up">Introducing Sinfonia Global Exchange our New Digital Financial Technology Company!</div>
                <div class="textLight" data-aos="fade-up">“Be part of the transition to digital finance. Through Sinfonia Global Exchange- we can work together to simplify finance and eliminate barriers to entry to the digital markets.”</div>
                <a href="#contact"><div class="buttonLight buzz" data-aos="fade-up">Invest Now</div></a>
            </div>
        </div>
    </div>
    <div class="joinContainer">
        <div class="join">
            <div class="textTitleDark" data-aos="fade-up">Join the Future of Crypto Trading Today!</div>
            <div class="textDark" data-aos="fade-up">Invest in Sinfonia Global Exchange and be a part of the revolution. With our secure and transparent platform, you can trade cryptocurrencies with ease and confidence, all while enjoying the benefits of our full-reserve system.
                <br> <br>
                Don't miss out on this opportunity to be part of the first regulated cryptocurrency exchange in Colombia. Invest now and start experiencing the advantages of our platform.    <br> <br>
                Click the ' Start Investing ' button below to join us in shaping the future of cryptocurrency trading with Sinfonia Global Exchange S.A.S."
            </div>
            <a href="#contact"><div class="buttonLight buzz" data-aos="fade-up">Invest Now</div></a>
        </div>
    </div>
    <div class="revolutionContainer">
        <div id="revolutionParticles"></div>
        <div class="revolution">
            <div class="textTitleLight" data-aos="fade-up">Revolutionize Crypto Trading with Sinfonia Global Exchange:</div>
            <div class="textLight centered" data-aos="fade-up">The First Regulated Crypto Exchange in Colombia, Solving Industry Flaws and Providing a Secure and Transparent Platform for All Investors</div>
            <a href="#contact"><div class="revButton buzz" data-aos="fade-up">Invest in the future of crypto with Sinfonia Global Exchange</div></a>
        </div>
    </div>
    <div class="problemsContainer">
        <div class="problems">
            <div class="textTitleDark" data-aos="fade-up">PROBLEMS IN THE CRYPTO INDUSTRY…</div>
            <div class="textDark" data-aos="fade-up">We at Sinfonia Global Exchange are aware of the issues users have had with other centralized exchanges as well as the cryptocurrency industry. Investors may become frustrated and possibly suffer losses as a result of cryptocurrency exchanges' collapses related to numerous problems such as:</div>
            <div class="problemImageText">
                <img src="{{asset('images/elements/frustrated.webp')}}" data-aos="fade-up" class="frustratedImg" alt="">
                <div class="problemList">
                    <div class="problemItem" data-aos="fade-up">
                        <img src="{{asset('images/elements/arrow.png')}}" class="arrow" alt="">
                        <div class="textProblem">Lack of Security</div>
                    </div>
                    <div class="problemItem" data-aos="fade-up">
                        <img src="{{asset('images/elements/arrow.png')}}" class="arrow" alt="">
                        <div class="textProblem">Transparency</div>
                    </div>
                    <div class="problemItem" data-aos="fade-up">
                        <img src="{{asset('images/elements/arrow.png')}}" class="arrow" alt="">
                        <div class="textProblem">Liquidity Crunches</div>
                    </div>
                    <div class="problemItem" data-aos="fade-up">
                        <img src="{{asset('images/elements/arrow.png')}}" class="arrow" alt="">
                        <div class="textProblem">Financial Systems or Models</div>
                    </div>
                </div>
            </div>
            <div class="textDark">These markets also frequently offer few investment choices, which restricts investors' ability to diversify their holdings. We think that these issues need to be resolved, and that our cutting-edge platform can do so. By offering a safe, open, and quick platform with a wide selection of digital investment products and services, we hope to transform the crypto trading experience. </div>
            <div data-aos="fade-up" class="problemMessage">
                <div class="textDark" >Join us and be a part of the solution to the problems facing the crypto market today.</div>
                <a href="#contact"><div class="buttonLight buzz">Invest Now</div></a>
            </div>
        </div>
    </div>
    <div class="solutionsContainer">
        <div id="solutionParticles"></div>
        <div class="solution">
            <div class="textTitleLight" data-aos="fade-up">Our Solution...</div>
            <div class="solutionList">
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution">The challenges faced by traders and
                        ors in the cryptocurrency industry, especially with centralized exchanges, are recognized by the Sinfonia Global Exchange team. </div>
                </div>
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution">We believe that the answer to these problems is a regulated system that ensures transparency, security, and accountability. </div>
                </div>
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution">We have therefore established the first regulated cryptocurrency exchange in Colombia.</div>
                </div>
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution">To avoid market failures and safeguard investors' interests, our platform is under the financial superintendency of Colombia and the supervision of other self-regulatory organizations.</div>
                </div>
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution">In order to securely supply liquidity to the market, we have also created a 1:1 reserved banking system. As cryptocurrencies are not supported by a centralized government, this mechanism is essential. </div>
                </div>
                <div class="solutionItem" data-aos="fade-up">
                    <div>⚪</div>
                    <div class="textSolution"> We provide a remedy for the problems with the cryptocurrency exchange market by offering this safe and open platform. Because Sinfonia Global Exchange is committed to fostering market stability and accountability, it is a suitable option for all investors.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="financieraLogos">
        <div class="financiera">
            <img data-aos="fade-up" src="{{asset('images/elements/finansiera.png')}}" alt="">
            <img data-aos="fade-up" src="{{asset('images/elements/camara.png')}}" alt="">
        </div>
    </div>
    <div class="opportunityContainer">
        <div class="opportunity">
            <div class="titleOp">
                <div class="textTitleLight" data-aos="fade-up">THE OPPORTUNITY…</div>
                <div class="textLight">“The Future of Digital Finance is Cryptocurrency."</div>
            </div>
            <div class="opportunityImageText">
                    <img src="{{asset('images/elements/1.png')}}" data-aos="fade-up" id="floatImg" class="happyImage" alt="">
                <div class="opportunityList">
                    <div class="opportunityItem" data-aos="fade-up">
                        <div>⚪</div>
                        <div class="opportunityText">Access to a rapidly growing market: Colombia's cryptocurrency market is growing fast, and Sinfonia Global Exchange is the first regulated exchange in the country, making it well-positioned to capture a significant share of this market.</div>
                    </div>
                    <div class="opportunityItem" data-aos="fade-up">
                        <div>⚪</div>
                        <div class="opportunityText">Diversified investment options: Sinfonia Global Exchange offers a wide range of digital investment services and products, including cryptocurrency trading, digital asset management, and more.</div>
                    </div>
                    <div class="opportunityItem" data-aos="fade-up">
                        <div>⚪</div>
                        <div class="opportunityText">Transparency and security: With a 1:1 reserved banking system, a regulated system under the supervision of the Colombian Financial Superintendency and other self-regulatory organizations, Sinfonia Global Exchange is dedicated to delivering a secure, transparent platform for all sorts of investors.</div>
                    </div>
                    <div class="opportunityItem" data-aos="fade-up">
                        <div>⚪</div>
                        <div class="opportunityText">Potential for growth: Cryptocurrencies are the fastest-growing asset class, with the potential for significant long-term growth.</div>
                    </div>
                </div>
            </div>
            <a href="#contact"><div class="buttonLight buzz">Invest Now</div></a>
        </div>
    </div>
    <div class="marketContainer">
        <div class="market">
            <div class="textTitleDark" data-aos="fade-up">THE COLOMBIAN CRYPTO MARKET OPPORTUNITY</div>
            <div class="marketBoxes">
                <div class="marketBox" data-aos="fade-up">
                    <div class="marketBoxTitle">#2 RANKED</div>
                    <div class="textDark">In adoption Rate in</div>
                    <div class="textDark">LATAM</div>
                </div>
                <div class="marketBox" data-aos="fade-up">
                   <div class="marketBoxTitle">Favorable Regulatory</div>
                    <div class="textDark">Environment for </div>
                    <div class="textDark">Growth</div>
                </div>
                <div class="marketBox" data-aos="fade-up">
                    <div class="marketBoxTitle">5.760T COP</div>
                    <div class="textDark">Market Opportunity for</div>
                    <div class="textDark">2024</div>
                </div>
            </div>
        </div>
    </div>
    <div class="modelContainer">
        <div id="tsparticlesSquare"></div>
        <div class="model">
            <div class="textTitleLight">OUR MODEL</div>
            <div class="modelList">
                <div class="modelItem" data-aos="fade-up">1.  Stage of development: We are currently creating a cutting-edge cryptocurrency exchange platform with several financial investment services, such as trading, yield, margin, derivatives, financial data, tools, and an online community and more…</div>
            </div>
            <div class="modelList">
                <div class="modelItem" data-aos="fade-up">2.  Regulation: We are subject to Colombia's financial superintendency's regulation, which guarantees a solid, safe, and open platform that safeguards investors' interests and averts market failures.</div>
            </div>
            <div class="modelList">
                <div class="modelItem" data-aos="fade-up">3.  Banking system: Because cryptocurrencies are not backed by a single government, we have created a 1:1 reserved banking system that securely provides liquidity to the market.</div>
            </div>
            <div class="modelList">
                <div class="modelItem" data-aos="fade-up">4.  Reasonable fees: We work hard to offer excellent customer support and service, and our fees are competitive, transparent, and reasonable.</div>
            </div>
            <div class="modelList">
                <div class="modelItem" data-aos="fade-up">5.  Growth potential: The cryptocurrency industry is the fastest-growing asset class, with tremendous acceptance and growth potential, and our cutting-edge platform is ready to seize this exciting opportunity. Be a part of the future of finance by joining us right now!</div>
            </div>
        </div>
    </div>
    <div class="competitorsContainer">
        <div class="competitors">
            <div class="textTitleDark" data-aos="fade-up">COMPETITORS IN DIGITAL PLATFORM </div>
            <div class="textDark" data-aos="fade-up">Sinfonia Global Exchange faces competition from both national and global players in the cryptocurrency exchange industry. The competition is intense, especially on a global scale, where we compete with centralized cryptocurrency exchanges and crypto financial services providers, including:</div>
            <div class="competitor" data-aos="fade-up">
                <img src="{{asset('images/elements/binance.png')}}" class="competitorsImg" alt="">
                <div class="textDark">Over $300Billion USD valuation (as of 2023) Binance has free finance software that enables you to easily buy, trade, and hold popular cryptocurrencies. Also offers a mobile app, API integrations and operates on their own blockchain network, the BNB native exchange token. We plan not to develop our own native-exchange token due to the vulnerability and risks. </div>
            </div>
            <div class="competitor" data-aos="fade-up">
                <img src="{{asset('images/elements/coinbase.png')}}" class="competitorsImg" alt="">
                <div class="textDark">$7.9Billion USD Market Cap (as of 1/1/2023) Coinbase is a popular digital currency exchange platform that allows users to buy and sell cryptocurrencies. Software includes various automated trading features, and data, which we expect to build in the future (likely mid-2025).  </div>
            </div>

        </div>
    </div>
    <div class="valuationContainer">
        <div id="valuationParticles"></div>
        <div class="valuation">
            <div class="textTitleLight" data-aos="fade-up">VALUATION STRUCTURE</div>
            <div class="textLight centered" data-aos="fade-up">To give the most value to our investors and our community, the Sinfonia Global Exchange seed round won’t incorporate inflated or any initial dilution metrics in the valuation equation. Here, we used a 1:1 ratio for our valuation which means for every peso you invest will cost the same as the Shares you buy $1.000COP: $1.000COP. That means, if we raised $20.000.000.000COP and if that Investor “A” invests $2.000.000.000.000COP, the company will be valued at $20.000.000.000COP, and the Investor “A” will own 10% of the company. </div>
        </div>
    </div>
    <div class="oneContainer">
        <div class="one">
            <div class="textTitleDark" data-aos="fade-up">WHY ARE WE USING A 1:1 VALUATION?</div>
            <div class="textDark" data-aos="fade-up">Reasons that the more we can raise today, the more likely we can compete in the industry with our competitors. </div>
            <div class="oneLeftImage" data-aos="fade-up">
                <img src="{{asset('images/elements/bitcoin.png')}}" class="oneImage" alt="">
                <div class="oneContent">
                    <div class="smallerTitle">NO TRADITIONAL “DILUTION” AT RAISE</div>
                    <div class="textDark">Investors will not be paying any typical “premium valuation” for our expertise, team, resources, or the potential of this opportunity.</div>
                </div>
            </div>
            <div class="oneLeftImage" data-aos="fade-up">
                <div class="oneContent" data-aos="fade-up">
                    <div class="smallerTitle">THERE WON’T BE ANY INITIAL SALARY TO BRADLEY RIANO OR TO THE BOARD OF DIRECTORS</div>
                    <div class="textDark">To align Shareholders interests and maximize growth, Bradley Riano and Directors will not take an initial salary or bonuses. In contrast to seed rounds, traditional "dilution" does not occur, and instead, individuals such as our founder, Bradley, receive compensation solely after an IPO or a sale event similar to an IPO.</div>
                </div>
                <img src="{{asset('images/elements/bitPart.png')}}" class="oneImage" alt="">
            </div>
        </div>
    </div>
    <div class="earlyOpportunityContainer">
        <div id="earlyParticles"></div>
        <div class="earlyOpportunity">
            <div class="textTitleLight" data-aos="fade-up">FOR EARLIER INVESTORS, THE FASTER YOU INVEST, THE MORE OPPORTUNITIES YOU’LL GET!</div>
            <div class="textLight centered" data-aos="fade-up">The earlier you invest, the more warrants you’ll receive. We have a warrant mechanism built into the Offering that will allow you to, in the future, invest more at the seed-round valuation of ($1.000: $1.000).
                <br>
                If we have a "SECOND SEED" call, this is an optional increase in the future value of your investment at the same valuation. The opportunity to purchase more Shares at a cheaper price at the “FIRST SEED” call price. You are not obliged to utilize these options and they will expire sixty (60) after the SECOND-SEED ROUND begins. Investors who have funded before certain deadlines will have the benefit of participating in the SECOND-SEED ROUND and purchase additional Shares based on how early they funded.
            </div>
        </div>
    </div>
    <div class="tableContainer">
        <div class="tableSection">
            <div class="textTitleDark" data-aos="fade-up">HOW DOES THE WARRANT SYSTEM WORKS?</div>
            <div class="textDark" data-aos="fade-up">For example, if you invest $100.000.000COP before JULY 30th, you’d have the option to invest
                <br>
                an additional $40.000.000COP (40%) at the same $1.000COP per Share valuation in the SECOND-SEED ROUND.
            </div>
            <table data-aos="fade-up">
                <thead>
                    <tr>
                        <th class="thead textLight">DATE OF INVESTMENT</th>
                        <th class="thead textLight">PERCENTAGE OF INVESTMENT TO BE APPLIED TO THE GRANT OF WARRANTS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="textDark">JUNE 3O, 2023</td>
                        <td class="textDark">50%</td>
                    </tr>
                    <tr>
                        <td class="textDark">JULY 3O, 2023</td>
                        <td class="textDark">40%</td>
                    </tr>
                    <tr>
                        <td class="textDark">AUGUST 31, 2023</td>
                        <td class="textDark">30%</td>
                    </tr>
                    <tr>
                        <td class="textDark">SEPTEMBER 3O, 2023</td>
                        <td class="textDark">20%</td>
                    </tr>
                    <tr>
                        <td class="textDark">OCTOBER 31, 2023</td>
                        <td class="textDark">10%</td>
                    </tr>
                    <tr>
                        <td class="textDark">NOVEMBER 3O, 2023</td>
                        <td class="textDark">0%</td>
                    </tr>
                </tbody>
            </table>
            <div class="textDark" data-aos="fade-up">Click the ‘View Documents’ button below for more information!</div>
            <div class="docButton buzz" data-aos="fade-up">View Documents</div>
        </div>
    </div>
    <div class="earlyOpportunityContainer">
        <div id="bradParticles"></div>
        <div class="earlyOpportunity">
            <div class="textTitleLight" data-aos="fade-up">BRADLEY HAS PLEDGED TO INVEST OF HIS PERSONAL FUNDS $1.000.000.000 COP AT $1000 COP PER SHARE</div>
            <div class="textLight" data-aos="fade-up">Bradley’s investment will be at the same valuation you’re receiving. The difference with Bradley’s Shares is that they will have voting rights. For this purpose, we have called these Shares “Founder Shares.”   ***(Bradley will invest in the course of 3 years)</div>
        </div>
    </div>
    <div class="reasonsContainer">
        <div class="reasons">
            <div class="textTitleDark" data-aos="fade-up">REASONS TO INVEST</div>
            <div class="reason" data-aos="fade-up">
                <div class="smallerTitle">1. GROWTH POTENTIAL WITH SEED ROUND VALUATION </div>
                <div class="textDark">You’ll own a stake in the business by investing in our Seed Round. If we can raise $20.000.000.000COP there is an incredible growth opportunity to be a part of the only company in Colombia to offer and manages a regulated, centralized cryptocurrency exchange, financial and investment services in cryptocurrencies and digital assets. </div>
            </div>
            <div class="reason" data-aos="fade-up">
                <div class="smallerTitle">2. DIVERSIFICATION AND EXPOSURE TO NEW MARKETS</div>
                <div class="textDark">Investors will have the opportunity to invest in a rapidly growing cryptocurrency market and innovative technology that expects to bring impressive returns in the future. As well as adding crypto exposure to your portfolio, but with the benefit of scale for more diversification. You can get exposure to many different types of crypto investment services, algorithmic trading, lending, staking, portfolio management, and crypto exchange platforms. In addition, investors abroad you'll have the opportunity to invest in a foreign market.</div>
            </div>
            <div class="reason" data-aos="fade-up">
                <div class="smallerTitle">3. NO SORT OF TYPICAL “DILUTION”</div>
                <div class="textDark">The valuation and structure for our Seed Round are made to reward our community. Currently, there is no typical dilution to inflate the valuation for the company resources, the opportunity, or our expertise. What is raised will be the valuation we sell Shares for ($1.000 COP: $1.000).</div>
            </div>
        </div>
    </div>
    <div class="readyContainer">
        <div id="readyParticles"></div>
        <div class="ready">
            <div class="textTitleLight" data-aos="fade-up">READY TO EMBARK ON SINFONIA GLOBAL EXCHANGE’S JOURNEY AND TEAM?</div>
            <div class="readyContent">
                <img src="{{asset('images/logo/logoBig.png')}}" data-aos="fade-up" class="readyLogo" alt="">
                <div class="readyText">
                    <div class="textLight" data-aos="fade-up">Invest now while our Seed Round is open. This may be the only time we raise funds before we go public. </div>
                    <div class="readyAction">
                        <a href="#contact"><div class="docButton" id="attention" data-aos="fade-up">Start Investing</div></a>
                        <div class="readyInfo" data-aos="fade-up">*READ ALL DOCUMENTS BEFORE INVESTING </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="howContainer">
        <div class="how">
            <div class="textTitleDark"  data-aos="fade-up">HOW TO INVEST BEFORE THE OFFERING FINALIZES:</div>
            <div class="steps">
                <div class="stepItem">
                    <div class="stepFrame">
                        <div class="stepHeader"  data-aos="fade-up">
                            <div class="step">Step 1. </div>
                            <div class="stepText">Click the ‘Start Investing’ button.</div>
                        </div>
                        <div class="stepContent"  data-aos="fade-up">
                            - Read and fill out the form and answer some questions.
                        </div>
                    </div>
                    <a href="#contact"><div class="docButton buzz"  data-aos="fade-up">Start Investing</div></a>
                </div>
                <div class="stepItem">
                    <div class="stepFrame">
                        <div class="stepHeader"  data-aos="fade-up">
                            <div class="step">Step 2. </div>
                            <div class="stepText">Sign the Subscription Agreement. </div>
                        </div>
                        <div class="stepContent"  data-aos="fade-up">
                            - This is an agreement between you and Sinfonia Global Exchange S.A.S. to buy shares of the company at the price of $1.000 COP per share.
                        </div>
                    </div>
                    <img src="{{asset('images/elements/sign.png')}}"  data-aos="fade-up" class="imageHow" alt="">
                </div>
                <div class="stepItem">
                    <div class="stepFrame">
                        <div class="stepHeader"  data-aos="fade-up">
                            <div class="step">Step 3. </div>
                            <div class="stepText">Click the ‘Start Investing’ button.</div>
                        </div>
                        <div class="stepContent"  data-aos="fade-up">
                            - We will email you confirmation of your purchase and electronic stock certificates once we have verified your status, approved your application, and received your payments.
                        </div>
                    </div>
                    <img src="{{asset('images/elements/hand.png')}}"  data-aos="fade-up" class="imageHow" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="faqsContainer" id="faq">
        <div class="faqs">
            <div class="textTitleDark">FAQs</div>
            <div class="faq">
                <div class="smallerTitle">•	How much can I invest?</div>
                <div class="textDark">-	A minimum subscription of $2.500.000 COP per investor is required. Although SINFONIA GLOBAL EXCHANGE S.A.S. reserves the right to accept subscriptions for a lesser amount. Please email our investor relations for a lesser amount. There are currently no limitations on the number of shares an investor can purchase.</div>
            </div>
            <div class="faq">
                <div class="smallerTitle">•	When will I receive my shares?</div>
                <div class="textDark">-	After you've invested, we will process your investment. It will take a few business days AFTER receiving a wire to send you a confirmation. Wires must be cleared before. Once cleared, we must process them - and we'll do our best to do so quickly. When the round closes, you'll receive an electronic stock certificate that proves the shares you own in Sinfonia Global Exchange S.A.S.</div>
            </div>
            <div class="faq">
                <div class="smallerTitle">•	If I'm not based in Colombia, can I still invest?</div>
                <div class="textDark">-	In the event that you wire money from abroad, your currency will be changed right away, and you will be granted the shares equal to the net Colombian Pesos received. To sum up, absolutely. With the exception of any potential restrictions on such investments imposed by your nation, we should be able to help you invest with us.</div>
            </div>
            <div class="faq">
                <div class="smallerTitle">•	When will the Seed Round be closed?</div>
                <div class="textDark">-	There won't be an endless window of time to invest. We won't be accepting an endless amount of investment. Only capital that we are confident we can use to generate returns in a fair amount of time will we accept. As a result, the fundraising time can finish quickly and without warning.</div>
            </div>
            <div class="faq">
                <div class="smallerTitle">•	Will there be a chance to invest in the future?</div>
                <div class="textDark">-	We are unsure. The next time you can invest might be in the event we have an Initial Public Offering.</div>
            </div>
        </div>
    </div>
    <div class="contactContainer" id="contact">
        <div class="contact">
            <div class="textTitleDark">Contact Us</div>
            <form action="{{route('sendEmail')}}" method="POST" class="form">
                @csrf
                <div class="formItem">
                    <label for="fullName">Full Name:</label>
                    <input type="text" name="fullName" id="fullName" placeholder="Write your full name" required>
                </div>
                <div class="formItem">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Write your email" required>
                </div>
                <div class="formItem">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" placeholder="Write your phone number" required>
                </div>
                <button type="submit" class="formButton">Submit</button>
            </form>
        </div>
    </div>
    <div class="footerContainer">
        <div class="footer">
            <img src="{{asset('images/elements/graf.webp')}}" class="footerImg" alt="">
            <div class="textFooter">This part is for my legal team to fill in – includes All Rights Reserved and Privacy Policy</div>
        </div>
    </div>
    <script src="{{asset('js/hamburgerAction.js')}}"></script>
    <script src="{{asset('js/particles.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/buzz.js')}}"></script>
    <script src="{{asset('js/success.js')}}"></script>
    <script src="{{asset('js/float.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
