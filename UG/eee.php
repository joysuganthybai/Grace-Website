<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCOE:Electrical & Electronics Engineering</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.png">
    <title>GRACE COLLEGE OF ENGINEERING</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
        @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

        * {
            font-family: "Open Sans", sans-serif;
            margin: 0;
            padding: 0;
        }



        body {
            width: 100%;
            height: 100%;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            -ms-overflow-style: none;
            scrollbar-width: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        body::-webkit-scrollbar {
            display: none;
        }


        .tab-heading {
            text-align: center;
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 20px;
        }

        .course-main-headng {
            font-size: 3rem;
            font-weight: 800;
        }

        .tb-main {
            padding: 50px;
            margin: 0 auto;
            background: #fff;
            text-align: center;

        }

        /* Deprtments Option starts */
        .dept-options {
            position: fixed;
            margin: 0;
            padding: 0;
            top: 150px;
        }

        @media screen and (max-width:700px) {
            .dept-options {
                display: none;
            }
        }

        .dept-options ul {
            list-style: none;
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translateY(-50%);
        }

        .dept-options li a {
            height: 47px !important;
            /* display: flex !important; */
            justify-content: center !important;
            align-items: center !important;
            /* width: 180px !important; */
        }
        .dept-options li a span {
            padding: 0 3px 0 5px!important;
            position: absolute!important;
        }

        .dept-options li a {
            display: block;
            margin-left: -2px;
            height: 60px;
            width: 100px;
            border-radius: 0 25px 25px 0;
            border: 2px solid #000;
            background: #FFF;
            margin-bottom: 1em;
            transition: all 0.4s ease;
            color: white;
            text-decoration: none;
            line-height: 60px;
            position: relative;
        }

        .dept-options li a:hover {
            cursor: pointer;
            width: 180px;
            color: white;
        }

        .dept-options li a:hover span {
            left: 0;
        }



        .dept-options li .cse {
            background: #470a52;
            color: white;
            border: none;
        }


        .dept-options li .ece {
            background: #470a52;
            color: white;
            border: none;
        }


        .dept-options li .eee {
            background: #470a52;
            color: white;
            border: none;
        }


        .dept-options li .civil {
            background: #470a52;
            color: white;
            border: none;
        }

        .dept-options li .mech {
            background: #470a52;
            color: white;
            border: none;
        }

        .dept-options li .ai {
            background: #470a52;
            color: white;
            border: none;
        }

        .dept-options li .hs {
            background: #470a52;
            color: white;
            border: none;
        }

        /* Department Option Ends */

        @media screen and (max-width:600px) {
            .tb-main {
                padding: 0px;
                margin-top: 80px;
            }
        }

        section {
            display: none;
            padding: 20px 0 0;

        }

        input.brand-tabs {
            display: none;
        }

        label.brand-tabs {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 10px 25px;
            font-weight: 600;
            text-align: center;
            color: #fff;
            background-color: #470a52;
            border-radius: 28px;
        }


        label.brand-tabs:hover {
            color: #888;
            cursor: pointer;
        }

        input:checked+label.brand-tabs {
            color: #fff;
            border-radius: 28px;
            background-color: #d63384;
        }

        #tab1:checked~#content1,
        #tab2:checked~#content2,
        #tab3:checked~#content3,
        #tab4:checked~#content4,
        #tab5:checked~#content5,
        #tab6:checked~#content6,
        #tab7:checked~#content7 {
            display: block;
        }

        @media screen and (max-width: 650px) {
            label.brand-tabs {
                font-size: 0;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "Overview";
            }

            label.brand-tabs[for*="2"]:before {
                content: "Laboratory";
            }

            label.brand-tabs[for*="3"]:before {
                content: "Faculty";
            }

            label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            }


            label.brand-tabs:before {
                margin: 0;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 400px) {
            label.brand-tabs {
                padding: 15px;
            }

            label.brand-tabs:before {
                font-family: fontawesome;
                font-weight: normal;
                margin-right: 10px;
            }

            label.brand-tabs[for*="1"]:before {
                content: "Overview";
            }

            label.brand-tabs[for*="2"]:before {
                content: "Laboratory";
            }

            label.brand-tabs[for*="3"]:before {
                content: "Faculty";
            }

            label.brand-tabs[for*="4"]:before {
                content: "Events";
            }

            label.brand-tabs[for*="5"]:before {
                content: "Gallery";
            }

            label.brand-tabs[for*="6"]:before {
                content: "Students Achievements";
            }

            label.brand-tabs[for*="7"]:before {
                content: "Course Material";
            }

        }

        /* Styles for Overview Sections */

        @media (min-width: 1000px) {

            #timeline .demo-card:nth-child(even) .head::before,
            #timeline .demo-card:nth-child(odd) .head::before {
                position: absolute;
                content: "";
                width: 9px;
                height: 9px;
                background-color: #d4bbeb;
                border-radius: 9px;
                box-shadow: 0px 0px 2px 8px #f7f7f7;
            }
        }

        /* Some Cool Stuff */
        .demo-card:nth-child(1) {
            order: 1;
        }

        .demo-card:nth-child(2) {
            order: 4;
        }

        .demo-card:nth-child(3) {
            order: 2;
        }

        .demo-card:nth-child(4) {
            order: 5;
        }

        .demo-card:nth-child(5) {
            order: 3;
        }

        .demo-card:nth-child(6) {
            order: 6;
        }

        /* Border Box */
        * {
            box-sizing: border-box;
        }

        /* Fonts */
        body {
            font-family: "Open Sans", sans-serif;
        }

        #timeline {
            background: white;
        }

        #timeline::-webkit-scrollbar {
            display: none;
        }


        #timeline h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 20px;
        }


        #timeline .demo-card-wrapper {
            position: relative;

        }

        @media (min-width: 1000px) {
            #timeline .demo-card-wrapper {
                display: flex;
                flex-flow: column wrap;
                width: 1170px;
                height: 1650px;
                margin: 0 auto;
            }
        }

        #timeline .demo-card-wrapper::after {
            z-index: 1;
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            border-left: 1px solid rgba(191, 191, 191, 0.4);
        }

        @media (min-width: 1000px) {
            #timeline .demo-card-wrapper::after {
                border-left: 1px solid #bdbdbd;
                border: 1px solid black;
            }
        }

        #timeline .demo-card {
            position: relative;
            display: block;
            margin: 10px auto 80px;
            max-width: 94%;
            z-index: 2;
        }

        @media (min-width: 480px) {
            #timeline .demo-card {
                max-width: 60%;
                box-shadow: 0px 1px 22px 4px rgba(0, 0, 0, 0.07);
            }
        }

        @media (min-width: 720px) {
            #timeline .demo-card {
                max-width: 40%;
            }
        }

        @media (min-width: 1000px) {
            #timeline .demo-card {
                max-width: 450px;
                height: 400px;
                margin: 90px;
                margin-top: 45px;
                margin-bottom: 45px;
            }

            #timeline .demo-card:nth-child(odd) {
                margin-right: 45px;
            }

            #timeline .demo-card:nth-child(odd) .head::after {
                border-left-width: 15px;
                border-left-style: solid;
                left: 100%;
            }

            #timeline .demo-card:nth-child(odd) .head::before {
                left: 488.5px;
            }

            #timeline .demo-card:nth-child(even) {
                margin-left: 45px;
            }

            #timeline .demo-card:nth-child(even) .head::after {
                border-right-width: 15px;
                border-right-style: solid;
                right: 100%;
            }

            #timeline .demo-card:nth-child(even) .head::before {
                right: 486.5px;
            }

            #timeline .demo-card:nth-child(2) {
                margin-top: 180px;
            }
        }

        #timeline .demo-card .head {
            position: relative;
            background-color: #d4bbeb;
            display: flex;
            border-radius: 27px;
            justify-content: center;
            height: 12vh;
            align-items: center;
            color: #fff;
            font-weight: 400;
        }

        #timeline .demo-card .head .number-box {
            display: inline;
            float: left;
            margin: 15px;
            padding: 10px;
            font-size: 35px;
            line-height: 35px;
            font-weight: 600;
            background: white;
        }

        #timeline .demo-card .head h2 {
            font-size: 1.3rem;
            font-family: "Open Sans", sans-serif;
            color: black;
            font-weight: 600;
            padding: 10px;
            letter-spacing: 2px;
            text-align: center;
            margin: 10px;

            line-height: 1.9rem;
        }

        @media (min-width: 480px) {
            #timeline .demo-card .head h2 {
                font-size: 165%;
                line-height: 1.9rem;
            }
        }

        #timeline .demo-card .head h2 span {
            display: block;
            font-size: 0.6rem;
            margin: 0;
        }

        @media (min-width: 480px) {
            #timeline .demo-card .head h2 span {
                font-size: 0.8rem;
            }
        }

        #timeline .demo-card .body {
            background: #fff;
            border: 1px solid rgba(191, 191, 191, 0.4);
            border-top: 0;
            text-align: justify;
            overflow: scroll;
            border-radius: 0 0 27px 27px;
            padding: 15px;
        }

        .body::-webkit-scrollbar {
            width: 10px;
        }



        .body::-webkit-scrollbar-track {
            border-radius: 10px;
        }


        .body::-webkit-scrollbar-thumb {
            background: #d4bbeb;
            border-radius: 27px;
        }

        .body::-webkit-scrollbar-thumb:hover {
            background: #d4bbeb;
        }

        @media (min-width: 1000px) {
            #timeline .demo-card .body {
                height: 315px;
                overflow: scroll;
            }
        }

        @media screen and (max-width: 480px) {
            #timeline .demo-card .body {
                height: 50vh;
                overflow: scroll;
                border-radius: 27px;

            }

            #timeline {
                margin-top: 5 0px;
            }
        }

        #timeline .demo-card .body p,
        li {
            font-size: 19px;
            line-height: 28px;
            font-family: "Open Sans", sans-serif;
            margin-bottom: 15px;
        }

        #timeline .demo-card .body img {
            display: block;
            width: 100%;
        }

        #timeline .demo-card--step1 {
            background-color: whitesmoke;
            height: fit-content;
            border: 3px solid #d4bbeb;
            box-shadow: 5px 10px 18px #888888;
            border-radius: 27px;
        }

        /* Styling for Lab Section */

        :root {
            --yellow: #ffdd40;
            /* --dark: #2f313a; */
            --deg: -86deg;
            --trans: all 0.4s ease 0s;
        }



        .content {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            color: #2f313a;
        }

        .team {
            /* padding: 1em 0 1em 1.5em; */
            width: 70%;
            display: flex;
            flex-direction: column;
            margin: auto;
        }

        .member {
            height: fit-content;
            margin: 0.5em 0 0.1em;
            padding-right: 0.73em;
            margin-top: 5vh;
            background: linear-gradient(0deg, rgba(204, 115, 247, 0.53), rgba(204, 115, 247, 0.53)), radial-gradient(28.93% 28.93% at 49.56% 71.07%, #DAB3EC 0%, rgba(187, 133, 213, 0) 100%);
            position: relative;
            border-radius: 27px;
            display: flex;
            flex-direction: column;
            transition: var(--trans);
        }

        @media (max-width: 600px) {
            .team {
                padding: 0px;
                width: 100%;

            }

            .member {
                width: 100%;
                margin-top: 100px;
                border-radius: 20px;
            }

            .lab_container {
                margin: auto;
                width: 100%;
                flex-direction: column;
            }

            .description {
                width: 100% !important;
                text-align: justify !important;
                margin-top: 4rem !important;
            }

            .lab_image {
                width: 100% !important;
            }

            .thumb {
                display: none;
            }

            .lab-heading {
                top: -0px !important;
                font-size: 1em !important;
                transform-origin: left top !important;
            }
        }

        .thumb {
            width: 29vmin;
            height: 19vmin;
            float: left;
            margin-right: 2.25em;
            transform: rotate(-4deg);
            transition: var(--trans);
            border-radius: 0.25em;
            overflow: hidden;
            margin-left: -3em;
            padding: 0.5em;
        }



        .thumb img {
            width: 100%;
            height: 100%;
            border-radius: 0.25em;
            filter: grayscale(1);
            background: var(--dark);
        }

        .member:hover {
            transition: var(--trans);
            filter: drop-shadow(0px 20px 10px #0008);
        }

        .member:hover .thumb {
            padding: 0.1em;
            transition: var(--trans);
            transform: rotate(-1deg);
            --deg: -89deg;
        }

        .member:nth-of-type(even):hover .thumb {
            --deg: 91deg;
        }

        .member:hover .thumb img {
            filter: none;
            transition: var(--trans);
        }

        .lab_container {
            margin: auto;
            display: flex;
        }

        .description {
            text-align: left;
            float: left;
            width: 50%;
        }

        .description p {
            padding-top: 0.6em;
        }

        .lab_image {
            position: relative;
            width: 45%;
            top: 0;
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            /* margin: 20px 0; */
            border-radius: 50% / 10%;
            color: white;
            text-align: center;
            text-indent: .1em;
        }

        .lab_image img {
            height: 100%;
            margin: auto;
            overflow: hidden;
            width: 100%;
            border-radius: 50% / 20%;
            object-fit: cover;
        }

        .lab_links {
            display: flex;
            margin: auto;
            cursor: pointer;
        }

        .link_btn {
            text-decoration: none;
            font-size: 0.8rem;
            padding: 10px;
            font-weight: 900;
            color: black;
            width: fit-content;
            margin-left: 10px;
            margin-top: 20px;
            border-radius: 25px;
            background: linear-gradient(0deg, rgba(204, 115, 247, 0.93), rgba(204, 115, 247, 0.93)), radial-gradient(28.93% 88.93% at 49.56% 71.07%, #DAB3EC 0%, rgba(187, 133, 213, 0) 100%);
        }


        .lab-heading {
            background: var(--dark);
            display: inline;
            transform: rotate(-2deg);
            position: absolute;
            top: 100px;
            margin: 0;
            margin-top: -2.25em;
            left: 9vmin;
            padding: 0.5em 0.75em;
            color: white;
            border-radius: 0.25em;
            font-size: 1.35em;
            transform-origin: left bottom;
        }


        .member:hover h3 {
            transition: var(--trans);
            transform: rotate(0deg);
            background: var(--dark);
        }

        .description p a {
            display: inline-block;
            margin: 0.5em 0 0 0;
            background: var(--dark);
            color: var(--yellow);
            padding: 0.1em 0.5em 0.35em;
            border-radius: 0.5em;
            text-decoration: none;
            transition: var(--trans);
        }

        .description p a:hover {
            transition: var(--trans);
            color: var(--dark);
            background: var(--yellow);
            font-weight: bold;
        }

        .description p a img {
            float: left;
            width: 22px;
            filter: invert(1);
            border-radius: 0.15em;
            padding: 2px;
            background: #fff;
            margin-right: 2px;
        }

        /* Sytling for Model */
        .modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0px;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }


        /* Modal Content/Box */
        .lab_modal_content {
            border-radius: 28px;
            max-width: 100%;
            background: white;
            margin: 15% auto;
            margin-top: 100px !important;
            padding: 10px;
            border: 1px solid #888;
            width: 70%;
            height: 70%;
            display: flex !important;
            box-shadow: 0 1px 1px rgb(0 0 0 / 10%), 0 2px 2px rgb(0 0 0 / 10%), 0 4px 4px rgb(0 0 0 / 10%), 0 8px 8px rgb(0 0 0 / 10%), 0 16px 16px rgb(0 0 0 / 10%);
        }

        hr {
            display: flex;
        }

        .lab_modal_content iframe {
            height: 100%;
            width: 100%;
            max-width: 100%;
        }

        .close {
            color: black;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .lab-left {
            width: 50%;
        }

        .modal-heading {
            font-size: 1.4rem;
            font-weight: 900;
            text-align: center;
        }

        .lab-right {
            width: 50%;
        }

        .modal-contents p {
            font-size: 1.5rem;
            padding: 20px;
            font-weight: 700;
            margin-bottom: -20px;
            text-align: left;
        }

        .modal-contents ol {
            margin-left: 20px;
            font-size: 1.5rem;
            padding: 20px;
            text-align: left;
        }

        .modal-contents ul {
            margin-left: 20px;
            font-size: 1.5rem;
            padding: 20px;
            text-align: left;
        }

        /* Styling for Faculty Section */

        .profile-container {
            height: 100%;
            width: 90%;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
            justify-content: center;
            overflow-y: scroll;
            padding: 10px;
            margin: auto;
        }

        .profile-container::-webkit-scrollbar {
            display: none;
        }

        .our-team {
            padding: 30px 0 40px;
            border-radius: 27px;
            margin-bottom: 30px;
            width: 25vh;
            background-color: #f7f5ec;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .our-team .picture {
            display: inline-block;
            height: 100px;
            width: 100px;
            margin-bottom: 50px;
            z-index: 1;
            position: relative;
        }

        .our-team .picture::before {
            content: "";
            width: 100%;
            height: 0;
            border-radius: 50%;
            background-color: #d4bbeb;
            position: absolute;
            bottom: 135%;
            right: 0;
            left: 0;
            opacity: 0.9;
            transform: scale(3);
            transition: all 0.3s linear 0s;
        }

        .our-team:hover .picture::before {
            height: 100%;
        }

        .our-team .picture::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #d4bbeb;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .our-team .picture img {
            width: 100%;
            height: 100px;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
        }

        .our-team:hover .picture img {
            box-shadow: 0 0 0 14px #d4bbeb;
            transform: scale(0.7);
        }

        .our-team .title {
            display: block;
            font-size: 15px;
            color: #4e5052;
            text-transform: capitalize;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        .faculty-name {
            text-align: center;
            margin-top: -40px;
            font-size: 0.8rem;
        }

        .our-team .social {
            width: 100%;
            padding: 0;
            margin: 0;
            background-color: #d4bbeb;
            text-decoration: none;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .social {
            bottom: 0;
        }

        .our-team .social li {
            display: inline-block;
        }

        .our-team .social li a {
            display: block;
            padding: 10px;
            font-size: 17px;
            color: white;
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }

        .our-team .social li a:hover {
            color: #1369ce;
            background-color: #f7f5ec;
        }

        .popup-profile {
            position: absolute;
            top: 100px;
            right: 0;
            background: rgba(0, 0, 0, .9);
            height: 100%;
            width: 50%;
            z-index: 100;
            display: none;

        }

        .popup-profile span {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 60px;
            color: black;
            cursor: pointer;
            z-index: 100;
        }

        .popup-profile iframe {
            width: 100%;
            height: 100%;

        }


        @media (max-width:768px) {
            .profile-container {
                grid-template-columns: repeat(2, 1fr);

            }

            .popup-profile {
                width: 100%;
            }

            .popup-profile iframe {
                width: 100%;
            }
        }

        /* Styling for Events Section */



        /* Styling for Gallery Section */



        /* Styling for Students Achievements Section */

        .achievements-container {
            height: 400px;
            width: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            scroll-behavior: smooth;
            text-align: justify;
            padding: 10px;
        }

        .achievements-heading {
            font-weight: 600;
            text-align: left;
            padding: 6vh;
        }

        .achievements-container::-webkit-scrollbar {
            width: 10px;
        }

        .achievements-container::-webkit-scrollbar-track {

            border-radius: 27px;
        }

        .achievements-container::-webkit-scrollbar-thumb {
            background: #d4bbeb;
            border-radius: 27px;
        }

        .achievements-container::-webkit-scrollbar-thumb:hover {
            background: #d4bbeb;
        }

        /* Styling for Course Material Section */

        .course-container {
            height: 370px;
            width: 100%;
        }

        .course-container iframe {
            width: 100%;
            height: 100%;
        }

        .events-container {
            height: 390px;
            width: 90%;
            margin: auto;
        }

        .events-container iframe {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
    <?php
    include '../includes/acheader.php';
    ?>
    <!-- Departments Option -->

    <ul class="dept-options">
        <li>
            <a href="./cse.php" class="cse"><span>B.E CSE</span></a>
        </li>
        <li>
            <a href="./ece.php" class="ece"><span>B.E ECE </span></a>
        </li>
        <li>
            <a href="./eee.php" class="eee"><span>B.E EEE</span></a>
        </li>
        <li>
            <a href="./civil.php" class="civil"><span>B.E CIVIL</span></i></a>
        </li>
        <li>
            <a href="./mech.php" class="mech"><span>B.E MECH</span></i></a>
        </li>
        <li>
            <a href="./ai_ds.php" class="ai"><span>B.TECH AI&DS</span></i></a>
        </li>
        <li>
            <a href="./h_s.php" class="hs"><span>H&S</span></i></a>
        </li>
    </ul>


    <!-- ENDS -->
    <h1 class="course-main-headng">Electrical & Electronics Engineering</h1>
    <div class="tb-main">


        <input class="brand-tabs" id="tab1" type="radio" name="tabs" checked>
        <label class="brand-tabs" for="tab1">Overview</label>

        <input class="brand-tabs" id="tab2" type="radio" name="tabs">
        <label class="brand-tabs" for="tab2">Laboratory</label>

        <input class="brand-tabs" id="tab3" type="radio" name="tabs">
        <label class="brand-tabs" for="tab3">Faculty</label>

        <input class="brand-tabs" id="tab4" type="radio" name="tabs">
        <label class="brand-tabs" for="tab4">Events</label>

        <input class="brand-tabs" id="tab5" type="radio" name="tabs">
        <label class="brand-tabs" for="tab5">Gallery</label>

        <input class="brand-tabs" id="tab6" type="radio" name="tabs">
        <label class="brand-tabs" for="tab6">Students Achievments</label>

        <input class="brand-tabs" id="tab7" type="radio" name="tabs">
        <label class="brand-tabs" for="tab7">Course Material</label>




        <section id="content1">
            <div id=timeline>
                <h1>Overview</h1>
                <div class="demo-card-wrapper">
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2> About the Department</h2>
                        </div>
                        <div class="body">
                            <p>
                                The Department of Electrical and Electronics Engineering in Grace College of Engineering is endeavouring to produce highly trained and capable engineers in order to advance their theoretical knowledge and sound practices of the profession, who can take up the challenges of the real world. The Department focuses on uncompromising academic standards in imparting both theoretical and practical instructions with a view to prepare professional engineers. The Faculty members are well qualified and professionally experienced members. Students are given exposure to industries by industrial visits and industrial training session. Electrical and Electronics engineering deals with electricity, electromagnetism and electronics in accordance with modern human life and industrial needs. The department admits about 60 students every year in the B.E. program and 24 students every year in the M.E. program.
                            </p>
                        </div>
                    </div>
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2>Vision</h2>
                        </div>
                        <div class="body">
                            <p>
                                To impart quality education, to sculpt into innovators with ethical and creative talents of aspiring young professionals in Electrical and Electronics Engineering and thereby contributing value to society and industry with high human values.
                            </p>
                        </div>
                    </div>
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2> Mission</h2>
                        </div>
                        <div class="body">
                            <p>
                            <ul>
                                <li>Empower students with the impact of Electrical and Electronics Engineering in the global scenario and the challenges of Electrical based industries and organizations.</li>
                                <li>Build team ethics, leadership qualities and to cater to the overall development of the students in professional and research-oriented fields.</li>
                                <li>Impart quality and value-based education which enables the students to meet the growing challenges in the industry.</li>
                                <li>Provide suitable forums to enhance the creative talents of students and faculty members.</li>
                                <li>Inculcate moral and ethical values among the faculty and students.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2> PROGRAMME EDUCATIONAL OBJECTIVES(PEOs)</h2>
                        </div>
                        <div class="body">
                            <p>
                                To enable graduates to pursue higher education and research, or have a successful
                                career in industries associated with Computer Science and Engineering, or as entrepreneurs.
                                To ensure that graduates will have the ability and attitude to adapt to emerge technological changes.
                            </p>
                        </div>
                    </div>
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2> PROGRAM OUTCOMES POs</h2>
                        </div>
                        <div class="body">
                            <p>
                            <ul>
                                <li>Apply the Mathematical knowledge and the basics of Science and Engineering to solve the problems pertained to Electronics and Instrumentation Engineering.</li>
                                <li>Identify and formulate Electrical and Electronics Engineering problems from research literature and be ability to analyze the problem using first principles of Mathematics and Engineering Sciences.</li>
                                <li> Come out with solutions for the complex problems and to design system components or process that fulfill the particular needs on account of public health and safety and the social, cultural and environmental issues.</li>
                                <li>Draw well-founded conclusions applying knowledge acquired from research and research methods including design of experiments, analysis and interpretation of data and synthesis of information and to arrive at significant conclusion.</li>
                                <li> Form, select and apply relevant techniques, resources and Engineering and IT tools for Engineering activities like electronic prototyping, modeling and control of systems and also being conscious of the limitations.</li>
                                <li>Understand the role and responsibility of the Professional Electrical and Electronics Engineer and to assess societal, health, safety issues based on the reasoning received from the contextual knowledge.</li>
                                <li>Be aware of the impact of professional Engineering solutions in societal and environmental contexts and exhibit the knowledge and the need for Sustainable Development.</li>
                                <li>Apply the principles of Professional Ethics to adhere to the norms of the engineering practice and to discharge ethical responsibilities.</li>
                                <li>Function actively and efficiently as an individual or a member/leader of different teams and multidisciplinary projects.</li>
                                <li>Communicate efficiently the engineering facts with a wide range of engineering community and others, to understand and prepare reports and design documents; to make effective presentations and to frame and follow instructions.</li>
                                <li>Demonstrate the acquisition of the body of engineering knowledge and insight Management Principles and to apply them as member / leader in teams and multidisciplinary environments.</li>
                                <li> Recognize the need for self and life-long learning, keeping pace with technological challenges in the broadest sense.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <h2> PROGRAM SPECIFIC OBJECTIVES (PSOs)</h2>
                        </div>
                        <div class="body">
                            <p>
                            <ol>
                                <li>Have successful technical and professional careers in their chosen fields such as circuit theory, Field theory, control theory and computational platforms.</li><br>
                                <li>Engross in life long process of learning to keep themselves abreast of new developments in the field of Electronics and their applications in power engineering.</li><br>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="content2">
            <div class="content">
                <h1 class="tab-heading">Laboratories</h1>
                <ul class="team">
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab1.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Engineering Practices Laboratory</h3>
                                <ul>
                                    <li>Engineering Practices Laboratory is to impart hands on experience to the students to analyze their concepts about the fundamentals of Electrical and Electronics Engineering</li>
                                    <li>In this Laboratory the basic experiments like measurement of voltage, current, power and power factor in single phase supply, residential wiring, lamp wiring, and energy measurement are conducted</li>
                                </ul>
                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ENGINEERING_PRACTICES_LAB_supeis.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn1" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn1" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab2.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Electric Circuits Laboratory</h3>
                                <ul>
                                    <li>The objective of Electric Circuits laboratory is to create their own electrical circuits and do measurements in verification of circuit laws and theorems, measurement of circuit parameters, study of circuit characteristics and simulation of time response</li>
                                    <li>The Electric Circuits lab is equipped with Function Generator, CRO's and Digital storage Oscilloscope designed to provide wide knowledge about Electrical &amp; Electronics field</li>
                                </ul>

                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ENGINEERING_PRACTICES_LAB_-_1_qdiokf.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn2" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn2" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab3.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Electrical Machines Laboratory – I</h3>

                                <ul>
                                    <li>The Electrical Machines Laboratory I is used to impart the knowledge about the characteristics and behavior of the DC motors (Series motor, Shunt motor, Compound motor), DC generators (Series generator, Shunt generator)</li>
                                    <li>The laboratory can also be used for project work related to electrical machines and energy conversion</li>
                                    <li>The students can understand procedures and analysis the techniques to perform and describe electromagnetic and electromechanical tests on electrical machines</li>
                                </ul>

                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854534/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_I_LAB_-_2_mkx5cj.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn3" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn3" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab4.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Electrical Machines Laboratory – II</h3>
                                <ul>
                                    <li>Through this Electrical Machines Laboratory – II, Students gain wide knowledge in using various AC three phase motors (Induction motors, Synchronous motors), Alternators (Salient pole type and cylindrical rotor type), single phase and three phase Transformers</li>
                                    <li>This laboratory helps the students by understanding the basic theory and operation of electrical machines, how electrical machines fit into the larger context of power systems</li>
                                </ul>
                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854536/Assets/Labs/EEE/ELECTRICAL_MACHINES_-_II_LAB_-_3_yxhhue.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn4" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn4" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab5.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Control and Instrumentation Laboratory</h3>

                                <ul>
                                    <li>
                                        Through hands on experiment with real components & equipment, students can gain practical exposure by using CRO, DSO, Functions generator etc</li>
                                    <li>This laboratory was established with an objective to gain practical experience in the field of control engineering. Control and Instrumentation Laboratory is equipped to do experiment on Modeling of Systems, AC/DC bridges, Synchros, Position and Speed control of AC/DC motors, Controller and Compensator Design, Measurement of Pressure, Temperature, Displacement, Strain, Flow, Power, Energy and Signal conditioning, etc</li>
                                </ul>

                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854533/Assets/Labs/EEE/CONTROL_INSTRUMENTATION_LAB_vcqjs5.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn5" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn5" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="member">
                        <div class="thumb"><img src="../assets/img/academics/eee/lab6.jpeg"></div>
                        <div class="lab_container">
                            <div class="description">
                                <h3 class="lab-heading">Power Electronics and Drives Laboratory</h3>

                                <ul>
                                    <li>Power Electronics and Drives Laboratoryprovides instruction in general lab practices, measurement methods, and with the design and operation of several common circuits relevant to the field of power electronics
                                    </li>
                                    <li>
                                        The usage of power converters and drives in day-to-day life has increased in recent years. It is important for student to understand the fundamental principles behind all these converters</li>

                                </ul>

                            </div>
                            <div class="lab_image">
                                <img src="https://res.cloudinary.com/gracecoe/image/upload/v1664854537/Assets/Labs/EEE/POWER_ELECTRONICS_LAB_k8gnax.jpg" alt="">
                                <div class="lab_links">
                                    <a id="expbtn6" target="_blank" class="link_btn">List of Experiments</a>
                                    <a id="labbtn6" class="link_btn">List of Equipments</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div id="lab1" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>60 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i3 Processor</li>
                                <li>4 GB RAM</li>
                                <li>500 GB Hard Disk</li>
                                <li>Monitor: 15 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Required Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>Linux Operating System</li>
                                <li>GNU Compiler</li>
                                <li>Visual Studio Code</li>
                            </ol>
                        </div>

                    </div>
                    <span class="close" id="close1">&times;</span>
                    <!-- <iframe src="./UG/Course_Material/CSE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe> -->
                </div>
            </div>
            <!-- lab 2 -->
            <div id="lab2" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>30 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i3 Processor</li>
                                <li>4 GB RAM</li>
                                <li>500 GB Hard Disk</li>
                                <li>Monitor: 15 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Required Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>MySql</li>
                                <li>MariaDB</li>
                                <li>Java</li>
                                <li>Visual Studio Code</li>
                                <li>Oracle 10G</li>
                            </ol>
                        </div>
                    </div>
                    <span class="close" id="close2">&times;</span>
                    <!-- <iframe src="./UG/Course_Material/CSE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe> -->
                </div>
            </div>
            <!-- lab 3 -->
            <div id="lab3" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>60 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i3 Processor</li>
                                <li>4 GB RAM</li>
                                <li>500 GB Hard Disk</li>
                                <li>Monitor: 15 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Reqired Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>CISCO Packet Tracer</li>
                                <li>NS2</li>
                                <li>Netbeans IDE</li>
                                <li>Eclipse IDE</li>
                                <li>Visual Studio Code</li>
                                <li>C/C++</li>
                                <li>Argo UML</li>
                                <li>JSP</li>
                                <li>Apache Tomcat</li>
                                <li>Xampp</li>
                            </ol>
                        </div>

                    </div>
                    <span class="close" id="close3">&times;</span>
                    <!-- <iframe src="./UG/Course_Material/CSE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe> -->
                </div>
            </div>
            <!-- lab-4 -->
            <div id="lab4" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>60 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i3 Processor</li>
                                <li>4 GB RAM</li>
                                <li>500 GB Hard Disk</li>
                                <li>Monitor: 15 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Reqired Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>Snort</li>
                                <li>N-Stalker</li>
                                <li>Visual Studio Code</li>
                                <li>C/C++</li>
                            </ol>
                        </div>
                    </div>
                    <span class="close" id="close4">&times;</span>
                    <!-- <iframe src="./UG/Course_Material/CSE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe> -->
                </div>
            </div>
            <!-- lab-5 -->
            <div id="lab5" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>40 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i5 Processor</li>
                                <li>8 GB RAM</li>
                                <li>1 TB Hard Disk</li>
                                <li>Monitor: 23 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Reqired Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>Python 3</li>
                                <li>Anaconda Navigator</li>
                                <li>Pycharm</li>
                                <li>Visual Studio Code</li>
                                <li>C/C++</li>
                            </ol>
                        </div>
                    </div>
                    <span class="close" id="close5">&times;</span>
                    <!-- <iframe src="./UG/Course_Material/CSE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe> -->
                </div>
            </div>
            <!-- lab-6 -->
            <div id="lab6" class="modal">
                <div class="lab_modal_content">

                    <div class="lab-left">
                        <div class="modal-heading">
                            Number of Systems
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <p>40 Systems</p>
                            <p>System Configuration</p>
                            <ul>
                                <li>i5 Processor</li>
                                <li>8 GB RAM</li>
                                <li>1 TB Hard Disk</li>
                                <li>Monitor: 23 Inch</li>
                                <li>Keyboard: Basic Keyboard</li>
                                <li>Mouse: 2 Buttons with scroll</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="lab-right">
                        <div class="modal-heading">
                            Reqired Softwares
                        </div>
                        <hr>
                        <div class="modal-contents">
                            <ol>
                                <li>Vitual Box</li>
                                <li>VMWare Workstation</li>
                                <li>Hadoop</li>
                                <li>Hadoop</li>
                                <li>GAE Launcher</li>
                                <li>Openstack</li>
                                <li>Cloud Sim</li>
                                <li>Visual Studio Code</li>
                                <li>C/C++</li>
                            </ol>
                        </div>
                    </div>
                    <span class="close" id="close6">&times;</span>
                    <!--  -->
                </div>
            </div>
            <!-- Exp1 -->
            <div id="exp1" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c1">&times;</span>
                </div>
            </div>
            <!-- Exp2 -->
            <div id="exp2" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c2">&times;</span>
                </div>
            </div>
            <!-- Exp3 -->
            <div id="exp3" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c3">&times;</span>
                </div>
            </div>
            <!-- Exp4 -->
            <div id="exp4" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c4">&times;</span>
                </div>
            </div>
            <!-- Exp5 -->
            <div id="exp5" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c5">&times;</span>
                </div>
            </div>
            <!-- Exp6 -->
            <div id="exp6" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c6">&times;</span>
                </div>
            </div>
            <!-- Exp7 -->
            <div id="exp7" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c7">&times;</span>
                </div>
            </div>
            <!-- Exp8 -->
            <div id="exp8" class="modal">
                <div class="lab_modal_content">

                    <iframe src="./Course_Material/EEE/Labs/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0"></iframe>
                    <span class="close" id="c8">&times;</span>
                </div>
            </div>
            <script>
                // Get the modal
                var lab1 = document.getElementById("lab1");
                var lab2 = document.getElementById("lab2");
                var lab3 = document.getElementById("lab3");
                var lab4 = document.getElementById("lab4");
                var lab5 = document.getElementById("lab5");
                var lab6 = document.getElementById("lab6");
                var lab7 = document.getElementById("lab7");
                var lab8 = document.getElementById("lab8");

                var exp1 = document.getElementById("exp1");
                var exp2 = document.getElementById("exp2");
                var exp3 = document.getElementById("exp3");
                var exp4 = document.getElementById("exp4");
                var exp5 = document.getElementById("exp5");
                var exp6 = document.getElementById("exp6");
                var exp7 = document.getElementById("exp7");
                var exp8 = document.getElementById("exp8");

                var close1 = document.getElementById("close1")
                var close2 = document.getElementById("close2")
                var close3 = document.getElementById("close3")
                var close4 = document.getElementById("close4")
                var close5 = document.getElementById("close5")
                var close6 = document.getElementById("close6")

                var c1 = document.getElementById("c1")
                var c2 = document.getElementById("c2")
                var c3 = document.getElementById("c3")
                var c4 = document.getElementById("c4")
                var c5 = document.getElementById("c5")
                var c6 = document.getElementById("c6")
                var c7 = document.getElementById("c7")
                var c8 = document.getElementById("c8")

                var lab_btn1 = document.getElementById("labbtn1");
                var lab_btn2 = document.getElementById("labbtn2");
                var lab_btn3 = document.getElementById("labbtn3");
                var lab_btn4 = document.getElementById("labbtn4");
                var lab_btn5 = document.getElementById("labbtn5");
                var lab_btn6 = document.getElementById("labbtn6");
                var lab_btn7 = document.getElementById("labbtn7");
                var lab_btn8 = document.getElementById("labbtn8");

                var exp_btn1 = document.getElementById("expbtn1");
                var exp_btn2 = document.getElementById("expbtn2");
                var exp_btn3 = document.getElementById("expbtn3");
                var exp_btn4 = document.getElementById("expbtn4");
                var exp_btn5 = document.getElementById("expbtn5");
                var exp_btn6 = document.getElementById("expbtn6");
                var exp_btn7 = document.getElementById("expbtn7");
                var exp_btn8 = document.getElementById("expbtn8");

                exp_btn1.onclick = function() {
                    exp1.style.display = "block";
                }
                exp_btn2.onclick = function() {
                    exp2.style.display = "block";
                }
                exp_btn3.onclick = function() {
                    exp3.style.display = "block";
                }
                exp_btn4.onclick = function() {
                    exp4.style.display = "block";
                }
                exp_btn5.onclick = function() {
                    exp5.style.display = "block";
                }
                exp_btn6.onclick = function() {
                    exp6.style.display = "block";
                }



                lab_btn1.onclick = function() {
                    lab1.style.display = "block";
                }

                lab_btn2.onclick = function() {
                    lab2.style.display = "block";
                }

                lab_btn3.onclick = function() {
                    lab3.style.display = "block";
                }

                lab_btn4.onclick = function() {
                    lab4.style.display = "block";
                }

                lab_btn5.onclick = function() {
                    lab5.style.display = "block";
                }

                lab_btn6.onclick = function() {
                    lab6.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal

                c1.onclick = function() {
                    exp1.style.display = "none";
                }
                c2.onclick = function() {
                    exp2.style.display = "none";
                }
                c3.onclick = function() {
                    exp3.style.display = "none";
                }
                c4.onclick = function() {
                    exp4.style.display = "none";
                }
                c5.onclick = function() {
                    exp5.style.display = "none";
                }
                c6.onclick = function() {
                    exp6.style.display = "none";
                }

                close1.onclick = function() {
                    lab1.style.display = "none";

                }
                close2.onclick = function() {
                    lab2.style.display = "none";
                }
                close3.onclick = function() {
                    lab3.style.display = "none";
                }
                close4.onclick = function() {
                    lab4.style.display = "none";
                }
                close5.onclick = function() {
                    lab5.style.display = "none";
                }
                close6.onclick = function() {
                    lab6.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        lab1.style.display = "none";
                        lab2.style.display = "none";
                        lab3.style.display = "none";
                        lab4.style.display = "none";
                        lab5.style.display = "none";
                        lab6.style.display = "none";
                        lab7.style.display = "none";
                        lab8.style.display = "none";
                    }
                }
            </script>
        </section>

        <section id="content3">
            <h1 class="tab-heading">Faculty</h1>
            <div class="profile-container">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850696/Assets/Faculty/EEE/gayathri_dnqwdu.png">
                        </div>
                        <div class="faculty-name">
                            Mrs.P.Gayathri
                            <h4 class="title">Assistant Professor</h4>
                        </div>
                        <div class="social">
                            <a href="../assets/doc/Faculty Profile/gayathri.pdf#toolbar=0" target="pdf" class="link">View Profile</a>
                        </div>
                    </div>
                </div>

                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850697/Assets/Faculty/EEE/mari_ypaopf.jpg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Mr. S. Mari Sargunam-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                <!--            <a href="../assets/doc/Faculty Profile/MARISARGUNAM.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850697/Assets/Faculty/EEE/poornakala_ntzazo.jpg">
                        </div>
                        <div class="faculty-name">
                            Ms.M.G.Poornakala
                            <h4 class="title">Assistant Professor</h4>
                        </div>
                        <div class="social">
                            <a href="../assets/doc/Faculty Profile/poornakala.pdf#toolbar=0" target="pdf" class="link">View Profile</a>
                        </div>
                    </div>
                </div>
                
                 <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="../assets/img/faculty_images/gandhimathi.jpg">
                        </div>
                        <div class="faculty-name">
                            Mrs. S. Gandhimathi
                            <h4 class="title">Assistant Professor</h4>
                        </div>
                        <div class="social">
                            <!--<a href="../assets/doc/Faculty Profile/poornakala.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850697/Assets/Faculty/EEE/praisy_xwenfm.png">
                        </div>
                        <div class="faculty-name">
                            Ms.L.Praisy
                            <h4 class="title">Assistant Professor</h4>
                        </div>
                        <div class="social">
                            <a href="../assets/doc/Faculty Profile/praisy.pdf#toolbar=0" target="pdf" class="link">View Profile</a>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="../assets/img/faculty_images/angel.jpeg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Mrs. G. Besliya Angel-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                            <!--<a href="../assets/doc/Faculty Profile/aiswarya.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850696/Assets/Faculty/EEE/aiswarya_slzen2.jpg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Ms.S.Aishwariya-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                <!--            <a href="../assets/doc/Faculty Profile/aiswarya.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850696/Assets/Faculty/EEE/arunprasad_q2cavk.jpg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Mr Arun Prasad P-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                <!--            <a href="../assets/doc/Faculty Profile/arunprasad.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850696/Assets/Faculty/EEE/Aafrin_vsslwz.jpg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Mrs.Aafrin S-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                <!--            <a href="../assets/doc/Faculty Profile/aafrin.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">-->
                <!--    <div class="our-team">-->
                <!--        <div class="picture">-->
                <!--            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850696/Assets/Faculty/EEE/deivanayagam_urijux.jpg">-->
                <!--        </div>-->
                <!--        <div class="faculty-name">-->
                <!--            Mr.Deivanayagam N-->
                <!--            <h4 class="title">Assistant Professor</h4>-->
                <!--        </div>-->
                <!--        <div class="social">-->
                <!--            <a href="../assets/doc/Faculty Profile/deivanayagam.pdf#toolbar=0" target="pdf" class="link">View Profile</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="https://res.cloudinary.com/gracecoe/image/upload/v1664850697/Assets/Faculty/EEE/Premalatha_xmgsni.jpg">
                        </div>
                        <div class="faculty-name">
                            Mrs.Premalatha R
                            <h4 class="title">Assistant Professor</h4>
                        </div>
                        <div class="social">
                            <a href="../assets/doc/Faculty Profile/premalatha.pdf#toolbar=0" target="pdf" class="link">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-profile">
                <span>
                    &times;
                </span>
                <iframe src="" name="pdf"></iframe>
            </div>
            <script>
                document.querySelectorAll('.profile-container a').forEach(image => {
                    image.onclick = () => {
                        document.querySelector('.popup-profile').style.display = 'block';
                        document.querySelector('.popup-profile iframe').src = image.getAttribute('href');
                    }
                });
                document.querySelector('.popup-profile span').onclick = () => {
                    document.querySelector('.popup-profile').style.display = 'none';
                }
            </script>
        </section>


        <section id="content4">
            <h1 class="tab-heading">Events</h1>
            <div class="events-container">
                <iframe src="./Events/EEE/calender.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0">
                </iframe>
            </div>
        </section>


        <section id="content5">
            <h1 class="tab-heading">Gallery</h1>
            <div class="course-container">
                <iframe src="./Gallery/eee_gallery.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0">
                </iframe>
            </div>
        </section>


        <section id="content6">
            <h1 class="tab-heading">Students Achievements</h1>
            <div class="course-container">
                <iframe src="./Students_Achievements/eee_students_achievements.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0">
                </iframe>
            </div>
        </section>


        <section id="content7">
            <h1 class="tab-heading">Course Material</h1>
            <div class="course-container" id="courses">
                <iframe src="./Course_Material/EEE/semesters.php" name="targetframe" allowTransparency="true" scrolling="yes" frameborder="0">
                </iframe>
            </div>
        </section>

        <script>
            document.addEventListener("contextmenu", function(event) {
                event.preventDefault();
            }, false);
        </script>
    </div>
    <?php
    include '../includes/acfooter.php';
    ?>
</body>

</html>