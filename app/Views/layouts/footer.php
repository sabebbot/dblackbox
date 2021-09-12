<style>
    footer {
        background: rgb(73, 73, 73);
        padding: 20px 0;
    }

    .footer-container {
        max-width: 1300px;
        margin: auto;
        padding: 0 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap-reverse;
    }

    .social-media {
        margin: 30px 0;

    }

    .social-media a {
        color: #ffffff;
        margin-right: 30px;
        margin-bottom: 30px;
        font-size: 30px;
        text-decoration: none;
        transition: .3s linear;
    }

    .btn {
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        background: white;
        padding: 0.3rem 3.4rem;
        border: 3px solid black;
        margin-right: 2.6rem;
        box-shadow: 0 0 0 black;
        transition: all 0.2s;
    }

    .social-media:hover {

        transform: trans(-0.4rem, -0.4rem);
    }



    .border {
        width: 100px;
        height: 4px;
        background: #fc5c65;
    }


    @media screen and (max-width:960px) {
        .footer-container {
            max-width: 600px;
        }

        .right-col {
            width: 100%;
            text-align: right;
            right: 20%;

        }

        .center-col {
            width: 100%;
            text-align: center;
            bottom: 10px;

        }

        .left-col {
            width: 100%;
            text-align: right;
            margin-bottom: 60px;

        }
    }


    @media screen and (max-width:700px) {
        .btn {
            margin: 0;
            width: 100%;
            margin-top: 20p;
            margin-bottom: 20p;
        }
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
        height: 150px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }
</style>

</style>
<footer>
    <div class="row">
        <div class="column" style="padding-left: 5%; text-align: center;">
            <p>Follow our Social media: </p>
            <div class="social-media">
                <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
            </div>

        </div>
        <div class="column">
            <p style="text-align: center; padding-top:18%;">Copyright © 2021 BlackBox Magazine. All Rights Reserved.</p>
        </div>
        <div class="column" style="text-align: center;">
            <p>Contact Us: </p>
            <div class="social-media">
                <a target="_blank" href="#"><i class="fa fa-whatsapp"></i></a>
                <a target="_blank" href="#"><i class="fa fa-envelope"></i></a>
                <p style="text-align: center; margin-top: 2%;"> PT.ANUGRAH TEKNOLOGI KREATIF</p>
            </div>
        </div>
</footer>