<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    :root {
        --white: #fff;
        --tem-one-name-color: #fff;
        --body-font-family: "Raleway", sans-serif;
        --tem-one-name-font-size: 40px;
        --tem-one-name-font-family: "Bebas Neue", sans-serif;
        --tem-one-designation-font-family: "Raleway", sans-serif;
        --tem-one-designation-color: #fff;
        --tem-one-bio-title-color: #624aac;
        --tem-profile-image-bg: #624aac;
        --tem-one-social-icons-color: #fff;
        --tem-one-social-icons-bg: #fff;
        --tem-one-social-icons-font-size: 18px;
        --tem-one-bio-title-font-size: 30px;
        --tem-one-service-title-color: #fff;
        --tem-one-service-title-font-size: 20px;
        --tem-one-service-box-bg: #624aac;
        --tem-one-address-color: #fff;
    }

    /* CSS for centering the mobile frame */
    .nfc-card {
        font-family: var(--body-font-family);
    }

    .nfc-mobile-frame {
         
        max-width: 400px;
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
    }

    .nfc-mobile-frame .card title {
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
        background-position: center;
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
        text-align: center;
        color: var(--tem-one-bio-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-one-bio-title-font-size);
    }

    .tem-one-bio-box p {
        text-align: center;
    }

    .tem-one-service-title {
        color: var(--tem-one-service-title-color);
        font-family: "Bebas Neue", sans-serif;
        font-size: var(--tem-one-bio-title-font-size);
    }

    .tem-one-service-box {
        text-align: center;
        background-color: var(--tem-one-service-box-bg);
        color: var(--white);
    }

    .tem-one-service-box p {
        text-align: center;
    }

    .tem-one-profile-img {
        width: 100%;
        overflow: hidden;
    }

    .tem-one-profile-img img {
        width: 45%;
        height: 45%;
        object-fit: cover;
    }

    .tem-one-profile-image {
        background-color: var(--tem-profile-image-bg);
        width: 20%;
        border-bottom-right-radius: 20px;
    }

    .tem-one-profile {
        background-color: var(--tem-profile-image-bg);
        width: 85%;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-top: -100px;
        position: relative;
        z-index: 2;
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

    .tem-one-service-title {
        font-family: var(--tem-one-name-font-family);
        background-color: var(--tem-one-service-box-bg);
        border: 0;
    }

    .tem-one-services-title {
        font-family: var(--tem-one-name-font-family);
        background-color: var(--tem-one-service-box-bg);
        color: var(--tem-one-service-title-color);
        border: 0;
        font-size: var(--tem-one-service-title-font-size);
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 600px) {
        .nfc-mobile-frame {
            height: 100vh;
            /* Let height adjust based on content */
        }
    }
</style>
