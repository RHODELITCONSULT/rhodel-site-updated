@extends('Frontend.layout.app')
@section('content')
    <style>
        .pagecontainer {
            width: 1200px;
            margin: 0 auto;
        }

        .pagecontainer ul {
            padding: 0;
        }

        .headerimagecontainer {
            background-image: url('//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/2041490817_erincrew.jpg');
            height: 540px;
            position: relative;
        }

        .headercontent {
            text-align: center;
            width: 90%;
            margin: 0 auto;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
        }

        .headercontent h1 {
            font-size: 3.750em;
            font-family: 'Oswald', 'Arial Narrow', 'Trebuchet MS', sans-serif;
            color: #fff;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.075em;
            line-height: 1.25;
            margin-bottom: 20px
        }

        .headercontent img {
            margin-top: -15px;
        }

        .benefitscontainer {
            margin-top: 50px;
        }

        .headercontent p,
        .benefitscontainer p {
            font-size: 15px;
            font-family: 'Montserrat', 'Verdana', 'Geneva', sans-serif;
            color: #fff;
            letter-spacing: 0.01em;
            line-height: 1.5;
            margin: 0 auto;
            margin-bottom: 50px;
        }

        .headercontent p {
            width: 60%;
        }

        .headercontent span {
            color: #71E57BFF;
        }

        .headercontent a {
            font-size: 14px;
            font-family: 'Montserrat', 'Verdana', 'Geneva', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.07em;
            line-height: 1;
            cursor: pointer;
            background-color: #A9C74B;
            border: none;
            border-radius: 0;
            color: white;
            text-align: center;
            padding: 20px 40px;
            text-decoration: none;
            -moz-transition: all .2s ease-in;
            -o-transition: all .2s ease-in;
            -webkit-transition: all .2s ease-in;
            transition: all .2s ease-in;
        }

        .headercontent a:hover {
            background: #93AD41;
        }

        .benefitscontainer {
            text-align: center;
        }

        .benefitscontainer ul {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .benefitscontainer h2,
        .current-openings h2 {
            font-size: 30px;
            font-family: 'Oswald', 'Arial Narrow', 'Trebuchet MS', sans-serif;
            color: #333333;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.075em;
            line-height: 1.25;
            text-align: center;
        }

        .benefitscontainer h3 {
            font-size: 16px;
            font-family: 'Montserrat', 'Verdana', 'Geneva', sans-serif;
            color: #6d6e71;
            margin: 15px 0 20px 0;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            line-height: 1.25;
        }

        #bottom-adjustment {
            margin-top: 20px;
        }

        #location {
            margin-top: 0;
        }

        .benefitscontainer p {
            color: #6d6e71;
        }

        .benefitscontainer span {
            font-size: .75rem;
        }

        .benefitscontainer li {
            width: 20%;
            margin-bottom: 50px;
            list-style: none;
        }

        .benefitscontainer img {
            width: 30%;
        }

        .variable-width button {
            display: none !important;
        }

        .variable-width img {
            margin: 0 15px;
        }

        .overall-carousel {
            overflow: hidden;
        }

        .ribbons-total {
            display: flex;
            justify-content: center;
            margin-bottom: -1.4em;
        }

        aside {
            line-height: 40px;
            position: relative;
        }

        aside.ribbons {
            background-color: #e57177;
            width: 18em;
            margin: 0 auto;
            text-align: center;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .05em;
            z-index: 200;
            margin-right: 2em;
        }

        .ribbons a,
        .grey-ribbon a {
            cursor: pointer;
        }

        .ribbons:after {
            border-width: 20px 10px 20px 0;
            border-color: #e57177 transparent;
            right: -10px;
        }

        .ribbons:before,
        .grey-ribbon:before {
            border-width: 20px 0 20px 10px;
            left: -10px;
        }

        .ribbons:before {
            border-color: #e57177 transparent;
        }

        aside:before,
        aside:after {
            content: '';
            position: absolute;
            border-style: solid;
        }

        aside.grey-ribbon {
            background-color: grey;
            width: 18em;
            margin: 0 auto;
            text-align: center;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .05em;
            z-index: 200;
            margin-left: 2em;
        }

        .grey-ribbon:after {
            border-width: 20px 10px 20px 0;
            border-color: grey transparent;
            right: -10px;
        }

        .grey-ribbon:before {
            border-color: grey transparent;
        }

        .current-openings {
            margin: 3.5em 0;
        }

        #whr_embed_hook {
            width: 75%;
            margin: auto;
        }

        .whr-info {
            display: flex;
            justify-content: space-between;
            width: 50%;
            flex-wrap: wrap;
            margin-right: 2.5em;
        }

        .whr-info span {
            display: none;
        }

        .whr-item {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 2em;
        }

        .whr-title {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .whr-title a {
            color: #e57177;
        }

        .whr-location,
        .whr-date {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .job-labels {
            display: flex;
            justify-content: space-between;
            margin: 2em auto;
            width: 75%;
        }

        .whr-dept,
        .department {
            display: none;
        }

        .location {
            padding-left: 3em;
        }

        @media (max-width: 1199px) {
            .pagecontainer {
                width: 100%;
            }

            #whr_embed_hook,
            .job-labels {
                width: 75%;
                margin: 2em auto;
            }
        }

        @media (max-width: 900px) {
            .benefitscontainer li {
                width: 45%;
                margin-bottom: 0;
            }

            #ul2 {
                margin-top: 0;
            }

            .location {
                padding-left: 3em;
            }
        }

        @media (max-width: 780px) {
            .whr-info {
                width: 55%;
            }

            .location {
                padding-left: 5em;
            }
        }

        @media (max-width: 767px) {
            .overall-carousel {
                display: none;
            }

            #whr_embed_hook,
            .job-labels {
                width: 95%;
            }
        }

        @media (max-width: 568px) {
            .whr-info {
                margin: 1em auto;
                width: 100%;
            }

            #whr_embed_hook,
            .job-labels {
                width: 75%;
            }
        }

        @media (max-width: 480px) {
            .headercontent h1 {
                font-size: 2em;
            }

            .headercontent img {
                width: 30%;
            }

            .benefitscontainer li {
                width: 75%;
                margin-bottom: 0;
            }

            #whr_embed_hook,
            .job-labels {
                width: 95%;
                margin: 2em auto;
            }

            .location {
                padding-left: 0;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <div class="pagecontainer">
        <div class="headerimagecontainer">
            <div class="headercontent">
                <h1>do what you <img
                        src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1345984533_love_360.png"
                        alt="Love" class="img-responsive"> everyday</h1>
                <p>Want to join the EC team? If you have a passion for planning & want to work for a rapidly growing
                    entrepreneurial company, check out the listings below or send your resume to
                    <span>careers@erincondren.com</span>.
                </p>
                <a href="#joblistings">view job openings</a>
            </div>
        </div>
        <div class="benefitscontainer">
            <h2>benefits of being ec</h2>
            <ul>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/501213759_insurance.jpg"
                        alt="competitive insurance">
                    <h3>competitive Insurance</h3>
                    <p>We provide health, dental and vision insurance options. Complementary life insurance is included too!
                    </p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1960341131_pto.jpg"
                        alt="paid time off">
                    <h3>paid time off</h3>
                    <p>We believe that if you work hard, you get to play hard too. Enjoy paid time off in addition to all
                        main holidays.</p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1367242323_retire.jpg"
                        alt="retirement options">
                    <h3>retirement options</h3>
                    <p>We care about your retirement and give you the freedom to customize your 401(k) options.</p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1766766672_attire.jpg"
                        alt="casual attire">
                    <h3>casual attire</h3>
                    <p>We keep it classy yet casual, so feel free to wear what you feel comfortable in!</p>
                </li>
            </ul>
            <ul id="ul2">
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1553563634_coffee.jpg"
                        alt="coffee and tea bar">
                    <h3 id="bottom-adjustment">coffee & tea bar</h3>
                    <p>Get the juices flowing every morning with complimentary coffee and tea.</p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/546814012_community.jpg"
                        alt="community">
                    <h3 id="bottom-adjustment">community</h3>
                    <p>We host happy hours, employee appreciation events, and some awesome team building events.</p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/1242376693_cali.jpg"
                        alt="california location">
                    <h3 id="location"><span>california location:</span><br />los angeles</h3>
                    <p>Our Hawthorne location is located in the heart of sunny Los Angeles, just 15 minutes from the beach!
                    </p>
                </li>
                <li>
                    <img src="//s3-us-west-2.amazonaws.com/ec-cdn-content/ec-image-resources/231731189_texas.jpg"
                        alt="texas location">
                    <h3 id="location"><span>texas location:</span><br />north austin</h3>
                    <p>Our large North Austin location has plenty of free parking away from the crowds. There’s a killer
                        Donut shop down the road too.</p>
                </li>
            </ul>
        </div>
        
        <div class="current-openings" id="joblistings">
            <h2>CURRENT OPENINGS</h2>
        </div>
        <div class="job-labels">
            <h4>POSITION</h4>
            <h4 class="location">LOCATION</h4>
            <h4>POSTING DATE</h4>
        </div>
        <div id="whr_embed_hook"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('.variable-width').slick({
                infinite: true,
                speed: 2000,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true,
                centerPadding: 100,
                autoplay: true,
                touchMove: true,
                respondTo: window
            });
            var filtered = false;
            $('.ribbons').on('click', function() {
                if (filtered === false) {
                    $('.variable-width').slick('slickFilter', ':even');
                    $('.ribbons').text("VIEW ALL")
                    filtered = true;
                } else {
                    $('.variable-width').slick('slickUnfilter');
                    $('.ribbons').text("VIEW AUSTIN OFFICE")
                    filtered = false;
                }
            });
            $('.grey-ribbon').on('click', function() {
                if (filtered === false) {
                    $('.variable-width').slick('slickFilter', ':odd');
                    $('.grey-ribbon').text("VIEW ALL")
                    filtered = true;
                } else {
                    $('.variable-width').slick('slickUnfilter');
                    $('.grey-ribbon').text("VIEW LOS ANGELES OFFICE")
                    filtered = false;
                }
            });
        });
        whr(document).ready(function() {
            whr_embed(126006, {
                detail: 'titles',
                base: 'jobs',
                zoom: 'state',
                grouping: 'none'
            });
        });
    </script>
@endsection
