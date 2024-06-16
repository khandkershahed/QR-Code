<style>
    /* For Template One */
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    :root {
        --white: #fff;
        --tem-one-name-color: #fff;
        --body-font-family: "Raleway", sans-serif;
        --tem-one-name-font-size: 40px;
        --tem-one-name-font-family: "Bebas Neue", sans-serif;
        --tem-one-designation-font-family: "Raleway", sans-serif;
        --tem-one-designation-color: #fff;
        --tem-one-bio-title-color: #000;
        --tem-profile-image-bg: #000;
        --tem-one-social-icons-color: #fff;
        --tem-one-social-icons-bg: #fff;
        --tem-one-social-icons-font-size: 18px;
        --tem-one-bio-title-font-size: 30px;
        --tem-one-service-title-color: #fff;
        --tem-one-service-box-bg: #000;
        --tem-one-address-color: #fff;
    }

    /* For Template Two */
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    :root {
        --white: #fff;
        --tem-two-name-color: #fff;
        --body-font-family: "Raleway", sans-serif;
        --tem-two-name-font-size: 40px;
        --tem-two-name-font-family: "Bebas Neue", sans-serif;
        --tem-two-designation-font-family: "Raleway", sans-serif;
        --tem-two-designation-color: #fff;
        --tem-two-bio-title-color: #624aac;
        --tem-two-profile-image-bg: #624aac;
        --tem-two-social-icons-color: #fff;
        --tem-two-social-icons-bg: #fff;
        --tem-two-social-icons-font-size: 18px;
        --tem-two-bio-title-font-size: 30px;
        --tem-two-service-title-color: #fff;
        --tem-two-service-title-font-size: 20px;
        --tem-two-service-box-bg: #624aac;
        --tem-two-address-color: #fff;
    }

    /* CSS for centering the mobile frame */

    .nfc-mobile-frame-two {
        max-width: 400px;
        height: 768px !important;
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame-two .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .nfc-mobile-frame-two .card title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nfc-two-cover-img-box {
        position: relative;
        max-width: 100%;
    }

    .nfc-two-cover-img {
        background-size: cover;
        height: 300px;
        background-position: center;
    }

    .tem-two-name {
        color: var(--tem-two-name-color);
        font-family: var(--tem-two-name-font-family);
        font-weight: 400;
        font-style: normal;
        font-size: var(--tem-two-name-font-size);
    }

    .tem-two-designation {
        color: var(--tem-two-designation-color);
        font-family: var(--tem-two-designation-font-family);
        font-weight: 400;
        font-style: normal;
    }

    .tem-two-bio-title {
        text-align: center;
        color: var(--tem-two-bio-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-two-bio-title-font-size);
    }

    .tem-two-bio-box p {
        text-align: center;
    }

    .tem-two-service-title {
        color: var(--tem-two-service-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-two-bio-title-font-size);
    }

    .tem-two-service-box {
        text-align: center;
        background-color: var(--tem-two-service-box-bg);
        color: var(--white);
    }

    .tem-two-service-box p {
        text-align: center;
    }

    .tem-two-profile-img {
        width: 100%;
        overflow: hidden;
    }

    .tem-two-profile-img img {
        width: 45%;
        height: 45%;
        object-fit: cover;
    }

    .tem-two-profile-image {
        background-color: var(--tem-profile-image-bg);
        width: 20%;
        border-bottom-right-radius: 20px;
    }

    .tem-two-profile {
        background-color: var(--tem-two-profile-image-bg);
        width: 85%;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-top: -100px;
        position: relative;
        z-index: 2;
    }

    .tem-two-social-icons {
        display: flex;
        justify-content: start;
    }

    .tem-two-social-icons a {
        /* background-color:var(--tem-two-social-icons-bg); */
        text-decoration: none;
        padding: 0px;
        display: inline-block;
        font-size: var(--tem-two-social-icons-font-size);
        /* Adjust the size of the icons as needed */
        margin: 0 10px;
        /* Adjust the spacing between icons as needed */
        color: var(--tem-two-social-icons-color);
        /* Adjust the color of the icons as needed */
    }

    /* Hover effect */
    .tem-two-social-icons a:hover {
        color: #007bff;
        /* Change color on hover */
    }

    .tem-two-address {
        color: var(--tem-two-address-color);
    }

    /* Customize slick slider container */
    .slick-slider {
        width: 100%;
        /* Adjust slider width as needed */
        margin: 0 auto;
        /* Center the slider */
    }

    .slick-next {
        right: -5px;
    }

    .slick-prev {
        left: -5px;
        position: absolute;
        z-index: 1;
    }

    .tem-two-about-first {
        width: 35%;
    }

    .tem-two-about-secontd {
        width: 65%;
    }

    .tem-two-tem-two-social-icons a {
        display: flex;
        background-color: var(--tem-two-social-icons-bg);
        margin-left: 10px;
        padding: 10px;
        text-decoration: none;
        color: var(--tem-two-social-icons-color);
    }

    .tem-two-scroll::-webkit-scrollbar {
        width: 0em;
    }

    .tem-two-scroll::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .tem-two-scroll::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }

    .tem-two-service-title {
        font-family: var(--tem-two-name-font-family);
        background-color: var(--tem-two-service-box-bg);
        border: 0;
    }

    .tem-one-services-title {
        font-family: var(--tem-two-name-font-family);
        background-color: var(--tem-two-service-box-bg);
        color: var(--tem-two-service-title-color);
        border: 0;
        font-size: var(--tem-two-service-title-font-size);
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 600px) {
        .nfc-mobile-frame-two {
            height: 100vh;
            /* Let height adjust based on content */
        }
    }

    /* CSS for centering the mobile frame */

    .nfc-mobile-frame-one {
        width: 420px;
        /* height: 768px !important; */
        /* border: 2px solid #000; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame-one .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
    }

    .nfc-mobile-frame-one .card title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nfc-one-cover-img-box {
        position: relative;
        max-width: 100%;
    }

    .nfc-one-cover-img {
        background-size: cover;
        height: 300px;
    }

    .nfc-one-cover-img:after {
        display: block;
        position: absolute;
        background-image: linear-gradient(to bottom,
                rgba(255, 255, 255, 0) 0,
                #000 92%);
        content: "";
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0.8;
    }

    .tem-one-name {
        color: var(--tem-one-name-color);
        font-family: var(--tem-one-name-font-family);
        font-weight: 400;
        font-style: normal;
        font-size: var(--tem-one-name-font-size);
    }

    .tem-one-designation {
        color: var(--tem-one-designation-color);
        font-family: var(--tem-one-designation-font-family);
        font-weight: 400;
        font-style: normal;
    }

    .tem-one-bio-title {
        color: var(--tem-one-bio-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-one-bio-title-font-size);
    }

    .tem-one-service-title {
        color: var(--tem-one-service-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-one-bio-title-font-size);
    }

    .tem-one-service-box {
        background-color: var(--tem-one-service-box-bg);
        color: var(--white);
    }

    .tem-one-profile-img {
        width: 75%;
        height: 100%;
        overflow: hidden;
        margin-left: -25px;
    }

    .tem-one-profile-img img {
        width: 100%;
        /* Make the image take up the full width of its container */
        height: 100%;
        /* Make the image take up the full height of its container */
        object-fit: cover;
        /* Ensure the image covers the entire container without distortion */
    }

    .tem-one-profile-image {
        background-color: var(--tem-profile-image-bg);
        width: 20%;
        border-bottom-right-radius: 20px;
    }

    .tem-one-profile {
        background-color: var(--tem-profile-image-bg);
        width: 80%;
        border-bottom-left-radius: 20px;
    }

    .tem-one-social-icons {
        display: flex;
        justify-content: start;
    }

    .tem-one-social-icons a {
        /* background-color:var(--tem-one-social-icons-bg); */
        text-decoration: none;
        padding: 0px;
        display: inline-block;
        font-size: var(--tem-one-social-icons-font-size);
        /* Adjust the size of the icons as needed */
        margin: 0 10px;
        /* Adjust the spacing between icons as needed */
        color: var(--tem-one-social-icons-color);
        /* Adjust the color of the icons as needed */
    }

    /* Hover effect */
    .tem-one-social-icons a:hover {
        color: #007bff;
        /* Change color on hover */
    }

    .tem-one-address {
        color: var(--tem-one-address-color);
    }

    /* Customize slick slider container */
    .slick-slider {
        width: 100%;
        /* Adjust slider width as needed */
        margin: 0 auto;
        /* Center the slider */
    }

    .slick-next {
        right: -5px;
    }

    .slick-prev {
        left: -5px;
        position: absolute;
        z-index: 1;
    }

    .tem-one-about-first {
        width: 35%;
    }

    .tem-one-about-secontd {
        width: 65%;
    }

    .tem-one-tem-one-social-icons a {
        display: flex;
        background-color: var(--tem-one-social-icons-bg);
        margin-left: 10px;
        padding: 10px;
        text-decoration: none;
        color: var(--tem-one-social-icons-color);
    }

    .tem-one-scroll::-webkit-scrollbar {
        width: 0em;
    }

    .tem-one-scroll::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .tem-one-scroll::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 600px) {
        .nfc-mobile-frame-one {
            height: 100vh;
            /* Let height adjust based on content */
        }
    }
</style>
